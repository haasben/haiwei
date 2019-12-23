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
        $action = request()->action();
        $array = ['index','qyxw','news_info','hyzx'];
        if(!in_array($action,$array)){
           $this->redirect('/hyzx?id='.input('id'));
            
        }
    }

    public function index(){

    	//默认排序为1的新闻
    	$id = input('id');

    	$next_cate = $this->cate_model->get_child_arctype($id);
    	$new_arr =  array();
		$parent_id = $next_cate[0]['id'];
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
		$this->assign('next_cate',$next_cate);
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
    	$next_cate = $this->cate_model->get_Peer_cate($id);
        
        //当前分类
        $cate_data = $this->cate_model->get_cate($id);
        $cate_data['new_arr'] = Db::name('archives')
			->alias('a')
			->field('a.aid,a.typeid,a.title,a.litpic,a.add_time,hc.content')
			->join('h_article_content hc','hc.aid = a.aid')
			->where('a.typeid',$id)
			->order('a.add_time desc')
			->paginate(6,false,[
            'query' => request()->param(),
            'type'     => 'bootstrap',
        ]);
    	
    	$this->assign('next_cate',$next_cate);
    	$this->assign('cate_data',$cate_data);
    	$this->four_year();

        return $this->fetch();

    }

     //行业资讯/媒体报道
    public function hyzx(){

    	$id = input('id');
    	$next_cate = $this->cate_model->get_Peer_cate($id);
        
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
    	
    	$this->assign('next_cate',$next_cate);
    	$this->assign('cate_data',$cate_data);

        return $this->fetch();
    }

    //新闻详情
    public function news_info(){

    	$aid = input('aid');
    	$typeid = input('typeid');
    	//获取同级和当前分类
    	$next_cate = $this->cate_model->get_Peer_cate($typeid);
    	$cate_data = $this->cate_model->get_cate($typeid);

    	//新闻详情
    	//给新闻增加一个点击量
    	$bool = $this->archives->add_click($aid);
    	$new_info = $this->archives->nesw_info($aid);

    	$this->assign('next_cate',$next_cate);
    	$this->assign('cate_data',$cate_data);
    	$this->assign('new_info',$new_info);

    	return $this->fetch();
    }


}
