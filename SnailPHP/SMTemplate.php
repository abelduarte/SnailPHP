<?php
	
/* 
	Created by: Dulayne, Inc
	Date created: November 11, 2014
	
	Description: 
	SMTemplate allows you to load predefined HTML email templates and replace placeholder text 
	using the format argument. This class builds the HTML document by looking up all keys from
	the key-value array and replacing them in the HTML document with their corresponding value.
*/
	

class SMTemplate
{
	public $html;
	
	/*
	Constructor for SMTemplate class
	
	@brief Loads the specified template and replaces the placeholder values with the values defined in the format
	dictionary.
	
	@param $template the name of the html file inside the templates folder. You do not need to specify 
	the extension.
	
	@param $format A key-value array defining all the placeholder keys to replace with the specified values
	
	*/
	
	function __construct($template, $format) 
	{
		$html = file_get_contents('templates/'.$template.'.html', true);
		
		foreach($format as $key => $value) 
		{
			$html = str_replace("{".$key."}", $value, $html);
		}
				
		$this->html = $html;
    }
    
    /*
	Returns the HTML string of the loaded template after having replaced the placeholders with the real values
	
	@brief returns an HTML string after all placeholders have been replaced by their real values
	
	@return an HTML string
	*/
    
    function html()
    {
	    return $this->html;
    }
}
	
?>