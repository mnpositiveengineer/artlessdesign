<?php
  $visitor_email = $_POST['email'];
  $visitor_project = $_POST['project'];
  $visitor_city = $_POST['city'];
  $visitor_deadline = $_POST['deadline'];
  $message = $_POST['message'];
  
  $email_from = 'kasia.bryl@artlessdesign.pl';

	$email_subject = "Artless Design - new form submission";

	$email_body = "You have received a new message from the user $visitor_email.\n".
							"Project is $visitor_project.\n".
							"City is $visitor_city.\n".
							"Deadline is $visitor_deadline.\n".
                            "Here is the message:\n $message";
	
	
	mail("katarzyna.bryl@artlessdesign.pl",$email_subject,$email_body);
	header("Location: index.html");					
?>
