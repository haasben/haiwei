
$('.header').on('click', '.nav', function(e){
	$('.mobile_nav').css('transform','translateX(0)');
	e.stopPropagation();
})
$('.mobile_nav').on('click','.mobile_list_btn',function(){
	$('.mobile_nav').css('transform','translateX(70px)');
	$('.menus').css('transform','translateX(0)');
})
$(document).bind('click',function(){
	$('.mobile_nav').css('transform','translateX(70px)');
	$('.menus').css('transform','translateX(600px)');
})
$('.menus').bind('click',function(e){
	e.stopPropagation();
})
$('.mobile_nav').bind('click',function(e){
	e.stopPropagation();
})
