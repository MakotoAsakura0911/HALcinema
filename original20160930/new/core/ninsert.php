<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
//DB連携
$name = $_POST["1"];
$kname = $_POST["2"];
$sex = $_POST["3"];
$ken = $_POST["4"];
$ump = $_POST["5"];
$cal = $_POST["6"];
$mail = $_POST["7"];
$pass = sha1($_POST["8"]);

include("mysql.php");

///////////////////////////////////
//取得した懸命を数値(id)に変更する
///////////////////////////////////

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
SELECT prefecture_id
FROM prefectures
WHERE prefecture_name = ?
";
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($Link,$SQL)) {
//部署コード$bid
$prename = $ken;
/* マーカにパラメータをバインドします */
 mysqli_stmt_bind_param($stmt, "s", $prename);
//s：String、i：integer

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$preid);

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
///////////////////////////////////
//insert文　開始
///////////////////////////////////
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
$SQL = "insert into users(user_name,kana,sex_id,prefecture_id,telephone,old,mail_add,pass,point,rights_id) values('$name','$kname',$sex,$preid,'$cal',$ump,'$mail','$pass',0,2)";
//insert into tokuten(col1, col2, col5) values(val1, val2, val5);
$query_add = mysqli_query($Link,$SQL);
//  MySQLの切断
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}
?>