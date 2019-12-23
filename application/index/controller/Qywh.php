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
    }

    public function index(){

   

    	$id = input('id');
    	//获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        $this->assign('cate_data',$cate_data);

        //获取到第一个分类的所有子分类及其下面所有的图集
        $child_all = $this->cate_model->get_first_child_all($id);
        $index_data = $this->archives->get_child_images_archive($child_all); 
        $this->assign('index_data',$index_data);

    	return $this->fetch();
    }
}
