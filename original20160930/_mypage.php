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
$js = '';
//サイトのタイトルを記入
$title = 'HALシネマ -マイページ-';
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
    <div class="content">
		<h2>ユーザ基本情報</h2>
		<p>ユーザ名</p>
		<p>電話番号</p>
		<p>メールアドレス</p>
		<p>ポイント数</p>
		<p><a href="#">内容を確認・変更する</a></p>
		<h2>現在登録している映画（予約）番号・内容</h2>
		<p>内容１</p>
		<p>内容２</p>
		<p>内容３</p>
		<p><a href="#">もっと見る</a></p>
		<h2>使用した映画（予約）番号・内容</h2>
		<p>内容１</p>
		<p>内容２</p>
		<p>内容３</p>
		<p><a href="#">もっと見る</a></p>
    </div>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>