<?php
include ($_SERVER['DOCUMENT_ROOT']."/admin/bd.php");	 

if($_POST['email9']) {
    $message = $_POST["email9"]."\n";
    $file = '../admin/requests_construction_process.txt';  
    $type = 1; 
} else {
    $message = $_POST["email8"]."\n";
    $file = '../admin/requests.txt';
    $type = 0;
}

/*запись в файл 20.09.17*/
$current = file_get_contents($file);
$current .= "Email: " . $message;
file_put_contents($file, $current);
echo "Ваша подписка оформлена!";

$message  = mysql_real_escape_string($message);
$type  = mysql_real_escape_string($type);

if(!empty($message)) {
    $query = "INSERT INTO news_email (email, type) VALUES ('$message', '$type')";
    mysql_query($query) or die (mysql_error());    
}
