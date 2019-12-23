<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"D:\WWW\haiwei/application/index\view\cpzx\index.html";i:1576827294;s:51:"D:\WWW\haiwei\application\index\view\cpzx\head.html";i:1577088007;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577086748;}*/ ?>
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
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/product.css"/>
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
				<li><a href="/cpzx_list.html?id=<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
			<div class="container">
				<div class="row box">
					<h3><?php echo $cate_data['typename']; ?></h3>
				</div>
				<div class="row box box1">
					<div class="prod_wrap">
						<?php if(is_array($cate_data['child']) || $cate_data['child'] instanceof \think\Collection || $cate_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<div class="cate_list">
							<h3><?php echo $v['typename']; ?></h3>
							<ul class="col-md-12">
								<?php if(is_array($v['child']) || $v['child'] instanceof \think\Collection || $v['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="/cpzx_info?aid=<?php echo $c['aid']; ?>&id=<?php echo $v['id']; ?>">
										<div class="" style="background-image: url(<?php echo $c['litpic']; ?>);" ></div>
										<img src="<?php echo $c['litpic']; ?>" >
										<p><?php echo $c['title']; ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
						<hr />
						<?php endforeach; endif; else: echo "" ;endif; ?>
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

			<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;$dirpaths = url($c['dirpath']);?>
				<dl>
					<dt><a href="<?php if($c['is_part'] == 1): ?><?php echo $c['typelink']; else: ?>

						<?php echo $dirpaths; ?>?id=<?php echo $c['id']; endif; ?>"><?php echo $c['typename']; ?></a></dt>
					<?php if(is_array($c['child']) || $c['child'] instanceof \think\Collection || $c['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $c['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;$dirpath_child = url('index'.$v['dirpath']);?>

					 <dd><a href="<?php if($v['is_part'] == 1): ?><?php echo $v['typelink']; else: ?>

					 	<?php echo $dirpath_child; ?>?id=<?php echo $v['id']; endif; ?>"><?php echo $v['typename']; ?></a></dd> 
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
