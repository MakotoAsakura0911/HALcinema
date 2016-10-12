<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
//if(!isset($_POST["submit01"])){

//}



//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/signup.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'HALシネマ -新規登録-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '';



//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////

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

require_once("view/public.php");

html_header();
html_nav();
//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


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



?>
<!--ここからコンテントの内容始まる　-->

<article>
    <div class="content">
		<section id="section_1">
			<div class="step">
				<ul>
					<li class="step_item item_active"><span></span><span>STEP1:<br />ユーザー情報を入力</span></li>
					<li class="step_item"><span></span><span>STEP2:<br />ユーザー情報を確認</span></li>
					<li class="step_item"><span></span><span>STEP3:<br />登録完了</span></li>
				</ul>
			</div>
        </section>
        <section id="section_2">
            <h2>新規登録</h2>
            <div class="content">
                <form action="" method="post">
                    <div id="form_main">
                            <!-- お名前　-->
                    <div class="form_box">
                        <h3 class="form_h3">お名前<span class="">（※必須項目）</span></h3>
                        <p class="form_item">
                            漢字：（姓）.（名）
                        </p>
                            <input type="text" id="" name="sei" maxlength="10" placeholder="姓：例）朝倉" value="<?php print $nname ?>" />
                            <input type="text" id="" name="mei" maxlength="10" placeholder="名：例）真琴" value="<?php print $sname ?>" />
                        <?php if(isset($ername)){ ?>
                        <p><?php print $ername ?></p>
                        <?php } ?>

                        <p class="form_item">
                            フリガナ：（セイ）.（メイ）
                        </p>
                            <input type="text" id="" name="ksei" maxlength="10" placeholder="セイ：例）アサクラ" value="<?php print $knname ?>" />
                            <input type="text" id="" name="kmei" maxlength="10" placeholder="メイ：例）マコト" value="<?php print $ksname ?>" />
                            <?php if(isset($erkname)){ ?>
                            <p><?php print $erkname ?></p>
                            <?php } ?>
                    </div>

                            <!-- 性別　-->
                    <div class="form_box">

                        <h3 class="form_h3">性別<span class="">（※必須項目）</span></h3>

                        <ul>
                            <li><label><input type="radio" id="" name="radioprice" value="1"<?php if ($hsex == 1) { print ' checked'; }; ?> /><span>男性</span></label></li>
                            <li><label><input type="radio" id="" name="radioprice" value="2"<?php if ($hsex == 2) { print ' checked'; }; ?> /><span>女性</span></label></li>
                        </ul>

                         <?php if(isset($ersex)){ ?>
                            <p><?php print $ersex; ?></p>
                            <?php } ?>

                    </div>
                            <!-- 都道府県　-->
                    <div class="form_box">
                        <h3 class="form_h3">都道府県<span class="">（※必須項目）</span></h3>
                            <select name="ken">
                                <option>選択されていません</option>
                                <?php for($m=0;$m<count($KEN);$m++){ ?>
                                    <option value="<?php print $KEN[$m] ?>"<?php if ($hken == $KEN[$m]) { print ' selected'; }; ?>><?php print $KEN[$m]; ?></option>
                                <?php } ?>
                            </select>
                             <p><?php print $erken; ?></p>
                    </div>
                            <!-- 生年月日　-->
                        <div class="form_box">
                            <h3 class="form_h3">生年月日<span class="">（※必須項目）</span></h3>
                            <select id="nen" name="nen">
                                <option>選択されていません</option>
                                <?php for($i=1900;$i<2017;$i++){ ?>
                                <option value="<?php print $i ?>"<?php if ($nenn == $i) { print ' selected'; }; ?>><?php print $i ?></option>
                                <?php } ?>
                            </select>年
                            <select id="tuki" name="tuki">
                                <option>選択されていません</option>
                                <?php for($j=1;$j<=12;$j++){ ?>
                                <option value="<?php print $j ?>"<?php if ($tuki == $j) { print ' selected'; }; ?>><?php print $j ?></option>
                                <?php } ?>
                            </select>月
                            <select id="hi" name="hi">
                                <option>選択されていません</option>
                                <?php for($k=1;$k<=31;$k++){ ?>
                                <option value="<?php print $k ?>"<?php if ($hi == $k) { print ' selected'; }; ?>><?php print $k ?></option>
                                <?php } ?>
                            </select>日
                            <?php if(isset($erhi)){ ?>
                            <p><?php print $erhi; ?></p>
                            <?php } ?>

                        </div>

                    <!-- 電話番号　-->
                    <div class="form_box">
                        <h3 class="form_h3">電話番号<span class="">（※必須項目）</span></h3>
                        <p class="form_item">
                            半角数字
                        </p>
                            <input type="text" id="TEL" name="cal" maxlength="13" placeholder="例）090-1234-9876" value="<?php print $cal ?>"  />
                            <p><?php print $ertel; ?></p>
                    </div>

                            <!-- メールアドレス　-->
                    <div class="form_box">
                        <h3 class="form_h3">メールアドレス<span class="">（※必須項目）</span></h3>
                        <p class="form_item">
                            PC・スマートフォン
                        </p>
                            <input type="text" id="address" name="address" maxlength="20" placeholder="例）hal@nagoya.co.jp" value="<?php print $mail ?>"  />
                            <?php if(isset($ermail)){ ?>
                            <p><?php print $ermail; ?></p>
                            <?php } ?>

                    </div>

                            <!-- パスワード　-->
                    <div class="form_box">
                        <h3 class="form_h3">パスワード<span class="">（※必須項目）</span></h3>
                        <p class="form_item">
                            半角数字
                        </p>
                        <input type="password" id="password" name="pass01" maxlength="20" placeholder="半角英数字 6～20文字" value="<?php print $ps1 ?>" ><br />
                        <p class="form_item" >
                            確認のため、再入力してください。
                        </p>
                        <input type="password" id="password" name="pass02" maxlength="20" placeholder="半角英数字 6～20文字" value="<?php print $ps2 ?>" >
                        <?php if(isset($erpass)){ ?>
                        <p><?php print $erpass; ?></p>
                        <?php } ?>

                    </div>

                <div id="submit_box">
                    <input type="submit" id="submit_button" name="submit01" value="確認画面へ">
                </div>
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
