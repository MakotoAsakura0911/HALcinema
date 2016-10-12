<?php
//クッキー・セッションのphp
require_once("core/session_cookie.php");

//  ログインのphp
require_once("core/login.php");

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


/////////////////////////////////////////
//ログインチェック
/////////////////////////////////////////
if(isset($_SESSION['id'])) {
$lcheck = 'ログイン成功・ログイン中<br>
<p class="sinki"><a href="core/logout.php">ログアウトはこちら</a></p>';
}else{
$lcheck = '';

}








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
            <form action="" method="post">
                <h3>ログインID(メールアドレス)</h3>
                <input id="txt" type="text" name="email" size="35" maxlength="255" value="<?php echo htmlspecialchars(@$_POST['email']); ?>" />
            <h3>パスワード</h3>
            <input id="pass" type="password" name="password" size="35" maxlength="255" value="<?php echo htmlspecialchars(@$_POST['password']); ?>" /><br>
            <input id="save" type="checkbox" name="save" value="on"><label for="save">次回からは自動的にログインする</label>
            <div class="er">
            <?php if(@$error['login'] == 'blank'){ ?>
            <p class="error">メールアドレスとパスワードをご記入ください</p>
            <?php } ?>
            <?php if(@$error['login'] == 'failed'){ ?>
            <p class="error">ログインに失敗しました。正しくご記入ください。
            </p>
            <?php } ?>
			<?php if(@$userId != ""){ ?>
			<p class="error"><?php print $userId; ?></p>
			<p class="error"><?php print $userName; ?></p>
			<p class="error"><?php print $mailAdd; ?></p>

			<?php } ?>
            </div><br>
            <?php print $lcheck ?><br><br>
            <div id="submit_box">
                <input id="btn" name="btn" type="submit" value="ログイン" />
            </div>
            </form>
            <p class="sinki"><a href="signup.php">新規登録はこちら</a></p>

        </div>
    </section>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
