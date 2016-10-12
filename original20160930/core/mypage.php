<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
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
SELECT user_id,user_name,kana,sex_id,prefecture_id,telephone,nenn,tuki,hi,mail_add,pass,point
FROM users
WHERE user_id = ?
";
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($Link,$SQL)) {


//ここにログイン成功時のユーザidを格納
//今は(仮)で２番を格納しています。
$userid="4";

/* マーカにパラメータをバインドします */

 mysqli_stmt_bind_param($stmt, "s", $userid);

//s：String、i：integer

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$uid,$uname,$ukana,$sex,$pre,$tel,$dnenn,$dtuki,$dhi,$dmail,$pass,$point);
/* クライアントのバッファに
結果セットを保存 */
 mysqli_stmt_store_result($stmt);

/* 値を取得します */
 mysqli_stmt_fetch($stmt);

/* ステートメントを閉じます */
 mysqli_stmt_close($stmt);
}
//  MySQLの切断
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}

?>
