<HTML lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
  $visitor_email = $_POST['email'];
  $visitor_project = $_POST['project'];
  $visitor_city = $_POST['city'];
  $visitor_deadline = $_POST['deadline'];
  $message = $_POST['message'];
  
  $email_from = 'kasia.bryl@artlessdesign.pl';

	$email_subject = "Artless Design - new form submission";
				
	$email_body = "<span style='font-size:15px'>Nowa wiadomość od użytkownika:</span><br><br><span style='font-size:15px; font-weight:bold;'>$visitor_email</span><br><br>".
							"<span style='font-size:15px'>Typ projektu:</span><br><br><span style='font-size:15px; font-weight:bold;'>$visitor_project</span><br><br>".
							"<span style='font-size:15px'>Miasto: </span><br><br><span style='font-size:15px; font-weight:bold;'>$visitor_city</span><br><br>".
							"<span style='font-size:15px'>Termin realizacji projektu: </span><br><br><span style='font-size:15px; font-weight:bold;'>$visitor_deadline</span><br><br>".
                            "<span style='font-size:15px'>Treść wiadomości:</span><br><br><span style='font-size:15px; font-style: italic;'>$message</span><br><br>";
	
	$headers = "Content-Type: text/html; charset=UTF-8";
	
	mail("katarzyna.bryl@artlessdesign.pl",$email_subject,$email_body, $headers);
	header("Location: index.html");

	$Second_email_to = $visitor_email;
	$Second_subject = "Artless Design - formularz kontaktowy";
	$Second_body = "<span style='font-family: 'Montserrat', sans-serif; font-size:15px;'>Cześć!<br><br>Twój formularz został wysłany. Niebawem skontaktuje się z Tobą w sprawie omówienia projektu. W międzyczasie możesz przesłać mi rzuty, które pozwolą mi przygotować Ci bardziej dopasowaną wycenę. Wystarczy, że odpowiesz mi na tego maila wysyłając Twoje rysunki. Pamiętaj, że Twoje dane osobowe są przeze mnie chronione a wykorzystuje je jedynie w celach przygotowania Ci oferty. <br><br>Zapraszam Cię do kontaktu telefonicznego lub mailowego, jeżeli masz jakieś pytania.<br><br></span>".
	
	"<span style='font-family: 'Montserrat', sans-serif; font-size:12px;'>Z pozdrowienami<br></span>".
	"<span style='font-family: 'Montserrat', sans-serif; font-size:12px; font-weight: bold;'>Katarzyna Bryl<br></span>".
	"<span style='font-family: 'Montserrat', sans-serif; font-size:12px; font-weight: bold;'>katarzyna.bryl@gmail.com<br></span>".
	"<span style='font-family: 'Montserrat', sans-serif; font-size:12px; font-weight: bold;'>666 987 556<br></span>".
	"<img style='width: 215.74px; height: auto;' src='https://postimg.cc/Yj7H0QGb'/>";
	
	$headers = "From: katarzyna.bryl@gmail.com\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8";
	
	mail($Second_email_to, $Second_subject, $Second_body, $headers);
?>
</body>
</html>
