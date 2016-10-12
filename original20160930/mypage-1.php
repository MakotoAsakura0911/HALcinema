<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////

//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/mypage.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'HALシネマ -上映スケジュール-';
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
    <section id="" class="flL">
		<div id="form_main">

			<!-- お支払方法　-->
					<div class="box">
						<h3 class="form_h3">予約情報</h3>
						
						<div class="table">
							<dl class="form_item"><dt>タイトル</dt><dd>貞子vs伽椰子</dd></dl>
							<dl class="form_item"><dt>時間</dt><dd>19:00</dd></dl>
							<dl class="form_item"><dt>枚数</dt><dd>2枚</dd></dl>
							<dl class="form_item" id="last"><dt>値段</dt><dd>\1,000</dd></dl>
							<a href="#" class="detail">詳細へ</a>
						</div>
						<hr />
					</div>
			
					<div class="box">
						<h3 class="form_h3">購入履歴</h3>
						
						<div class="table">
							<dl class="form_item"><dt>タイトル</dt><dd>貞子vs伽椰子</dd></dl>
							<dl class="form_item"><dt>時間</dt><dd>19:00</dd></dl>
							<dl class="form_item"><dt>枚数</dt><dd>2枚</dd></dl>
							<dl class="form_item"><dt>値段</dt><dd>\1,000</dd></dl>
							<a href="#" class="detail">詳細へ</a>
						</div>
						<hr />
					</div>
		</section>

	</form>
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