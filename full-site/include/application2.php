<?php session_start(); 
GLOBAL $mes;
include('config.php');
include_once('lang.php');

$day = date("Y-m-d H:i:s",strtotime("-1 hour")); 
//include('../bd_check.php');
//$check = mysql_query("SELECT * FROM calls where dates >= CURRENT_TIME - INTERVAL 1.5 HOUR" ,$DB);

	function clear_phone($phone){
		
		$phone=	str_replace("+38", "", $phone);
		$phone = str_replace("(", "", $phone);
		$phone = str_replace(")", "", $phone);
		$phone = str_replace("-", "", $phone);
			
			return $phone;
	}

$_POST['phone']=clear_phone($_POST['phone']);

$num = $_POST['phone'];
$name = $_POST['name'];
$dat = date("Y-m-d H:i:s");  
$good = 0;

$time = date("H:i:s");
if( !empty($_POST['resp_employee']) ) {
    $Id = $_POST['resp_employee'];
} else {
    $Id = 64; //54
}
define('CRM_HOST', 'riverside-development.bitrix24.ua'); // Домен срм системы smartorange.bitrix24.ru riverside-development.bitrix24.ua
define('CRM_PORT', '443'); 
define('CRM_PATH', '/crm/configs/import/lead.php'); 
define('CRM_LOGIN', 'gav.sqrt@gmail.com');  // логин
define('CRM_PASSWORD', '4561210_gav'); // пароль
 print_r($_POST);
 print_r($_FILES);
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
    $postData = array(
        'TITLE' => $_POST['metka'], // сохраняем нашу метку и формируем заголовок лида
        'NAME' => $_POST['firstName'],   // сохраняем имя
        'LAST_NAME' => $_POST['lastName'], //фамилия
        'PHONE_WORK' => $_POST['phone'], //сохраняем телефон
        'EMAIL_WORK' => $_POST['email'], //сохраняем почту
        'PRODUCT_ID' => $_POST['brand'], //имя продкута(бренд)
        'COMMENTS' => $_POST['description'], //Описание
        'UF_CRM_1485774805' => $_POST['inn'], //сохраняем ИНН UF_CRM_1485437157
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
        'UF_CRM_1510830078' => $_FILES['presentationFile']
    );

function addintbd($premiseNumber, $firstName, $lastName, $phone, $email, $brand, $description, $leaseTerm, $leaseType) { 
    GLOBAL $db;

    date_default_timezone_set('Europe/Kiev');

    $premiseNumber = $_POST['premiseNumber'];    
    $firstName = $_POST['firstName'];    
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $leaseTerm = $_POST['leaseTerm'];
    $leaseType = $_POST['leaseRate'];

    $today = date("Y-m-d H:i:s");  
    $ip=$_SERVER["REMOTE_ADDR"];

    $result = $db->query(
    "INSERT INTO `calls_commerc` (`premise`, `first_name`, `last_name`, `phone`, `email`, `brand`, `description`,`lease_term`, `lease_type`, `date`, `ip`)
     VALUES ('$premiseNumber','$firstName', '$lastName', '$phone', '$email', '$brand', '$description', '$leaseTerm', '$leaseType', '$today', '$ip')");

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

$check = $db->query("SELECT * FROM calls_commerc where date >= CURRENT_TIME - INTERVAL 1.5 HOUR");
   while ($myrow = mysqli_fetch_array($check)) {
            if (in_array("$num", $myrow)) {
                //echo "Нашел номер";
                if ($day <= $myrow["dates"]) {
                    ///**echo "Обращался за прошлый час! --- 
                    $good = 1;
                }
            }
          
        }
if($good == 1){
// если 1 то номер есть в базе и за последний час человек оставлял заявку и мы его записываем в базу но не шлем в CRM
addintbd($premiseNumber, $firstName, $lastName, $phone, $email, $brand, $description, $leaseTerm, $leaseType);	
echo 1;
}
else{
//если такого номера нет или он не звонил за последний час, добавляем в базу и отправляем в CRM
// отправляем запрос в срм систему
        fwrite($fp, $str );
        $result = '';
        while (!feof($fp))
        { 
            //$result .= fgets($fp, 128);
        }
        fclose($fp);
 
        $response = explode("\r\n\r\n", $result);
        $output = '<pre>'.print_r($response[1], 1).'</pre>';
	$_SESSION['rezult_text']=$mes['c-mes13'];		
	addintbd($premiseNumber, $firstName, $lastName, $phone, $email, $brand, $description, $leaseTerm, $leaseType);	
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
