<?php 
namespace app\index\model;
use think\Model;
use think\Db;

/**
*@param 分类模型
**/
class Arctype extends Model
{
	protected $name = 'arctype';

	//获取指定分类信息
	public function get_cate($id)
	{

		$data = self::where('id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description,parent_id')
			->limit(1)
			->find();
		return $data;

	}
//获取分类下面的第一个子集分类下面的所有分类
	public function get_first_child_all($id){

		$data = self::where('parent_id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description')
			->where('status',1)
			->where('is_del',0)
			->order('sort_order')
			->find();
		$child = self::where('parent_id',$data['id'])
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description,englist_name')
			->where('status',1)
			->where('is_del',0)
			->order('sort_order')
			->select();
		return $child;


	}


	//根据下级ID获取到上一级信息
	public function upper_level_id($id){

		$data = $this->get_cate($id);
		$return_data = $this->get_cate($data['parent_id']);
		return $return_data;
	}

	//查询到第一个下一级
	public function prev_cate($id){
		$data = self::where('parent_id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description,parent_id')
			->limit(1)
			->order('sort_order')
			->find();
		return $data;
		

	}
	//查询到上一级
	public function upper_level($parent_id){
		$data = self::where('id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description,parent_id')
			->limit(1)
			->find();
		return $data;

	}


	//获取同级的分类列表
	public function get_Peer_cate($id)
	{

		$data = $this->get_cate($id);
		$typeid = $data['parent_id'];
		$cates = self::where('parent_id',$typeid)
			->field('id,typename,dirpath,parent_id')
			->where('is_del',0)
			->where('status',1)
			->where('is_hidden',0)
			->select();
		return $cates;

	}

//获取到所有的子集
	public function get_child_arctype($id)
	{
		//获取子集的类型
		$arctype_data = self::where('parent_id',$id)
			->field('id,parent_id,typename,litpic,dirpath')
			->where('is_del',0)
			->where('is_hidden',0)
			->order('sort_order')
			->select();
		return $arctype_data;

	}

//获取一二级分类
	public function get_cates($lang)
	{

		$category = self::field('id,typename,dirpath,is_part,typelink')
            ->where('lang',$lang)
            ->where('grade',0)
            ->where('status',1)
            ->where('is_hidden',0)
            ->where('is_del',0)
            ->order('sort_order')
            ->select();
         // dump($category);die;
        //循环拿到二级分类信息
        foreach ($category as $k => $c) 
        {
            $category[$k]['child'] = self::field('id,typename,dirpath,is_part,typelink')
            ->where('parent_id',$c['id'])
            ->where('is_hidden',0)
            ->where('is_del',0)
            ->where('status',1)
            ->order('sort_order')
            ->select();
        }
        return $category;

	}

//产品中心获取二级分类
	public function get_child_cate_cp($id){
		$data = self::where('parent_id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description')
			->where('is_hidden',0)
			->where('status',1)
			->where('is_del',0)
			->order('sort_order')
			->select();
		// $archivesModel = Model('Archives');
		// $data = $archivesModel->get_product_three($data);
		return $data;
	}

//获取分类的子集及下面的第一篇文章
	public function get_child_cate($id)
	{

		$data = self::where('parent_id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description')
			->where('is_hidden',0)
			->where('status',1)
			->where('is_del',0)
			->order('sort_order')
			->select();
		$archives = Db::name('archives');
		foreach ($data as $k => $v) 
		{
			$archives_data = $archives
				->alias('a')
				->field('a.litpic,a.aid,hi.content,a.title')
				->join('h_images_content hi','hi.aid = a.aid')
				->where('typeid',$v['id'])
				->where('arcrank',0)
				->where('is_del',0)
				->where('status',1)
				->limit(1)
				->find();
			if(!empty($archives_data['litpic'])){
				$data[$k]['child'] = $archives_data;
			}else{
				unset($data[$k]);
			}
		}
		return $data;

	}


}