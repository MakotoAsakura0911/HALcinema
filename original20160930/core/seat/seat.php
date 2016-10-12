<?php
/*-----------------------------------------------------------------------------
  概要      :座席を100席並べる
            :※使用する時はhtmlに<script>タグにseat.jsも記載すること
  作成者    :朝倉
  作成日    :2016/06/29
  更新履歴  :
-----------------------------------------------------------------------------*/
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
//処理部

//DB連携
$moviedb = mysqli_connect('localhost', 'root', 'root', 'iw32movie') or die(mysqli_connect_error());
mysqli_set_charset($moviedb, 'utf8');


//初期値
$cnt = 0;
$Sia = $_GET["sia"];
$Movie = $_GET["movie"];
$Mon = $_GET["moviemon"];
$Time = $_GET["time"]+8+"30";

$Show = $Time + $Mon;

/* プリペアドステートメントを
作成します */
if ($stmt =
mysqli_prepare($moviedb,
"select seat_id from showseats where movie_id = ? and show_id = ? and thrater_id = ?")) {

/* マーカにパラメータをバインドします */
 mysqli_stmt_bind_param( $stmt, "iii", $Movie,$Show,$Sia);
//s：String(文字列型の指定)、i：integer(数値型の指定)

/* クエリを実行します */
 mysqli_stmt_execute($stmt);

/* 結果変数をバインドします */
 mysqli_stmt_bind_result($stmt,$seat_id);

/* クライアントのバッファに
結果セットを保存 */
 mysqli_stmt_store_result(
 $stmt);

//複数行結果セット
/* 値を取得します */
while(mysqli_stmt_fetch(
$stmt)){
  $Seat_Id[] = $seat_id;
  $cnt++;
//$data1,$data2にデータが抜き出される
}
/* ステートメントを閉じます */
 mysqli_stmt_close($stmt);
}




//	for(){
//		$seatUse = "<span onload=\"readSeat()\"></span>";
//	}


//画面出力用の変数の初期化
  $movieSeat = "";
	$sideSeat = "";
	$sideSeatNo = "";
	$seatInput = "";

  $movieSeat .="<table border=0 style=\"width:200px;\">";

  		//100席作成
		for($b=0;$b<100;$b++){

			//1の位がゼロの場合に<tr>追加
			$Zero = substr($b, -1, 1);
			if($Zero == 0){
			$movieSeat .="<tr>";
			}

			//席作成
			$movieSeat .="<td>";
			$movieSeat .="<a href=\"JavaScript:seatClick(document.img$b, $b);\">";
			$movieSeat .="<img name=\"img$b\" src=\"images/0.gif\" alt=\"空席\" border=\"0\" width=\"15\" height=\"22\" onload=\"JavaScript:setSeat(document.img$b, $b);\">";
			$movieSeat .="</a>";
			$movieSeat .="</td>";

			//9の位がゼロの場合に</tr>追加
			$Zero = substr($b, -1, 1);
			if($Zero == 9){
			$movieSeat .="</tr>";
			}
		}

	$movieSeat .="</table>";

	$sideSeat ="<div id = \"seatSide\"></div>";
	$sideSeatNo ="<div id = \"seatSide01\"></div>";

	$s_Count = "<script type=\"text/javascript\">document.write(yoyaku_count);</script>";


	$seatInput ="<h3 class=\"form_h3\">チケット券種<span class=\"\"></span></h3>";
	$seatInput .="<select name=\"Ticket1\">";
	$seatInput .="<option>なし</option>";
	$seatInput .="<option>一般</option>";
	$seatInput .="<option>高校生</option>";
	$seatInput .="<option>中学生</option>";
	$seatInput .="<option>小学生</option>";
	$seatInput .="<option>シニア60歳以上</option>";
	$seatInput .="</select>";

	$seatInput .="<div id = \"seatInput\"></div>";





?>
