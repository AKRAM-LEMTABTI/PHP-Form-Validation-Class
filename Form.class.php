<?php

	// SOME FUNCTION FOR VALIDATION INPUTS
	class Form{
		public static function validName($arg){
			return preg_match("#^[a-zA-ZàâäæçèéêëîïœùüûÀÂÄÆÇÈÉÊËÎÏŒÙÜÛ \-]+$#",$arg);
		}
		public static function validEmail($arg){
			return filter_var($arg,FILTER_VALIDATE_EMAIL);
		}
		public static function validPhone($arg){
			return preg_match("#^[+\#]?[0-9]{8,10}$#",$arg);
		}
		public static function validPassword($arg,$min=6){
			$somme=preg_match("#[A-Z]#",$arg)+preg_match("#[a-z]#",$arg)+preg_match("#[0-9]#",$arg);
			if(strlen($arg)>=$min && $somme==3)
				return true;
			else
				return false;
		}
	}?>