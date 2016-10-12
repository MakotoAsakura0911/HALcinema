<?php

//クッキー・セッションのphp
@require_once("core/session_cookie.php");


function html_header(){
	global $level,$css,$js,$title,$keywords,$description,$author;


	require_once("core/dbconnect.php");


	if(isset($_SESSION['id'])) {

	$session_id = $_SESSION['id'];

	$mypage = '<a href="mypage.php?id='.$session_id.'">マイページへ</a>';

	$login = '<a href="core/logout.php">ログアウト</a>';

	//ログイン後アカウント情報抜出
	/* プリペアドステートメントを作成します */
	if ($stmt = mysqli_prepare($db,
	"select user_id,user_name from users where user_id = ?")) {


	/* マーカにパラメータをバインドします */
	  mysqli_stmt_bind_param( $stmt, "s", $_SESSION['id']);
	//s：String(文字列型の指定)、i：integer(数値型の指定)

	/* クエリを実行します */
	  mysqli_stmt_execute($stmt);

	/* 結果変数をバインドします */
	//抜き出しが３項目　u_id,u_name,u_pass
	//バインドする変数が３つ　$dbuid , $dbuname , $dbupass
	  mysqli_stmt_bind_result( $stmt, $userId , $userName );
	//また、抜き出しレコードは最大１レコード

	/* クライアントのバッファに結果セットを保存 */
	  mysqli_stmt_store_result($stmt);

	/* 値を取得します */
	  mysqli_stmt_fetch($stmt);
	//$dbuid , $dbuname , $dbupassにデータが抜き出される

	/* ステートメントを閉じます */
	  mysqli_stmt_close($stmt);
	}

	$name = 'こんにちは、'.$userName.'さん';

	}else{
	$login = '<a href="login.php">ログイン</a>';
	$name ="";
	$mypage ="";
	}



	echo'
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="'.$keywords.'">
		<meta name="description" content="'.$description.'">
		<meta name="robots" content="nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="'.$author.'">
		<title>'.$title.'</title>
		<link rel="stylesheet" href="'.$level.'css/reset.css" type="text/css" />
		<link rel="stylesheet" href="'.$level.'css/original.css" type="text/css" />
		'.$css.'
		<script type="text/javascript" src="'.$level.'js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="'.$level.'js/main.js"></script>
		'.$js.'
	</head>

<body>
	<div id="wrap">
	<header>
		<div id="header_top">


			<h1>
				<a href="index.php"><img src="images/logo.png"></a>

		<!施設選択---------------------->
			<ul id="fade-in2" class="place_ul">
					<li class="place_li">名古屋
						<ul>
							<li class="place_list"><a href="#">東京</a></li>
							<li class="place_list"><a href="#">大阪</a></li>
						</ul>
					</li>
				</ul>
			</h1>


		<!--文字サイズ選択-------------------->
			<div id="fontSizeController">
				<p><img src="images/fontsize.png"></p>
				<ul>
					<li id="font_small">小さいサイズの文字</li>
					<li id="font_medium">通常サイズの文字</li>
					<li id="font_big">大きいサイズの文字</li>
				</ul>
			</div>

		<!--各種メニュー-------------------->
			<div id="Menu">
				<ul>
					<li><a href="#"/><img src="images/sitemap.png" width="85" height="20" alt="サイトマップ"></a></li>
					<li><a href="#"/><img src="images/question.png"　width="85" height="20" alt="ご質問"></a></li>
				</ul>
			</div>

		<!--ログイン-------------------->

			<div id="mypage">
				<p>'.$mypage.'</p>
			</div>

			<div id="name">
				<p>'.$name.'</p>
			</div>


			<div id="Login">
				<p>'.$login.'</p>
			</div>

		</div>



	</header>

';}

function html_nav(){

	$pbumon = date("md");

	$pbusia = 2;

	global $level,$sia,$mon;


	echo'
	<nav>
		<ul>
			<li><a href="01_schedule.php?mon='.$pbumon.'&sia='.$pbusia.'" class="nav_1" /></a></li>
			<li><a href="02_showing.php" class="nav_2" /></a></li>
			<li><a href="03_commingsoon.php" class="nav_3" /></a></li>
			<li><a href="04_event.php" class="nav_4" /></a></li>
			<li><a href="05_price.php" class="nav_5" /></a></li>
			<li><a href="06_theater.php" class="nav_6" /></a></li>
		</ul>
	</nav>

	';}

/******************************************
function html_nav(){
	global $level;

	echo'
	<nav>
       <ul>
        	<li><a href="http://localhost:1024/original/"><img src="'.$level.'images/btn1.gif" width="180" height="40" alt="ナビ１"/></a></li>
            <li><a href="'.$level.'page2/"><img src="'.$level.'images/btn2.gif" width="180" height="40" alt="ナビ２"/></a></li>
            <li><a href="'.$level.'page3/"><img src="'.$level.'images/btn3.gif" width="180" height="40" alt="ナビ３"/></a></li>
            <li><a href="'.$level.'page4/"><img src="'.$level.'images/btn4.gif" width="180" height="40" alt="ナビ４"/></a></li>
            <li><a href="'.$level.'page5/"><img src="'.$level.'images/btn5.gif" width="180" height="40" alt="ナビ５"/></a></li>
        </ul>
    </nav>

';}
*******************************************/

function html_footer(){
	global $level;

	echo'
	<footer>
			<ul>
				<li><a href="#"/>会社案内</a></li>
				<li><a href="#"/>特商法</a></li>
				<li><a href="#"/>利用規約</a></li>
				<li><a href="#"/>サイトマップ</a></li>
				<li><a href="#"/>お問い合わせ</a></li>
				<li class="last"><a href="#"/>Q&A</a></li>
			</ul>
    	<p>copyright&copy; 2016 IW32 Asakura. All Rights Reserved.</p>
    </footer>

';}

?>
