<?php 
namespace app\index\model;
use think\Model;
use think\Db;

/**
*@param 轮播图
**/
class Banner extends Model
{
	protected $name = 'ad_position';


	public function get_index_banner($id)
	{

		//轮播图片
        $banner = self::alias('hap')
            ->field('ha.title,ha.litpic,ha.target,ha.links,ha.intro')
            ->join('h_ad ha','ha.pid = hap.id')
            ->where('hap.id',$id)
            ->order('ha.sort_order')
            ->select();
        return $banner;

	}

}