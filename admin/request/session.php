<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');


require_once 'connect.php';


session_start();
if(!isset($_COOKIE['name'])) {
    header("Location:login.php");
}


else{
    

//unset($_POST);


?>

<style>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    #content_info
    {
        display: block!important;
    }
</style>

<?php


// Altera«®«ªo dos Accessos aos Utilizadores que s«ªo Admin e SuperUser




if (isset($_COOKIE['access_alt_pri']) == FALSE)
{
    $pri = '';
}
else
{
    $pri = $_COOKIE['access_alt_pri'];
}


$a = $_COOKIE['access'];


$logo = $_COOKIE['logo'];



?>

<?php

  }

?>


