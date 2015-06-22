<?php 

   function __autoload($class_name){
	   require_once('class/class.'.$class_name.'.php');	   
   }

?>