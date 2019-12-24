<?php
namespace app\index\controller;

use think\Db;
use think\Page;
/**
 * @param 新闻动态
 */
class Xwdt extends Cates
{

    public function _initialize() {
        parent::_initialize();

        $url = request()->url();
        $action = request()->action();

        if($action == 'index'){
            if(strpos($url,'xwdt/')!==false){

                $param = http_build_query(input());
                $this->redirect('/hyzx.html?'.$param);
            }
        }
    }

    public function index(){

    	//默认排序为1的新闻
    	$id = input('id');

    	$cates = $this->cate_model->get_child_arctype($id);
    	$new_arr =  array();
		$parent_id = $cates[0]['id'];
		$cate_data = $this->cate_model->get_cate($parent_id);
		$cate_data['new_arr'] = Db::name('archives')
			->alias('a')
			->field('a.aid,a.typeid,a.title,a.litpic,a.add_time,hc.content')
			->join('h_article_content hc','hc.aid = a.aid')
			->where('a.typeid',$parent_id)
			->order('a.add_time desc')
			->paginate(6,false,[
            'query' => request()->param(),
            'type'     => 'bootstrap',
        ]);

		$this->four_year();
		$this->assign('cates',$cates);
    	$this->assign('cate_data',$cate_data);

    	// dump($cate_data);die;
    	return $this->fetch();


    }

//获取最近4年的时间
    public function four_year()
    {
    	$date_arr = array();
    	$now_year = date('Y');
    	for ($i=0; $i < 4; $i++) { 
    		$date_arr[] = $now_year-$i;
    	}
    	$this->assign('date_arr',$date_arr);
    }


    //企业新闻
    public function qyxw(){
    	$id = input('id');
        $year = input('year');

        $where = array();
        if(!empty($year)){
            $smonth = 1;
            $emonth = 12;
            $startTime = $year.'-'.$smonth.'-1';
            $em = $year.'-'.$emonth.'-31';
            $where['a.add_time'] = ['between time',[$startTime,$em]];
        }
        $where['a.typeid'] = $id;
    	$cates = $this->cate_model->get_Peer_cate($id);
        
        //当前分类
        $cate_data = $this->cate_model->get_cate($id);
        $cate_data['new_arr'] = Db::name('archives')
			->alias('a')
			->field('a.aid,a.typeid,a.title,a.litpic,a.add_time,hc.content')
			->join('h_article_content hc','hc.aid = a.aid')
			->where($where)
			->order('a.add_time desc')
			->paginate(6,false,[
            'query' => request()->param(),
            'type'     => 'bootstrap',
        ]);
    	
    	$this->assign('cates',$cates);
    	$this->assign('cate_data',$cate_data);
    	$this->four_year();

        return $this->fetch('index');

    }

     //行业资讯/媒体报道
    public function hyzx(){

    	$id = input('id');
    	$cates = $this->cate_model->get_Peer_cate($id);
        
        //当前分类
        $cate_data = $this->cate_model->get_cate($id);
        $cate_data['new_arr'] = Db::name('archives')
			->alias('a')
			->field('a.aid,a.typeid,a.title,a.litpic,a.add_time,hc.content')
			->join('h_article_content hc','hc.aid = a.aid')
			->where('a.typeid',$id)
			->order('a.add_time desc')
			->paginate(7,false,[
            'query' => request()->param(),
            'type'     => 'bootstrap',
        ]);
    	
    	$this->assign('cates',$cates);
    	$this->assign('cate_data',$cate_data);

        return $this->fetch();
    }

    //新闻详情
    public function news_info(){

    	$aid = input('aid');
    	$typeid = input('typeid');
    	//获取同级和当前分类
    	$cates = $this->cate_model->get_Peer_cate($typeid);
    	$cate_data = $this->cate_model->get_cate($typeid);

    	//新闻详情
    	//给新闻增加一个点击量
    	$bool = $this->archives->add_click($aid);
    	$new_info = $this->archives->nesw_info($aid);

    	$this->assign('cates',$cates);
    	$this->assign('cate_data',$cate_data);
    	$this->assign('new_info',$new_info);
        $this->four_year();
    	return $this->fetch();
    }


}
