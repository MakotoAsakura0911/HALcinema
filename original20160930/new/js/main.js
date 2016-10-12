
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

//*****************index.php-スライドショー******************
	$(function(){
			$(".slider").slick({
				asNavFor: ".slider_nav",
				fade: true,
				arrows: false,

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
				centerPadding: '10px',
				slidesToShow: 3,
				swipeToSlide: true
			});

		});
//*****************index.php-隠し文章表示・非表示******************
	$(function(){
			for(i=0;i<=10;i++){
	    // 「class="day"」を非表示
	    $(".day_main_"+ i +"").css("display", "none");

	    // 「class="day"」がクリックされた場合
	    $("span").click(function(){
	        // 「class="day"」の表示、非表示を切り替える
	        $(".day_main_"+ i +"").toggle();
	    	});
			}
	});
