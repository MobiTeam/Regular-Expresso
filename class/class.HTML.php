<?php

/**
* @author V.Petrochenko <vladonxp@mail.ru>
* @author A.Yakimchuk <viking0607@mail.ru>
*/

class HTML
{	 
    public static function getPage($url)
	{
	    if(@$content = file_get_contents($url)) {
		    return $content;
		} else {
			return die('Error loading page - "' . $url . '"<br>'); 
		} 		 
	}
	
	public static function getImg($haystack,$mask)
	{
	    return false;	
	}
	
	public static function getText($haystack)
	{
		return false;
	}
	
	public static function getTitle($haystack)
	{
		return false;
	}
	
	public static function getChunk($haystack)
	{
		return false;
	}
		 
}


?>