<?php

header("Location: ../index.html");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];




//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "v1270369@gmail.com";                     //SMTP username
    $mail->Password   = 'v1270369skjhfsjiafda';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('v1270369@gmail.com', 'Formulario de solicitud de servicio');
    $mail->addAddress('v1270369@gmail.com');     //Add a recipient
    


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Envio de mensaje COMPRALO YA';
    $mail->Body    = "Nombre: ".$name."<br>email: ".$email."<br>Teléfono: ".$phone."<br>Mensaje: ".$message;
	$mail->send();
	
    echo 'El mensaje se envió';
} catch (Exception $e) {
    echo "Hubo un error al enviar: {$mail->ErrorInfo}";
}



		
					
						
						
?>