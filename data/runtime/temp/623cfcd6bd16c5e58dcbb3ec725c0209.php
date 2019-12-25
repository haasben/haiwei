<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\WWW\haiwei/application/index\view\rczp\lxwm.html";i:1577264731;s:51:"D:\WWW\haiwei\application\index\view\gywm\head.html";i:1577173633;s:53:"D:\WWW\haiwei\application\index\view\common\left.html";i:1577173947;s:55:"D:\WWW\haiwei\application\index\view\common\footer.html";i:1577151019;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo $cate_data['seo_title']; ?></title>
		<meta name="keywords" content="<?php echo $cate_data['seo_keywords']; ?>" />
		<meta name="description" content="<?php echo $cate_data['seo_description']; ?>"/>
		<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/css.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/index/css/recruit.css"/>
		<style type="text/css">
			.BMapLib_bubble_center td{box-sizing: content-box;}
		</style>
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
						<div class="contact">
							<div id="map"></div>
							<!-- 联系方式 -->
							<div class="contact_method">
								<ul>
									<?php if($lang == 'cn'): ?>
									<li>
										<div style="background-image: url(/public/static/index/img/ct1.png);"></div>
										<p>
											<span>座机</span>
											<span><?php echo $web_config['web_attr_1']; ?></span>
										</p>
									</li>
									<li>
										<div style="background-image: url(/public/static/index/img/ct2.png);"></div>
										<p>
											<span>传真</span>
											<span><?php echo $web_config['web_attr_21']; ?></span>
										</p>
									</li>
									<li>
										<div style="background-image: url(/public/static/index/img/ct3.png);"></div>
										<p>
											<span>网址</span>
											<span><?php echo $web_config['web_basehost']; ?></span>
										</p>
									</li>
									<li>
										<div style="background-image: url(/public/static/index/img/ct4.png);"></div>
										<p>
											<span>地址</span>
											<span><?php echo $web_config['web_attr_18']; ?></span>
										</p>
									</li>
									<?php else: ?>
										<li>
										<div style="background-image: url(/public/static/index/img/ct1.png);"></div>
										<p>
											<span>Landline</span>
											<span><?php echo $web_config['web_attr_1']; ?></span>
										</p>
										</li>
										<li>
											<div style="background-image: url(/public/static/index/img/ct2.png);"></div>
											<p>
												<span>fax</span>
												<span><?php echo $web_config['web_attr_21']; ?></span>
											</p>
										</li>
										<li>
											<div style="background-image: url(/public/static/index/img/ct3.png);"></div>
											<p>
												<span>URL</span>
												<span><?php echo $web_config['web_basehost']; ?></span>
											</p>
										</li>
										<li>
											<div style="background-image: url(/public/static/index/img/ct4.png);"></div>
											<p>
												<span>address</span>
												<span><?php echo $web_config['web_attr_18']; ?></span>
											</p>
										</li>

									<?php endif; ?>

								</ul>
							</div>
							<!-- 合作联系 -->
							<div class="contact_form">
								<div class="tt">
									<p>
										<?php if($lang == cn): ?>
										<span>合作联系：</span>
										（如果您对中芯国际有任何的问题及建议，可通过上面所列联系方式或提交以下表单与我们联络。）
										</p>
										<p>注：<span>*</span>必须填写</p>
										<?php else: ?>
										<span>Cooperation Contact:</span>
										(If you have any questions and suggestions about SMIC, you can contact us through the contact information listed above or submit the form below.)
										</p>
										<p>Note：<span>*</span>Required</p>
										<?php endif; ?>
									
								</div>
								<div class="fm">
									<form class="form">

										<div class="wrap">
										<?php if(is_array($attr) || $attr instanceof \think\Collection || $attr instanceof \think\Paginator): $i = 0; $__LIST__ = $attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;switch($v['attr_input_type']): case "0": ?>
											    <div class="">
													<label for=""><?php if($v['is_required'] == 1): ?><em>*</em><?php endif; ?><?php echo $v['attr_name']; ?></label>
													<input type="text" name="attr_<?php echo $v['attr_id']; ?>" id="" value=""/>
												</div>	
										    <?php break; case "1": ?>
										    	<div class="">
													<label></label>
													<select name="attr_<?php echo $v['attr_id']; ?>">
														<?php if(is_array($v['attr_values']) || $v['attr_values'] instanceof \think\Collection || $v['attr_values'] instanceof \think\Paginator): $k = 0; $__LIST__ = $v['attr_values'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$av): $mod = ($k % 2 );++$k;?>
														<option value ="<?php if($k!=1): ?><?php echo $av; endif; ?>"><?php echo $av; ?></option>
														<?php endforeach; endif; else: echo "" ;endif; ?>
													</select>
												</div>
										    <?php break; default: endswitch; endforeach; endif; else: echo "" ;endif; ?>
										</div>
										<?php if(is_array($attr_input_type2) || $attr_input_type2 instanceof \think\Collection || $attr_input_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_input_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
										<div class="message">
											<label for=""><em>*</em><?php echo $v['attr_name']; ?></label>
											<textarea name="attr_<?php echo $v['attr_id']; ?>"></textarea>
										</div>
										<?php endforeach; endif; else: echo "" ;endif; if($lang == cn): ?>
										<div class="btns">
											<input type="submit" id="submit" value=" 提交"/>
											<input type="reset" name="" id="" value="重置" />
										</div>
										<?php else: ?>
											<div class="btns">
											<input type="submit" id="submit" value="submit"/>
											<input type="reset" name="" id="" value="Reset" />
										</div>
										<?php endif; ?>
										<input type="hidden" name="typeid" value="<?php echo $cate_data['id']; ?>">
										<input type="hidden" class="token" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>"/>
									</form>
									<div class="tips">
										<?php if($lang == cn): ?>
										<p>请填写相关信息，获得更多的相关资讯，以便我们能更好的为您服务！</p>
										<p>
											<span>网址：<?php echo $web_config['web_basehost']; ?></span>
											<span>Email：<?php echo $web_config['web_attr_17']; ?></span>
										</p>
										<?php else: ?>
											<p>Please fill in the relevant information for more relevant information so that we can better serve you!</p>
										<p>
											<span>URL：<?php echo $web_config['web_basehost']; ?></span>
											<span>Email：<?php echo $web_config['web_attr_17']; ?></span>
										</p>
										<?php endif; ?>
									</div>
								</div>
							</div>
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
		<script src="/public/static/index/js/scroll.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=3.0&ak=QjzOrQyA4SBF0R14jfMFlPS2ZvIB89uz"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
		<script type="text/javascript">
			// 地图
			var map = new BMap.Map("map");            // 创建Map实例
			var point = new BMap.Point(104.007501,30.464329);  
			var marker = new BMap.Marker(point);  // 创建标注
			map.addOverlay(marker);
			map.centerAndZoom(point,17);               
			map.enableScrollWheelZoom();
			map.disableScrollWheelZoom();
			map.addControl(new BMap.NavigationControl());   //控件
			var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                    '附近公交/地铁公交：地铁5号线（回龙路站）公交813路。' +
                  '</div>';
			var searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
				title  : "成都海威华芯科技有限公司",      //标题
				width  : 290,             //宽度
				height : 80,              //高度
				panel  : "panel",         //检索结果面板
				enableAutoPan : true,     //自动平移
				searchTypes   :[
					BMAPLIB_TAB_SEARCH,   //周边检索
					BMAPLIB_TAB_TO_HERE,  //到这里去
					BMAPLIB_TAB_FROM_HERE //从这里出发
				]
			});
			searchInfoWindow.open(point);
			marker.addEventListener("click", function(e){
				searchInfoWindow.open(marker);
			})

			$(function(){
				$('#submit').on('click',function(){
					var data = $('.form').serialize();
					$.post('<?php echo url("index/rczp/gbook_submit"); ?>',data,function(data){

						if(data.code == 1){
							$('.form')[0].reset();
							layer.msg(data.msg,{icon:1,time:1500});
						}else{
							layer.msg(data.msg,{icon:5,time:1000});
						}

						$('.token').val(data.token);
					})


					return false;
				})


			})



		</script>
	</body>
</html>
