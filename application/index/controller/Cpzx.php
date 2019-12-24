<?php
namespace app\index\controller;

use think\Db;
/**
 * @param 产品中心
 */
class Cpzx extends Cates
{

    public function _initialize() {
        parent::_initialize();

        $url = request()->url();
        $action = request()->action();

        if($action == 'index'){
            if(strpos($url,'cpzx/')!==false){
                $this->redirect('/cpzx_list.html?id='.input('id'));
            }
        }
    }

    public function index(){

    	$id = input('id');
    	//获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        $cates = $this->cate_model->get_child_cate_cp($id);
        $this->assign('cates',$cates);

        $cate_data['child'] = $this->archives->get_product_three($cates);
        // dump($cate_data);die;
        $this->assign('cate_data',$cate_data);

        return $this->fetch();
    }

//某个产品分类及所有产品
    public function cpzx_list(){

    	$id=input('id');
    	$cate_data = $this->cate_model->get_cate($id);
    	$cate_data['child'] = $this->archives->get_product_cate_all($id);


        $top_cate = $this->cate_model->get_cate($cate_data['parent_id']);
    	//获取同级分类信息
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);
        $this->assign('top_cate',$top_cate);
        $this->assign('cate_data',$cate_data);
        // dump($cate_data);die;
        return $this->fetch();

    }
//产品详情
    public function cpzx_info()
    {
    	$aid = input('aid');
    	$id = input('id');
    	//获取同级分类信息
        $cate_data = $this->cate_model->get_cate($id);
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);
        $this->assign('cate_data',$cate_data);

        $data = $this->archives->cpzx_info($aid);
        $this->assign('data',$data);
        // dump($data);die;
        return $this->fetch();


    }

}
