<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$mail_to = 'info@peritosmexico.com.mx';
		$subject = 'Contacto de peritosmexico.com.mx';
		$name = trim($_POST["name"]);
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$phone = trim($_POST["phone"]);
		$message = trim($_POST["message"]);

		if(empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($message)){
			http_response_code(400);
			echo 'Complete el formulario e inténtelo nuevamente.';
			exit;
		}

		$content = '<h1>Peritos México</h1>
					<h2>Contacto de peritosmexico.com.mx</h2>';
		
		$content .= '<table cellpadding="10" width="100%">
					<tr>
					<td><strong>Nombre: </strong></td>
					<td>' . $name . '</td>
					</tr>

					<tr>
					<td><strong>Correo electrónico: </strong></td>
					<td><a href="mailto:' . $email . '">' . $email . '</a><br></td>
					</tr>

					<tr>
					<td><strong>Telefono: </strong></td>
					<td>' . $phone . '</td>
					</tr>

					<tr>
					<td><strong>Mensaje: </strong></td>
					<td>' . $message . '</td>
					</tr>

					</table>';

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: peritosmexico.com.mx <info@peritosmexico.com.mx>' . "\r\n";

		$success = mail($mail_to, $subject, $content, $headers);

		if($success){
			http_response_code(200);
			echo '¡Gracias! Hemos recibido tu mensaje.';
		} else{
			http_response_code(500);
			echo 'Ooops! Algo salió mal, por favor inténtelo nuevamente';
		}
	}
	else{
		http_response_code(403);
		echo 'Hubo un problema, no se pudo enviar el mensaje.';
	}

?>