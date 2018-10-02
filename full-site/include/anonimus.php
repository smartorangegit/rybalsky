<?php
$mass = $_POST["anonymous-feedback__message"]."\n";

$to = "marketing@saga-development.com.ua";
$subject = "Анонимный отзыв";
$txt = $mass;
$headers = "From: rybalsky.com.ua" . "\r\n";
mail($to,$subject,$txt,$headers);
echo "Ваша отзыв отправлен";
?>