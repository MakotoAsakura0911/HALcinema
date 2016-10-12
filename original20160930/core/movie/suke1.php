<?php
//DB連携
include("mysql.php");

for($dayy=0;$dayy<7;$dayy++){
  $day[] = date('nd',strtotime("+ $dayy day"));
  $day2[] = date('md',strtotime("+ $dayy day"));
}

$day3 = date('Y');
$day3 .= $_GET["mon"];
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
$siata = 2;
//$check = $_GET["mon"];
$check = "____".$_GET["mon"]."____";
//////////////////////////////////
//映画情報更新するかチェック
//////////////////////////////////

//@hal_webengineer

//タイムスタンプテーブルに一週間以内のデータがあるかチェック
$sssSQL = "
        select movie_id,scrieen_id,thrater_id,showstart_id
        from  shows
        where show_id LIKE ? AND thrater_id = ?
        GROUP BY scrieen_id
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$sssSQL)){
        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "ss",$check,$siata);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,
          $movieid,
          $scri,
          $sia,
          $start
          );
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         while(mysqli_stmt_fetch($stmt)){
            $MOVIEID[] = $movieid;
            $SCRI[] = $scri;
            $SIA[] = $sia;
            $START[] = $start;
          }
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }
for($i=0;$i<count($MOVIEID);$i++){

//映画取得
$sssSQL = "
        select movie_id
        from  timestmpmovie
        where timestmp_id = ?
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$sssSQL)){
        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$MOVIEID[$i]);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,
          $movieid2
          );
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
          while(mysqli_stmt_fetch($stmt)){
            $MOVIEID2[] = $movieid2;
          }
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }


//映画取得
$sssSQL = "
        select movie_name,movie_time
        from  movies
        where movie_id = ?
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$sssSQL)){
        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$MOVIEID2[$i]);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,
          $moviename,
          $time
          );
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
            while(mysqli_stmt_fetch($stmt)){
            $MOVIENAME[] = $moviename;
            $TIME[] = $time;
          }
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }
}
///////////////////////////////////
//データベース切断
///////////////////////////////////
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}

?>
