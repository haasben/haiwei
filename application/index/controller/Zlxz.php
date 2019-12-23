<?php 
namespace app\index\controller;

use think\Db;
/**
 * @param 资料下载
 */
class Zlxz extends Cates
{

    public function _initialize() {
        parent::_initialize();
    }

//资料下载页面
    public function index(){

    	$id = input('id');
    	$cate_data = $this->cate_model->get_cate($id);
    	$zlxz_data = $this->archives->get_zlxz_list($id);
    	// $zlxz_data = $zlxz_data->toarray();
    	// dump($cate_data);
    	$this->assign('cate_data',$cate_data);
    	$this->assign('zlxz_data',$zlxz_data);
    	return $this->fetch();

    }

    //资料下载链接
    public function download_url(){

    	if(IS_AJAX){
            $data = input();
            $result = $this->validate($data,
                [   
                    'aid|必要参数'  => 'require|token',
                ]);
            if(true !== $result){
                // 验证失败 输出错误信息
                return ['code'=>3,'msg'=>$result,'token'=>request()->token()];
            }
    		$aid = input('aid');
    		$url = $this->archives->get_zlxz_url($aid);

            return ['code'=>1,'url'=>$url,'token'=>request()->token()];
    	}
    	



    }


}
