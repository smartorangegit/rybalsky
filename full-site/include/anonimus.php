<?php
$mass = $_POST["anonymous-feedback__message"]."\n";

$to = "sergeykhistovoy@gmail.com";
$subject = "Анонимный отзыв";
$txt = $mass;
$headers = "From: rybalsky.com.ua" . "\r\n";
mail($to,$subject,$txt,$headers);
echo "Ваша отзыв отправлен";
?>