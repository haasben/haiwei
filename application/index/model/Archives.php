<?php 
namespace app\index\model;
use think\Model;
use think\Db;

/**
*@param 文章模型
**/
class Archives extends Model
{
	protected $name = 'archives';

//获取文章列表新闻详情
	public function nesw_info($aid){

		$nesw_info = self::alias('a')
			->field('a.title,a.aid,a.author,a.seo_title,a.seo_keywords,a.seo_description,hc.content,a.add_time')
			->join('h_article_content hc','hc.aid = a.aid')
			->where('a.aid',$aid)
			->limit(1)
			->find();
		return $nesw_info;

	}

//给新闻增加一个点击量
	public function add_click($aid){

		self::where('aid',$aid)->setInc('click');
	}

//获取单页模板某个列表下面的第一篇文章
	public function get_singel_archives_info($id){

		$data = self::alias('a')
		->field('a.title,hc.content')
		->join('h_single_content hc','hc.aid = a.aid')
		->where('a.typeid',$id)
		->where('a.status',1)
		->where('a.is_del',0)
		->limit(1)
		->find();
		return $data;
	}


	//获取公司介绍详情，及公司环境图片
	public function get_archives_info($id)
	{

		$data = cache('get_archives_info'.$id);
		if(empty($data))
		{
			$data = self::alias('a')
				->field('a.title,a.aid,a.author,a.seo_title,a.seo_keywords,a.seo_description,hc.content,a.litpic,hc.boby_picture')
				->join('h_images_content hc','hc.aid = a.aid')
				// ->join('h_images_upload hu','hu.aid = a.aid')
				->where('a.typeid',$id)
				->where('a.status',1)
				->where('a.is_del',0)
				->limit(1)
				->find();
			$data['img'] = DB::name('images_upload')
				->field('image_url,title,intro')
				->where('aid',$data['aid'])
				->order('sort_order')
				->select();
			cache('get_archives_info'.$id,$data,120);
		}
		return $data;
	}

//荣誉资质获取年份分类的数据
	public function dete_data($id)
	{
		//获取子集的type_id
		$typeid = Db::name('arctype')
			->where('parent_id',$id)
			->where('is_del',0)
			->limit(1)
			->value('id');
		$archives_data = self::where('typeid',$typeid)
			->field('aid,title,add_time')
			->where('is_del',0)
			->where('arcrank',0)
			->order('add_time desc')
			->select();
		$return_data = array();
		foreach ($archives_data as $k => $v) 
		{

			$archives_date = date('Y',$v['add_time']);
			$return_data[$archives_date][] = $v;
		}
		 // dump($return_data);die;
		return $return_data;
	}


//获取分类的子集及下面的第一篇文章
	public function get_child_cate($id)
	{

		$data = self::where('parent_id',$id)
			->field('litpic,id,typename,dirpath,seo_title,seo_keywords,seo_description')
			->where('is_hidden',0)
			->where('status',1)
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
				->where('is_del',0)
				->where('status',1)
				->limit(1)
				->find();
			// if(!empty($archives_data)){
				$data[$k]['child'] = $archives_data;
			// }else{
			// 	unset($data[$k]);
			// }
		}
		
		return $data;

	}
//环境安全获取到四个文章子集
	public function get_child_archives($id,$lang)
	{
		//获取子集的类型
		//获取子集的type_id
		$typeid = Db::name('arctype')
			->where('parent_id',$id)
			->where('is_del',0)
			->limit(1)
			->value('id');

		$archives_data = self::where('typeid',$typeid)
			->field('aid,title,add_time,litpic')
			->where('is_del',0)
			->where('arcrank',0)
			->order('sort_order')
			->select();
		return $archives_data;
	}

//查询到新闻动态数据
	public function index_news($id,$lang){
		$arctypeModel = Model('Arctype');
		$news = $arctypeModel->get_cate($id);
        //新闻动态
        $news['child'] = self::alias('a')
            ->join('h_article_content ha','ha.aid = a.aid')
            ->field('a.aid,a.title,a.litpic,a.add_time,ha.content')
            ->where('a.lang',$lang)
            ->where('a.status',1)
            ->where('a.is_del',0)
            ->where('a.channel',1)
            ->where('a.arcrank',0)
            ->limit(4)
            ->order('aid desc')
            ->select();
        return $news;
	}
//查询到公司简介的第一篇文字
	public function first_cate_news($id){
		//查询到关于我们下面的第一个栏目
		$arctypeModel = Model('Arctype');
		$first_cate = $arctypeModel->prev_cate($id);
		$first_cate = $first_cate->toarray();
        $first_cate['content'] = self::alias('a')
            ->join('h_images_content ha','ha.aid = a.aid')
            ->field('a.aid,a.title,a.litpic,a.add_time,ha.content')
            ->where('typeid',$first_cate['id'])
            ->where('status',1)
            ->where('is_del',0)
            ->where('arcrank',0)
            ->limit(1)
            ->find();
        return $first_cate;

	}

/******************产品中心**************************************/
//获取产品中心下面具体3个产品
	public function get_product_three($data){

		foreach ($data as $k => $v) {
			$data[$k]['child'] = self::field('aid,title,litpic')
				->where('typeid',$v['id'])
				->where('is_del',0)
				->where('status',1)
				->where('arcrank',0)
				->limit(3)
				->order('sort_order')
				->select();

		}
		return $data;


	}
//获取产品中心某个分类下所有产品
	public function get_product_cate_all($typeid){
		$data= self::field('aid,title,litpic')
				->where('typeid',$typeid)
				->where('is_del',0)
				->where('status',1)
				->where('arcrank',0)
				->order('sort_order')
				->select();
		return $data;
	}

//查询到产品中心具体产品数据
	public function cpzx($id)
	{
		//查询父集
		$arctypeModel = Model('Arctype');
        $cpzx_data = $arctypeModel->get_cate($id);

        //获取有产品ID数组
       	$id_array = Db::name('arctype')
       		->field('id')
            ->where('parent_id',$id)
            ->where('status',1)
            ->where('is_del',0)
            ->select();
        $id_array = array_column($id_array, 'id');
        $id_array[] = $top_id;
        //查询到产品数组
        $cpzx_data['child'] = self::alias('a')
            ->field('a.title,a.litpic,hd.content,a.aid,a.typeid')
            ->join('h_product_content hd','hd.aid = a.aid')
            ->where('a.typeid','in',$id_array)
            ->where('a.status',1)
            ->where('a.is_del',0)
            ->order('sort_order')
            ->limit(10)
            ->select();
        return $cpzx_data;
	}
//产品中心详情
	public function cpzx_info($aid){

		$data = self::alias('a')
			->field('a.aid,a.title,a.typeid,a.litpic,a.seo_title,a.seo_keywords,a.seo_description,hc.content')
			->join('h_product_content hc','hc.aid = a.aid')
			->where('a.aid',$aid)
			->limit(1)
			->find();
		return $data;
	}

	


/******************产品中心end*****************************/
//查询到公司里程碑数据
	public function lcb_data($id){
		$arctypeModel = Model('Arctype');
		$first_cate = $arctypeModel->prev_cate($id);
		$first_cate = $first_cate->toarray();
		$lcb_data = self::alias('a')
            ->field('a.title,a.aid,a.typeid,a.add_time')
            ->where('a.typeid',$first_cate['id'])
            ->where('a.status',1)
            ->where('a.is_del',0)
            ->order('a.add_time desc')
            ->select();
        $return_data = array();
        foreach ($lcb_data as $k => $v) {
        	$date = date('Y',$v['add_time']);
        	$return_data[$date][] = $v;
        }
        return $return_data;
	}

//获取专利成果的图文
	public function zlcg_data($id){
		$arctypeModel = Model('Arctype');
		$first_cate = $arctypeModel->prev_cate($id);
		$first_cate = $first_cate->toarray();
		$zlcg_data = self::alias('a')
            ->field('a.title,a.litpic,hd.content,a.aid,a.typeid')
            ->join('h_images_content hd','hd.aid = a.aid')
            ->where('a.typeid',$first_cate['id'])
            ->where('a.status',1)
            ->where('a.is_del',0)
            ->order('a.sort_order')
            ->select();

        // $return_data = array();
        // foreach ($zlcg_data as $k => $v) {
        // 	$return_data[] = $v['litpic'];
        // }
        return $zlcg_data;
	}

	//根据文章ID获取图片模型文章详情
	public function get_image_archives($aid){

		$data = self::alias('a')
			->field('a.aid,a.title,a.litpic,a.seo_title,a.seo_keywords,a.seo_description,hc.content')
			->join('h_images_content hc','hc.aid = a.aid','right')
			->where('a.aid',$aid)
			->limit(1)
			->find();
		return $data;
		
	}
	//根据分类ID获取图片模型下第一篇文章的详情
	public function get_first_image_archives($typeid){

		$data = self::alias('a')
			->field('a.aid,a.title,a.litpic,a.seo_title,a.seo_keywords,a.seo_description,hc.content,hc.boby_picture')
			->join('h_images_content hc','hc.aid = a.aid','right')
			->where('a.typeid',$typeid)
			->limit(1)
			->order('a.sort_order')
			->find();
		return $data;
		
	}
	//根据分类ID获取下载模型下第一篇文章的详情
	public function get_first_download_archives($typeid){

		$data = self::alias('a')
			->field('a.aid,a.title,a.litpic,a.seo_title,a.seo_keywords,a.seo_description,hc.content')
			->join('h_download_content hc','hc.aid = a.aid','right')
			->where('a.typeid',$typeid)
			->limit(1)
			->order('a.sort_order')
			->find();
		return $data;
		
	}


	//根据分类获取图片模型下面第一篇文章详情加图片集合
	public function get_first_image_arr_archives($typeid){
		$data = self::get_first_image_archives($typeid);

		$data['images'] = Db::name('images_upload')
			->field('title,image_url,intro')
			->where('aid',$data['aid'])
			->order('sort_order')
			->select();
		return $data;


	}

	//获取资料下载页面的数据，默认全部展示
	public function get_zlxz_list($id){
		$data = self::field('aid,title,litpic,typeid')
            ->where('typeid',$id)
            ->where('status',1)
            ->where('is_del',0)
            ->order('sort_order')
            ->select();
        return $data;

	}
	//获取资料下载url
	public function get_zlxz_url($aid){
		$data = Db::name('download_file')
			->where('aid',$aid)
			->order('sort_order')
			->limit(1)
			->value('file_url');

        return $data;
	}

//企业文化获取某几个分类下的所有图集
	public function get_child_images_archive($data){

		foreach ($data as $k => $v) {
			$data[$k]['child'] = self::alias('a')
				->field('a.aid,a.title,a.litpic,hc.content')
				->join('h_images_content hc','hc.aid = a.aid')
				->where('a.typeid',$v['id'])
				->where('a.is_del',0)
				->where('a.status',1)
				->where('a.arcrank',0)
				->order('a.sort_order')
				->limit(3)
				->select();
		}
		return $data;
	}

//获取图集列表某个分类下面的所有文章
	public function cate_images_all_content($id){

		$data = self::alias('a')
			->field('a.aid,a.title,a.litpic,hc.content')
			->join('h_images_content hc','hc.aid = a.aid')
			->where('a.typeid',$id)
			->where('a.is_del',0)
			->where('a.status',1)
			->where('a.arcrank',0)
			->order('sort_order')
			->select();
		return $data;



	}

}