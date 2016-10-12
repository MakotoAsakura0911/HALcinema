<?php
set_time_limit(0);

//DB連携

include("mysql.php");
/*

データベース項目内容全県削除
delete from テーブル名

タイムスタンプチェック

$today = date("Y-m-d",strtotime("+ 7 day")); //一週間後の日付を取得
$sql = "select movie_id from timestmpmovie where timestamp<='$today'";

//2016年09月08日チェック検査vel(検索結果:0)
$sql = "select movie_id from timestmpmovie where timestamp<='2016-09-08'";

//9999年99月99日チェック検査vel(検索結果:全て)
$sql = "select movie_id from timestmpmovie where timestamp<='9999-99-99'";



新規追加用(データベース登録あり)
//$today = "0000-99-99";
既存用(データベース登録なし)
//$today = "9999-99-99";
*/
//７日後であるか判定するためのもの
$today = date("Y-m-d",strtotime("+ 3 day"));
//$today = "0000-99-99";
//$today = "9999-99-99";

$date = date('Y-n-j');
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

//////////////////////////////////
//映画情報更新するかチェック
//////////////////////////////////

//@hal_webengineer

//タイムスタンプテーブルに一週間以内のデータがあるかチェック
$timemovieSQL = "
        select movie_id
        from timestmpmovie
        where timestmp >= ?
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$timemovieSQL)) {

        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$today);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,$timemovie);
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         while(mysqli_stmt_fetch($stmt)){
            $TIMEMOVIE[] = $timemovie;
          }
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }
//タイムスタンプテーブルにデータがなえれば
if(!isset($TIMEMOVIE)){
  //タイムスタンプテーブルの削除(auto_incrementの初期化のため)
  $del = "DROP TABLE IF EXISTS timestmpmovie";
  $query_del = mysqli_query($Link,$del);
  //タイムスタンプテーブルの作成
  $new = "create table timestmpmovie(
          timestmp_id integer auto_increment,
          movie_id integer,
          timestmp timestamp,
          primary key (timestmp_id)
          )";
  $query_new = mysqli_query($Link,$new);
  //映画テーブルから追加する項目を見つける(映画上映期間内のもの全て)
  $addSQL = "
  			select movie_id
  			from movies
  			where start_day < ? AND end_day > ?
  			";
    // プリペアドステートメントを作成します
	if ($stmt = mysqli_prepare($Link,$addSQL)) {

	    //マーカにパラメータをバインドします
	    mysqli_stmt_bind_param($stmt, "ss",$datecheck,$datecheck);
	    // クエリを実行します
	    mysqli_stmt_execute($stmt);
	    //結果変数をバインドします
	    mysqli_stmt_bind_result($stmt,$addmovieid);
	    //クライアントのバッファに結果セットを保存
	    mysqli_stmt_store_result($stmt);
	    //値を取得します
	    while(mysqli_stmt_fetch($stmt)){
	        $MOVIEID[] = $addmovieid;
	    }
	    //ステートメントを閉じます
	    mysqli_stmt_close($stmt);
		for($i=0;$i<count($MOVIEID);$i++){
			//見つけてきた映画をタイムスタンプテーブルに登録する
			$add = "insert into timestmpmovie(movie_id) values($MOVIEID[$i])";
			$query_add = mysqli_query($Link,$add);
		}
	}

//////////////////////////////////
//映画情報追加sqlはここから
//////////////////////////////////

//$date_end = date('Y-m-d',strtotime("+ 7 day"));

//日付の切り取り(年・月・日で分ける)
list($year, $month, $day) = explode('-', $date);

/*

年・月・日テストデータ(普通パターン)
$year = 2016;
$month = 9;
$day = 14;

年・月・日テストデータ(年・月変更パターン)
$year = 2016;
$month = 12;
$day = 30;

年・月・日テストデータ(変数パターン)
$year = $_POST["nen"];
$month = $_POST["tuki"];
$day = $_POST["hi"];

*/

//その月の最終日を取得
$day_end = date("t",mktime(0,0,0,$month,1,$year));

//シアター数の繰り返し(今は３)
for($theater = 1;$theater <= 3;$theater++){
  //日付を１日目から７日目まで繰り返す(一週間)
  for($loopdate = 0;$loopdate < 3;$loopdate++){
    //日付リセット
    if($loopdate == 0){
      list($year, $month, $day) = explode('-', $date);
    }
    //先頭に０をつける
    $year = sprintf("%04d",$year);
    $month = sprintf("%02d",$month);
    $day = sprintf("%02d",$day);
    //現在の日時を取得(年・月・日の結合)
    $nowdate = $year;
    $nowdate .= $month;
    $nowdate .= $day;
    if($loopdate != 2){
      $day++;
    }
    //月が変更されるかの判定
    if($day > $day_end){
      $month++;
      $day = 1;
    }
    //年が変更されるかの判定
    if($month > 12){
      $year++;
      $month = 1;
    }
    //スクリーン数の数だけ繰り返し(今は10)
    for($scrieen = 1;$scrieen <= 10;$scrieen++){
      /*
      映画変数で更新
      if(isset($_POST["movie"])){
        $movie = $_POST["movie"];
      }else{
      */
        $SQL = "
        SELECT movie_id
        FROM timestmpmovie
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$SQL)) {

        //マーカにパラメータをバインドします
        //mysqli_stmt_bind_param($stmt, "ss",$datecheck,$datecheck);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,$movie_count);
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         $movie_loop = 0;
         while(mysqli_stmt_fetch($stmt)){
            $MOVIE_COUNT[] = $movie_count;
            $movie_loop++;
          }
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }
      //}

      //for($loop2=0;$loop2<count($MOVIE_COUNT);$loop2++){

      //映画idランダム取得
      $movie = rand(1,$movie_loop);
    $num[0] = $movie;
    $kazu = $scrieen;
    $num[$scrieen] = $movie;
    $cnt = 0;
    while($cnt < $kazu){
      if($movie != $num[$cnt]){
        $cnt++;
      }
      else{
        $cnt = 0;
        $movie = rand(1,$movie_loop);
      }
    }
    $num[$scrieen] = $movie;
      $SQL = "
        SELECT movie_id
        FROM timestmpmovie
        WHERE timestmp_id = ?
        ";
        // プリペアドステートメントを作成します
        if ($stmt = mysqli_prepare($Link,$SQL)) {

        //マーカにパラメータをバインドします
        mysqli_stmt_bind_param($stmt, "s",$movie);
        // クエリを実行します
         mysqli_stmt_execute($stmt);
        //結果変数をバインドします
         mysqli_stmt_bind_result($stmt,$movie_time);
         //クライアントのバッファに結果セットを保存
         mysqli_stmt_store_result($stmt);
         //値を取得します
         while(mysqli_stmt_fetch($stmt)){
            $MOVIE_TIME[] = $movie_time;
          }
         //ステートメントを閉じます
         mysqli_stmt_close($stmt);
        }
          //時間をランダムで取得
          $jikan = rand(1,3);
          for($showtime=$jikan;$showtime<=13;$showtime=$showtime+3){

            $SQL = "
              SELECT showstart_time
              FROM showstarts
              WHERE showstart_id = ?
              ";
              // プリペアドステートメントを作成します
              if ($stmt = mysqli_prepare($Link,$SQL)) {

              //マーカにパラメータをバインドします
              mysqli_stmt_bind_param($stmt, "s",$showtime);
              // クエリを実行します
               mysqli_stmt_execute($stmt);
              //結果変数をバインドします
               mysqli_stmt_bind_result($stmt,$showstart_id);
               //クライアントのバッファに結果セットを保存
               mysqli_stmt_store_result($stmt);
               //値を取得します
               mysqli_stmt_fetch($stmt);
               //ステートメントを閉じます
               mysqli_stmt_close($stmt);
              }
            $showstart_id = sprintf("%04d",$showstart_id);
            //show_idの生成(年月日と上映時間の取得)
            $showid = $nowdate;
            $showid .= $showstart_id;
            /*showsテーブルデータ追加*/
            $showadd = "insert into shows(show_id,movie_id,scrieen_id,thrater_id,showstart_id) values($showid,$movie,$scrieen,$theater,$showtime)";
            $query_add = mysqli_query($Link,$showadd);
            for($seki=1;$seki<=100;$seki++){
              //showseatsテーブルデータ追加
              $sekiadd = "insert into showseats(seat_id,movie_id,show_id,thrater_id,yoyaku) values($seki,$movie,$showid,$theater,0)";
              $query_add = mysqli_query($Link,$sekiadd);
            }

          }
    unset($MOVIE_COUNT);
    }
    unset($num);
  }
}
print "追加ok";
}else{
  print "ある";
}
//データがあれば処理を実行しない


///////////////////////////////////
//データベース切断
///////////////////////////////////
if(!mysqli_close($Link)){
  exit("MySQL：DB切断失敗");
}

?>
