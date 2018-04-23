<?php
		session_start();
		require_once("config.php");
		
		use PHPMailer/PHPMailer/PhPMailer;
		use PHPMailer/PHPMailer/Exception;
		use PHPMailer/PHPMailer/SMTP;
		
		require '../PHPMailer-master/src/Exception.php';
		require '../PHPMailer-master/src/PHPMailer.php';
		require '../PHPMailer-master/src/SMTP.php';
		
		//Build the PHPMailer onject;
		$mail=new PHPMailer(true);
		try {
				$mail->SMTPDebug = 2; //see all errors
				$mail->IsSMTP();
				$mail->Host="smtp.gmail.com";
				$mail->SMTPAuth=true;
				$mail->Username="cis10522305328@gmail.com";
				$mail->Password='g+N3Nmtk2We]m8"M';
				$mail->SMTPSecure = "ssl";
				$mail->Port=465;
				$mail->SMTPKeepAlive=true;
				$mail->Mailer = "smtp";
				$mail->setFrom("tuf43998@temple.edu", "Eric O");
				$mail->addReplyto("tuf43998@temple.edu", "Eric O");
		}		$msg "Hello!";
				$mail->addAddress($ToEmailAddress,"Visitor");
		
		?>