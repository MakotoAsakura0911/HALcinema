<?php
//  HTTPヘッダーで文字コードを指定
@header("Content-Type:text/html; charset=UTF-8");
@print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
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
SELECT prefecture_name
FROM prefectures
limit ?
";
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($Link,$SQL)) {

//部署コード$bid
$ken="47";

/* マーカにパラメータをバインドします */

 mysqli_stmt_bind_param($stmt, "s", $ken);

//s：String、i：integer

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$mname);

/* クライアントのバッファに
結果セットを保存 */
 mysqli_stmt_store_result($stmt);

/* 値を取得します */
while(mysqli_stmt_fetch($stmt)){
  $KEN[] = $mname;
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
