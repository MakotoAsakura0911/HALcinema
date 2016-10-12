<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

header("Content-Type:text/html; charset=UTF-8");

/////////////////処理部エリア/////////////////

///初期値格納///
$AllseatSides = "";
$AllTickets = "";


////////////席1～5////////////
for($i=1;$i<=5;$i++){
	//席1～5が選ばれているか？
	if(isset($_POST["seatSide$i"])){
		$seatSide = $_POST["seatSide$i"];
		$AllseatSides .= "<p>".$seatSide."</p>";
	}
}


////////////チケット1～5////////////
for($i=1;$i<=5;$i++){
	//チケット1～5が選ばれているか？
	if(isset($_POST["Ticket$i"])){
		$Ticket = $_POST["Ticket$i"];
		$AllTickets .= "<p>".$Ticket."</p>";
	}
}


//フルネーム(漢字)
$name = $_POST["name_1"];
//フルネーム(カナ)
$kname = $_POST["kname_2"];
//生年月日
$umare = $_POST["umare_3"];
//電話番号
$cal = $_POST["cal_4"];
//メールアドレス
$mail = $_POST["address01_5"];
//お支払方法
$money = $_POST["radioprice_6"];
//割引券種
$waribiki = $_POST["waribiki_7"];
//ポイント
$point = $_POST["point_8"];
//割引コード
$code = $_POST["code_9"];

$sia = $_POST["sia"];

$get_mon = $_POST["mon"];

$time = $_POST["time"];

$movie = $_POST["movie"];



$HOST = "localhost";
$USER = "root";
$PASS = "root";
$DB = "iw32movie";
$CODE = "set names utf8";

if(!$Link = mysqli_connect($HOST,$USER,$PASS)){
  exit("MySQL：DB接続失敗："
  .mysqli_connect_error());
}

if(!mysqli_query($Link,$CODE)){
  exit("MySQL：クエリー送信失敗");
}

if(!mysqli_select_db($Link,$DB)){
  exit("MySQL：DB指定失敗");
}


$sssSQL = "
        select thrater_name
        from  thraters
        WHERE thrater_id = ?
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$sssSQL)){
        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$sia);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,
          $sianame
          );
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         mysqli_stmt_fetch($stmt);
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }





//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/01-05_s-check.css" type="text/css" />';
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

require("core/movie/suke5.php");
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
					<li class="step_item item_active"><span></span><span>STEP4:<br />購入内容の確認</span></li>
					<li class="step_item"><span></span><span>STEP5:<br />購入完了</span></li>
				</ul>
			</div>

			<h2>内容確認</h2>

			<!-- 内容確認領域　-->
			<div id="check_main" class="clearfix">

					<dl class="clearfix">
						<dt>映画タイトル</dt>
						<dd><p><?=$moviename?></p></dd>

						<dt>予約上映情報</dt>
						<dd>
							<p><?=$sianame?></p>
							<p><?=$get_mon?></p>
							<p><?=$time+8?>:30〜</p>
						</dd>

						<dt>座席位置</dt>
						<dd><?php print $AllseatSides; ?></dd>

						<dt>チケット券種</dt>
						<dd><?php print $AllTickets ?></dd>

						<dt>お名前</dt>
						<dd><p><?php print $name ?></p></dd>

						<dt>フリガナ</dt>
						<dd><p><?php print $kname ?></p></dd>

						<dt>電話番号</dt>
						<dd><p><?php print $cal ?></p></dd>

						<dt>メールアドレス</dt>
						<dd><p><?php print $mail ?></p></dd>

						<dt>お支払方法</dt>
						<dd><p><?php print $money ?></p></dd>

						<dt>割引券種</dt>
						<dd><p><?php print $waribiki ?></p></dd>

						<dt class="last_dt">ポイント・割引コード</dt>
						<dd class="last_dd"><p><?php print $point ?></p></dd>

				</dl>

			</div>



		<!-- submitボタン　-->
			<div id="submit_box">
				<!-- 前に戻るボタン　-->
				<input type="submit" id="submit_button_r" name="submit" value="1つ前に戻る">
				<!-- 完了ボタン　-->
				<input type="submit" id="submit_button" name="submit" value="この内容で確定">
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
