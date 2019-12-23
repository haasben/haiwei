~function (designWidth) {
	let devW=''
   let computed= function () {
		let desW=750;//设计稿宽度
		devW=document.documentElement.clientWidth;//当前设备的宽度
		console.log(devW)
		if(devW>=750){
			if(devW>=1183){
				document.documentElement.style.fontSize="14px";
				return false;
			}
			document.documentElement.style.fontSize="100px";
			return false;
		}else{
			document.documentElement.style.fontSize=devW/desW*100+"px";
		}
	}
	computed();
	window.addEventListener("resize",computed,false)
}();


$('.header').on('click', '.nav', function(e){
	$('.mobile_nav').css('transform','translateX(0)');
	e.stopPropagation();
})
$('.mobile_nav').on('click','.mobile_list_btn',function(){
	$('.mobile_nav').css('transform','translateX(4rem)');
	$('.menus').css('transform','translateX(0)');
})
$(document).bind('click',function(){
	$('.mobile_nav').css('transform','translateX(4rem)');
	$('.menus').css('transform','translateX(600px)');
})
$('.menus').bind('click',function(e){
	e.stopPropagation();
})
$('.mobile_nav').bind('click',function(e){
	e.stopPropagation();
})