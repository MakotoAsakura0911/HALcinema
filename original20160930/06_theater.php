<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/06_theater.css" type="text/css" />
								<link href="css/lightbox.css" rel="stylesheet" />
';
//使用するjavascript(jQuery)を記入
$js = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>';
//サイトのタイトルを記入
$title = 'HALシネマ -劇場案内-';
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
	<h2>劇場案内</h2>
		<div class="content">
			<img class="theater" src="images/insitution_img01.jpg">
			<p class="theater_detail">お好きな映画が選べる10スクリーン。約1,140席のシネマコンプレックス！無料駐車場4,000台。大型のショッピングモールも併設してますので、ショッピングからエンターテインメントまで1日中お楽しみいただけます。</p>
		</div>

		<h2>館内マップ</h2>
		
		<div class="content">
		
		<div class="map_area">
			<ul>
				<li class="s01"><a href="images/screen/screen01.gif" data-lightbox="sample" data-title="screen01">screen <br /> <span>➊</span></a></li>
				<li class="s02"><a href="images/screen/screen02.gif" data-lightbox="sample" data-title="screen02">screen <br /> <span>➋</span></a></li>
				<li class="s03"><a href="images/screen/screen03.gif" data-lightbox="sample" data-title="screen03">screen <br /> <span>➌</span></a></li>
				<li class="s04"><a href="images/screen/screen04.gif" data-lightbox="sample" data-title="screen04">screen <br /> <span>➍</span></a></li>
				<li class="s05"><a href="images/screen/screen05.gif" data-lightbox="sample" data-title="screen05">screen <br /> <span>➎</span></a></li>
				<li class="s06"><a href="images/screen/screen06.gif" data-lightbox="sample" data-title="screen06">screen <br /> <span>➏</span></a></li>
				<li class="s07"><a href="images/screen/screen07.gif" data-lightbox="sample" data-title="screen07">screen <br /> <span>➐</span></a></li>
				<li class="s08"><a href="images/screen/screen08.gif" data-lightbox="sample" data-title="screen08">screen <br /> <span>➑</span></a></li>
				<li class="s09"><a href="images/screen/screen09.gif" data-lightbox="sample" data-title="screen09">screen <br /> <span>➒</span></a></li>
				<li class="s10"><a href="images/screen/screen10.gif" data-lightbox="sample" data-title="screen10">screen <br /> <span>➓</span></a></li>
			</ul>
			</div>
		</div>
		<h2>スクリーンスペック</h2>
		<div class="content">
			<table>
				<tr><th></th><th>座席数</th><th>スクリーンサイズ</th><th>デジタル音響</th></tr>
				<tr><th>スクリーン01</th><td>180席</td><td>8.1×19.4m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン02</th><td>100席</td><td>5.9×14.1m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン03</th><td>100席</td><td>5.9×14.1m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン04</th><td>180席</td><td>8.1×19.4m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン05</th><td>100席</td><td>5.9×14.1m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン06</th><td>180席</td><td>8.1×19.4m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン07</th><td>100席</td><td>5.9×14.1m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン08</th><td>100席</td><td>4.1×9.7m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン09</th><td>100席</td><td>4.1×9.7m</td><td>デジタル5.1ch</td></tr>
				<tr><th>スクリーン10</th><td>100席</td><td>4.1×9.7m</td><td>デジタル5.1ch</td></tr>
			</table>
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
<script src="js/lightbox.js"></script>
</body>
</html>