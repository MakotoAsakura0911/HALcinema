
/*
<!--カート、ユーザ入力画面の決定枠のスクロールしても固定-->
$(function(){
	// ブラウザをスクロール
	$(window).scroll(function(){
		// ナビゲーションの新しい位置を計算
		$(".idou").stop().animate({"top" : $(window).scrollTop() + 0}, 700);
	});
});
*/

$(window).load(function(){
  // サイドバーの固定するレイヤー
  var navi = $('.idou');
  // メインのレイヤー
  var main  = $('.right_main');
  // 固定するレイヤーの初期位置
  var target_top = navi.offset().top - parseInt(navi.css('margin-top'),10);
  // メインレイヤーの初期位置
  var sub_top = main.offset().top - parseInt(main.css('margin-top'),10);
  // スクロールする上限  
  var sub_scroll = main.offset().top + main.outerHeight(true) - navi.outerHeight(true) - parseInt(navi.css('margin-top'),10);
  if (navi.outerHeight(true) + target_top < main.outerHeight(true) + sub_top) {
    $(window).scroll(function () {
      var ws = $(window).scrollTop();
      $('.scroll').text(ws);
      if (ws > sub_scroll) {
        navi.css({position:'fixed', top: sub_scroll - ws + 'px'});
      } else if(ws > target_top) {
        navi.css({position:'fixed', top: '0px'});
      } else {
        navi.css({position:'relative', top: '0px'});
      }
    });
  }
});

