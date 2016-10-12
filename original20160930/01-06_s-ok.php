<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

header("Content-Type:text/html; charset=UTF-8");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/01-06_s-ok.css" type="text/css" />';
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

/////////////////処理部エリア/////////////////




//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
html_nav();
?>
<!--ここからコンテントの内容始まる　-->
<article>

<div id="left_Content">

<!-- 完了送信先　-->
	<form action="01-06_s-ok.php" method="post">

		<section id="section_1">

		<!-- ステップ説明　-->
			<div class="step">
				<ul>
					<li class="step_item"><span></span><span>STEP1:<br />座席・チケット選択</span></li>
					<li class="step_item"><span></span><span>STEP2:<br />ご購入者情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP3:<br />お支払情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP4:<br />購入内容の確認</span></li>
					<li class="step_item item_active"><span></span><span>STEP5:<br />購入完了</span></li>
				</ul>
			</div>

			<h2>予約完了</h2>

			<!-- 予約完了領域　-->
			<div id="ok_main" class="clearfix">

				<div id="text">

					<p>予約完了しました。</p>
					<p>予約コード<span></span></p>
					<p><a href="">TOPページへ</a></p>

				</div>

			</div>

		</section>

	</form>

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
