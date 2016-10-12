<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");
require_once("core/error.php");


//////////////////////////////////////////
//エラーチェック
//////////////////////////////////////////

/*これはフォームの内容*/

$name = htmlspecialchars($_GET['sei']);
$kname = htmlspecialchars($_GET['ksei']);
$sex = htmlspecialchars($_GET['radioprice']);
if(isset($sex) && $sex == 1){
        $sex = "男";
    }
    else if(isset($sex) && $sex == 2){
        $sex = "女";
    }

$ken = htmlspecialchars($_GET['ken']);
$umare1 = htmlspecialchars($_GET['nen']);
$umare2 = htmlspecialchars($_GET['tuki']);
$umare3 = htmlspecialchars($_GET['hi']);
$cal = htmlspecialchars($_GET['cal']);
$mail = htmlspecialchars($_GET['address']);
$pass = htmlspecialchars($_GET['pass']);


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="css/mypage.css" type="text/css" /><link rel="stylesheet" href="css/check2.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/script.js"></script>';
//サイトのタイトルを記入
$title = 'HALシネマ -登録確認-';
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
  <h2>登録確認</h2>
  <section id="left" class="flL">
        <ul class="idou">
            <li><a href="mypage.php">マイページトップ</a></li>
            <li><a href="kousin.php">ユーザ情報更新・確認</a></li>
            <li><a href="yoyaku.php">予約情報</a></li>
            <li><a href="buy.php">購入履歴</a></li>
            <li><a href="core/logout.php">ログアウト</a></li>
            <li><a href="taikai.php">退会</a></li>
        </ul>
    </section>
            <div class="content right_main">
                <section id="section_2">
                    <div id="form_main">
                            <!-- お名前　-->
                    <div class="form_box">
                        <h3 class="form_h3">お名前</h3>
                        <p><?php print $name; ?></p>
                    </div>
                            <!-- カナ　-->
                    <div class="form_box">
                        <h3 class="form_h3">カナ</h3>
                        <p><?php print $kname; ?></p>
                    </div>

                            <!-- 性別　-->     
                    <div class="form_box">
                        <h3 class="form_h3">性別</h3>
                        <p><?php print $sex; ?></p>
                    </div>
                            <!-- 都道府県　-->
                    <div class="form_box">
                        <h3 class="form_h3">都道府県</h3>
                        <p><?php print $ken; ?></p>
                    </div>
                            <!-- 生年月日　-->
                        <div class="form_box">
                            <h3 class="form_h3">生年月日</h3>
                            <p><?php print $umare1; ?>年<?php print $umare2; ?>月<?php print $umare3; ?>日</p>
                        </div>

                            <!-- 電話番号　-->
                    <div class="form_box">
                        <h3 class="form_h3">電話番号</h3>
                        <p><?php print $cal; ?></p>
                    </div>

                            <!-- メールアドレス　-->
                    <div class="form_box">
                        <h3 class="form_h3">メールアドレス</h3>
                        <p><?php print $mail; ?></p>
                    </div>

                            <!-- パスワード　-->
                    <div class="form_box">
                        <h3 class="form_h3">パスワード</h3>
                        <p>***********************</p>
                    </div>
                </div>
                <div id="submit_box">
                <form action="kousinend.php" method="post">

                	<input type="hidden" name="1" value="<?php print $name ?>"><!-- 苗字・名前(漢字) -->
                	<input type="hidden" name="2" value="<?php print $kname ?>"><!-- 苗字・名前(カナ) -->
                	<input type="hidden" name="3" value="<?php print $_GET["radioprice"] ?>"><!-- 性別 -->
                	<input type="hidden" name="4" value="<?php print $ken ?>"><!-- 都道府県 -->
                	<input type="hidden" name="5" value="<?php print $umare1 ?>"><!-- 生年月日 -->
                    <input type="hidden" name="10" value="<?php print $umare2 ?>"><!-- 生年月日 -->
                    <input type="hidden" name="11" value="<?php print $umare3 ?>"><!-- 生年月日 -->
                	<input type="hidden" name="6" value="<?php print $cal ?>"><!-- 電話番号 -->
                	<input type="hidden" name="7" value="<?php print $mail ?>"><!-- メールアドレス -->
                	<input type="hidden" name="8" value="<?php print $pass ?>"><!-- パスワード -->
                    <input type="hidden" name="9" value="<?php print $ump ?>"><!-- 生年月日(日付き) -->
                    <input type="submit" id="submit_button" name="submit02" value="更新する">
                </form>
                <form action="kousin.php" method="post">
                	<input type="hidden" name="1" value="<?php print $_GET["sei"] ?>"><!-- 苗字(漢字) -->
                	<input type="hidden" name="2" value="<?php print $_GET["mei"] ?>"><!-- 名前(漢字) -->
                	<input type="hidden" name="3" value="<?php print $_GET["ksei"] ?>"><!-- 苗字(カナ) -->
                	<input type="hidden" name="4" value="<?php print $_GET["kmei"] ?>"><!-- 名前(カナ) -->
                	<input type="hidden" name="5" value="<?php print $_GET["radioprice"] ?>"><!-- 性別 -->
                	<input type="hidden" name="6" value="<?php print $_GET["ken"] ?>"><!-- 都道府県 -->
                	<input type="hidden" name="7" value="<?php print $_GET["nen"] ?>"><!-- 生年月日(年) -->
                	<input type="hidden" name="8" value="<?php print $_GET["tuki"] ?>"><!-- 生年月日(月) -->
                	<input type="hidden" name="9" value="<?php print $_GET["hi"] ?>"><!-- 生年月日(日) -->
                	<input type="hidden" name="10" value="<?php print $_GET["cal"] ?>"><!-- 電話番号 -->
                	<input type="hidden" name="11" value="<?php print $_GET["address"] ?>"><!-- メールアドレス -->
                	<input type="hidden" name="12" value="<?php print $_GET["pass"] ?>"><!-- パスワード -->
                    <input type="submit" id="submit_button" name="submit03" value="戻る">
                </form>
                </section>
            </div>
                
        
    </div>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>