<?php
namespace app\index\controller;

use think\Db;
/**
 * @param 技术支持
 */
class Jszc extends Cates
{

    public function _initialize() {
        parent::_initialize();
        // dump(request()->action());die;
        // if(request()->action() == 'index'){
        //     echo 1;die;
        //     return $this->jszc_info();
        // }

    }

    public function index(){
    	

    	$id = input('id');
    	//获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        $cates = $this->cate_model->get_child_arctype($id);
        //获取技术支持下面的第一篇文章
        $content = $this->archives->get_first_download_archives($id);
        
        $this->assign('content',$content);

        $this->assign('cates',$cates);
        $this->assign('cate_data',$cate_data);

        if($this->lang == 'cn'){
        	$a_id = 11;
        }else{
        	$a_id = 12;
        }
        $bannerModel = Model('banner');
        $banner = $bannerModel->get_index_banner($a_id);
        $this->assign('banner',$banner);

        return $this->fetch();
    }

//技术支持详情
   	public function jszc_info()
    {	
    	$id = input('id');
    	//获取分类信息
        $cate_data = $this->cate_model->upper_level_id($id);
        //获取子集
        // $cate_data['child'] = $this->archives->get_archives_info($id);
        $this->assign('cate_data',$cate_data);
        //获取同级分类信息
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);

        //获取到分类的第一条数据
        $data = $this->archives->get_first_image_archives($id);
        $this->assign('data',$data);



    	return $this->fetch();
    }
}
