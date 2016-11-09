<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                                 // Enable verbose debug output
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';				//Host do gmail
$mail->Port = 587;					//porta livre segundo o comando "telnet smtp.gmail.com 587"
$mail->SMTPAuth = true;
$mail->SMTPSecure = tls;
$mail->Username = 'projetotransversal1.20162@gmail.com';                 // SMTP username
$mail->Password = 'projetotransversal';                          	 // SMTP password

$mail->setFrom('projetotransversal1.20162@gmail.com', 'UIBA');	     // Email de quem vai
$mail->addAddress('linsgabri@gmail.com', 'NOME DO CLIENTE (pode omitir)');   // Email para quem vai
//$mail->addAddress('ellen@example.com');                    // Caso precise mandar para mais de um
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'UIBA Processo';
$mail->Body    = 'Caro aluno, \n Informamos que há atualização em seu pedido.\n\n <b>A equipe UIBA agradece.</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'ERRO ao enviar email';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email enviado';
}
