
// グローバル変数定義
// html文書がロードされた瞬間に実行される



// オンロードイベント
// <body>に指定された各エレメント
	$(function(){
		$("#fontSizeController li").click(function () {
			var font = $("#fontSizeController li").index(this);
			switch(font){
			case 0 : $("body").css("font-size", + 10 + "px"); break;
			case 1 : $("body").css("font-size", + 12 + "px"); break;
			case 2 : $("body").css("font-size", + 15 + "px"); break;
			}
		});
	});


	//*****************index.php-隠し文章表示・非表示******************
	$(function(){
	    $(".day").click(function(){
	      $($(this).next(".textArea")).animate(
	        {height: "toggle", opacity: "toggle"},
	        "nomal"
	      );
	   });
	});

//*****************index.php-スライドショー******************
	$(function(){
			$(".slider").slick({
				asNavFor: ".slider_nav",
				fade: true,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 3000,

				responsive:[{
					breakpoint: 960,
					settings:{
						arrows: false,
						slidesToShow: 3
						}
					},{
					breakpoint: 640,
					settings:{
						slidesToShow: 1
					}
				}
				]
			});

			$(".slider_nav").slick({
				asNavFor: ".slider",
				centerMode: true,
				centerPadding: '50px',
				slidesToShow: 3,
				swipeToSlide: true
			});

		});
