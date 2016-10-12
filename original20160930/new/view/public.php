<?php

function html_header(){
	global $level,$css,$js,$title,$keywords,$description,$author;

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
			</h1>

			<div id="fontSizeController">
				<p><img src="images/fontsize.png"></p>
				<ul>
					<li id="font_small">小さいサイズの文字</li>
					<li id="font_medium">通常サイズの文字</li>
					<li id="font_big">大きいサイズの文字</li>
				</ul>
			</div>

			<div id="Menu">
				<ul>
					<li>
						<a href="#"/><img src="images/sitemap.png" width="85" height="20" alt="サイトマップ"></a>
					</li>

					<li>
						<a href="#"/><img src="images/question.png"　width="85" height="20" alt="ご質問"></a>
					</li>
				</ul>
			</div>

		</div>



	</header>

';}

function html_nav(){
	global $level;


	echo'
	<nav>
		<ul>
			<li><a href="01_schedule.php" class="nav_1" /></a></li>
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
