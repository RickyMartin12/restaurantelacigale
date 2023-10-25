<?php


$filename = $_FILES["file"]["name"];

$uploaddir = $_SERVER['DOCUMENT_ROOT']  . '/admin/images/logo/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo 1;
} else {
    echo 0;
}






?>