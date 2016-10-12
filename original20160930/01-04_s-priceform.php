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



//苗字(漢字)
$name = $_POST["sei"];
//名前(漢字)
$name .= $_POST["mei"];
//苗字(カナ)
$kname = $_POST["ksei"];
//名前(カナ)
$kname .= $_POST["kmei"];
//電話番号
$cal = $_POST["cal"];
//メールアドレス
$mail = $_POST["address01"];


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/01-04_s-priceform.css" type="text/css" />';
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

		<form action="01-05_s-check.php" method="post">

		<section id="section_1">

		<!-- ステップ説明　-->
			<div class="step">
				<ul>
					<li class="step_item"><span></span><span>STEP1:<br />座席・チケット選択</span></li>
					<li class="step_item"><span></span><span>STEP2:<br />ご購入者情報の入力</span></li>
					<li class="step_item item_active"><span></span><span>STEP3:<br />お支払情報の入力</span></li>
					<li class="step_item"><span></span><span>STEP4:<br />購入内容の確認</span></li>
					<li class="step_item"><span></span><span>STEP5:<br />購入完了</span></li>
				</ul>
			</div>

			<h2>必要な情報を入力してください。</h2>

			<div id="form_main">

			<!-- お支払方法　-->
				<div class="form_box">

					<h3 class="form_h3">お支払方法<span class="">（※必須項目）</span></h3>

					<ul>
						<li><label><input type="radio" id="" name="radioprice_6" value="クレジットカード" /><span>クレジットカード</span></label></li>
						<li><label><input type="radio" id="" name="radioprice_6" value="コンビニ支払い" /><span>コンビニ支払い</span></label></li>
						<li><label><input type="radio" id="" name="radioprice_6" value="電子マネー" /><span>電子マネー</span></label></li>
					</ul>

				</div>

			<!-- 割引　-->
				<div class="form_box">
					<h3 class="form_h3">割引券種<span class=""></span></h3>

					<p class="form_item">使用される方は選択</p>

						<select name="waribiki_7">
							<option>なし</option>
							<option>子供割　-500円</option>
							<option>ファーストショー割　-700円</option>
							<option>ナイトショー割　-500円</option>
							<option>レディースデー割　-700円</option>
							<option>シニア割　-700円</option>
							<option>障がい者手帳割　-800円</option>
							<option>HAL学生割　-1000円</option>
						</select>
				</div>

			<!-- ポイント・割引コード　-->
				<div class="form_box">
					<h3 class="form_h3">ポイント・割引コード<span class=""></span></h3>

					<p class="form_item">ポイント使用される方はこちら</p>
					<input type="text" id="address" name="point_8" maxlength="20" placeholder="例）319" />

					<p class="form_item">割引コード使用される方はこちら</p>
					<input type="text" id="address" name="code_9" maxlength="20" placeholder="例）GV25AFE46" />
				</div>

			</div>

		<!-- submitボタン　-->
			<div id="submit_box">
				<input type="submit" id="submit_button" name="submit" value="次へ">
			</div>

		</section>


			<?php print $AllseatSides; ?><!-- 席  -->
			<?php print $AllTickets; ?><!-- チケット -->
			<input type="hidden" name="mon" value="<?=$_POST['mon']?>"><!-- 月日 -->
			<input type="hidden" name="sia" value="<?=$_POST['sia']?>"><!-- シアター -->
			<input type="hidden" name="movie" value="<?=$_POST['movie']?>"><!-- 映画名 -->
			<input type="hidden" name="time" value="<?=$_POST['time']?>"><!-- 時間 -->
			<input type="hidden" name="Ticket1" value="<?php print $Ticket1 ?>"><!-- チケット券種1 -->
			<input type="hidden" name="name_1" value="<?php print $name ?>"><!-- 苗字・名前(漢字) -->
			<input type="hidden" name="kname_2" value="<?php print $kname ?>"><!-- 苗字・名前(カナ) -->
			<input type="hidden" name="umare_3" value="<?php print $umare ?>"><!-- 生年月日 -->
			<input type="hidden" name="cal_4" value="<?php print $cal ?>"><!-- 電話番号 -->
			<input type="hidden" name="address01_5" value="<?php print $mail ?>"><!-- メールアドレス -->

	</form>

	<form action="01-03_s-form.php" method="post">
			<input type="hidden" name="sei_1" value="<?php print $_POST["sei"] ?>"><!-- 苗字(漢字) -->
			<input type="hidden" name="mei_2" value="<?php print $_POST["mei"] ?>"><!-- 名前(漢字) -->
			<input type="hidden" name="ksei_3" value="<?php print $_POST["ksei"] ?>"><!-- 苗字(カナ) -->
			<input type="hidden" name="kmei_4" value="<?php print $_POST["kmei"] ?>"><!-- 名前(カナ) -->
			<input type="hidden" name="nen_5" value="<?php print $_POST["nen"] ?>"><!-- 生年月日(年) -->
			<input type="hidden" name="tuki_6" value="<?php print $_POST["tuki"] ?>"><!-- 生年月日(月) -->
			<input type="hidden" name="hi_7" value="<?php print $_POST["hi"] ?>"><!-- 生年月日(日) -->
			<input type="hidden" name="cal_8" value="<?php print $_POST["cal"] ?>"><!-- 電話番号 -->
			<input type="hidden" name="address01_9" value="<?php print $_POST["address01"] ?>"><!-- メールアドレス -->
		<input type="submit" id="back_button" name="submit03" value="戻る">
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
