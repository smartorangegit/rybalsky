<?
$Server = "smartora.mysql.ukraine.com.ua"; 
$Login = "smartora_ryba"; 
$Password = "wneyfjhn";
$DataBase = "smartora_ryba";

$db = new MySQLi($Server, $Login, $Password, $DataBase);

$result = $db->query("Set charset utf8");
$result = $db->query("Set character_set_client = utf8");
$result = $db->query("Set character_set_connection = utf8");
$result = $db->query("Set character_set_results = utf8");
$result = $db->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 


/*
 include_once('include/config.php');
	  
  $result = $db->prepare("SELECT sec,floor,img   FROM section");    

   $result->execute();  
    $result->bind_result($s1, $s2, $s3); while($result->fetch()){
		echo $s1.$s2.$s3;
		}
 $result->close(); 
*/
?>