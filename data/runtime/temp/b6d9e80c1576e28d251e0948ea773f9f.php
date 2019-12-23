<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"D:\WWW\haiwei/application/index\view\gywm\gsjj.html";i:1576641009;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1576825776;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1576658590;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $cate_data['seo_title']; ?></title>
		<meta name="keywords" content="<?php echo $cate_data['seo_keywords']; ?>" />
		<meta name="description" content="<?php echo $cate_data['seo_description']; ?>"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/js/swiper/css/swiper.min.css"/>
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
					<div class="col-md-5 desc">
						<div class="">
							<?php echo htmlspecialchars_decode($cate_data['child']['content']); ?>
						</div>
					</div>
					<div class="col-md-7 pic">
						<img src="<?php echo $cate_data['child']['litpic']; ?>" >
					</div>
				</div>
			</div>

<style type="text/css">
	.swiper-container{margin-bottom:40px;}
	.swiper-slide{width: auto;height: 100%;text-align: center;}
	.swiper-slide img{width: 100%;height: 100%;}
	.swiper-button-next, .swiper-button-prev{
		width: 41px;
		height: 41px;
		border-radius: 50%;
		background-color: #2183F2;
		background-size: 50% 50%;
		margin-top: -22px;
	}
	.swiper-button-prev{left: 26%;}
	.swiper-button-next{right: 26%;}
	.swiper-slide dl{}
	.swiper-slide dt{max-height: 36.5714rem; overflow: hidden;position: relative;margin-bottom: 1.3571rem;}
	.yin{position: absolute;width: 100%;height: 100%;top: 0;left: 0;background-color: rgba(17,17,17,.36);}
	.swiper-slide dd{text-align: center;color: #070707;font-size: 16px;}
</style>

			<div class="container swipers">
				<div class="row">
					<h3><?php if($lang == 'en'): ?>Company environment<?php else: ?>公司环境<?php endif; ?></h3>
				</div>
				<div class="row">
					<div class="swiper-container pc_swiper">
						<div class="swiper-wrapper">
							<?php if(is_array($cate_data['child']['img']) || $cate_data['child']['img'] instanceof \think\Collection || $cate_data['child']['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_data['child']['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<a href="javascript:;">
									<dl>
										<dt><img src="<?php echo $v['image_url']; ?>" /><div class=""></div></dt>
										<dd><?php echo $v['intro']; ?></dd>
									</dl>
								</a>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?> 
						</div>
						<!-- 如果需要导航按钮 -->
						<div class="swiper-button-prev swiper-button-white"></div>
						<div class="swiper-button-next swiper-button-white"></div>
					</div>
					
					<div class="swiper-container mobile_swiper">
						<div class="swiper-wrapper">
							<?php if(is_array($cate_data['child']['img']) || $cate_data['child']['img'] instanceof \think\Collection || $cate_data['child']['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_data['child']['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<a href="javascript:;">
									<dl>
										<dt><img src="<?php echo $v['image_url']; ?>" /><div class=""></div></dt>
										<dd><?php echo $v['intro']; ?></dd>
									</dl>
								</a>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?> 
						</div>
						<!-- 如果需要分页器 -->
						<!-- <div class="swiper-pagination"></div> -->
						<!-- 如果需要导航按钮 -->
						<div class="swiper-button-prev swiper-button-white"></div>
						<div class="swiper-button-next swiper-button-white"></div>
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
		<script src="/public/static/index/js/menu_head.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var mySwiper = new Swiper('.swiper-container.pc_swiper', {
				loop: true,
				centeredSlides: true,
				slidesPerView: 'auto',
				// loopedSlides: 3,
				// slidesPerView: 3,
				spaceBetween: 11,
				lazy: {
					loadPrevNext: true,
					loadPrevNextAmount: 3,
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},

				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				on:{
					slideChangeTransitionEnd:function(){
						let that = this;
						let slides = that.slides;
						slides.each(function(index){
							if(that.activeIndex == index){
								$(this).find('dt div').removeClass('yin');
								$(this).siblings().find('dt div').addClass('yin');
							}
						})
					}
				}
			})
			
			var myMobileSwiper = new Swiper('.swiper-container.mobile_swiper', {
				loop: true,
			
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			})
		</script>
	</body>
</html>
