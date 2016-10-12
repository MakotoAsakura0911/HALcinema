<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/04_event.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'HALシネマ -料金・割引-';
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
		<section class="flL">
		<h2>イベント一覧</h2>
			<div class="content">
						<a href="04_event01.php" class="flL"><img class="event_img" src="images/event01.jpg" style="width:130px;height:130px;"></a>
						<a href="04_event01.php"><p class="title">リクエストの多い映画を、映画館で上映します！
</p></a>
						<p class="event_detail cfx">「ドリパス」は、皆様からいただいた上映リクエストを元に、上映イベントを開催するサービスです。 
ファンの皆様のチカラ（リクエストなど）で、あの作品の上映イベントを実現させてください！ </p>
			</div>
				
			<div class="content">
						<a href="04_event02.php" class="flL"><img class="event_img" src="images/pokemon.jpg" style="width:130px;height:130px;"></a>
						<a href="04_event01.php"><p class="title">いよいよＴＯＨＯシネマズが「ポケストップ」に！</p></a>
						<p class="event_detail cfx">『Pokémon GO』の中で、全国のＴＯＨＯシネマズがいよいよ9月2日よりポケストップとして、ゲーム上のマップに登場します。</p>
			</div>
			
			<div class="content">
						<a href="04_event03.php" class="flL"><img class="event_img" src="#" style="width:130px;height:130px;"></a>
						<a href="04_event01.php"><p class="title">イベント01</p></a>
						<p class="event_detail cfx">イベント詳細</p>
			</div>
			
			<div class="content">
						<a href="04_event04.php" class="flL"><img class="event_img" src="#" style="width:130px;height:130px;"></a>
						<a href="04_event01.php"><p class="title">イベント01</p></a>
						<p class="event_detail cfx">イベント詳細</p>
			</div>
		</section>


		<!--サイドメニュー--------------------> 
		<section id="side" class="flR">
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
		</section>

	</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>