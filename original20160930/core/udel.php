<?php
//DB連携

include("mysql.php");

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
//$SQL = "insert into users(user_name,kana,sex_id,prefecture_id,telephone,nenn,tuki,hi,mail_add,pass,point,rights_id) values('$name','$kname',$sex,$preid,'$cal','$ump1','$ump2','$ump3','$mail','$pass',0,2)";
//insert into tokuten(col1, col2, col5) values(val1, val2, val5);

$SQL = "delete 
        from users 
        where user_id = ? " ;
/* プリペアドステートメントを作成します */
if ($stmt = mysqli_prepare($Link,$SQL)) {

//社員コード$sid
//$sid=$_POST["shainid"];



/* マーカにパラメータをバインドします */
 mysqli_stmt_bind_param($stmt,"s",$userid);
//s：String、i：integer

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* ステートメントを閉じます */
 mysqli_stmt_close($stmt);
}

//  MySQLの切断
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}

?>