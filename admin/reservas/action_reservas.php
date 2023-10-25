<?php

date_default_timezone_set('Europe/Lisbon');

require_once '../../common.php';
require_once '../connect.php';
require "../../mail/class.phpmailer.php";
require_once '../../mail/PHPMailerAutoload.php';

$response = 0;

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



switch ($_POST['action']){

/*GRAVAR NOVO REGISTO*/
  case '1':

  	/*GRAVAR NOVO UTILIZADOR*/

    $err='';

    // Topico 1 - Efectura uma Reservar
    

    // Data da  Reserva
    
    $data_reserva = 0;

    if (!$_POST['data_reserva'])
      $err .= "- ".$lang['data_reserva']." <span class='w3-text-red'> *</span><br>";
    else{
      $date_array=explode('/',trim($_POST['data_reserva']));
      $data_reserva=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00'); 
    }
    
    // Hora de Reserva
    
    if ($_POST['hora_reserva']){
      $horas = trim($_POST['hora_reserva']); 
      $hrs = strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].' '.$horas);
    }
    else
    {
        $hrs = $data_reserva;
    }
    
    // Adultos
    
    $adultos = $_POST['adultos'];
    
    // Crianças
    
     $criancas = $_POST['criancas'];
    
    // Bebes
    
    $bebes = $_POST['bebes'];
    
    // Nome
    
    if (!$_POST['nome'])
    {
       $err .= "- ".$lang['nome_cl']." <span class='w3-text-red'> * </span><br>"; 
    }
    else
    {
        $nome = $_POST['nome'];
    }
    
    // Pais
    
    if (!$_POST['pais'])
    {
       $err .= "- ".$lang['pais']." <span class='w3-text-red'> *</span><br>"; 
    }
    else
    {
        $pais = $_POST['pais'];
    }
    
    // Email
    
    $email = "";
    
    if (!$_POST['email'])
    {
       $err .= "- ".$lang['email']." <span class='w3-text-red'> *</span><br>"; 
    }
    else
    {
        if ($_POST['email'])
        {
           if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
           {
             $email = $_POST["email"];
          } 
          else 
          {
            $err .= "- ".$lang['warn_email']."<span class='w3-text-red'> *</span><br>";
          }
        }
        
    }
    
    // Telefone
    
    $telefone = $_POST['telefone'];
    
    if ($telefone == '')
    {
        $telefone = 0;
    }
    
    // Observações
      
    $observacoes = $_POST['observacoes'];
    
    if ($observacoes == '')
    {
        $observacoes = '-/-';
    }
    
    
    
    
    if (!$err) 
    {

        $sql =" INSERT INTO reserva (nome, pais, email, telefone, data_reserva, hora_reserva, adultos, criancas, bebes, observacoes) VALUES ('$nome','$pais','$email', $telefone, $data_reserva, $hrs, $adultos, $criancas, $bebes, '$observacoes')";

        $result = mysqli_query($conn,$sql);
        if ($result) 
        {
            $response = 1; 
            $last_id = mysqli_insert_id($conn);
        }  
        else 
        {
            $response = 0;
            $last_id = 0; 
        }

        $r=array('error'=>'','success' => $response,'id' => $last_id, 'email' => $email);
        echo json_encode($r);
    }
    else
    {
        $r = array('error' =>$err, 'success' =>'','id' =>'', 'email' => $email);
        echo json_encode($r);
    }
    
    if ($response == 1)
    {
        //$to = 'jessicamluis@outlook.com';
        //$to1 = 'jluiscalado@hotmail.com';

        $data_r = $_POST['data_reserva'];
        $hora_r = $_POST['hora_reserva'];

        

// Client

$body_client_alt = "This is the body in plain text for non-HTML mail clients";
$body_client = "<div style='width:95%; margin-left:2.5%;'>
        <h4>".$lang['info_cliente']."</h4>
        <hr>
        <b> ".$lang['nome_cl'].":</b> $nome<br /><br />
        <b> ".$lang['email'].":</b> $email<br /><br />
        <b> ".$lang['pais']." :</b> $pais <br /><br />
        <b> ".$lang['telefone'].":</b> $telefone<br /><br/>
        <b> ".$lang['data_reserva'].":</b> $data_r<br /><br />
        <b> ".$lang['hora_reserva'].":</b> $hora_r<br /><br />
        <b> ".$lang['adultos'].":</b> $adultos<br /><br />
        <b> ".$lang['criancas'].":</b> $criancas<br /><br />
        <b> ".$lang['bebes'].":</b> $bebes<br /><br />
        <b> ".$lang['obs'].":</b> $observacoes<hr>
        <br>".$lang['thank_you1']."<br> 
        ".$lang['thank_you2']." $nome, Restaurant La Cigale.
        </div>";
$subject_client = "Pedido de Reservas";


$from ="jluiscalado@hotmail.com";
$name = "Jéssica Luis Calado";

$to = $email;
$to_name = $nome;


// Envio da Informação para o Cliente

ServersendtoClient($GLOBALS['from'], $GLOBALS['name'], $GLOBALS['to'], $GLOBALS['to_name'], $GLOBALS['subject_client'], $GLOBALS['body_client'], $GLOBALS['body_client_alt']);


// Server

$body_server_alt = "This is the body in plain text for non-HTML mail servers";
$body_server = "<div style='width:95%; margin-left:2.5%;'>
        <h4>Pedido de Reservas ".$lang['la']."</h4>
        <hr>
        <b> Nome:</b> $nome<br /><br />
        <b> Email:</b> $email<br /><br />
        <b> Pais/Nacionalidade :</b> $pais <br /><br />
        <b> Telefone:</b> $telefone<br /><br/>
        <b> Data de Reserva:</b> $data_r<br /><br />
        <b> Hora de Reserva:</b> $hora_r<br /><br />
        <b> Adultos:</b> $adultos<br /><br />
        <b> Crianças:</b> $criancas<br /><br />
        <b> Bebes:</b> $bebes<br /><br />
        <b> Observações:</b> $observacoes<hr>
        <br>
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
    
    
    
    break;
    
    case '2':
        
        $reg_del= "DELETE FROM reserva WHERE id ='{$_POST['id']}'";
        $result = mysqli_query($conn,$reg_del);
        if ($result){
          echo 2; 
        }
        else {
          echo 0;
        }
    break;
    
    
}

mysqli_close($conn);
    
?>