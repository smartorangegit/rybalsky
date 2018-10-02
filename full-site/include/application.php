<?php session_start(); 
GLOBAL $mes;
include('config.php');
include_once('lang.php');

$day = date("Y-m-d H:i:s",strtotime("-1 hour")); 
//include('../bd_check.php');
//$check = mysql_query("SELECT * FROM calls where dates >= CURRENT_TIME - INTERVAL 1.5 HOUR" ,$DB);

function clear_phone($phone){
    $phone=	str_replace("+(38)", "38", $phone);
    $phone = str_replace("-", "", $phone);
    $phone = str_replace(" ", "", $phone);
    if($phone{0}=='0'){
        $str = $phone;
        $str1 = substr($str,1);
        $phone = '380'.$str1;
    }
    return $phone;
}

	 $utm=array(
		'utm_source' ,
		'utm_medium',
		'utm_campaign' ,
		'utm_term', 
		'utm_content' 
		);	
	$utms=array();	
	foreach($utm as $key=>$t)
	{
		if (isset($_SESSION[$t]))
		{
			$utms[]=$_SESSION[$t];
		}
		else
		{
			$utms[]='no_utm';
		}			
	}	



$phone= clear_phone($_POST['phone']);
$name = $_POST['name'];
$dat = date("Y-m-d H:i:s");  
$good = 0;

$time = date("H:i:s");
if( !empty($_POST['resp_employee']) ) {
    $Id = $_POST['resp_employee'];
} else {
    $Id = 1; //1 54
}

define('CRM_HOST', 'riverside-development.bitrix24.ua'); // Домен срм системы smartorange.bitrix24.ru riverside-development.bitrix24.ua
define('CRM_PORT', '443'); 
define('CRM_PATH', '/crm/configs/import/lead.php'); 

	if ($_POST['typ'] == 8) {
		define('CRM_LOGIN', 'a.sharshakow@saga-development.com.ua');  // логин
		define('CRM_PASSWORD', 'saga123'); // пароль
	}
	else {
		define('CRM_LOGIN', 'gav.sqrt@gmail.com');  // логин
		define('CRM_PASSWORD', '4561210_gav'); // пароль
	}
/********************************************************************************************/
if(empty($_POST['count']) || $_POST['count'] == 0){
    if(!empty($_POST['count2'])){
        $count=$_POST['count2'];
    }
    elseif(!empty($_POST['count3'])){
        $count=$_POST['count3'];
    }
}
else{
    $count=$_POST['count'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    /*
}
 $recaptcha=$_POST['g-recaptcha-response'];
    if(!empty($recaptcha))
    {


		function getCurlData($url)
{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$curlData = curl_exec($curl);
		curl_close($curl);
		return $curlData;
}
		
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $secret='6LcslBAUAAAAAGRXod9EkYYb7zTIS331y8sFI7r5';
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
        $res=getCurlData($url);
        $res= json_decode($res, true);
        //reCaptcha введена
     	if($res['success'])
        {
            */
    if($count !=0 || $count > 0) {
		 // получаем данные из полей и задаем название лида

	
if ($_POST['typ'] == 8) {
    $postData = array(
        'TITLE' => $_POST['metka'], // сохраняем нашу метку и формируем заголовок лида
        'NAME' => $_POST['name'],   // сохраняем имя
        'PHONE_WORK' =>$phone, // сохраняем телефон
        'EMAIL_WORK' => $_POST['email'], // сохраняем почту
        'UF_CRM_1485774805' => $_POST['inn'], // сохраняем ИНН UF_CRM_1485437157
	'ASSIGNED_BY_ID' => $Id,
	'ADDRESS' => $_POST['webad'],
	'UF_CRM_1527676517'	=> $_POST['name_an'],
	'UF_CRM_1485774841' => $time, //UF_CRM_1485510398
	'UF_CRM_1485774828' => $_POST['formData'], //UF_CRM_1485507619
	'UF_CRM_1517487869'=>$utms[0],
	'UF_CRM_1517487957'=>$utms[1],
	'UF_CRM_1517488014'=>$utms[2],
	'UF_CRM_1517489120'=>$utms[3],
	'UF_CRM_1517489335'=>$utms[4]
    );
}
else{
	    $postData = array(
        'TITLE' => $_POST['metka'], // сохраняем нашу метку и формируем заголовок лида
        'NAME' => $_POST['name'],   // сохраняем имя
        'PHONE_WORK' =>$phone, // сохраняем телефон
        //'EMAIL_WORK' => $_POST['mail'], // сохраняем почту
        'UF_CRM_1485774805' => $_POST['inn'], // сохраняем ИНН UF_CRM_1485437157
	'ASSIGNED_BY_ID' => $Id,
	'ADDRESS' => $_POST['webad'],
	'UF_CRM_1485774841' => $time, //UF_CRM_1485510398
	'UF_CRM_1485774828' => $_POST['formData'], //UF_CRM_1485507619
	'UF_CRM_1482673502' => $Id,
	'UF_CRM_1482673914' => $Id,
	'UF_CRM_1482674081' => $Id,
	'UF_CRM_1482676798' => $Id,
	'UF_CRM_1482676815' => $Id,
	'UF_CRM_1482676857' => $Id,
	'UF_CRM_1482676886' => $Id,
	'UF_CRM_1482677121' => $Id,
	'UF_CRM_1482677307' => $Id,
	'UF_CRM_1517487869'=>$utms[0],
	'UF_CRM_1517487957'=>$utms[1],
	'UF_CRM_1517488014'=>$utms[2],
	'UF_CRM_1517489120'=>$utms[3],
	'UF_CRM_1517489335'=>$utms[4]
    );
}
	
	
	
	
function addintbd($name,$phone,$formData,$typs,$kv,$crm=0){ GLOBAL $db;

date_default_timezone_set('Europe/Kiev');
$today = date("Y-m-d H:i:s");  
$ip=$_SERVER["REMOTE_ADDR"];
$phone= clear_phone($_POST['phone']);
$name = $_POST['name'];
$formData = $_POST['formData'];

//echo $today."<br>".$today."<br>".$ip."<br>".$name."<br>".$phone."<br>".$formData."<br>".$typs."<br>";

$result = $db->query("INSERT INTO `calls` (`dates`, `ip`, `name`, `fhonenumber`, `texts`, `typs`,`kv`,`crm`) VALUES ('$today', '$ip', '$name', '$phone', '$formData', '$typs', '$kv','$crm')");
//$result->execute();  $result->close();
		return $db->insert_id;  		
}
 
    // авторизация, проверка логина и пароля
    if (defined('CRM_AUTH'))
    {
        $postData['AUTH'] = CRM_AUTH;
    }
    else
    {
        $postData['LOGIN'] = CRM_LOGIN;
        $postData['PASSWORD'] = CRM_PASSWORD;
    }
 
    $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
    if ($fp)
    {
        // формируем и шифруем строку с данными из формы
        $strPostData = '';
        foreach ($postData as $key => $value)
            $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
            $str .= "Host: ".CRM_HOST."\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: ".strlen($strPostData)."\r\n";
            $str .= "Connection: close\r\n\r\n";
 
        $str .= $strPostData;

$check = $db->query("SELECT * FROM calls where dates >= CURRENT_TIME - INTERVAL 1.5 HOUR");
   while ($myrow = mysqli_fetch_array($check)) {
            if (in_array("$phone", $myrow)) {
                //echo "Нашел номер";
                if ($day <= $myrow["dates"]) {
                    ///**echo "Обращался за прошлый час! --- 
                    $good = 1;
                }
            }
          
        }
		
		$insert_id=addintbd($name,$phone,$formData, $typs=$_POST['typ'], $kv,0);	
		
if($good == 1){
// если 1 то номер есть в базе и за последний час человек оставлял заявку и мы его записываем в базу но не шлем в CRM

echo 1;
}
else{
//если такого номера нет или он не звонил за последний час, добавляем в базу и отправляем в CRM
// отправляем запрос в срм систему
        fwrite($fp, $str );
        $result = '';
        while (!feof($fp))
        { 
            $result .= fgets($fp, 128);
        }
        fclose($fp);
 
        $response = explode("\r\n\r\n", $result);
        $output = '<pre>'.print_r($response[1], 1).'</pre>';
	$_SESSION['rezult_text']=$mes['c-mes13'];		
	
	$error=str_replace("'", '"',$response[1]);
		$error=json_decode($error);
			
			$format = "\n\n[" . date('Y-m-d H:i:s') . "]\nTel: ".$phone."\n";
			$message=$format."\n".$result."\n".$_SERVER['HTTP_USER_AGENT']."\n";

			$path = $_SERVER['DOCUMENT_ROOT']."/log/call.log";
			file_put_contents($path, $message,FILE_APPEND);
			if ($error->error) {$crm=$error->error;} else {$crm=0;}
					
			if ($error->error!=201) {
				$mail = array(  
				'to' => "vitaliyzell@gmail.com",  
				'subject' => "ОШИБКА ОТПРАВКИ ЛИДА В CRM",  
				'message' => 'Ошибка отправки лида в CRM с формы "'.$_POST['metka'].'" для номера '.$phone,  
				'headers' => "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: ОШИБКА ОТПРАВКИ ЛИДА В CRM <errorloger@email.ua>\r\n"
					);  

				$rez=mail($mail['to'], $mail['subject'], $mail['message'], iconv ('utf-8', 'windows-1251', $mail['headers']));
			}
			
	   // addintbd($name,$phone,$formData, $typs=$_POST['typ'], $kv,$crm);
		 $result = $db->query("UPDATE `calls` SET `crm` = $crm WHERE `id` = $insert_id;");
	echo 1;
}
    
    }
    else
    {
        echo 'Connection Failed! '.$errstr.' ('.$errno.')';
    } 
		
	 }
        else
        {
          
			echo $mes['Ви заповнили не всі поля'];
        }
/*
    	}
    else
    {
        $msg="Please re-enter your reCAPTCHA.";
		echo 0;
    }
 */
   
    
}
?>
