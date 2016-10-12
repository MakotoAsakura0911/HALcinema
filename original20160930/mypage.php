<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

$userdb = mysqli_connect('localhost', 'root', 'root', 'iw32movie') or die(mysqli_connect_error());
mysqli_set_charset($userdb, 'utf8');

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


	//ログイン後アカウント情報抜出
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($userdb,
"select user_id,user_name,telephone,mail_add,point from users where user_id = ?")) {


/* マーカにパラメータをバインドします */
  mysqli_stmt_bind_param( $stmt, "s", $_GET["id"]);
//s：String(文字列型の指定)、i：integer(数値型の指定)

/* クエリを実行します */
  mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
//抜き出しが３項目　u_id,u_name,u_pass
//バインドする変数が３つ　$dbuid , $dbuname , $dbupass
  mysqli_stmt_bind_result( $stmt, $userId , $userName , $tel , $mail , $point );
//また、抜き出しレコードは最大１レコード

/* クライアントのバッファに結果セットを保存 */
  mysqli_stmt_store_result($stmt);

/* 値を取得します */
  mysqli_stmt_fetch($stmt);
//$dbuid , $dbuname , $dbupassにデータが抜き出される

/* ステートメントを閉じます */
  mysqli_stmt_close($stmt);
}



$tbl ="<table>";
$tbl .= "<tr class=\"form_item\"><th>"."名前"."</th>";
$tbl .= "<td>".$userName."</td>";
$tbl .= "<tr class=\"form_item\"><th>"."電話番号"."</th>";
$tbl .= "<td>".$tel."</td>";
$tbl .= "<tr class=\"form_item\"><th>"."メール"."</th>";
$tbl .= "<td>".$mail."</td>";
$tbl .= "<tr class=\"form_item\"><th>"."ポイント"."</th>";
$tbl .= "<td>".$point."</td>";
$tbl .= "</tr>"."</table>";

$tbl2 ="<table>";
$tbl2 .= "<tr class=\"form_item\"><th>"."タイトル"."</th>";
$tbl2 .= "<td>".'aaa'."</td>";
$tbl2 .= "<tr class=\"form_item\"><th>"."時間"."</th>";
$tbl2 .= "<td>"."aaa"."</td>";
$tbl2 .= "<tr class=\"form_item\"><th>"."枚数"."</th>";
$tbl2 .= "<td>"."aaa"."</td>";
$tbl2 .= "<tr class=\"form_item\"><th>"."値段"."</th>";
$tbl2 .= "<td>"."aaa"."</td>";
$tbl2 .= "</tr>"."</table>";

//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
////header nav
html_header();
html_nav();
?>
<!--ここからコンテントの内容始まる　-->
<article>
	<h2>マイページ</h2>
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
			<!-- ユーザ情報 -->
					<div class="box">
						<h3 class="form_h3">ユーザ基本情報</h3>

								<?php
									print $tbl;
								?>

							<a href="kousin.php" class="detail">確認・更新へ</a>
					</div>
			<!-- お支払方法　-->
					<div class="box">
						<h3 class="form_h3">予約情報</h3>

								<?php
									print $tbl2;
								?>

							<a href="yoyaku.php" class="detail">詳細へ</a>
					</div>

					<div class="box">
						<h3 class="form_h3">購入履歴</h3>

						<table>
							<tr class="form_item">
								<th>タイトル</th><td>貞子vs伽椰子</td>
							</tr>
							<tr class="form_item">
								<th>時間</th><td>09月01日 19:00</td>
							</tr>
							<tr class="form_item">
								<th>枚数</th><td>2枚</td>
							</tr>
							<tr class="form_item">
								<th>値段</th><td>￥1,000</td>
							</tr>
						</table>
							<a href="buy.php" class="detail">詳細へ</a>
					</div>
		</section>

	</form>
</section>
</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
