<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
//if(!isset($_POST["submit01"])){

//}
require_once("view/public.php");

//////////////////////////////////////////
//エラーチェック
//////////////////////////////////////////

/*これはフォームの内容*/

$nname = "";
$sname = "";
$knname = "";
$ksname = "";
$hsex = "";
$hken = "";
$nenn = "";
$tuki = "";
$hi = "";
$cal = "";
$mail = "";
$ps1 = "";
$ps2 = "";

/*これはエラーの内容*/

$ername = "";
$erkname = "";
$ersex = "";
$erken = "";
$erhi = "";
$erhi = "";
$ertel = "";
$ermail = "";
$erpass = "";
$flg = 0;

require_once("core/error.php");


require_once("core/ken.php");
//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/mypage.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/script.js"></script>';
//サイトのタイトルを記入
$title = 'HALシネマ -新規登録-';
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
  <h2>購入履歴</h2>
			<section class="content">
    <section id="left" class="flL">
        <ul class="idou">
            <li><a href="mypage.php">マイページトップ</a></li>
            <li><a href="kousin.php">ユーザ情報更新・確認</a></li>
            <li><a href="yoyaku.php">予約情報</a></li>
            <li><a href="buy.php">購入履歴</a></li>
            <li><a href="#">ログアウト</a></li>
            <li><a href="taikai.php">退会</a></li>
        </ul>
    </section>
    <section id="right" class="flR right_main">
        <div id="form_main">
            <div class="box">
            <h3 class="form_h3">購入情報２</h3>    
                <table>
                    <tr class="form_item"><th>タイトル</th><td>貞子vs伽椰子</td></tr>
                    <tr class="form_item"><th>時間</th><td>09月01日 19:00</td></tr>
                    <tr class="form_item"><th>枚数</th><td>2枚</td></tr>
                    <tr class="form_item" id="last"><th>値段</th><td>￥1,000</td></tr>
                </table>
           </div>
           <div class="box">
            <h3 class="form_h3">購入情報１</h3>    
                <table>
                    <tr class="form_item"><th>タイトル</th><td>貞子vs伽椰子</td></tr>
                    <tr class="form_item"><th>時間</th><td>09月01日 19:00</td></tr>
                    <tr class="form_item"><th>枚数</th><td>2枚</td></tr>
                    <tr class="form_item" id="last"><th>値段</th><td>￥1,000</td></tr>
                </table>
           </div>
       </div>
    </section>
	</section>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>