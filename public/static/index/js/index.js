let wHeight;
let bool = true;
$(function(){
	// 设置大轮播图高度
	// wHeight = $(window).height();
	// $('.banner').css({height:wHeight});
	
	// newsRezied()
})
$(window).resize(function(){
	// newsRezied()
});

// 根据窗口变化改变容器大小
function newsRezied(){
	let _width = $(window).width();
	
	// if(_width >= 1200 && _width <= 1680){
	// 	$('.news').css({height: _width * 0.582 + 'px'});
	// 	$('.about').css({height: _width * 0.342 + 'px'});
	// 	// $('.contact').css({height: _width * 0.398 + 'px'});
	// 	
	// }
	// else if(_width >1680){
	// 	$('.news').css({height: '1067px'});
	// 	$('.about').css({height: '627px'});
	// 	// $('.contact').css({height: '730px'});
	// }
	// else{
	// 	$('.news').css({height: 'auto'});
	// 	$('.about').css({height: 'auto'});
	// }
	
}

// 手机端菜单按钮点击事件
$('.header').on('click', '.nav', function(e){
	$('.mobile_nav').css('transform','translateX(0)');
	// $('.menus').css({transform:'translateX(0)'})
	e.stopPropagation();
	// $('.header').find('.menus').toggle();
})
$('.mobile_nav').on('click','.mobile_list_btn',function(){
	$('.mobile_nav').css('transform','translateX(70px)');
	$('.menus').css('transform','translateX(0)');
})
$(document).bind('click',function(){
	$('.mobile_nav').css('transform','translateX(70px)');
	$('.menus').css('transform','translateX(600px)');
	// $('.menus').css('transform','translateX(200px)');
})
$('.menus').bind('click',function(e){
	e.stopPropagation();
})
$('.mobile_nav').bind('click',function(e){
	e.stopPropagation();
})


// 监听滚动条位置
// $(window).on('scroll', function(){
// 	let scrollTop = $(document).scrollTop();
// 	let height = Number($('.news').height()/2)
// 	let newsScrollTop = $('.news').offset().top;
// 	if(bool){
// 		if((newsScrollTop + height) - scrollTop < wHeight - 100){
// 			// $(".news .right ul").css({transform: "translateY(0)"})
// 			// $(".news .right ul").slideToggle();
// 			bool == false;
// 			// return false;
// 			// $(".news .right ul").slideUp();
// 			// $(".news .right li").css({display:'inline-block'});
// 		}
// 	}
// })