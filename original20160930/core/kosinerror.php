<?php
$ps1 = "";
$ps2 = "";

/*これはエラーの内容*/

$ername = "";
$erkname = "";
$ersex = "";
$erken = "";
$erhi = "";
$erhi = "";
$ertel = "";
$ermail = "";
$erpass = "";
$flg = 0;

//////////////////////////////////////////
//フォーム内容確認
//////////////////////////////////////////
if(isset($_POST["submit01"])){    //入力ページから確認ページ
    if($_POST["sei"] != ""){
    //苗字(漢字)
    $name = $_POST["sei"];
    }else{
    $ername = "名前（漢字）を入力してください";
    $flg = 9;
    }
    if($_POST["ksei"] != ""){
	    //苗字(カナ)
	    $kname = $_POST["ksei"];
	    if (mb_ereg("^[ア-ン゛゜ァ-ォャ-ョー「」、]+$", $kname)) {
	    }else{
	    	$erkname = "入力はカナのみとなっています";
    		$flg = 9;
	    }
    }else{
    $erkname = "名前(カナ)を入力してください";
    $flg = 9;
    }
    //性別
    $sex = @$_POST["radioprice"];
    if(isset($sex) && $sex == 1){
        $sex = "男";
    }
    else if(isset($sex) && $sex == 2){
        $sex = "女";
    }else{
        $ersex = "男性か女性か選択してください";
        $flg = 9;
    }
    //都道府県
    $ken = $_POST["ken"];
    if($ken == "選択されていません"){
    	$erken = "都道府県が選択されていません";
    	$flg = 9;
    }
    //生年月日(年) ex.2016
    $umare = $_POST["nen"];
    //生年月日(月) ex.06
    $umare1 = $_POST["tuki"];
    //生年月日(日) ex.12
    $umare2 = $_POST["hi"];

    //生年月日(年) ※表示用 ex.2016年
    $ump = $_POST["nen"];
    $ue = 0;
    if($ump == "選択されていません"){
        $ump = "";
        $ue = 9;
    }
    if($ump != ""){
        $ump .= "年";
    }
    //生年月日(月) ※表示用 ex.06月
    $ump .= $_POST["tuki"];
    if($ump == "選択されていません"){
        $ump = "";
        $ue = 9;
    }
    if($ump != ""){
        $ump .= "月";
    }
    //生年月日(日) ※表示用 ex.12日
    $ump .= $_POST["hi"];
    if($ump == "選択されていません"){
        $ump = "";
        $ue = 9;
    }
    if($ump != ""){
        $ump .= "日";
    }
    if($ue == 9){
        $erhi = "年・月・日のいずれかが選択されていません。";
        $flg = 9;
    }
    //電話番号
    $cal = $_POST["cal"];
    if($cal == ""){
    	$ertel = "電話番号が入力されていません";
    	$flg = 9;
    }else if (preg_match('|^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$|', $cal)) {
    	
	}else{
		$ertel = "電話番号の形式が適切ではありません";
    	$flg = 9;
	}
    //メールアドレス
    $mail = $_POST["address"];
    if($mail == ""){
    	$ermail = "メールアドレスが入力されていません";
    	$flg = 9;
    }else if (preg_match('|^[0-9a-zA-Z_./?-]+@([0-9a-z]+\.)+[0-9a-z-]+$|', $mail)) {
    	
	}else{
		$ermail = "メールアドレスの形式が適切ではありません";
    	$flg = 9;
	}
    //パスワード
    $pass01 = $_POST["pass01"];
    $pass02 = $_POST["pass02"];
    if($pass01 == "" || $pass02 == ""){
    	$erpass = "パスワードが入力されていません";
    	$flg = 9;
    }else if($pass01 == $pass02){
        $pass = $pass01;
        $strpass = strlen($pass);
        if (preg_match('/([0-9].*[a-zA-Z]|[a-zA-Z].*[0-9])/', $pass)) {	
        	if($strpass >= 6 && $strpass <= 20 ){
        		
        	}else{
        		$erpass = "パスワードは6文字以上20文字未満です";
                $flg = 9;
        	}
		
		}else{
			$erpass = "数字と英単語両方含んでください";
    		$flg = 9;
		}
    }else{
        $erpass = "パスワードが異なっています。もう一度入力してください";
        $flg = 9;
    }
    
    
    if($flg == 9){
    $nname = $_POST["sei"];
    $knname = $_POST["ksei"];
    $hsex = $_POST["radioprice"];
    $hken = $_POST["ken"];
    $nenn = $_POST["nen"];
    $tuki = $_POST["tuki"];
    $hi = $_POST["hi"];
    $cal = $_POST["cal"];
    $mail = $_POST["address"];
    $ps1 = $_POST["pass01"];
    $ps2 = $_POST["pass02"];
    }else{
    	header('Location: kosincheck.php?sei='.$_POST["sei"].'&ksei='.$_POST["ksei"].'&radioprice='.$_POST["radioprice"].'&ken='.$_POST["ken"].'&nen='.$_POST["nen"].'&tuki='.$_POST["tuki"].'&hi='.$_POST["hi"].'&cal='.$_POST["cal"].'&address='.$_POST["address"].'&pass='.$pass.'');
    	exit();
    }
}

if(isset($_POST["submit03"])){ //確認ページから入力ページ
    $nname = $_POST["1"];
    $sname = $_POST["2"];
    $knname = $_POST["3"];
    $ksname = $_POST["4"];
    $hsex = $_POST["5"];
    $hken = $_POST["6"];
    $nenn = $_POST["7"];
    $tuki = $_POST["8"];
    $hi = $_POST["9"];
    $cal = $_POST["10"];
    $mail = $_POST["11"];
    $ps1 = $_POST["12"];
    $ps2 = $_POST["12"];
    //$ps2 = $_POST["pass02"];
}
?>