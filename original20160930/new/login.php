<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/login.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'HALシネマ -ログイン-';
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
    <section>
        <h2>ログイン</h2>
        <div class="content">
            <form action="mypage.php" method="post">
                    <div class="main">
                  <!-- メールアドレス　-->
				<div class="form_box">
                    <h3>メールアドレス</h3>
                    <input type="text" id="address" name="" maxlength="20" placeholder="例）hal@nagoya.co.jp" />
				</div>
        <!-- パスワード　-->
                <div class="form_box">
                    <h3>パスワード</h3>
                    <input type="text" id="password" maxlength="20" placeholder="半角英数字 6～20文字"><br />
                </div>
			<div id="submit_box">
				<input type="submit" id="submit_button" name="submit" value="ログイン">
			</div>
            </form>
            <p class="sinki"><a href="#">新規登録はこちら</a></p>
        </div>
    </section>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>