<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:53:"D:\WWW\haiwei/application/index\view\index\index.html";i:1577244730;s:46:"D:\WWW\haiwei\application\index\view\head.html";i:1577173584;s:53:"D:\WWW\haiwei\application\index\view\common\left.html";i:1577173947;s:48:"D:\WWW\haiwei\application\index\view\footer.html";i:1576658880;s:53:"D:\WWW\haiwei\application\index\view\mobile_head.html";i:1576658686;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $web_config['web_name']; ?></title>
<!-- 		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="/public/plugins/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/js/swiper/css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/jquery.fullPage.css"/>
		<script src="/public/static/index/js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
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
			<li><a href="/"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
			<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<li><a href="<?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<main class="main" id="fullpage">
			<!-- 菜单 -->
			<nav>
				<ul>
					<li><a href="/"><?php if($lang == en): ?>Home<?php else: ?>首页<?php endif; ?></a></li>
					<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

					<li><a href='<?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; ?>'><?php echo $v['typename']; ?></a></li>

					<?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
			</nav>


		<style type="text/css">
			.swiper-banner{
				height: 100%;
			}
			.swiper-banner .swiper-slide{position: static;}
			.swiper-container.swiper-product{
				height: calc(100% - 370px);
				width: 105.5rem;
				margin: 0 auto;
				padding: 0 3.2857rem;
				box-sizing: content-box;
			}
			.swiper-product .swiper-slide{
				text-align: center;
			}
			.swiper-product .swiper-button-next, .swiper-button-prev{
				top: 13%;
				width: 3.5rem;
				height: 6.9285rem;
				margin-top: 0;
				background-size: 3.5rem 6.9285rem;
			}

			.product .swiper-button-next{right: 0;background-image: url(/public/static/index/img/next.png);}
			.product .swiper-button-prev{left: 0;background-image: url(/public/static/index/img/prev.png);}
			.product .swiper-pagination-bullet{width: 2.5714rem;height: 0.2142rem;border-radius: 0;background: rgb(255,255,255);opacity: 0.7; border: 1px solid #fff;}
			.product .swiper-pagination-bullet.swiper-pagination-bullet-active{background: #007AFF;}
			
			  /*包裹自定义分页器的div的位置等CSS样式*/ 
			.swiper-pagination-custom { 
				bottom: 10px; 
				left: 0; 
				width: 100%;
				display: flex;
				justify-content: center;
				align-items: center;
			} 
			/*自定义分页器的样式，这个你自己想要什么样子自己写*/ 
			.swiper-pagination-customs { 
				width: 10px; 
				height: 10px; 
				display: inline-block; 
				background: #f6ff00; 
				margin: 0 5px; 
				border-radius: 50%;
				border: 3px solid #fff;
			} 
			/*自定义分页器激活时的样式表现*/ 
			.swiper-pagination-customs-active { 
				width: 25px;
				height: 25px;
				background: url(/public/static/index/img/banner_active.png) no-repeat center;
				background-size: contain;
				border-radius: 0;
				border: 0;
			}
			.line{height: 10px;display: inline-block;line-height: 1px;color: #ebf400;}
			body::-webkit-scrollbar{display: none;}
			a:hover{text-decoration:none}
		</style>


			<!-- 轮播 -->
			<div class="section section_banner">
				<div class="banner">
					<div class="swiper-container swiper-banner">
						<div class="swiper-wrapper">
						<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<img src="<?php echo $b['litpic']; ?>" title="<?php echo $b['title']; ?>">
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
				
						</div>
						<div class="swiper-pagination baner-pagination"></div>
					</div>
				</div>
			</div>
			<!-- 工艺技术 -->
			<div class="section section_technology">
				<div class="technology">
					<h3><?php echo $gyjs_data['title']; ?></h3>
					<div class="wrap">
						<div class="intro">
							<div class="left">
								<span><?php echo mb_substr(strip_tags(htmlspecialchars_decode($gyjs_data['content'])),0,80); ?>......</span>
								<?php if($lang == en): ?>
								<a href="/jszc?id=<?php echo $gyjs_data['typeid']; ?>">more</a>
								<?php else: ?>
								<a href="/jszc?id=<?php echo $gyjs_data['typeid']; ?>">查看更多</a>
								<?php endif; ?>
							</div>
							<div class="right">
								<video width="820" height="" controls="controls" poster="<?php echo $gyjs_data['litpic']; ?>">
									<source src="<?php echo $gyjs_data['file_url']; ?>" type="video/mp4"></source>
								</video>
							</div>
						</div>
						<div class="list">
							<ul>
								<?php if(is_array($gyjs_data['child']) || $gyjs_data['child'] instanceof \think\Collection || $gyjs_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gyjs_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gc): $mod = ($i % 2 );++$i;?>
								<li>
									<img src="<?php echo $gc['litpic']; ?>" >
									<p class="title"><?php echo $gc['typename']; ?></p>
									<p class="cont"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($gc['content'])),0,35); ?>...</p>
									<?php if($lang == en): ?>
									<a href="/jszc_info?id=<?php echo $gc['id']; ?>">more</a>
									<?php else: ?>
								<a href="/jszc_info?id=<?php echo $gc['id']; ?>">查看更多</a>
				
									<?php endif; ?>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
			<div class="section section_product">
				<div class="product">
					<h3><?php echo $cpzx_data['typename']; ?></h3>
					<p class="title"><?php echo $cpzx_data['seo_title']; ?></p>
					<div class="swiper-container swiper-product">
						<div class="swiper-wrapper">
							<?php if(is_array($cpzx_data['child']) || $cpzx_data['child'] instanceof \think\Collection || $cpzx_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cpzx_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<dl>
									<dt><img src="<?php echo $v['litpic']; ?>" ></dt>
									<dd class="tit"><?php echo $v['title']; ?></dd>
									<dd class="cent"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($v['content'])),0,35); ?>......</dd>
								</dl>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							
						</div>
						<!-- 如果需要分页器 -->
						<div class="swiper-pagination"></div>
						
						<!-- 如果需要导航按钮 -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					<div class="swiper-container swiper-product2">
						<div class="swiper-wrapper">
							<?php if(is_array($cpzx_data['child']) || $cpzx_data['child'] instanceof \think\Collection || $cpzx_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cpzx_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<dl>
									<dt><img src="<?php echo $v['litpic']; ?>" ></dt>
									<dd class="tit"><?php echo $v['title']; ?></dd>
									<dd class="cent"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($v['content'])),0,35); ?>......</dd>
								</dl>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!-- 如果需要分页器 -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			


			<div class="section section_news">
				<!-- 新闻动态 -->
				<div class="news">
					<h3><?php echo $news['typename']; ?></h3>
					<div class="wrap">

						<div class="left">
							<img src="/public/static/index/img/news6.png" class="yin">
							<div class="pic">
								<img src="<?php echo $first_new['litpic']; ?>" >
							</div>
						</div>

						<div class="right">
							
							<div class="top_wrap">
								<div class="time"><?php echo date('Y.m.d',$first_new['add_time']); ?></div>
								<a href="/news_info?aid=<?php echo $first_new['aid']; ?>&typeid=<?php echo $first_new['typeid']; ?>"><h4><?php echo $first_new['title']; ?></h4></a>
								<p><?php echo mb_substr(strip_tags(htmlspecialchars_decode($first_new['content'])),0,20); ?></p>
							</div>
							
							<ul>
								<?php if(is_array($news['child']) || $news['child'] instanceof \think\Collection || $news['child'] instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($news['child']) ? array_slice($news['child'],1,3, true) : $news['child']->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="/news_info?aid=<?php echo $v['aid']; ?>&typeid=<?php echo $v['typeid']; ?>">
										<span><?php echo date('Y.m.d',$v['add_time']); ?></span>
										<img src="<?php echo $v['litpic']; ?>" >
										<p>
											<?php echo $v['title']; ?>
										</p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section section_about">
				<div class="about">
					<div class="left">
						<h3><?php echo $gyhwhx['content']['title']; ?></h3>
						<div>
				           <?php echo strip_tags(htmlspecialchars_decode($gyhwhx['content']['content'])); ?>
				        </div>
					</div>
					<div class="right">
						<img src="<?php echo $gyhwhx['content']['litpic']; ?>" >
					</div>
				</div>
			</div>
			<div class="section section_contact">
				<!-- 联系我们 -->
				<div class="contact">
					<div class="left">
						<div id="map"></div>
					</div>
					<div class="right">

						<h3><?php if($lang == en): ?>contact us<?php else: ?>联系我们<?php endif; ?></h3>
						<dl>
							<dt><img src="/public/static/index/img/icon1.png" ></dt>
							<dd><?php echo $web_config['web_attr_1']; ?></dd>
						</dl>
						<dl>
							<dt><img src="/public/static/index/img/icon2.png" ></dt>
							<dd><?php echo $web_config['web_attr_17']; ?></dd>
						</dl>
						<dl>
							<dt><img src="/public/static/index/img/icon3.png" ></dt>
							<dd><?php echo $web_config['web_basehost']; ?></dd>
						</dl>
						<dl>
							<dt><img src="/public/static/index/img/icon4.png" ></dt>
							<dd><?php echo $web_config['web_attr_18']; ?></dd>
						</dl>
					</div>
				</div>
				<!-- 底部 -->
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
			
			
			<!-- 内容区 -->
			<!-- <div class="container">
			
			</div> -->
		</main>
		
		
		<div class="mobile">
			<!-- 菜单 -->
						<nav>
				<ul>
					<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<li><a href="<?php if($c['is_part'] == 1): ?><?php echo $c['typelink']; else: ?><?php echo $v['dirpath']; ?>?id=<?php echo $v['id']; endif; ?>"><?php echo $v['typename']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			<!-- 轮播 -->
			<div class="banner">
				<div class="swiper-container swiper-banner">
					<div class="swiper-wrapper">
						<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<img src="<?php echo $b['litpic']; ?>" title="<?php echo $b['title']; ?>">
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<!-- 如果需要分页器 -->
					<div class="swiper-pagination baner-pagination"></div>
				</div>
				
			</div>
			
			<!-- 内容区 -->
			<div class="container">
				<!-- 工艺技术 -->
				<div class="technology">
					<h3><?php echo $gyjs_data['title']; ?></h3>
					<div class="intro">
						<div class="left">
							<span><?php echo mb_substr(strip_tags(htmlspecialchars_decode($gyjs_data['content'])),0,80); ?>......</span>
							<?php if($lang == en): ?>
								<a href="/jszc?id=<?php echo $gyjs_data['typeid']; ?>">more</a>
								<?php else: ?>
								<a href="/jszc?id=<?php echo $gyjs_data['typeid']; ?>">查看更多</a>
								<?php endif; ?>
						</div>
						<div class="right">
							<video width="820" height="469" controls="controls" poster="<?php echo $gyjs_data['litpic']; ?>">
								<source src="<?php echo $gyjs_data['file_url']; ?>" type="video/mp4"></source>
							</video>
						</div>
					</div>
					<div class="list">
						<ul>
							<?php if(is_array($gyjs_data['child']) || $gyjs_data['child'] instanceof \think\Collection || $gyjs_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gyjs_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gc): $mod = ($i % 2 );++$i;?>
							<li>
								<img src="<?php echo $gc['litpic']; ?>" >
								<p class="title"><?php echo $gc['typename']; ?></p>
								<p class="cont"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($gc['content'])),0,35); ?>...</p>
								<?php if($lang == en): ?>
								<a href="/jszc_info?id=<?php echo $gc['id']; ?>">more</a>
								<?php else: ?>
								<a href="/jszc_info?id=<?php echo $gc['id']; ?>">查看更多</a>
								<?php endif; ?>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				
				<!-- 产品中心 -->
				<div class="product">
					<h3><?php echo $cpzx_data['typename']; ?></h3>
					<p class="title"><?php echo $cpzx_data['seo_title']; ?></p>
					<div class="swiper-container swiper-product">
						<div class="swiper-wrapper">
							<?php if(is_array($cpzx_data['child']) || $cpzx_data['child'] instanceof \think\Collection || $cpzx_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cpzx_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<dl>
									<dt><img src="<?php echo $v['litpic']; ?>" ></dt>
									<dd class="tit"><?php echo $v['title']; ?></dd>
									<dd class="cent"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($v['content'])),0,35); ?>......</dd>
								</dl>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!-- 如果需要分页器 -->
						<div class="swiper-pagination"></div>
						
						<!-- 如果需要导航按钮 -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					<div class="swiper-container swiper-product2">
						<div class="swiper-wrapper">
							<?php if(is_array($cpzx_data['child']) || $cpzx_data['child'] instanceof \think\Collection || $cpzx_data['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cpzx_data['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<dl>
									<dt><img src="<?php echo $v['litpic']; ?>" ></dt>
									<dd class="tit"><?php echo $v['title']; ?></dd>
									<dd class="cent"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($v['content'])),0,35); ?>......</dd>
								</dl>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!-- 如果需要分页器 -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
				
				
				<!-- 新闻动态 -->
				<div class="news">
					<h3><?php echo $news['typename']; ?></h3>
					<div class="wrap">
						<div class="left">
							<img src="/public/static/index/img/news6.png" class="yin">
							<div class="pic">
								<img src="<?php echo $first_new['litpic']; ?>" >
							</div>
						</div>
						<div class="right">
							<div class="top_wrap">
								<div class="time"><?php echo date('Y.m.d',$first_new['add_time']); ?></div>
								<a href="/news_info?aid=<?php echo $first_new['aid']; ?>&typeid=<?php echo $first_new['typeid']; ?>"><h4><?php echo $first_new['title']; ?></h4></a>
								<p><?php echo mb_substr(strip_tags(htmlspecialchars_decode($first_new['content'])),0,20); ?>......</p>
							</div>
							
							<ul>
								<?php if(is_array($news['child']) || $news['child'] instanceof \think\Collection || $news['child'] instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($news['child']) ? array_slice($news['child'],1,3, true) : $news['child']->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="/news_info?aid=<?php echo $v['aid']; ?>&typeid=<?php echo $v['typeid']; ?>">
										<span><?php echo date('Y.m.d',$v['add_time']); ?></span>
										<img src="<?php echo $v['litpic']; ?>" >
										<p>
											<?php echo $v['title']; ?>
										</p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- 关于华芯 -->

				<div class="about">
					<div class="left">
						<h3><?php echo $gyhwhx['content']['title']; ?></h3>
						<div>
				           <?php echo strip_tags(htmlspecialchars_decode($gyhwhx['content']['content'])); ?>
				        </div>
					</div>
					<div class="right">
						<img src="<?php echo $gyhwhx['content']['litpic']; ?>" >
					</div>
				</div>
				
				<!-- 联系我们 -->
				<div class="contact">
					<div class="left">
						<div id="mobile_map"></div>
						<!-- <div class="zooms"></div> -->
					</div>
					<div class="right">

						<h3><?php if($lang == en): ?>contact us<?php else: ?>联系我们<?php endif; ?></h3>
						<dl>
							<dt><img src="/public/static/index/img/icon1.png" ></dt>
							<dd><?php echo $web_config['web_attr_1']; ?></dd>
						</dl>
						<dl>
							<dt><img src="/public/static/index/img/icon2.png" ></dt>
							<dd><?php echo $web_config['web_attr_17']; ?></dd>
						</dl>
						<dl>
							<dt><img src="/public/static/index/img/icon3.png" ></dt>
							<dd><?php echo $web_config['web_basehost']; ?></dd>
						</dl>
						<dl>
							<dt><img src="/public/static/index/img/icon4.png" ></dt>
							<dd><?php echo $web_config['web_attr_18']; ?></dd>
						</dl>
					</div>
				</div>
				
				<!-- 底部 -->
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
		</div>
		
		<script src="/public/static/index/js/jquery.fullPage.js" type="text/javascript" charset="utf-8"></script>
<!-- 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
		<script src="/public/static/index/js/swiper/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=3.0&ak=QjzOrQyA4SBF0R14jfMFlPS2ZvIB89uz"></script>

		
		<script src="/public/static/index/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			// 地图
			var map = new BMap.Map("map");            // 创建Map实例
			var point = new BMap.Point(104.007501,30.464329);  
			var marker = new BMap.Marker(point);  // 创建标注
			map.addOverlay(marker);
			map.centerAndZoom(point,12);               
			map.enableScrollWheelZoom();
			map.disableScrollWheelZoom();
			var opts = "<?php echo $web_config['web_name']; ?>" ;
			var infoWindow = new BMap.InfoWindow(opts);  // 创建信息窗口对象 
			map.openInfoWindow(infoWindow,point);
			
			// 手机端地图
			var mobile_map = new BMap.Map("mobile_map");            // 创建Map实例
			var mobile_point = new BMap.Point(104.007501,30.464329);  
			var mobile_marker = new BMap.Marker(mobile_point);  // 创建标注
			mobile_map.addOverlay(mobile_marker);
			mobile_map.centerAndZoom(mobile_point,12);               
			mobile_map.enableScrollWheelZoom();
			mobile_map.disableScrollWheelZoom();
			var mobile_opts = "<?php echo $web_config['web_name']; ?>" ;
			var mobile_infoWindow = new BMap.InfoWindow(mobile_opts);  // 创建信息窗口对象 
			mobile_map.openInfoWindow(mobile_infoWindow,mobile_point);
			
			
			// 轮播图
			var mySwiper = new Swiper ('.swiper-banner', {
				direction: 'horizontal', // 垂直切换选项
				loop: true, // 循环模式选项
				autoplay:true,
				
				// 如果需要分页器
				pagination: {
					el: '.baner-pagination',
					type: 'custom',
					clickableClass: 'swiper-pagination-customs',
					renderCustom: function(swiper, current, total){
						var customPaginationHtml = "";
						for(var i = 0; i < total; i++) { 
							 //判断哪个分页器此刻应该被激活 
							if(i == (current - 1) && i < (total - 1)) { 
								customPaginationHtml += '<span class="swiper-pagination-customs swiper-pagination-customs-active"></span><span class="line">...............</span>'; 
							}else if(i == (current - 1) && i == (total -1)){
								customPaginationHtml += '<span class="swiper-pagination-customs swiper-pagination-customs-active"></span>'; 
							}
							else { 
								if(i == (total -1)){
									customPaginationHtml += '<span class="swiper-pagination-customs"></span>'; 
								}else{
									customPaginationHtml += '<span class="swiper-pagination-customs"></span><span class="line">...............</span>'; 
								}
							} 
						} 
						return customPaginationHtml;
					}
				}, 
			})
			
			var mySwiperProduct = new Swiper ('.swiper-product', {
				direction: 'horizontal', // 垂直切换选项
				loop: true, // 循环模式选项
				autoplay:true,
				slidesPerView: 3,
				spaceBetween: 30,
				
				// 如果需要分页器
				pagination: {
				  el: '.swiper-pagination',
				},
				
				// 如果需要前进后退按钮
				navigation: {
				  nextEl: '.swiper-button-next',
				  prevEl: '.swiper-button-prev',
				},
			})
			var mySwiperProduct2 = new Swiper ('.swiper-product2', {
				direction: 'horizontal', // 垂直切换选项
				loop: true, // 循环模式选项
				autoplay:true,
				
				// 如果需要分页器
				pagination: {
				  el: '.swiper-pagination',
				},
				
				// 如果需要前进后退按钮
				// navigation: {
				//   nextEl: '.swiper-button-next',
				//   prevEl: '.swiper-button-prev',
				// },
			})
			
		</script>
		<script type="text/javascript">
			$(function(){
				$('#fullpage').fullpage({
					afterLoad:function(anchorLink,index){
						if(index == 4){
							$('.section_news .wrap .right .time').css({
								animation: 'bounceInRight 1s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_news .wrap .right h4').css({
								animation: 'bounceInRight 1s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_news .wrap .right p').css({
								animation: 'bounceInRight 2s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_news .right ul').css({
								transform: 'translateY(0)'
							})
						}else if(index == 2){
							$('.section_technology h3').css({
								animation: 'bounceInLeft 1s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_technology .intro .left span').css({
								animation: 'bounceInLeft 2s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_technology .intro .left a').css({
								animation: 'bounceInLeft 2.5s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_technology .intro .right').css({
								animation: 'bounceInRight 2.5s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
							$('.section_technology .list').css({
								transform: 'translateY(0)'
								// animation: 'bounceInRight 2.5s forwards cubic-bezier(0.215, 0.610, 0.355, 1.000)'
							})
						}else{
							$('.news .right ul').css({
								transform: 'translateY(600px)'
							})
						}
					}
				});
				
				
				$(window).resize(function(){
					autoScrolling();
				});

				function autoScrolling(){
					var ww = $(window).width();
					if(ww < 1025){
						$('.mobile').css({display:'block'});
						$('.main').css({display:'none'});
					} else {
						$('.main').css({display:'block'});
						$('.mobile').css({display:'none'});
					}
				}

				autoScrolling();
			});
			
		</script>
	</body>
</html>
