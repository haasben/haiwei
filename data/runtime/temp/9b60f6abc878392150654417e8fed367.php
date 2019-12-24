<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\WWW\haiwei/application/index\view\gywm\ryzz.html";i:1576747002;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1577173633;s:53:"D:\WWW\haiwei\application\index\view\common\left.html";i:1577173810;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577151019;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $cate_data['seo_title']; ?></title>
	<meta name="keywords" content="<?php echo $cate_data['seo_keywords']; ?>" />
	<meta name="description" content="<?php echo $cate_data['seo_description']; ?>"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" type="text/css" href="/public/static/index/css/public.css" /> -->
		<link rel="stylesheet" type="text/css" href="/public/static/index/js/swiper/css/swiper.min.css" />
		<!-- <link rel="stylesheet" type="text/css" href="/public/static/index/css/public_media.css" /> -->
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
					<p class="ff"><?php echo strip_tags(htmlspecialchars_decode($cate_data['child']['content'])); ?></p>
					<div id="certify">
						<div class="swiper-container pc_swiper">
							<div class="swiper-wrapper">
								<?php if(is_array($cate_data['child']['img']) || $cate_data['child']['img'] instanceof \think\Collection || $cate_data['child']['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_data['child']['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<div class="swiper-slide">
										<img src="<?php echo $v['image_url']; ?>" />
										<p><?php echo $v['intro']; ?></p>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
						<!-- 如果需要导航按钮 -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					
					<div class="honor_list">
						<?php if(is_array($date_data) || $date_data instanceof \think\Collection || $date_data instanceof \think\Paginator): $i = 0; $__LIST__ = $date_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<dl class="col-md-5">
							<dt><?php echo $key; ?>年</dt>
							<?php if(is_array($date_data[$key]) || $date_data[$key] instanceof \think\Collection || $date_data[$key] instanceof \think\Paginator): $i = 0; $__LIST__ = $date_data[$key];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
							<dd><a href="/gywm/ryzz_info?aid=<?php echo $v1['aid']; ?>&id=<?php echo $cate_data['id']; ?>"><?php echo $v1['title']; ?></a></dd>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
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
		<script>
			const slideW = $('#certify .swiper-slide').width();
			var certifySwiper = new Swiper('.pc_swiper', {
				watchSlidesProgress: true,
				slidesPerView: 'auto',
				centeredSlides: true,
				loop: true,
				loopedSlides: 7,
				autoplay: true,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				pagination: {
					el: '.swiper-pagination',
				},
				on: {
					progress: function(progress) {
						for (i = 0; i < this.slides.length; i++) {
							var slide = this.slides.eq(i);
							var slideProgress = this.slides[i].progress;
							modify = 1;
							if (Math.abs(slideProgress) > 1) {
								modify = (Math.abs(slideProgress) - 1) * 0.1 + 1;
							}
							translate = slideProgress * modify * 275 + 'px';
							scale = 1 - Math.abs(slideProgress) / 10;
							zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
							slide.transform('translateX(' + translate + ') scale(' + scale + ')');
							slide.css('zIndex', zIndex);
							slide.css('opacity', 1);
							if (Math.abs(slideProgress) > 3) {
								slide.css('opacity', 0);
							}
						}
					},
					setTransition: function(transition) {
						for (var i = 0; i < this.slides.length; i++) {
							var slide = this.slides.eq(i)
							slide.transition(transition);
						}

					}
				}

			})
		</script>

	</body>
</html>
