<?php
namespace app\index\controller;

use think\Db;
/**
 * @param 网站首页控制器
 */
class Index extends Base
{   
    
    public function _initialize() {
        parent::_initialize();

    }

    public function index()
    {
       
        //banner信息
        if($this->lang == 'en')
        {
            $id = 2;
        }else
        {
            $id = 1;
        }
        $bannerModel = Model('Banner');
        $banner = $bannerModel->get_index_banner($id);
        $this->assign('banner',$banner);

        //新闻动态
        $news = $this->news();
        $first_new = array();
        if(isset($news['child'][0]))
        {
            $first_new = $news['child'][0];
        }
        
        $this->assign('first_new',$first_new);
        $this->assign('news',$news);
        //工艺技术模块
        $gyjs_data = $this->gyjs();
        // dump($gyjs_data);die;
        // dump($gyjs_data);die;
        $this->assign('gyjs_data',$gyjs_data);

        //产品中心数据
        $cpzx_data = $this->cpzx();
        $this->assign('cpzx_data',$cpzx_data);

        //关于我们下面的第一个栏目的第一个新闻
        $gyhwhx = $this->gyhwhx();
        $this->assign('gyhwhx',$gyhwhx);

        return $this->fetch();
         
    }
//查询到新闻动态数据
    public function news()
    {

        if($this->lang == 'cn')
        {
            $new_id = 2;
        }else{
            $new_id = 35;
        }
        $news = $this->archives->index_news($new_id,$this->lang);
        return $news;
        
    }
//查询到公司简介的第一篇文字
    public function gyhwhx()
    {

        if($this->lang == 'cn')
        {
            $top_id = 1;
        }else{
            $top_id = 31;
        }

        $first_cate = $this->archives->first_cate_news($top_id);
        return $first_cate;
    }


//查询到产品中心具体产品数据
    public function cpzx()
    {
        if($this->lang == 'cn'){
            $top_id = 3;
        }else{
            $top_id = 41;
        }

        $cpzx_data = $this->archives->cpzx($top_id);
        return $cpzx_data;
    }


//查询到工艺技术的第一篇文章
    public function gyjs()
    {

        if($this->lang == 'cn'){
            $top_id = 4;
        }else{
            $top_id = 51;
        }
        
        $gyjs_data = Db::name('archives')
            ->alias('a')
            ->field('a.title,a.litpic,hf.file_url,hd.content')
            ->join('h_download_content hd','hd.aid = a.aid')
            ->join('h_download_file hf','hf.aid = a.aid')
            ->where('a.typeid',$top_id)
            ->limit(1)
            ->order('a.sort_order')
            ->find();
        $gyjs_data['typeid'] = $top_id;
        //查询父集
        $gyjs_data['child'] = Db::name('arctype')
            ->field('id,typename,dirpath')
            ->where('parent_id',$top_id)
            ->where('status',1)
            ->where('is_del',0)
            ->limit(3)
            ->select();
        foreach ($gyjs_data['child'] as $k => $v) {
           $child = Db::name('archives')
            ->alias('a')
            ->field('a.title,a.litpic,hd.content')
            ->join('h_images_content hd','hd.aid = a.aid')
            ->where('a.typeid',$v['id'])
            ->where('a.status',1)
            ->where('a.is_del',0)
            ->limit(1)
            ->order('a.sort_order')
            ->find();
            if(!empty($child)){
                $gyjs_data['child'][$k] = array_merge($gyjs_data['child'][$k],$child);
            }
        }
        return $gyjs_data;



    }


    public function up_lang(){

        $lang = cookie('index_lang');
        if($lang == 'en'){
            cookie('index_lang','cn');
        }else{
            cookie('index_lang','en');
        }
        $this->redirect('/');



    }


    /**
     * 支付宝回调
     */
    private function alipay_return()
    {
        $param = input('param.');
        if (isset($param['transaction_type']) && isset($param['is_ailpay_notify'])) {
            // 跳转处理回调信息
            $pay_logic = new PayLogic();
            $pay_logic->alipay_return();
        }
    }

    /**
     * 快递100返回时，重定向关闭父级弹框
     */
    private function Express100()
    {
        $coname = input('param.coname/s', '');
        $m = input('param.m/s', '');
        if (!empty($coname) || 'user' == $m) {
            if (isWeixin()) {
                $this->redirect(url('user/Shop/shop_centre'));
                exit;
            }else{
                $this->redirect(url('api/Rewrite/close_parent_layer'));
                exit;
            }
        }
    }
}