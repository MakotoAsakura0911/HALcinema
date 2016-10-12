<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
$eiga = $_POST["eiga"];
$jikan = $_POST["jikan"];
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


for($i=1;$i<=100;$i++){
	/*
	$SQL = "
	INSERT INTO showseats VALUE ("")
	";
	if ($stmt = mysqli_prepare($Link,$SQL)) {
	//部署コード$bid
	$eiga = $_POST["eiga"];
	$jikan = $_POST["jikan"];
	 mysqli_stmt_bind_param($stmt,"sss",$i,$eiga,$jikan);
	//s：String、i：integer
	 mysqli_stmt_execute($stmt);
	 mysqli_stmt_close($stmt);
	}
	*/
	$SQL = "insert into showseats value($i,$eiga,$jikan,0)";
	$query_add = mysqli_query($Link,$SQL);
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
<title>登録完了</title>
</head>
<body>
<h2>完了</h2>
<?php 
if(isset($query_add)){ 
	print $SQL;
	print "<br>";
}
?>
<a href="showseat.php">一覧へ</a>
</body>
</html>