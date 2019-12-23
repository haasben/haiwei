(function($) {

	var isScoll = true;
	$.fn.extend({
		"gallery": function(options) {
			if(!isValid(options))
				return this;
			opts = $.extend({}, defaults, options);

			return this.each(function() {
				var $this = $(this);
				var imgNum = $this.children("." + opts.galleryClass).find("div").length; //图片总张数
				var galleryWidth = $this.children("." + opts.galleryClass).width(); //展示图片部分宽度
				var imgWidth = $this.children("." + opts.galleryClass).find("div").width(); //每张图片的宽度
				var imgHeight = $this.children("." + opts.galleryClass).find("div").height(); //每张图片的高度
				$this.prepend("<span class='prev'></span>");
				$this.append("<span class='next'></span>");
				var arrowHeight = $this.children("span").height(); //前后箭头的高度
				console.log(arrowHeight)
				var arrowTop = (imgHeight - arrowHeight) / 2; //前后箭头距顶部的距离
				$this.children("span").css({
					"top": arrowTop + "px"
				});
				assignImgWidth = galleryWidth / opts.showImgNum; //给每张图片分配的宽度
				var ulWidth = imgNum * assignImgWidth; //ul的总宽度
				$this.find(".con").width(ulWidth);
				var imgMarginWidth = 10.09; //每张图片的左右外边距

				$this.find(" .con li").css({
					margin: "0 " + imgMarginWidth + "px"
				});
				hiddenWidth = ulWidth - galleryWidth; //超出图片显示部分的宽度
				var t = setTimeout(function() {
					rightScroll($this, t);
				}, opts.interval);
				bindEvent($this, t);

				$(".gallery").hover(function() {
					isScoll = false;

				}, function() {
					isScoll = true;
				})

			});
		}
	});
	var opts, assignImgWidth, hiddenWidth;
	var defaults = {
		duration: 500, //单张图片轮播持续时间
		interval: 5000, //图片轮播结束到下一张图片轮播开始间隔时间
		showImgNum: 5, //同时展示的图片数量
		galleryClass: "gallery" //画廊class
	};

	function isValid(options) {
		return !options || (options && typeof options === "object") ? true : false;
	}

	function bindEvent($this, t) {
		$this.children(".next").click(function() {
			rightScroll($this, t);
		});
		$this.children(".prev").click(function() {
			leftScroll($this, t);
		});
	}

	function unbindEvent($this, t) {
		$this.children(".next").unbind("click");
		$this.children(".prev").unbind("click");
	}

	function rightScroll($this, t) {
		clearTimeout(t);

		if(isScoll) {
			unbindEvent($this, t);
			$this.find(".con").animate({
				left: "-=" + assignImgWidth + "px"
			}, opts.duration, function() {
				bindEvent($this, t);
				$this.find(".con li:first").appendTo($this.find(".con"));

				$this.find(".con").css("left", "0px");
			});
		}

		var t = setTimeout(function() {
			rightScroll($this, t);
		}, opts.interval + opts.duration);
	}

	function leftScroll($this, t) {
		clearTimeout(t);

		if(isScoll) {
			unbindEvent($this, t);

			$this.find(".con li:last").prependTo($this.find(".con"));
			$this.find(".con").css("left", "-" + assignImgWidth + "px");

			$this.find(".con").animate({
				left: "+=" + assignImgWidth + "px"
			}, opts.duration, function() {
				bindEvent($this, t);
			});
		}

		var t = setTimeout(function() {
			rightScroll($this, t);
		}, opts.interval + opts.duration);
	}
})(window.jQuery);