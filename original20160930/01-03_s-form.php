<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

header("Content-Type:text/html; charset=UTF-8");

/////////////////処理部エリア/////////////////
///初期値格納///
$AllseatSides = "";
$AllTickets = "";

//席1
if(isset($_POST["seatSide1"])){
	$seatSide1 = $_POST["seatSide1"];
	$AllseatSides .= "<input type=\"hidden\" name=\"seatSide1\" value=\"$seatSide1\">";
}
//席2
if(isset($_POST["seatSide2"])){
	$seatSide2 = $_POST["seatSide2"];
	$AllseatSides .= "<input type=\"hidden\" name=\"seatSide2\" value=\"$seatSide2\">";
}
//席3
if(isset($_POST["seatSide3"])){
	$seatSide3 = $_POST["seatSide3"];
	$AllseatSides .= "<input type=\"hidden\" name=\"seatSide3\" value=\"$seatSide3\">";
}
//席4
if(isset($_POST["seatSide4"])){
	$seatSide4 = $_POST["seatSide4"];
	$AllseatSides .= "<input type=\"hidden\" name=\"seatSide4\" value=\"$seatSide4\">";
}
//席5
if(isset($_POST["seatSide5"])){
	$seatSide5 = $_POST["seatSide5"];
	$AllseatSides .= "<input type=\"hidden\" name=\"seatSide5\" value=\"$seatSide5\">";
}



//チケット1
if(isset($_POST["Ticket1"])){
	$Ticket1 = $_POST["Ticket1"];
	$AllTickets .= "<input type=\"hidden\" name=\"Ticket1\" value=\"$Ticket1\">";
}
//チケット2
if(isset($_POST["Ticket2"])){
	$Ticket2 = $_POST["Ticket2"];
	$AllTickets .= "<input type=\"hidden\" name=\"Ticket2\" value=\"$Ticket2\">";
}
//チケット3
if(isset($_POST["Ticket3"])){
	$Ticket3 = $_POST["Ticket3"];
	$AllTickets .= "<input type=\"hidden\" name=\"Ticket3\" value=\"$Ticket3\">";
}
//チケット4
if(isset($_POST["Ticket4"])){
	$Ticket4 = $_POST["Ticket4"];
	$AllTickets .= "<input type=\"hidden\" name=\"Ticket4\" value=\"$Ticket4\">";
}
//チケット5
if(isset($_POST["Ticket5"])){
	$Ticket5 = $_POST["Ticket5"];
	$AllTickets .= "<input type=\"hidden\" name=\"Ticket5\" value=\"$Ticket5\">";
}



if(isset($_POST["submit03"])){
		$nname = $_POST["sei_1"];
		$sname = $_POST["mei_2"];
		$knname = $_POST["ksei_3"];
		$ksname = $_POST["kmei_4"];
		//$nname = $_POST["5"];
		//$i = $_POST["6"];
		$i = $_POST["nen_5"];
		$j = $_POST["tuki_6"];
		$l = $_POST["hi_7"];
		$cal = $_POST["cal_8"];
		$mail = $_POST["address01_9"];
}else{
		$nname = "";
		$sname = "";
		$knname = "";
		$ksname = "";
		//$nname = $POST_["5"];
		//$i = $POST_["6"];
		$i = 0;
		$j = 0;
		$l = 0;
		$cal = "";
		$mail = "";
}



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/01-03_s-form.css" type="text/css" />';
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

	<div id="left_Content">

		<form action="01-04_s-priceform.php" method="post">

		<section id="section_1">

			<div class="step">
				<ul>
					<li class="step_item"><span></span><span>STEP1:<br />座席・チケット選択</span></li>
					<li class="step_item item_active"><span></span><span>STEP2:<br />ご購入者情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP3:<br />お支払情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP4:<br />購入内容の確認</span></li>
					<li class="step_item"><span></span><span>STEP5:<br />購入完了</span></li>
				</ul>
			</div>

			<h2>必要な情報を入力してください。</h2>

			<div id="form_main">

			<!-- お名前　-->
				<div class="form_box">

					<h3 class="form_h3">お名前<span class="">（※必須項目）</span></h3>

					<p class="form_item">
						漢字：（姓）　（名）
					</p>
						<input type="text" id="" name="sei" maxlength="10" placeholder="姓：例）朝倉" value="<?php print $nname ?>" />
						<input type="text" id="" name="mei" maxlength="10" placeholder="名：例）真琴" value="<?php print $sname ?>" />

					<p class="form_item">
						フリガナ：（セイ）　（メイ）
					</p>
						<input type="text" id="" name="ksei" maxlength="10" placeholder="セイ：例）アサクラ" value="<?php print $knname ?>" />
						<input type="text" id="" name="kmei" maxlength="10" placeholder="メイ：例）マコト" value="<?php print $ksname ?>" />
				</div>

			<!-- 電話番号　-->
				<div class="form_box">
					<h3 class="form_h3">お電話番号<span class="">（※必須項目）</span></h3>
					<p class="form_item">
						半角数字
					</p>
						<input type="text" id="TEL" name="cal" maxlength="13" placeholder="例）09012349876" value="<?php print $cal ?>" />
				</div>

			<!-- メールアドレス　-->
				<div class="form_box">
					<h3 class="form_h3">メールアドレス<span class="">（※必須項目）</span></h3>
					<p class="form_item">
						PC・スマートフォン
					</p>
						<input type="text" id="address" name="address01" maxlength="20" placeholder="例）hal@nagoya.co.jp" value="<?php print $mail ?>" />

					<p class="form_item">
						確認のため、再入力してください。
					</p>
						<input type="text" id="address" name="address02" maxlength="20" placeholder="例）hal@nagoya.co.jp" value="<?php print $mail ?>" />
				</div>

			</div>


			<div id="submit_box">
				<?=$AllseatSides?>
				<?=$AllTickets?>
				<input type="hidden" name="mon" value="<?=$_POST['mon']?>">
				<input type="hidden" name="sia" value="<?=$_POST['sia']?>">
				<input type="hidden" name="movie" value="<?=$_POST['movie']?>">
				<input type="hidden" name="time" value="<?=$_POST['time']?>">
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
