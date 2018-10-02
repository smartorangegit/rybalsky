<?php


header('Content-Type: text/html; charset=utf-8');


$to = "marketing@saga-development.com.ua"; // почта администратора сайта, на который будут приходить письма


if(!empty($_POST["name"]) && !empty($_POST["surname"])&& !empty($_POST["tel"]) && !empty($_POST["house_number"])){ // проверка полей на пустоту, если не пустые данные пришли, то идём дальше
  
    // trim - обрезает пробелы в начале и конце
    // htmlspecialchars - преобразует специальные символы в HTML-сущности
    // strip_tags - удаляет HTML и PHP-теги из строки
    $name = trim(htmlspecialchars(strip_tags($_POST["name"])));
    $tel = trim(htmlspecialchars(strip_tags($_POST["tel"])));
    $surname = trim(htmlspecialchars(strip_tags($_POST["surname"])));
	$house_number = trim(htmlspecialchars(strip_tags($_POST["house_number"])));
	
	


    // проверяем email на валидность
 /*    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { // если не верный e-mail
        echo "<div class='i_false'>E-mail указан не верно!</div>"; // выводим сообщение пользователю
        exit; // выходим из дальнейшей обработки
    } */

    // указываем заголовки
/*     $headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: Название сайта <info@site.ru>' . "\r\n";
$headers .= 'From: Название сайта <info@site.ru>' . "\r\n";
$headers .= 'Bcc: info@site.ru' . "\r\n"; */
    
    // формируем тело письма
    $message = '
    
				Заявка на проведения ивента Жилой комплекс Рыбальский
				Имя: "'.$name.'"
				Фамилия: "'.$surname.'"
                Телефон: "'.$tel.'"
				Заявка: "'.$house_number.'"
                
 
    ';
        echo print_r($message);  
    if(mail($to, "Заявка на проведения ивента Жилой комплекс Рыбальский", $message)){  // если отправка прошла успешно, то...
        echo "<div class='i_true'>Сообщение отправлено!"; // выводим пользователю сообщение
    } else{ // если не отправилось по како-то причине, то...
        echo "<div class='i_false'>Не полуилось отправить сообщение</div>"; // выводим пользователю сообщение
    }
            
} else{ // если пустые данные пришли
    echo "<div class='i_false'>Необходимо заполнить все поля!</div>"; // выводим пользователю сообщение
}


?>