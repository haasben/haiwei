<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
/**
 * @param 网站首页控制器
 */
class base extends Controller
{   

    public $lang;
    public $cate_model;
    public $archives;
    public function _initialize() {


        $this->cate_model = Model('Arctype');
        $this->archives = Model('Archives');

    /**********语言***********/ 
         cookie('lang','cn');
        $lang = cookie('lang');
        if($lang != 'en'){
            $lang = 'cn';
        }
        $this->lang = $lang;
        $this->assign('lang',$lang);

    /***************网站信息**********/
        $configModel = Model('Config');
        $web_config = $configModel->get_web_config($lang);

        if($web_config['web_status'] == 1){
            echo '<h1 style="text-align:center;">站点临时维护中...</h1>';die;
        }

        $this->assign('web_config',$web_config);
        
        //首页分类
        $category = $this->cate_model->get_cates($lang);

        $this->assign('category',$category);
    }

    


}