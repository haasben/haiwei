<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"D:\WWW\haiwei/application/index\view\gywm\index.html";i:1577073563;s:53:"D:\WWW\haiwei\application\index\view\common\head.html";i:1576654098;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577086748;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>关于我们</title>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/public_media.css"/>
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

		<nav>
				<ul>
					<li><a href="/"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
					<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

					<li><a href='<?php if($v['is_part'] == 1): ?><?php echo $v['typename']; else: ?><?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; endif; ?>'><?php echo $v['typename']; ?></a></li>

					<?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
			</nav>



		<ul class="menus mobile_menu">
			<li><a href="/"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
			<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<li><a href='<?php if($v['is_part'] == 1): ?><?php echo $v['typename']; else: ?><?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; endif; ?>'><?php echo $v['typename']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<main class="about">
			<nav>
				<ul>
					<li><a href="/"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
					<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li><a href='<?php if($v['is_part'] == 1): ?><?php echo $v['typename']; else: ?><?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; endif; ?>'><?php echo $v['typename']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
		</nav>
	<div class="banner">
		<img src="/public/static/index/img/about_banner.png" >
	</div>

			<div class="container">
				<div class="row content">
					<div class="col info_box">
						<div class="about_info">
							<h3><?php echo $first_array['typename']; ?></h3>
							<div class="cont">
						   	<?php echo mb_substr(strip_tags(htmlspecialchars_decode($first_array['child']['content'])),0,300); ?>
							</div>
							<a href="<?php echo $first_array['dirpath']; ?>?id=<?php echo $first_array['id']; ?>" class="more"><img src="/public/static/index/img/more.png" ></a>
						</div>
					</div>
					<div class="col about_img">
						<img src="<?php echo $first_array['child']['litpic']; ?>" >
					</div>
				</div>
			</div>
			<div class="container contents">
				<?php if(is_array($cate_data['child']) || $cate_data['child'] instanceof \think\Collection || $cate_data['child'] instanceof \think\Paginator): $k = 0; $__LIST__ = $cate_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
				<div class="row content">
					<?php if($k%2!=0): ?>
					<div class="col-md-6 imgs" style="background-image: url(<?php echo $v['child']['litpic']; ?>);">
					</div>
					<?php endif; ?>
					<div class="col-md-6 info">
						<h3><?php echo $v['typename']; ?></h3>
						<div class="cont">
					  <?php echo mb_substr(strip_tags(htmlspecialchars_decode($v['child']['content'])),0,150); ?>
						</div>
						<a href="<?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; ?>" class="more"><img src="/public/static/index/img/more.png" ></a>
					</div>
					<?php if($k%2==0): ?>
					<div class="col-md-6 imgs" style="background-image: url(<?php echo $v['child']['litpic']; ?>);">
					</div>
					<?php endif; ?>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		
			
				<!-- 底部 -->
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
		<script src="/public/static/index/js/public.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/menu_head.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
			
