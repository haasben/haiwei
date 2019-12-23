$(function(){
	newsRezied()
})
$(window).resize(function(){
	newsRezied()
});

// 根据窗口变化改变容器大小
function newsRezied(){
	let _width = $(window).width();
	$('.row').css({height: _width * 0.3347 + 'px'});
}

