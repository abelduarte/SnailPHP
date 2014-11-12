<?php

include 'SnailPHP/SnailPHP.php';

/* load and prefill the HTML template with real data */
$format = array("name" => "Name", "phone" => "786-xxx-xxxx");
$template = new SMTemplate("sample", $format);

/* create a new email and set its content to the template's HTML */
$mail = new SMMail();
$mail->set_from("name@smail.com");
$mail->set_recipients(array("name@smail.com", "nametwo@smail.com"));
$mail->set_subject("Sample email");
$mail->set_html_message($template->html());
$mail->send();
	
?>