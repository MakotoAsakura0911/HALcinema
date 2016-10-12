<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
require 'image.php';
//DB連携
include("mysql.php");

if(!$Link = mysqli_connect
($HOST,$USER,$PASS)){
  exit("MySQL：DB接続失敗："
  .mysqli_connect_error());
}
//  文字コードの指定（クエリー送信）
if(!mysqli_query($Link,$CODE)){
  exit("MySQL：クエリー送信失敗");
}

//  使用するDB指定
if(!mysqli_select_db($Link,$DB)){
  exit("MySQL：DB指定失敗");
}



$SQL = "
SELECT movie_id,janru_id01,janru_id02,movie_name,start_day,text,director_name,cast_names,movie_time
FROM movies 
WHERE movie_id = ?
";
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($Link,$SQL)) {
//部署コード$bid
$id = $_GET["id"];
/* マーカにパラメータをバインドします */
 mysqli_stmt_bind_param($stmt, "s", $id);
//s：String、i：integer

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$mid,$mj01,$mj02,$mname,$sday,$text,$dname,$cname,$mtime);

/* クライアントのバッファに
結果セットを保存 */
 mysqli_stmt_store_result($stmt);

/* 値を取得します */
 mysqli_stmt_fetch($stmt);
//$dbbuid,$dbbunameにデータが抜き出される
/* ステートメントを閉じます */
 mysqli_stmt_close($stmt);
}

//  MySQLの切断
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<link rel="stylesheet" href="./css/main.css" type="text/css" media="all" />
<!-- PAGE TITLE -->
<title>ランキング表示</title>
</head>
<body>
<div>$RANKID=>
<?php print $mid; ?></div>
<p><?php print rank($mid); ?></p>
<div>$RANKJ01=>
<?php print $mj01; ?></div>
<div>$RANKJ02=>
<?php print $mj02; ?></div>
<div>$RANKNAME=>
<?php print $mname; ?></div>
<div>$RANKDAY=>
<?php print $sday; ?></div>
<div>$RANKTEXT=>
<?php print $text; ?></div>
<div>$RANKDIRE=>
<?php print $dname; ?></div>
<div>$RANKCAST=>
<?php print $cname; ?></div>
<div>$RANKTIME=>
<?php print $mtime; ?></div>
<hr />
<a href="rank.php">一覧へ</a>
</body>
</html>