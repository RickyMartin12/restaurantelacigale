<?php

require_once 'PHPMailerAutoload.php';

date_default_timezone_set("Europe/Lisbon");

$mail = new PHPMailer;

$mail->isSendmail();


$result = '';


$return.= $mail->addCustomHeader("Organization" , "restaurantelacigale.com"); 
$return.= $mail->addCustomHeader("Content-Transfer-encoding" , "8bit");
$return.= $mail->addCustomHeader("Message-ID" , "<".md5(uniqid(time()))."@{$_SERVER['SERVER_NAME']}>");
$return.= $mail->addCustomHeader("X-MSmail-Priority" , "Normal");
$return.= $mail->addCustomHeader("X-Mailer" , "Microsoft Office Outlook, Build 11.0.5510");
$return.= $mail->addCustomHeader("X-MimeOLE" , "Produced By Microsoft MimeOLE V6.00.2800.1441");
$return.= $mail->addCustomHeader("X-Sender" , "camiloccferreira@outlook.com");
$return.= $mail->addCustomHeader("X-AntiAbuse" , "This is a solicited email for - restaurantelacigale.com mailing list.");
$return.= $mail->addCustomHeader("X-AntiAbuse" , "Servername - {$_SERVER['SERVER_NAME']}");
$return.= $mail->addCustomHeader("X-AntiAbuse" , "noreply@restauranteacigale.com");

$mail->addCustomHeader($return);

$mail->setFrom('noreply@restaurantelacigale.com');

$mail->addReplyTo('vgspedro15@sapo.pt');

$mail->addAddress('vgspedro15@sapo.pt');

$mail->addAddress('vgspedro@gmail.com');

$mail->Subject = 'PHPMailer sendmail test';

$mail->msgHTML('
<body>
<div style="width:90% margin:auto; height:40px; background:#125f93;">
<div style="width:40%;top:26px;left:4%; height:3px;background:#FFF;position:absolute;z-index:0"></div>
<p style="text-align:center; margin:0">
<img style="height:40px; margin:0 auto;" src="data:image/png;base64,'.base64_encode(file_get_contents("aviao.jpg")).'">
</p>
<div style="width:40%;top:26px;right:4%;height:3px;background:#FFF;position:absolute"></div>
</div>
</body>');

$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>