<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");

$moviedb = mysqli_connect('localhost', 'root', 'root', 'iw32movie') or die(mysqli_connect_error());
mysqli_set_charset($moviedb, 'utf8');

header("Content-Type:text/html; charset=UTF-8");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/03_commingsoon.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/slick.js"></script>';
//サイトのタイトルを記入
$title = 'HALシネマ -TOP-';
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

/////////////////処理部エリア/////////////////

//初期値
$cnt = 0;

/* プリペアドステートメントを
作成します */
if ($stmt =
mysqli_prepare($moviedb,
"select movie_id,movie_name,director_name,cast_names from movies order by movie_id asc")) {

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$shid,$shname,$buid,$buname);

/* クライアントのバッファに
結果セットを保存 */
 mysqli_stmt_store_result(
 $stmt);

//複数行結果セット
/* 値を取得します */
while(mysqli_stmt_fetch(
$stmt)){
  $M_id[] = $shid;
  $M_title[] = $shname;
  $D_name[] = $buid;
  $C_name[] = $buname;
  $cnt++;
//$data1,$data2にデータが抜き出される
}
/* ステートメントを閉じます */
 mysqli_stmt_close($stmt);
}








//初期値代入
	$joei =null;
//上映中作品ボックス繰り返し処理
for($i=0;$i<$cnt;$i++){
	$joei .= "<div class='box'>";
	//映画作品画像
	$joei .= "<p class='imgbox'>"."<a href=\"#\">"."<img src=\"\">"."</a>"."</p>";
	//映画テキスト領域
	$joei .= "<div class='box_text'>";
	//映画タイトル
	$joei .= "<div class='box_title'>"."<h3>"."<a href=\"#\">".$M_title[$i]."</a>"."</div>";
	//監督欄
	$joei .= "<table>"."<tr>"."<th>監督：</th>"."<td>".$D_name[$i]."</td>"."</tr>";
	//出演欄
	$joei .= "<tr>"."<th>出演：</th>"."<td>".$C_name[$i]."</td>"."</tr>"."</table>";
	//詳細リンク
	$joei .= "<p>"."<a href=\"#\">作品詳細へ</a>"."</p>";
	$joei .= "</div>"."</div>";
}


//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
html_nav();
?>
<!--ここからコンテントの内容始まる　-->
<article>

	<div id="left_Content">

		<section id="j_sakuhin">

			<h2>公開予定作品</h2>

			<?php
			print $joei;
			?>

		</section>

	</div>

<!--サイドメニュー-------------------->
	<div id="right_Content">
		<aside>
			<a class="twitter-timeline" href="https://twitter.com/HAL_cinema2016" data-widget-id="736119369084768256">@HAL_cinema2016さんのツイート</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			<ul>
				<li><a href="#"><img src="images/sideber.jpg"></a></li>
				<li><a href="#"><img src="images/sideber_01.jpg"></a></li>
				<li><a href="#"><img src="images/sideber_02.jpg"></a></li>
				<li><a href="#"><img src="images/sideber_03.jpg"></a></li>
			</ul>
		</aside>
	</div>

</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
