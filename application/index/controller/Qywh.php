<?php
namespace app\index\controller;

use think\Db;
/**
 * @param 企业文化
 */
class Qywh extends Cates
{

    public function _initialize() {
        parent::_initialize();

        $url = request()->url();
        $action = request()->action();
        if($action == 'index'){
            if(strpos($url,'qywh/')!==false){
                $this->redirect('/qywh/shzr?id='.input('id'));
            }
        }
    }


    public function index(){

    	$id = input('id');
    	//获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        $this->assign('cate_data',$cate_data);
        $cates = $this->cate_model->get_child_arctype($id);
        $this->assign('cates',$cates);

        //获取到第一个分类的所有子分类及其下面所有的图集
        $child_all = $this->cate_model->get_first_child_all($id);
        $index_data = $this->archives->get_child_images_archive($child_all); 
        $this->assign('index_data',$index_data);

    	return $this->fetch();
    }

    //关于我们公共数据
    public function common_data($id)
    {

        //获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        //获取子集
        $cate_data['child'] = $this->archives->get_archives_info($id);
        $this->assign('cate_data',$cate_data);
        //获取同级分类信息
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);
        // dump($cates);
        // dump($cate_data);die;

        

    }

//社会责任
    public function shzr(){


        $id = input('id');
        $this->common_data($id);
        return $this->fetch();


    }




//华芯生活
    public function hxsh(){

        $id = input('id');
        $this->common_data($id);

        $data = Db::name('archives')
            ->alias('a')
            ->field('a.aid,a.title,a.litpic,hc.content')
            ->join('h_images_content hc','hc.aid = a.aid')
            ->where('a.typeid',$id)
            ->where('a.is_del',0)
            ->where('a.arcrank',0)
            ->where('a.status',1)
            ->order('a.add_time desc')
            ->paginate(6,false,[
            'query' => request()->param(),
            'type'     => 'bootstrap',
        ]);
        $this->assign('data',$data);
        return $this->fetch();
    }
}
