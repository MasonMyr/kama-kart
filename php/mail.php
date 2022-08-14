<?php
	$fio = $_POST['FIO'];
	$number = $_POST['NUMBER'];
    $subject = $_POST['subj'];
	$to = "kama.karting@gmail.com";

	$message = "
	ФИО: {$fio} <br>
	Номер телефона: {$number}";
	$headers = "From: Kama-Kart mail <no-reply@mysite.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
	mail($to, $subject, $message, $headers);
    header("Location: ../index.php");
?>