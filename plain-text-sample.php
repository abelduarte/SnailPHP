<?php

include 'SnailPHP/SnailPHP.php';

/* create a new email and set its content to plain text */
$mail = new SMMail();
$mail->set_from("name@smail.com");
$mail->set_recipients(array("name@smail.com", "nametwo@smail.com"));
$mail->set_subject("Sample email");
$mail->set_plain_message("Hello World!");
$mail->send();
	
?>