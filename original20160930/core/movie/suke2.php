<?php

//DB連携

include("mysql.php");

//$today = "0000-99-99";
//$today = "9999-99-99";

//データベースの映画の今日の日付の確認用
$datecheck = date('Ymd');
///////////////////////////////////
//データベース接続チェック
///////////////////////////////////

if(!$Link = mysqli_connect($HOST,$USER,$PASS)){
  exit("MySQL：DB接続失敗："
  .mysqli_connect_error());
}

if(!mysqli_query($Link,$CODE)){
  exit("MySQL：クエリー送信失敗");
}

if(!mysqli_select_db($Link,$DB)){
  exit("MySQL：DB指定失敗");
}
$get_mon = $_GET["moviemon"];
$get_sia = $_GET["sia"];
$get_movie = $_GET["movie"];



$sssSQL = "
        select thrater_name
        from  thraters
        WHERE thrater_id = ?
        ";
        // プリペアドステートメントを作成します 
        if ($stmt = mysqli_prepare($Link,$sssSQL)){
        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$get_sia);
        // クエリを実行します 
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,
          $sianame
          );
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         mysqli_stmt_fetch($stmt);
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }

$sssSQL = "
        select movie_name
        from  movies
        WHERE movie_id = ?
        ";
        // プリペアドステートメントを作成します 
        if ($stmt = mysqli_prepare($Link,$sssSQL)){
        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$get_movie);
        // クエリを実行します 
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,
          $moviename
          );
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         mysqli_stmt_fetch($stmt);
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }


///////////////////////////////////
//データベース切断
///////////////////////////////////
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}

?>
