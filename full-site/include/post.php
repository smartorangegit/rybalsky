<?php  session_start(); 
GLOBAL $mes;
include('config.php');
include_once('lang.php');

function addintbd($name,$phone,$formData,$typs,$kv){ GLOBAL $db;

date_default_timezone_set('Europe/Kiev');
$today = date("Y-m-d H:i:s");  
$ip=$_SERVER["REMOTE_ADDR"];

//echo $today."<br>".$today."<br>".$ip."<br>".$name."<br>".$phone."<br>".$formData."<br>".$typs."<br>";

$result = $db->query("INSERT INTO `calls` (`dates`, `ip`, `name`, `fhonenumber`, `texts`, `typs`,`kv`) VALUES ('$today', '$ip', '$name', '$phone', '$formData', '$typs', '$kv')");
//$result->execute();  $result->close(); 		
}
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {



$msg='';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $recaptcha=$_POST['g-recaptcha-response'];
    if(!empty($recaptcha))
    {
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $secret='6LcslBAUAAAAAGRXod9EkYYb7zTIS331y8sFI7r5';
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
        $res=getCurlData($url);
        $res= json_decode($res, true);
        //reCaptcha введена
        if($res['success'])
        {
            // Продолжаем проверку данных формы
				                
foreach ($_POST as $key=>$value) {    
$_POST[$key]=$db->real_escape_string(strip_tags($value)); 
}

	$sub=["заказать звонок", "обратной связи", "забронировать квартиру"];
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    // if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
	if (isset($_POST['typ'])) { $typ = $sub[$_POST['typ']];}
	if (isset($_POST['kv'])) { $kv ="http://rybalsky.com.ua".$_POST['kv'];}else{$kv='';}

	$to= "<rybalsky.callback@gmail.com>" . ", " ; /* ,       vvasilcev@gmail.com   rybalsky.callback@gmail.com*/
	$to .= "<resulter2009@gmail.com>";
	
	/* ,       vvasilcev@gmail.com   rybalsky.callback@gmail.com*/
    $sendfrom   = "support@rybalsky.com.ua"; /* ,     ,   ,     */
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Сообщение из формы ".$typ;
	 if($_POST['typ']==1){$t='Комментарий к сообщению';}else{$t='Когда позвонить';}
    $message = "<b>$subject</b><br> <br>
 <b>Сообщение от:</b>  $name </br> <b>Номер для связи:</b> $phone <br> <b>".$t.":</b> $formData" ;
 if($_POST['typ']==2){	$message .="<br> <b>Квартира:</b> <a href='$kv'>$kv</a>";	}
 
echo 1;
 //echo '<pre>'; print_r($_POST); echo '</pre>';
    $send = mail ($to, $subject, $message, $headers);
	//echo '<pre>'; print_r($kv); echo '</pre>';
    if ($send == 'true')
    {
		//Add to bd
		addintbd($name,$phone,$formData, $typs=$_POST['typ'], $kv);
		$_SESSION['rezult_text']=$mes['c-mes13'];
    }
    else
    {
  /*  echo '<center>

<b>.   !</b>

</center>';*/
    }
			
        }
        else
        {
            $msg="Please re-enter your reCAPTCHA.";
			echo 0;
        }

    }
    else
    {
        $msg="Please re-enter your reCAPTCHA.";
		echo 0;
    }

}





} else {
    http_response_code(403);
    echo "  ";
}?>
