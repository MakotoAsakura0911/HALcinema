<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

//////////////////////////////////////////
//フォーム内容確認
//////////////////////////////////////////

//insert文
require_once("core/ninsert.php");

//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/signok.css" type="text/css" />
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
                    <li class="step_item"><span></span><span>STEP1:<br />ユーザー情報の入力</span></li>
                    <li class="step_item "><span></span><span>STEP2:<br />ユーザー情報の確認</span></li>
                    <li class="step_item item_active"><span></span><span>STEP3:<br />登録完了</span></li>
                </ul>
            </div>
        </section>
        <section>
            <h2>登録完了</h2>
                <p>ユーザー登録が完了いたしました。</p>
        </section>
    </div>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>
</body>
</html>