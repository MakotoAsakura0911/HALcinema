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

/////////////////処理部エリア/////////////////

//require_once("core/ranking/top_rank.php");




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
				<div class="contents contents01"><a href ="#"><img src="images/cinemaImages/chihaya.png" /></a></div>
				<div class="contents contents02"><a href ="#"><img src="images/cinemaImages/hk.png" /></a></div>
				<div class="contents contents03"><a href ="#"><img src="images/cinemaImages/wolf.png" /></a></div>
				<div class="contents contents04"><a href ="#"><img src="images/cinemaImages/tono.png" /></a></div>
				<div class="contents contents05"><a href ="#"><img src="images/cinemaImages/dead.png" /></a></div>
				<div class="contents contents06"><a href ="#"><img src="images/cinemaImages/rokuyon.png" /></a></div>
				<div class="contents contents07"><a href ="#"><img src="images/cinemaImages/scanner.png" /></a></div>
				<div class="contents contents08"><a href ="#"><img src="images/cinemaImages/sekaneko.png" /></a></div>
				<div class="contents contents09"><a href ="#"><img src="images/cinemaImages/hime.png" /></a></div>
				<div class="contents contents09"><a href ="#"><img src="images/cinemaImages/hero.png" /></a></div>
			</div>

			<div class="slider_nav sample">
					<div class="nav nav01" style="width:50px;"><img src="images/cinemaImages/chihaya.png" width="100" height="43" alt="ちはやふる" /></a></div>
					<div class="nav nav02" style="width:50px;"><img src="images/cinemaImages/hk.png" width="100" height="43" alt="変態仮面" /></a></div>
					<div class="nav nav03" style="width:50px;"><img src="images/cinemaImages/wolf.png" width="100" height="43" alt="オオカミ少女と黒王子" /></a></div>
					<div class="nav nav04" style="width:50px;"><img src="images/cinemaImages/tono.png" width="100" height="43" alt="殿、利息でござる。" /></a></div>
					<div class="nav nav05" style="width:50px;"><img src="images/cinemaImages/dead.png" width="100" height="43" alt="ROAD TO HiGH&LOW" /></a></div>
					<div class="nav nav06" style="width:50px;"><img src="images/cinemaImages/rokuyon.png" width="100" height="43" alt="64-ロクヨン-前編" /></a></div>
					<div class="nav nav07" style="width:50px;"><img src="images/cinemaImages/scanner.png" width="100" height="43" alt="スキャナー 記憶のカケラをよむ男" /></a></div>
					<div class="nav nav08" style="width:50px;"><img src="images/cinemaImages/sekaneko.png" width="100" height="43" alt="世界から猫が消えたなら" /></a></div>
					<div class="nav nav09" style="width:50px;"><img src="images/cinemaImages/hime.png" width="100" height="43" alt="ヒメアノール" /></a></div>
					<div class="nav nav09" style="width:50px;"><img src="images/cinemaImages/hero.png" width="100" height="43" alt="ヒーローマニア-生活-" /></a></div>
			</div>

			<img id="Yajirusi" src="images/yajirusi1.png" />

		</div>
	</section>

<div id="left_Content">

<!--セクション１_ランキング-------------------->
	<section id="section_1">

			<h2>ランキング</h2>

			<div id="Ranking">
			<?php for($i=0;$i<count($RANK);$i++){ ?>
				<div class="R_box">$RANK[<?php print $i+1; ?>]=>
						<?php print $RANK[$i]; ?>
						<p><img src="images/rank<?php print $i+1; ?>.png"></p>

					<div class="R_content">
						<p><?php print rank($RANK[$i]); ?></p>
						<P>
							<?php print $RANKNAME[$i]; ?>
						</p>
					</div>

					<a href="core/ranking/detail.php?id=<?php print $RANK[$i]; ?>">詳細へ</a>
				</div>

			<?php } ?>

			<a class="itiran" href="core/ranking/rank.php">一覧へ</a>

			</div>


<!---
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
--->

	</section>

<!--セクション２_新着情報-------------------->
	<section id="section_2">


			<h2>新着情報</h2>

			<ul>
			<!-- NEWS7　-->
				<li>
					<span class="day">
						2016/09/20
						<span class="newTitle">『ミュータント・ニンジャ・タートルズ：影＜シャドウズ＞』IMAX3D®版上映決定！</span>
						<i class="fa fa-sort-desc" aria-hidden="true"></i>
					</span>
					<p class="textArea">
						世界一有名な“亀”がパワーアップして帰ってくる！<br />
						影の軍団ニンジャタートルズがさらなる興奮と驚きと爆笑を引っさげ　この夏、大スクリーンで疾風怒濤に暴れまわる！<br />
						NYの街を飛び出し、世界を舞台に暴れまわる４匹の大活躍を、ぜひIMAX3Dの大迫力でお楽しみください！
						<img src="images/newsImages/tartle.png" />
					</p>
				</li>

			<!-- NEWS6　-->
				<li>
					<span class="day">
						2016/09/11
						<span class="newTitle">『ゴーストバスターズ』IMAX®3D版上映決定！</span>
						<i class="fa fa-sort-desc" aria-hidden="true"></i>
					</span>
					<p class="textArea">
						30年前に世界中を席巻した待望の大ヒットシリーズ 『ゴーストバスターズ』が、超豪華キャストで再起動！<br />
						IMAX3Dであなたも一緒にバスター開始！
						<img src="images/newsImages/gost.png" />
					</p>
				</li>

			<!-- NEWS5　-->
				<li><span class="day">2016/08/10<span class="newTitle">家族で映画デーが始まる！</span><i class="fa fa-sort-desc" aria-hidden="true"></i></span><p class="textArea">！！</p></li>

			<!-- NEWS4　-->
				<li><span class="day">2016/07/31<span class="newTitle">夏休みイベント開催！</span></span><p class="textArea">！！</p></li>

			<!-- NEWS3　-->
				<li><span class="day">2016/07/01<span class="newTitle">たくさんの映画作品が上映中！</span></span><p class="textArea">！！</p></li>

			<!-- NEWS2　-->
				<li><span class="day">2016/06/01<span class="newTitle">東京、大阪、名古屋にて映画館がオープン！</span></span><p class="textArea">！！</p></li>

			<!-- NEWS1　-->
				<li><span class="day">2016/05/01<span class="newTitle">HALシネマ　リニューアルオープン！</span></span><p class="textArea">！！</p></li>
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
