<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/slick.css">
				<link rel="stylesheet" href="'.$level.'css/slick-theme.css">
				<link rel="stylesheet" href="'.$level.'css/index.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/slick.js"></script>';
//サイトのタイトルを記入
$title = 'HALシネマ -TOP-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '';

/************
記入例
**************
//ファイルの回想を記入
$level = '../../';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />
        <link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';・・・内容がない場合はそのままにする

//サイトのタイトルを記入
$title = 'webサイト -TOP-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keyword = 'web,犬,単語';
//サイトの説明文を記入(表示には関係ない・任意)
$description = 'これはサイトの説明を表しています。';
//サイトの製作者を記入(表示には関係ない・任意)
$auther = 'IW32班';
*************
記入例終了
*************/


//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
html_nav();
?>
<!--ここからコンテントの内容始まる　-->
<article>
	<section id="topMain">

		<div id="slider">

<!--スライドナビ-------------------->
			<div class="slider sample">
				<div class="contents contents01"><span>コンテンツ01</span></div>
				<div class="contents contents02"><span>コンテンツ02</span></div>
				<div class="contents contents03"><span>コンテンツ03</span></div>
				<div class="contents contents04"><span>コンテンツ04</span></div>
			</div>

			<div class="slider_nav sample">
					<div class="nav nav01" style="width:50px;"><a href="#"><img src="images/image.jpg" width="100" height="85" /></a></div>
					<div class="nav nav02" style="width:50px;"><a href="#"><img src="" /></a></div>
					<div class="nav nav03" style="width:50px;"><a href="#"><img src="" /></a></div>
					<div class="nav nav04" style="width:50px;"><a href="#"><img src="" /></a></div>
			</div>

			</div>
	</section>

<div id="left_Content">

<!--セクション１_ランキング-------------------->
	<section id="section_1">

			<h2>ランキング</h2>

			<div id="Ranking">
				<div class="R_box">
				<p><img src="images/rank1.png"></p>
					<div class="R_content">
						<img src="">
						<p>title1</p>

					</div>
				</div>

				<div class="R_box">
				<p><img src="images/rank2.png"></p>
					<div class="R_content">
						<img src="">
						<p>title2</p>

					</div>
				</div>

				<div class="R_box">
				<p><img src="images/rank3.png"></p>
					<div class="R_content">
						<img src="">
						<p>title3</p>

					</div>
				</div>

			</div>


	</section>

<!--セクション２_新着情報-------------------->
	<section id="section_2">

			<h2>新着情報</h2>

				<ul>
					<li><span class="day_0">2016/08/10</span><span>家族で映画デーが始まる！</span><div class="day_main_0"><p>！！</p></div></li>
					<li><span class="day_2">2016/07/31</span><span>夏休みイベント開催！</span></li>
					<li><span class="day_3">2016/07/01</span><span>たくさんの映画作品が上映中！</span></li>
					<li><span class="day_4">2016/06/01</span><span>東京、大阪、名古屋にて映画館がオープン！</span></li>
					<li><span class="day_5">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
					<li><span class="day_6">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
					<li><span class="day_7">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
					<li><span class="day_8">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
					<li><span class="day_8">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
					<li><span class="day">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
					<li><span class="day">2016/05/01</span><span>HALシネマ　リニューアルオープン！</span></li>
				</ul>

	</section>

</div>

<!--サイドメニュー-------------------->
	<div id="right_Content">
		<aside>
			<a class="twitter-timeline" href="https://twitter.com/HAL_cinema2016" data-widget-id="736119369084768256">@HAL_cinema2016さんのツイート</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			<ul>
				<li><a href="#"><img src="images/sideber.jpg"></a></li>
				<li><a href="#"><img src="images/sideber_01.jpg"></a></li>
				<li><a href="#"><img src="images/sideber_02.jpg"></a></li>
				<li><a href="#"><img src="images/sideber_03.jpg"></a></li>
			</ul>
		</aside>
	</div>

</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
