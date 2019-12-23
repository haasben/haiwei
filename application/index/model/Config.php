<?php 
namespace app\index\model;
use think\Model;
use think\Db;

/**
*@param 网站配置
**/
class Config extends Model
{
	protected $name = 'config';

	//获取网站配置信息
	public function get_web_config($lang)
	{

		$config = self::where('lang',$lang)
        	->where('inc_type','web')
        	->select();
        $web_config = [];
        foreach ($config as $key => $val) 
        {
        	$web_config[$val['name']] = $val['value'];
        }
        return $web_config;

	}

}