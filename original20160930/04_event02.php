<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/04_event_detail.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'HALシネマ -イベント-';
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
		<h2>イベント</h2>
		<div class="content">
			<h3>いよいよＴＯＨＯシネマズが「ポケストップ」に！</h3>
			<img src="images/pokemonlogo640.jpg" width="620px" height="400px">
			<p class="detail_01" >『Pokémon GO』の中で、全国のＴＯＨＯシネマズがいよいよ9月2日よりポケストップとして、ゲーム上のマップに登場します。
これによってプレイヤーはモンスターボールなどのゲームを進める上で必要となるさまざまな道具を手に入れることができます。

全国のポケモントレーナーの皆様、ご来場をお待ちしています。

開始日／9月2日（金）より

対象劇場／全国のＴＯＨＯシネマズ
※ＴＯＨＯシネマズ 光の森、はませんは、熊本地震により休館中の為、対象外となります。

＜お願い＞
・ゲームをお楽しみいただく場合は歩きながらの操作はおやめください。
周りのお客様にご迷惑にならないようにご配慮お願いいたします。

・映画ご鑑賞中のゲーム操作はご遠慮お願いいたします。</p>
			<time datetime="2016-07-01">
								2016年09月02日
			</time>
			
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