<?php 
namespace app\index\controller;

use think\Db;
/**
 * @param 人才招聘
 */
class Rczp extends Cates
{

    public function _initialize() {
        parent::_initialize();
    }

//人才招聘
    public function index()
    {

    	$id = input('id');
    	$cate_data = $this->cate_model->get_cate($id);
    	$rczp_data = $this->archives->get_zlxz_list($id);

        
    	$this->assign('cate_data',$cate_data);
    	$this->assign('rczp_data',$rczp_data);
    	return $this->fetch();

    }

//加入我们
    public function jrwm(){

        $id = input('id');
        //获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        //获取子集
        $cate_data['child'] = $this->archives->get_singel_archives_info($id);
        $this->assign('cate_data',$cate_data);
        //获取同级分类信息
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);

        return $this->fetch();
    }

//人才发展
    public function rcfz(){
        $id = input('id');
        //获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        //获取子集
        $cate_data['child'] = $this->archives->cate_images_all_content($id);
        $this->assign('cate_data',$cate_data);
         //获取同级分类信息
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);

        return $this->fetch();
    }

}
