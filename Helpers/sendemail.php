<?php
//print_r($_POST);
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$allok = true;
$toemails = array();

$toemails[] = array(
				'email' => 'info@micromercio.com', // Your Email Address
				'name' => 'EMail MIcromercio',
			);

// Form Processing Messages
$message_success = 'Hemos recibido <strong>correctamente</strong> su mensaje y nos pondremos en contacto en breve.';

// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = ''; // Your reCaptcha Secret

$mail = new PHPMailer();
$mail->Encoding = 'base64';
$mail->CharSet = 'UTF-8';
// If you intend you use SMTP, add your SMTP Code after this Line


if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['email'] != '' ) {
		$sumandoa = $_POST['sumandoa'];
		$sumandob = $_POST['sumandob'];
		$result = $_POST['result'];
		if ($sumandoa+$sumandob!=$result){$allok=false;}
		
		$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
		$email = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$service = isset( $_POST['services'] ) ? $_POST['services'] : '';
		$subject = isset( $_POST['subject'] ) ? "Contacto desde web MICROMEDIA: ".$_POST['subject'] : '';
		$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

		$subject = $subject ? $subject : 'Nuevo Mensaje desde la plataforma';

		$botcheck = $_POST['template-contactform-botcheck'];

		if( $botcheck == '' ) {

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			
			$mail->AddAddress( 'info@micromercio.com' , 'Mail Micromercio Site');
			$mail->Subject = $subject;

			$name = isset($name) ? "Nombre: $name<br><br>" : '';
			$email = isset($email) ? "Email: $email<br><br>" : '';
			$phone = isset($phone) ? "Telefono: $phone<br><br>" : '';
			$service = isset($service) ? "Servicio: $service<br><br>" : '';
			$message = isset($message) ? "Mensaje: $message<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Formulario enviado desde: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $phone $service $message $referrer";


			// Runs only when reCaptcha is present in the Contact Form
			if( isset( $_POST['g-recaptcha-response'] ) ) {

				$recaptcha_data = array(
					'secret' => $recaptcha_secret,
					'response' => $_POST['g-recaptcha-response']
				);

				$recap_verify = curl_init();
				curl_setopt( $recap_verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify" );
				curl_setopt( $recap_verify, CURLOPT_POST, true );
				curl_setopt( $recap_verify, CURLOPT_POSTFIELDS, http_build_query( $recaptcha_data ) );
				curl_setopt( $recap_verify, CURLOPT_SSL_VERIFYPEER, false );
				curl_setopt( $recap_verify, CURLOPT_RETURNTRANSFER, true );
				$recap_response = curl_exec( $recap_verify );

				$g_response = json_decode( $recap_response );

				if ( $g_response->success !== true ) {
					echo '{ "alert": "error", "message": "Captcha no valido! Intentelo nuevamente." }';
					die;
				}
			}

			// Uncomment the following Lines of Code if you want to Force reCaptcha Validation

			// if( !isset( $_POST['g-recaptcha-response'] ) ) {
			// 	echo '{ "alert": "error", "message": "Captcha not Submitted! Please Try Again." }';
			// 	die;
			// }

			$mail->MsgHTML( $body );
			if ($allok==true){
			$sendEmail = $mail->Send();
			}else{
			$sendEmail = false;	
			}
			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $message_success . '" }';
			else:
				echo '{ "alert": "error", "message": "Ha habido un problema al enviar el mensaje, por favor vuelva a intentarlo. }';
			endif;
		} else {
			echo '{ "alert": "error", "message": "Bot <strong>Detected</strong>.! Clean yourself Botster.!" }';
		}
	} else {
		echo '{ "alert": "error", "message": "Por favor<strong>Complete</strong> todos los campos." }';
	}
} else {
	echo '{ "alert": "error", "message": "Ha ocurrido un error puntual, por favor inténtelo de nuevo." }';
}

?>