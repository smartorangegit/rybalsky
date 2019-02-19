<?php
$mass = $_POST["anonymous-feedback__message"]."\n";

    $str = strlen($_POST["anonymous-feedback__message"]);
    $probels = substr_count($_POST["anonymous-feedback__message"], " ");

//echo $str;
//echo $probels;

    if($probels>=$str){
        echo 'Неправильный ввод';
    }
    else{
        $to = "marketing@saga-development.com.ua";
        $subject = "Анонимный отзыв";
        $txt = $mass;
        $headers = "From: rybalsky.com.ua" . "\r\n";
        mail($to,$subject,$txt,$headers);
        echo "Ваша отзыв отправлен";
    }

?>