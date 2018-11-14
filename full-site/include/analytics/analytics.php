<?php
session_start();
print_r($_POST);
if ($_POST)
{
    $utm=array(
        'utm_source' ,
        'utm_medium',
        'utm_campaign' ,
        'utm_term',
        'utm_content',
        'clientId'
    );
    foreach($_POST as $key=>$t)
    {
        $metka= array_search($key,$utm);
        if ($metka!==FALSE)
        {
            $_SESSION[$utm[$metka]]=$t;
        }
    }
}
?>