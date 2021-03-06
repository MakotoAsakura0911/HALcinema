<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/05_price.css" type="text/css" />';
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
        <h2>料金</h2>
        <div class="content">
            <table>
                <tr>
                    <th><dt>一般</dt></th>
                    <td>\1,800</td>
                </tr>
                <tr>
                    <th><dt>大学生</dt><dd>※要学生証</dd></th>
                    <td>\1,500</td>
                </tr>
                <tr>
                    <th><dt>高校生・中学生・小学生</dt><dd>※高校生は要学生証</dd></th>
                    <td>\1,000</td>
                </tr>
                <tr>
                    <th><dt>幼児(3歳以上)</dt></th>
                    <td>\1,000</td>
                </tr>
                <tr>
                    <th><dt>2歳以下</dt></th>
                    <td>無料</td>
                </tr>
                <tr>
                    <th><dt>ハンディキャップ</dt><dd>※障がい者手帳をお持ちのご本人様。</dd></th>
                    <td>\1,000</td>
                </tr>
            </table>
        </div>
        <h2>割引</h2>
        <div class="content">
            <table>
                <tr>
                    <th><dt>ファーストデ</dt><dd>※毎月1日</dd></th>
                    <td>\1,100</td>
                </tr>
                <tr>
                    <th><dt>レディースデイ</dt><dd>※毎週水曜日  女性</dd></th>
                    <td>\1,100</td>
                </tr>
                <tr>
                    <th><dt>レイトショー</dt><dd>※20時以降に上映する回</dd></th>
                    <td>\1,300</td>
                </tr>
                <tr>
                    <th><dt>夫婦50割引</dt><dd>※夫婦どちらかが50歳以上で同一の作品ご覧になる場合に限ります。※要年齢証明書</dd></th>
                    <td>お2人で\2,00</td>
                </tr>
            </table>
        </div>

        <h2>支払方法</h2>
        <div class="content">
            <h3>クレジットカード</h3>
            <p class="detail">利用可能なクレジットカードは、VISA/MasterCard/JCB/DinersClubとなります。</p>
            <p class="detail"><img src="images/card.jpg"></p>
            <h3>電子マネー</h3>
            <p class="detail">利用可能な電子マネーは、楽天Edy/nanaco/WAON/iDとなります。</p>
            <p class="detail"><img src="images/price_detail.png"></p>
            <h3>現金</h3>
            <p class="detail"></p>
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
