<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\WWW\haiwei/application/index\view\gywm\pzgl.html";i:1576647875;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1577173633;s:53:"D:\WWW\haiwei\application\index\view\common\left.html";i:1577173810;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577151019;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $cate_data['seo_title']; ?></title>
		<meta name="keywords" content="<?php echo $cate_data['seo_keywords']; ?>" />
		<meta name="description" content="<?php echo $cate_data['seo_description']; ?>"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/css.css"/>
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
				<div class="row box">
					<h3><?php echo $cate_data['typename']; ?></h3>
				</div>
				<div class="row box box1">
					<?php echo htmlspecialchars_decode($cate_data['child']['content']); ?>
					<!-- <p class="qut">海威华芯以先进的化合物半导体制造技术为本，坚持精益求精的理念，追求细节和零缺陷，通过全员创新及持续改善，提供卓越品质的产品与服务，达成客户的全面满意。</p>
					<div class="system">
						<img src="/public/static/index/img/qua1.png" >
					</div> -->
					<!-- 认证证书 -->
					<div class="certificate">
						<h4><?php if($lang=='en'): ?>System certification<?php else: ?>体系认证证书<?php endif; ?></h4>
						<div class="wrap">
							<?php if(is_array($cate_data['child']['img']) || $cate_data['child']['img'] instanceof \think\Collection || $cate_data['child']['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_data['child']['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<dl>
								<dt><img src="<?php echo $v['image_url']; ?>" title="<?php echo $v['intro']; ?>"></dt>
								<dd><?php echo $v['intro']; ?></dd>
							</dl>

							<?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- <dl>
								<dt><img src="/public/static/index/img/qua3.png" ></dt>
								<dd> IECQ QC080000:2017有害物质过程管理体系认证（英文）</dd>
							</dl> -->
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
		

	
	
		<script src="/public/static/index/js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/swiper/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/static/index/js/scroll.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
