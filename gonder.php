<?php

	if ( $_POST ){

		$adsoyad = htmlspecialchars(trim($_POST['adsoyad']));
		$eposta = htmlspecialchars(trim($_POST['eposta']));
		$mesaj = htmlspecialchars(trim($_POST['mesaj']));

		include 'class.phpmailer.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'GÖNDEREN_EPOSTA_ADRESİ';
		$mail->Password = 'EPOSTA_ŞİFRESİ';
		$mail->SetFrom($mail->Username, 'MUSTAFA Bıkmaz');
		$mail->AddAddress($eposta, $adsoyad);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = 'E-POSTA KONUSU';
		$content = '<div style="background: #eee; padding: 10px; font-size: 14px">'.$mesaj.'</div>';
		$mail->MsgHTML($content);
		if($mail->Send()) {
			// e-posta başarılı ile gönderildi
			echo '<div class="success">E-posta başarıyla gönderildi, lütfen kontrol edin.</div>';
		} else {
			// bir sorun var, sorunu ekrana bastıralım
			echo '<div class="error">'.$mail->ErrorInfo.'</div>';
		}

	}

?>
