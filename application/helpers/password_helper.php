<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	if( !function_exists('verify')){
		function verify($password1 , $password2){
			if( strcmp($password1, $password2) == 0){
				return true;
			}else{
				return false;
			}
		}
	}

?>