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
$css = '<link rel="stylesheet" href="'.$level.'css/01-02_s-seat.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/slick.js"></script>
			 <script type="text/javascript" src="js/seat.js"></script>';
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
require("core/movie/suke2.php");
/////////////////処理部エリア/////////////////

//座席選択処理
require 'core/seat/seat.php';





//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
html_nav();
?>
<!--ここからコンテントの内容始まる　-->
<article>

	<div id="left_Content">

		<form action="01-03_s-form.php" method="post">

		<section id="section_1">

		<!-- ステップ説明　-->
			<div class="step">
				<ul>
					<li class="step_item item_active"><span></span><span>STEP1:<br />座席・チケット選択</span></li>
					<li class="step_item"><span></span><span>STEP2:<br />ご購入者情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP3:<br />お支払情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP4:<br />購入内容の確認</span></li>
					<li class="step_item"><span></span><span>STEP5:<br />購入完了</span></li>
				</ul>
			</div>

			<h2>お好きな席をお選びください。</h2>

			<h3>アイコン説明</h3>

			<div id="text_box">
				<ul>
					<li><span class="img"><img src="images/seat_1.gif" /></span><span class="text">空席(購入可能)</span></li>
					<li><span class="img"><img src="images/seat_2.gif" /></span><span class="text">選択した席</span></li>
					<li><span class="img"><img src="images/seat_3.gif" /></span><span class="text">購入済み/販売対象外</span></li>
				</ul>
			</div>

		<!-- 座席bgイメージ　-->
			<div id="seat_box">

				<?php print $movieSeat ?>

				<div id="sideContent">
					<dl>
						<dt>劇場</dt><dd><?=$sianame?></dd>
						<dt>作品</dt><dd><?=$moviename?></dd>
						<dt>日時</dt><dd><p><?=$get_mon?></p><p><?=$_GET["time"]+8?>:30〜</p></dd>
						<dt>選択座席</dt><dd><?php print $sideSeat ?></dd>
					</dl>
					<?php	print $sideSeatNo ?>

				</div>

			</div>

			<h2>チケットの券種をお選びください。</h2>
			<div class="form_box">
				<?php print $seatInput ?>
			</div>

			<h2>ログイン/ログインしないで購入</h2>

			<!-- ログイン　-->
			<div class="form_box">

				<h3 class="form_h3">ログイン</h3>

				<p class="form_item">
					ログインID
				</p>
				<input type="text" id="address" name="" maxlength="20" placeholder="半角英数字6～20文字" />

				<p class="form_item">
					パスワード
				</p>
				<input type="password" id="address" name="" maxlength="20" placeholder="半角英数字6～20文字" />

				<input type="submit" id="submit_button" name="submit" value="ログイン">
			</div>

		<!-- submitボタン　-->
			<div id="submit_box">
				<h3 class="form_h3">非会員、ログインしない</h3>
				<input type="hidden" name="sia" value="<?=$get_sia?>">
				<input type="hidden" name="mon" value="<?=$get_mon?>">
				<input type="hidden" name="movie" value="<?=$get_movie?>">
				<input type="hidden" name="time" value="<?=$_GET['time']?>">
				<input type="submit" id="submit_button" name="submit" value="次へ">
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
