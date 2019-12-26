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

        $prev_cate = $this->cate_model->prev_cate($id);

    	$rczp_data = $this->archives->get_cate_recruitment($prev_cate['id']);

 
        foreach ($rczp_data as $k => $v) {
            $str = htmlspecialchars_decode($v['nnxq']);
            $str_find = $this->newstripos($str,'</p>',3).'<hr>'; // 输出22
            $rczp_data[$k]['content'] = mb_substr($str, 0,$str_find);
        }

        // dump($rczp_data);die;
        $cates = $this->cate_model->get_child_arctype($id);
        $this->assign('cates',$cates);
    	$this->assign('cate_data',$cate_data);
    	$this->assign('rczp_data',$rczp_data);
    	return $this->fetch();

    }
    public function zwzp()
    {
        $id = input('id');
        $cate_data = $this->cate_model->upper_level_id($id);
        $this->redirect('/rczp?id='.$cate_data['id']);
       

    }


    //人才招聘详情
    public function rczp_info()
    {
        $aid = input('aid');
        $data = $this->archives->get_cate_recruitment_one($aid);
        return ['code'=>1,'data'=>$data];
    }


 
    public function newstripos($str, $find, $count, $offset=0)
    {
        $pos = stripos($str, $find, $offset);
        $count--;
        if ($count > 0 && $pos !== FALSE)
        {
        $pos = $this->newstripos($str, $find ,$count, $pos+1);
        }
        return $pos;
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

//联系我们
    public function lxwm(){
        $id = input('id');
        //获取分类信息
        $cate_data = $this->cate_model->get_cate($id);
        //获取子集
        // $cate_data['child'] = $this->archives->cate_images_all_content($id);
        $this->assign('cate_data',$cate_data);
         //获取同级分类信息
        $cates = $this->cate_model->get_Peer_cate($id);
        $this->assign('cates',$cates);

        //查询到留言需要的字段
        $attr = Db::name('guestbook_attribute')
            ->field('attr_id,attr_name,attr_input_type,attr_values,is_required')
            ->where('typeid',$id)
            ->where('is_del',0)
            ->where('lang',$this->lang)
            // ->where('attr_input_type','in',[0,1])
            ->order('attr_id')
            ->select();
        $attr_input_type2 = array();
        foreach ($attr as $k => $v) {
            if($v['attr_input_type'] == 1){
                $attr[$k]['attr_values'] = explode(',',str_replace("\r\n",",",$v['attr_values']));
            }elseif($v['attr_input_type'] == 2){
                unset($attr[$k]);
                $attr_input_type2[] = $v;
            }
        }
        $this->assign('attr_input_type2',$attr_input_type2);
        $this->assign('attr',$attr);
        return $this->fetch();


    }


     /**
     * 留言提交 
     */
    public function gbook_submit()
    {
        $typeid = input('typeid');

        $post = input('post.');

        //验证数据
        $attr = Db::name('guestbook_attribute')
            ->field('attr_id,attr_name,attr_input_type,attr_values,is_required,verification_type')
            ->where('typeid',$typeid)
            ->where('is_del',0)
            ->where('lang',$this->lang)
            ->order('attr_id')
            ->select();
        $rule = array();
        $mobile_arr = array();
        foreach ($attr as $k => $v) {
            if($v['is_required'] == 1){
                if(empty($rule)){
                    $str = 'require|token';
                    $str = 'require';
                }else{
                    $str = 'require';
                }
                if($v['verification_type'] == 'email'){
                    $str.= '|email';
                }elseif ($v['verification_type'] == 'mobile') {
                    $mobile_arr[] = 'attr_'.$v['attr_id'];
                }
                $rule['attr_'.$v['attr_id'].'|'.$v['attr_name']] = $str;
            }
            
        }
        
        $result = $this->validate($post,$rule);
        if(true !== $result){
            // 验证失败 输出错误信息
            return ['code'=>3,'msg'=>$result,'token'=>get_token()];
        }
        foreach ($mobile_arr as $k=> $v) {
            if(!check_mobile($post[$v]) && !check_telephone($post[$v])){
                return ['code'=>3,'msg'=>'联系方式错误','token'=>get_token()];
            }
        }

        $ip = clientIP();
        /*留言间隔限制*/
        $channel_guestbook_interval = tpSetting('channel_guestbook.channel_guestbook_interval');

        $channel_guestbook_interval = is_numeric($channel_guestbook_interval) ? intval($channel_guestbook_interval) : 60;
        if (0 < $channel_guestbook_interval) {
            $map = array(
                'ip'    => $ip,
                'typeid'    => $typeid,
                'lang'      => $this->home_lang,
                'add_time'  => array('gt', getTime() - $channel_guestbook_interval),
            );
            $count = DB::name('guestbook')->where($map)->count('aid');

            if ($count > 0) {
                return ['code'=>2,'msg'=>'同一个IP在'.$channel_guestbook_interval.'秒之内不能重复提交！','token'=>get_token()];
            }
        }
        
        $this->channel = Db::name('arctype')->where(['id'=>$typeid])->getField('current_channel');
        $newData = array(
            'typeid'    => $typeid,
            'channel'   => $this->channel,
            'ip'    => $ip,
            'lang'  => $this->home_lang,
            'add_time'  => getTime(),
            'update_time' => getTime(),
        );
        $data = array_merge($post, $newData);
        $data['md5data'] = md5(serialize($post));
        $aid = DB::name('guestbook')->insertGetId($data);
        $attrArr = [];

        unset($post['typeid']);
        unset($post['__token__']);
        $time = time();

        foreach ($post as $k => $v) {
            if(!empty($v)){
                $attrArr[] = [
                    'aid'=>$aid,
                    'attr_id'=>explode('_', $k)[1],
                    'attr_value'=>$v,
                    'lang'=>$this->lang,
                    'add_time'=>$time,
                    'update_time'=>$time
                ];
            }
        }

        $r = Db::name('guestbook_attr')->insertAll($attrArr);

        if($aid && $r){
             return ['code'=>1,'msg'=>'留言成功','token'=>get_token()];
        }else{
            return ['code'=>2,'msg'=>'留言失败，请稍候再试','token'=>get_token()];
        }
    }


    //选择国家地区
    public function choose_country(){

        $lang = $this->lang;
        $field = ($lang == 'cn')?'zh_name as name':'name';

        $data = Db::name('country')
            ->field($field)
            ->where('is_show',1)
            ->select();
            
        return $data;

    }

}
