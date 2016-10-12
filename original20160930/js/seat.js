
// グローバル変数定義
// html文書がロードされた瞬間に実行される

var yoyaku_max = 5;				//最大予約可能数
var yoyaku_count = 0;			//予約数
var seatSide_a = new Array();
var seatSide_b = new Array();
var seatSide_c = new Array();
var seatInput = new Array();
var yoyaku = new Array(0,0,1,1,1,1,0,0,0,0,
					   0,0,0,0,0,0,0,0,0,0,
					   0,0,0,0,0,0,0,1,0,0,
					   0,0,0,0,0,0,0,0,0,0,
					   0,0,0,0,0,0,0,0,0,0,
					   0,0,0,0,0,0,1,0,0,0,
					   0,0,0,0,0,0,0,0,0,0,
					   0,0,0,0,0,0,0,0,0,0,
					   0,0,0,0,0,0,0,0,0,0,
					   0,0,0,0,0,0,0,0,0,0);

var seat = new Array("A01","A02","A03","A04","A05","A06","A07","A08","A09","A10",
					 "B01","B02","B03","B04","B05","B06","B07","B08","B09","B10",
					 "C01","C02","C03","C04","C05","C06","C07","C08","C09","C10",
					 "D01","D02","D03","D04","D05","D06","D07","D08","D09","D10",
					 "E01","E02","E03","E04","E05","E06","E07","E08","E09","E10",
					 "F01","F02","F03","F04","F05","F06","F07","F08","F09","F10",
					 "G01","G02","G03","G04","G05","G06","G07","G08","G09","G10",
					 "H01","H02","H03","H04","H05","H06","H07","H08","H09","H10",
					 "I01","I02","I03","I04","I05","I06","I07","I08","I09","I10",
					 "J01","J02","J03","J04","J05","J06","J07","J08","J09","J10");



// オンロードイベント
// <body>に指定された各エレメント
function readSeat(number){
	yoyaku[number] == 1;
}







function setSeat(img,r) {
		img.src = "images/" +  yoyaku[r] + ".gif";
	if( yoyaku[r] == 0){
		img.alt = "空席";
 }else if(yoyaku[r] == 1){
		img.alt = "購入済";
	}else{
		img.alt = "選択中";
	}
}



function seatClick(img, r) {
	var fileName = img.src.substring(img.src.lastIndexOf("/") + 1, img.src.lastIndexOf("."));

	if (fileName == "0") {			//空席
		if (yoyaku_count >= yoyaku_max) {
			alert(errMsg());
			return;
		}

	if(yoyaku_count >= 1){
		seatInput.push("<select name='Ticket" + (yoyaku_count + 1) + "'><option>なし</option><option>一般</option><option>高校生</option><option>中学生</option><option>小学生</option><option>シニア60歳以上</option></select>");
		document.getElementById("seatInput").innerHTML = seatInput;
	}

		yoyaku_count = yoyaku_count + 1;
		img.src = "images/2.gif";
		img.alt = "選択中";
		yoyaku[r] = 2;

		seatSide_a.push(seat[r]);
		document.getElementById("seatSide").innerHTML = seatSide_a;

		seatSide_b.push("<input type=\"hidden\" id=\"seatSide\" name='seatSide" + yoyaku_count  + "' value='" + seat[r] + "'>");

		document.getElementById("seatSide01").innerHTML = seatSide_b;

	} else if (fileName == "2") {		//選択中
		yoyaku_count = yoyaku_count - 1;
		img.src = "images/0.gif";
		img.alt = "空席";
		yoyaku[r] = 0;
		for(j = 0; j < seatSide_a.length; j++){
			if(seatSide_a[j] == seat[r]){
	 		seatSide_a.splice(j,1);
			}
		}
		document.getElementById("seatSide").innerHTML = seatSide_a;
		seatInput.pop();
		document.getElementById("seatInput").innerHTML = seatInput;

		seatSide_b.pop();
		 document.getElementById("seatSide01").innerHTML = seatSide_b;

		/*seatSide_b -= ("<input type=\"hidden\" id=\"seatSide01\" name=\"seatSide\" value='" + seat[r] + "'>") ;*/

	}
}


function errMsg() {
	if (yoyaku_max != 0) {
		return "現在選択できる席は、" + yoyaku_max + "席までです。";
	} else {
		return "現在選択できる席はありません。\n"
				 + "他のブロックで選択中の席を解除してください。";
	}
}


function subClick() {
	alert(yoyaku);
}
