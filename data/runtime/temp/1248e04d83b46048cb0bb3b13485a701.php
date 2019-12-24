<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"D:\WWW\haiwei/application/index\view\qywh\index.html";i:1577157286;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1577157244;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577151019;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $cate_data['seo_title']; ?></title>
		<meta name="keywords" content="<?php echo $cate_data['seo_keywords']; ?>" />
		<meta name="description" content="<?php echo $cate_data['seo_description']; ?>"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/css.css" />
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/culture.css" />
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
					<div class="culture_wrap">
						<?php if(isset($index_data[0])): ?>
						<div class="info"><?php echo $index_data['0']['englist_name']; ?></div>
						<ul class="list">
							<?php if(is_array($index_data['0']['child']) || $index_data['0']['child'] instanceof \think\Collection || $index_data['0']['child'] instanceof \think\Paginator): $k = 0; $__LIST__ = $index_data['0']['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;if($k == 2): ?>
								<li>
								<a href="javascript:;">
									<div class="cont">
										<h4><?php echo $v['title']; ?>：</h4>
										<p><?php echo strip_tags(htmlspecialchars_decode($v['content'])); ?></p>
									</div>
								</a>
								<a href="javascript:;">
									<img src="<?php echo $v['litpic']; ?>">
								</a>
							</li>

							<?php else: ?>

								<li>
								<a href="javascript:;">
									<img src="<?php echo $v['litpic']; ?>">
								</a>
								<a href="javascript:;">
									<div class="cont">
										<h4><?php echo $v['title']; ?>：</h4>
										<p><?php echo strip_tags(htmlspecialchars_decode($v['content'])); ?></p>
									</div>
								</a>
							</li>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<?php endif; if(isset($index_data[1])): ?>
						<!-- 华夏芯  海之威 -->
						<div class="business">
							<h3><?php echo $index_data['1']['typename']; ?></h3>
							<ul>
								<?php if(is_array($index_data['1']['child']) || $index_data['1']['child'] instanceof \think\Collection || $index_data['1']['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $index_data['1']['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<li>
									<div class="wrp">
										<img src="<?php echo $v['litpic']; ?>">
										<div>
											<span><?php echo $v['title']; ?></span>
											<span><?php echo strip_tags(htmlspecialchars_decode($v['content'])); ?></span>
										</div>
									</div>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								
							</ul>
						</div>
						<?php endif; ?>
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
		<script src="/public/static/index/js/scroll.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
