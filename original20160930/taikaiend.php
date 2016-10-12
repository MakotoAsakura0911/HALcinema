<?php
require_once("core/mypage.php");
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

//////////////////////////////////////////
//フォーム内容確認
//////////////////////////////////////////

//insert文
require_once("core/udel.php");
//メール送信
//require_once("core/usermail.php");
//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/signok2.css" type="text/css" />
<link rel="stylesheet" href="'.$level.'css/mypage.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/script.js"></script>';
//サイトのタイトルを記入
$title = 'HALシネマ -退会完了-';
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
     <h2>更新完了</h2>
     <!--
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
    -->
    <div class="content">
                <p>ユーザーの退会が完了いたしました。</p>
    <a href="index.php">トップへ</a>
    </div>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>
</body>
</html>