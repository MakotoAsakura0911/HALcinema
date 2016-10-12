<?php
       if($sex == 1){
        $sex = "男";
       }else{
        $sex = "女";
       }
       //$send_day = date("Y-m-d");
       $body = "Halシネマをご利用いただき、ありがとうございます。\n"
        . "ユーザの登録内容を送らせていただきましたのでご確認ください\n"
        . "お名前(漢字): $name\n"
        . "お名前(カナ): $kname\n"
        . "性別: $sex\n"
        . "都道府県: $ken\n"
        . "生年月日: $umare\n"
        . "電話番号: $cal\n"
        . "パスワード: ************* \n\n";
       //メール内容終了
       $from = "halsinema@hal.ac.jp";
       $to = "$mail";
       mb_send_mail($to, "ご注文の確認", $body, "From:".$from);//メールの送信 
?>
