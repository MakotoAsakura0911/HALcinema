<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
require 'image.php';
//DB連携
include("mysql.php");
$now = date('Ymd');
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
SELECT movie_id,movie_name
FROM movies 
WHERE start_day < ? AND end_day > ?
ORDER BY sold 
desc limit ?
";
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($Link,$SQL)) {

//部署コード$bid
$rank3="3";

/* マーカにパラメータをバインドします */
 mysqli_stmt_bind_param($stmt, "sss", $now,$now,$rank3);
//s：String、i：integer

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$mid,$mname);

/* クライアントのバッファに
結果セットを保存 */
 mysqli_stmt_store_result($stmt);

/* 値を取得します */
while(mysqli_stmt_fetch($stmt)){
  $RANK[] = $mid;
  $RANKNAME[] = $mname;
//$dbbuid,$dbbunameにデータが抜き出される
}
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
<?php for($i=0;$i<count($RANK);$i++){ ?>
<div>$RANK[<?php print $i+1; ?>]=>
<?php print $RANK[$i]; ?></div>
<p><?php print rank($RANK[$i]); ?></p>
<div>$RANKNAME[<?php print $i+1; ?>]=>
<?php print $RANKNAME[$i]; ?></div>
<a href="detail.php?id=<?php print $RANK[$i]; ?>">詳細へ</a>
<hr />
<?php } ?>
<a href="rank.php">一覧へ</a>
</body>
</html>