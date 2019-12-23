<?php
namespace app\index\controller;

use think\Db;
/**
 * @param 关于我们页面
 */
class Gywm extends Cates
{

    public function _initialize() {
        parent::_initialize();
    }

/******************关于我们首页***********/
    public function index()
    {
       
    	$id = input('id');
    	//获取当前类别及子集
    	$cate_data = $this->cate_model->get_cate($id);
    	$cate_data['child'] = $this->cate_model->get_child_cate($id);
        $cate_data = $cate_data->toarray();

        //第一个子集分开到其他数组，便于前台循环
    	$first_array = array(); 
    	foreach ($cate_data['child'] as $k => $v) {
    		$first_array = $v;
    		unset($cate_data['child'][$k]);
    		break;
    	}
    	$this->assign('first_array',$first_array);
    	$this->assign('cate_data',$cate_data);

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
        // dump($cate_data);die;


    }

    /******************公司简介***********/
    public function gsjj()
    {
    	
        $id = input('id');
        $this->common_data($id);
    	return $this->fetch();
    }

    /******************荣誉资质***********/
    public function ryzz()
    {

        $id = input('id');
        $this->common_data($id);
        //获取公司荣誉对应年份标题
        $dete_data = $this->archives->dete_data($id);
        $this->assign('date_data',$dete_data);


        return $this->fetch();
    }

    /***********荣誉资质详情****************/
    public function ryzz_info(){

        $id = input('id');
        $this->common_data($id);

        //获取图片模型单条文章详情
        $aid = input('aid');
        $archives_data = $this->archives->get_image_archives($aid);
        $this->assign('archives_data',$archives_data);

        return $this->fetch();
    }


    /******************领导寄语***********/
    public function ldjy()
    {

        $id = input('id');
        $this->common_data($id);
        return $this->fetch();
    }

    /******************品质管理***********/
    public function pzgl()
    {

        $id = input('id');
        $this->common_data($id);
        return $this->fetch();
    }

    /******************环境安全***********/
    public function hjaq()
    {


        $id = input('id');
        $this->common_data($id);

        $archives_data = $this->cate_model->get_child_arctype($id);
        $this->assign('archives_data',$archives_data);

        return $this->fetch();
    }
    //环境安全详情
    public function hjaq_info(){
        $id = input('id');
        $this->common_data($id);

        $typeid = input('typeid');
        $ad_data = array();
        if($typeid == 112 || $typeid == 113){
            $adModel = Model('banner');
            if($this->lang == 'cn'){
                $banner_id = 9;
            }else{
                $banner_id = 10;
            }
            $ad_data = $adModel->get_index_banner($banner_id);
            //获取分类和图片集
            $archives_data = $this->archives->get_first_image_arr_archives($typeid);

        }else{
            $archives_data = $this->archives->get_first_image_archives($typeid);
            
        }
        $this->assign('ad_data',$ad_data);
       // dump($archives_data);die;
        $this->assign('archives_data',$archives_data);
            return $this->fetch(); 
    }


    /******************专利成果***********/
    public function zlcg()
    {

        $id = input('id');
        $this->common_data($id);

        //获取到专利成功下面图文文章
        $zlcg_data = $this->archives->zlcg_data($id);
        $this->assign('zlcg_data',$zlcg_data);
 // dump($zlcg_data);die;

        return $this->fetch();
    }

    /******************公司里程碑***********/
    public function gslcb()
    {
        $id = input('id');
        $this->common_data($id);

        //查询到里程碑数据
        $lcb_data = $this->archives->lcb_data($id);
       
        $this->assign('lcb_data',$lcb_data);

        return $this->fetch();
    }

}