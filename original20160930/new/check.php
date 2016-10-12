<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");
//////////////////////////////////////////
//フォーム内容確認
//////////////////////////////////////////
//苗字(漢字)
$name = $_POST["sei"];
//名前(漢字)
$name .= $_POST["mei"];
//苗字(カナ)
$kname = $_POST["ksei"];
//名前(カナ)
$kname .= $_POST["kmei"]; 
//性別
$sex = $_POST["radioprice"];
if(isset($sex) && $sex == 1){
    $sex = "男";
}
if(isset($sex) && $sex == 2){
    $sex = "女";
}
//都道府県
$ken = $_POST["ken"];
//生年月日(年) ex.2016
$umare = $_POST["nen"];
//生年月日(月) ex.06
$umare .= $_POST["tuki"];
//生年月日(日) ex.12
$umare .= $_POST["hi"];

//生年月日(年) ※表示用 ex.2016年
$ump = $_POST["nen"];
if($ump == "選択されていません"){
    $ump = "";
}
if($ump != ""){
    $ump .= "年";
}
//生年月日(月) ※表示用 ex.06月
$ump .= $_POST["tuki"];
if($ump == "選択されていません"){
    $ump = "";
}
if($ump != ""){
    $ump .= "月";
}
//生年月日(日) ※表示用 ex.12日
$ump .= $_POST["hi"];
if($ump == "選択されていません"){
    $ump = "";
}
if($ump != ""){
    $ump .= "日";
}
//電話番号
$cal = $_POST["cal"];
//メールアドレス
$mail = $_POST["address"];
//パスワード
$pass = $_POST["pass01"];

/*
*/
//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/check.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '';
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
    <div class="content">
        <section id="section_1">
            <div class="step">
                    <ul>
                        <li class="step_item"><span></span><span>STEP1:<br />ユーザー情報を入力</span></li>
                        <li class="step_item item_active"><span></span><span>STEP2:<br />ユーザー情報を確認</span></li>
                        <li class="step_item"><span></span><span>STEP3:<br />登録完了</span></li>
                    </ul>
            </div>
        </section>
        <section id="section_2">
            <h2>登録確認</h2>
            <div class="content">
                
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
                            <p><?php print $ump; ?></p>
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
                <form action="signok.php" method="post">

                	<input type="hidden" name="1" value="<?php print $name ?>"><!-- 苗字・名前(漢字) -->
                	<input type="hidden" name="2" value="<?php print $kname ?>"><!-- 苗字・名前(カナ) -->
                	<input type="hidden" name="3" value="<?php print $_POST["radioprice"] ?>"><!-- 性別 -->
                	<input type="hidden" name="4" value="<?php print $ken ?>"><!-- 都道府県 -->
                	<input type="hidden" name="5" value="<?php print $umare ?>"><!-- 生年月日 -->
                	<input type="hidden" name="6" value="<?php print $cal ?>"><!-- 電話番号 -->
                	<input type="hidden" name="7" value="<?php print $mail ?>"><!-- メールアドレス -->
                	<input type="hidden" name="8" value="<?php print $pass ?>"><!-- パスワード -->
                    <input type="submit" id="submit_button" name="submit" value="登録完了する">
                </form>
                <form action="signup.php" method="post">
                	<input type="hidden" name="1" value="<?php print $_POST["sei"] ?>"><!-- 苗字(漢字) -->
                	<input type="hidden" name="2" value="<?php print $_POST["mei"] ?>"><!-- 名前(漢字) -->
                	<input type="hidden" name="3" value="<?php print $_POST["ksei"] ?>"><!-- 苗字(カナ) -->
                	<input type="hidden" name="4" value="<?php print $_POST["kmei"] ?>"><!-- 名前(カナ) -->
                	<input type="hidden" name="5" value="<?php print $_POST["radioprice"] ?>"><!-- 性別 -->
                	<input type="hidden" name="6" value="<?php print $_POST["ken"] ?>"><!-- 都道府県 -->
                	<input type="hidden" name="7" value="<?php print $_POST["nen"] ?>"><!-- 生年月日(年) -->
                	<input type="hidden" name="8" value="<?php print $_POST["tuki"] ?>"><!-- 生年月日(月) -->
                	<input type="hidden" name="9" value="<?php print $_POST["hi"] ?>"><!-- 生年月日(日) -->
                	<input type="hidden" name="10" value="<?php print $_POST["cal"] ?>"><!-- 電話番号 -->
                	<input type="hidden" name="11" value="<?php print $_POST["address"] ?>"><!-- メールアドレス -->
                	<input type="hidden" name="12" value="<?php print $_POST["pass01"] ?>"><!-- パスワード -->
                    <input type="submit" id="submit_button" name="submit" value="戻る">
                </form>
                </div>
                
        </section>
    </div>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>