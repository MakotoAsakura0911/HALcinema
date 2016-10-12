<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");




//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/01_schedule.css" type="text/css" />
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

//呼び出し
require("core/movie/suke1.php");

?>

<!--ここからコンテントの内容始まる　-->
<article>
    <section id="schedule" class="flL">
        <table class="table">
                <tr>
                    <?php for($i=0;$i<7;$i++){ ?>
                    <?php if($i < 3){ ?>
                    <td class="date">
                        <a href="01_schedule.php?mon=<?=$day2[$i]?>&amp;sia=<?=$siata?>"><?=$day[$i]?></a>
                    </td>
                    <?php }else{ ?>
                    <td class="date">
                        <?=$day[$i]?>
                    </td>
                    <?php } ?>
                    <?php } ?>
                </tr>
        </table>
        <h2>上映スケジュール</h2>
		<p class="today"><?=$_GET["mon"]?></p>
        <?php for($i=0;$i<count($MOVIEID);$i++){ ?>
        <p>スクリーン:<?=$i+1?></p>
        <!--ここから-->
         <div class="content">
            <h3 class="flL"><a href="#"><?=$MOVIENAME[$i]?></a></h3>
            <p class="time">上映時間：<?=$TIME[$i]?>分</p>
            <p  class="flL"><img class="image" src="#" width="100" height="100"><p></p>
            <table class="table">
                <tr>
                    <!--ここから-->
                    <?php
                    for($i2=0;$i2<=13;$i2=$i2+3){
                    if($START[$i]+8+$i2 <= 21){
                    ?>
                    <td><?=$START[$i]+8+$i2?>:30~ <br />
                        <a href="01-02_s-seat.php?moviemon=<?=$day3?>&amp;sia=<?=$siata?>&amp;movie=<?=$MOVIEID2[$i]?>&amp;time=<?=$START[$i]+$i2?>">購入</a>
                    </td>
                    <?php
                	}
                    } ?>
                    <!--ここまで-->
                </tr>
            </table>
        </div>
        <!--ここまで-->
        <?php } ?>

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
