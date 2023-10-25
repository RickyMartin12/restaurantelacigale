<?php
include_once '../common.php';
include_once "../mail/class.phpmailer.php";
require_once '../mail/PHPMailerAutoload.php';
?>


<?php


// Função que o email do servidor envia ao email do cliente que o cliente receba as informações no seu respectivo email

function ServersendtoClient($from, $name, $to, $to_name, $subject_client, $body_client, $body_client_alt)
{
        
	$mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
	$mail->IsSendmail(); 
	$mail->From = $from;
	$mail->FromName = $name;
	$mail->AddAddress($to, $to_name);
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	$mail->IsHTML(true);                                  // set email format to HTML
	$mail->Subject = $subject_client;
	$mail->Body    = $body_client;
	$mail->AltBody = $body_client_alt;
	!$mail->send() ? $mailsend = 0 : $mailsend = 1;
	return $mailsend;

}

// Função que o email do servidor envia ao email do proprio servidor que o servidor receba as informações no seu respectivo email

function ServersendtoOwnEmail($from, $name, $to1, $to_name1, $to2, $to_name2, $subject_server, $body_server, $body_server_alt)
{
        
	$mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
	$mail->IsSendmail(); 
	$mail->From = $from;
	$mail->FromName = $name;
	$mail->AddAddress($to1, $to_name1);
        $mail->AddAddress($to2, $to_name2);
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	$mail->IsHTML(true);                                  // set email format to HTML
	$mail->Subject = $subject_server;
	$mail->Body    = $body_server;
	$mail->AltBody = $body_server_alt;
	!$mail->send() ? $mailsend = 0 : $mailsend = 1;
	return $mailsend;

}


$error_message = '';


$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['message'];

$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 



if ($nome == '')
{
  $error_message .= '<p> - '.$lang['nome_info'].'*</p>';
}
if ($email == '')
{
  $error_message .= '<p> - '.$lang['email_info'].'*</p>';
}
if ($email != '')
{

  if (!preg_match($regex, $email )) {
    $error_message .= " <p> - ".$email." " .$lang['valid_email']." </p>";
  }
}
if ($mensagem == '')
{
  $error_message .= '<p> - '.$lang['mensagem_info'].'*</p>';
  
}






if (($nome != '') && ($email != '') && ($mensagem != '') && (preg_match($regex, $email ) == true))
{


// Client

$body_client_alt = "This is the body in plain text for non-HTML mail clients";
$body_client = "<div style='width:95%; margin-left:2.5%;'>
                 <h4>".$lang['info_serv']."</h4>
                 <hr><b>".$lang['nome_info'].": </b> $nome<br /><br />
                 <b>".$lang['email_info'].": </b> $email<br /><br/>
                 <b>".$lang['mensagem_info'].": </b> $mensagem<br />
                 <hr>
                 <br>".$lang['thank_you2']." $nome, Restaurante La Cigale.
                 </div>";

$subject_client = "Pedido de Informações";

$from ="jluiscalado@hotmail.com";
$name = "Jéssica Luis Calado";

$to = $email;
$to_name = $nome;


// Envio da Informação para o Cliente

ServersendtoClient($GLOBALS['from'], $GLOBALS['name'], $GLOBALS['to'], $GLOBALS['to_name'], $GLOBALS['subject_client'], $GLOBALS['body_client'], $GLOBALS['body_client_alt']);


// Server

$body_server_alt = "This is the body in plain text for non-HTML mail servers";
$body_server = "<div style='width:95%; margin-left:2.5%;'>
                <h4>Informações de Informações ".$lang['la']."</h4>
                <hr><b> Nome :</b> $nome<br /><br />
                <b> Email:</b> $email<br /><br/>
                <b> Mensagem:</b> $mensagem<br /><hr>
                </div>";


$subject_server = "Pedido de Informações";

$from ="jluiscalado@hotmail.com";
$name = "Jéssica Luis Calado";

$to_server1 = "jluiscalado@hotmail.com";
$to_name1 = "Jéssica Luis Calado";

$to_server2 = "jessicamluis@outlook.com";
$to_name2 = "Jéssica Luis";

ServersendtoOwnEmail($GLOBALS['from'], $GLOBALS['name'], $GLOBALS['to_server1'], $GLOBALS['to_name1'], $GLOBALS['to_server2'], $GLOBALS['to_name2'], $GLOBALS['subject_server'], $GLOBALS['body_server'], $GLOBALS['body_server_alt']);







}





echo $error_message;



if ($error_message == '')
{
  echo 0;
}





          
?>