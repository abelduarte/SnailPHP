<?php
	
/* 
	Created by: Dulayne, Inc
	Date created: November 11, 2014
	
	Description: 
	SMMail allows you to create and send emails through PHP. SMMail allows
	you to easily specify sender email, recipients, subject, and plain text or 
	HTML emails.
*/

	class SMMail
	{
		public $from;
		public $subject;
		public $message;
		public $recipients;
		public $is_html;
		
		function __construct() 
		{
			$is_html = false;
			$recipients = array();
    	}
    	
    	/*
			Sets the sender's email address
			
			@brief Sets the sender's email address
			
			@param $email the sender's email address
		*/
    	
    	public function set_from($email)
    	{
	    	$this->from = $email;
    	}
    	
    	/*
			Sets the list of recipients
			
			@brief Sets the list of emails to send the email to
			
			@param $recipients an array of emails to send the email to
		*/
    	
    	public function set_recipients($recipients)
    	{
	    	$this->recipients = $recipients;
    	}
    	
    	/*
			Sets the email's subject
			
			@brief Sets the email's subject
			
			@param $subject the text to appear in the email's subject field
		*/
    	
    	public function set_subject($subject)
    	{
	    	$this->subject = $subject;
    	}
    	
    	/*
			Sets the email's content to be plain text using the given string
			
			@brief Sets the email's text content
			
			@param $string the text content of the email
		*/
    	
    	public function set_plain_message($string)
    	{
	    	$this->message = $string;
    	}
    	
    	/*
			Sets the email's content to be HTML using the given HTML string
			
			@brief Sets the email's content to HTML using the given HTML string
			
			@param $html the HTML string to compose the email's body
		*/
    	
    	public function set_html_message($html)
    	{
	    	$this->is_html = true;
	    	$this->message = $html;
    	}
    	
    	/*
			Sends the composed email to the list of recipients
			
			@brief Sends the composed email to the list of recipients
		*/
    	
    	public function send()
    	{
	    	$to = implode(", ", $this->recipients);
	    	
	    	$headers = null;
	    	$additional_parameters = null;
	    	
	    	if(isset($this->from) && strlen($this-from) > 0)
	    	{
		    	$additional_parameters = '-f'.$this->from;
	    	}
	    	
	    	if($this->is_html)
	    	{
		    	$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	    	}
	    	
	    	mail($to, $this->subject, $this->message, $headers, $additional_parameters);
    	}
	}	
?>