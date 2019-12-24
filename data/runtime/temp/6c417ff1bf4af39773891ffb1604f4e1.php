<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"D:\WWW\haiwei/application/index\view\gywm\hjaq_info.html";i:1576747882;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1576825776;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577151019;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $archives_data['seo_title']; ?></title>
		<meta name="keywords" content="<?php echo $archives_data['seo_keywords']; ?>" />
		<meta name="description" content="<?php echo $archives_data['seo_description']; ?>"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/css.css"/>
	</head>
	<body>

	<div class="left_nav">
		<img src="/public/static/index/img/logo.png" class="logo">
		<div class="menu">
			<a href="javascript:"><img src="/public/static/index/img/menu.png" ></a>
			<a href="javascript:"><img src="/public/static/index/img/search.png" ></a>
			<a href="javascript:"><img src="/public/static/index/img/web.png" ></a>
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
				<div class="row box">
					<h3><?php echo $cate_data['typename']; ?></h3>
				</div>
				<div class="row box box1">
					<div class="title_explain">
						<p class="tt"><?php echo $archives_data['title']; ?></p>
						<div class="env">
							<?php echo htmlspecialchars_decode($archives_data['content']); ?>
							<!-- 海威华芯不仅注重企业发展和创造经济价值，同时强调预防环境污染、善用资源能源。我们实施持续的改善措施，履行环境保护职责，推进可持续发展。<br>
							1、完善污染控制设计、符合或超越国家法令及国际公约。<br>
							2、落实环境管理系统，全力维护环境绩效之持续改善。<br>
							3、强化减废及污染预防，善用与回收资源，做到绿色设计与生产。<br>
							4、推广环境教育，提升环保理念，确保各级人员善尽环境保护之职责。<br>
						</div>
						<div class="cont_img">
							<img src="/public/static/index/img/fz.png" > -->
						</div>
					</div>

					<?php if(isset($archives_data['images'])): ?>
					<ul class="mea_list">
						<?php if(is_array($archives_data['images']) || $archives_data['images'] instanceof \think\Collection || $archives_data['images'] instanceof \think\Paginator): $i = 0; $__LIST__ = $archives_data['images'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<li style="background-color: rgb(255,255,255);">
							<a href="javascript:">
								<img src="<?php echo $v['image_url']; ?>" title="<?php echo $v['intro']; ?>">
							</a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						
					</ul>
					<?php endif; ?>
					
					<!-- 管理列表 -->
					<div class="manage_list">
						<ul>
							<?php if(is_array($ad_data) || $ad_data instanceof \think\Collection || $ad_data instanceof \think\Paginator): $i = 0; $__LIST__ = $ad_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
							<li>
								<img src="<?php echo $a['litpic']; ?>" >
								<p class="til"><?php echo $a['title']; ?></p>
								<div class="inf">
									<h4><?php echo $a['title']; ?></h4>
									<div><?php echo $a['intro']; ?></div>
								</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
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
		

			
			
		<script src="/public/static/index/js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/swiper/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/scroll.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
