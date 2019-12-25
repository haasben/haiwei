<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:52:"D:\WWW\haiwei/application/index\view\rczp\index.html";i:1577269659;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1577173633;s:53:"D:\WWW\haiwei\application\index\view\common\left.html";i:1577173947;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577151019;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $cate_data['seo_title']; ?></title>
		<meta name="keywords" content="<?php echo $cate_data['seo_keywords']; ?>" />
		<meta name="description" content="<?php echo $cate_data['seo_description']; ?>"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/css.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/recruit.css"/>
	</head>
	<body>

	<div class="left_nav">
		<img src="/public/static/index/img/logo.png" class="logo">
		<div class="menu">
			<a href="javascript:"><img src="/public/static/index/img/menu.png" ></a>
			<a href="javascript:"><img src="/public/static/index/img/search.png" ></a>
			<a href="<?php echo url('index/index/up_lang'); ?>"><img src="/public/static/index/img/web.png" ></a>
			<a href="javascript:"><img src="/public/static/index/img/wechat.png" ></a>
			<a href="javascript:"><img src="/public/static/index/img/link.png" ></a>
			<a href="javascript:"><img src="/public/static/index/img/other.png" ></a>
		</div>
	</div>
	<div class="header">
		<a href="/"><img class="logo" src="/public/static/index/img/logo.png" ></a>
		<a href="#"><img src="/public/static/index/img/list.png" class="nav"></a>
	</div>
	<div class="mobile_nav">
		<a href="javascript:"><img src="/public/static/index/img/menu.png" class="mobile_list_btn"></a>
		<a href="javascript:"><img src="/public/static/index/img/search.png" ></a>
		<a href="javascript:"><img src="/public/static/index/img/web.png" ></a>
		<a href="javascript:"><img src="/public/static/index/img/wechat.png" ></a>
		<a href="javascript:"><img src="/public/static/index/img/link.png" ></a>
		<a href="javascript:"><img src="/public/static/index/img/other.png" ></a>
	</div>
	<ul class="menus mobile_menu">
		<li><a href="#"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
		<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<li><a href="<?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></a></li>

		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<main class="company technology product" id="honor">
		<nav>
			<ul>
				<li><a href="/"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
				<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<li><a href="<?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div class="banner">
			<img src="<?php echo $cate_data['litpic']; ?>" >
			<ul class="company_menu">
				<?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<li><a href="<?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
			<div class="container">
				<div class="row box tabs">
					<h3><?php echo $cate_data['typename']; ?></h3>
				</div>
				<div class="row box box1">
					<div class="rczp_wrap">
						<div class="zwzp">
							<ul>
								<?php if(is_array($rczp_data) || $rczp_data instanceof \think\Collection || $rczp_data instanceof \think\Paginator): $i = 0; $__LIST__ = $rczp_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<li>
									<h4><?php echo $v['title']; ?></h4>
									<p>
										<span>招聘人数：<em><?php echo $v['zprs']; ?></em></span>&nbsp;&nbsp;|&nbsp;
										<span>工作地点：<em><?php echo $v['gzdd']; ?></em></span>&nbsp;&nbsp;|&nbsp;
										<span>发布日期：<em><?php echo date('Y/m/d',$v['add_time']); ?></em></span>
									</p>
									<div class="desc">
										<?php echo htmlspecialchars_decode($v['content']); ?>
									</div>
									<a href="javascript:" data-id="<?php echo $v['aid']; ?>" class="more">了解更多</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		
<div class="container">
	<footer>
		<div class="wrap">
			<div class="left">
				<img src="<?php echo $web_config['web_logo']; ?>" class="bai" >
				<img src="/public/static/index/img/qrcode.png" class="qrcode">
			</div>
			<div class="right">

			<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>

				<dl>
					<dt><a href="<?php if($c['is_part'] == 1): ?><?php echo $c['typelink']; else: ?><?php echo $c['dirpath']; ?>?id=<?php echo $c['id']; endif; ?>"><?php echo $c['typename']; ?></a></dt>
					<?php if(is_array($c['child']) || $c['child'] instanceof \think\Collection || $c['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $c['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					 <dd><a href="<?php if($v['is_part'] == 1): ?><?php echo $v['typelink']; else: ?><?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; endif; ?>"><?php echo $v['typename']; ?></a></dd> 
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
			<?php endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
		</div>
		<p><?php echo $web_config['web_copyright']; ?></p>
	</footer>
</div>
</main>
		

		
		
		<!-- 详情弹窗 -->
		<div class="mark"></div>
		<div class="zwzp_detail">
			<div class="cha">×</div>
			<div class="wrap">
				<div class="title">
					<h4>GaAs工艺研发师</h4>
					<p>
						<span>招聘人数：<em class="renshu">3</em></span>&nbsp;&nbsp;|&nbsp;
						<span>工作地点：<em class="gzdd">成都</em></span>&nbsp;&nbsp;|&nbsp;
						<span>发布日期：<em class="add_time">2019/12/12</em></span>
					</p>
				</div>
				<div class="details nnxq">
					<!-- <p style="color: rgba(200, 55, 4, 1);">岗位职责：</p>
					<p>1、根据实际需求，进行GaAs外延、器件结构设计及仿真；</p>
					<p>2、GaAs工艺开发过程中，对器件关键工艺进行设计及仿真，协助工艺工程师共同开展工艺参数调试工作；</p>
					<p>3、负责收集、调研GaAs外延产品销售市场动态，跟踪产品技术信息与技术动态。</p>
					<p></p>
					<p></p>	
				    <p style="color: rgba(200, 55, 4, 1);">岗位要求：</p>
				    <p>A、本科以上学历，微电子、电子工程、材料等相关专业；</p>
				    <p>B、三年以上工作，熟悉GaAs芯片工艺，能熟练使用各种仿真工具；</p>
				    <p>C、良好的人际沟通能力和语言文字表达能力，具有积极主动、认真细致的工作作风，注重团队合作、性格沉稳。</p>
					<p></p>	 
					<p></p>	
					<p style="color: rgba(200, 55, 4, 1);">工作地点：</p>
					<p>成都市双流区物联大道88号</p>
					<p></p>
					<p></p>	
					<p style="color: rgba(200, 55, 4, 1);">E-mail：</p>
					<p>hr@hiwafer.com</p>
					<p></p>
					<p></p>	
					<p style="color: rgba(200, 55, 4, 1);">HR电话：</p>
					<p>028-65796060</p>
					<p></p>
					<p></p>	
					<p style="color: rgba(200, 55, 4, 1);">注：投简历时，内容必须真实详细，并注明希望薪资及应聘职位，经验丰富者工资可面谈。</p> -->
				</div>
				<!-- <div class="yao">诚邀您的加入！</div> -->
			</div>
		</div>
		
		<script src="/public/static/index/js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/scroll.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$('.more').on('click', function(){
				
				var aid = $(this).attr('data-id');
				$.post('<?php echo url("index/rczp/rczp_info"); ?>',{aid:aid},function(data){
					$('.renshu').text(data.data.zprs);
					$('.gzdd').text(data.data.gzdd);
					$('.add_time').text(data.data.add_time);
					$('.nnxq').html(data.data.nnxq);
					$('.mark').show();
					$('.zwzp_detail').show();
				})

			})
			$('.cha').on('click', function(){
				$('.mark').hide();
				$('.zwzp_detail').hide();
			})
		</script>
	</body>
</html>
