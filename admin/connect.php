<?php

date_default_timezone_set('Europe/Lisbon');//or change to whatever timezone you want

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip1zaikd_lacigale";




$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Erro ao ligar DB" . mysqli_connect_error());
}



header('Access-Control-Allow-Methods: POST');


?>