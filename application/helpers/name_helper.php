<?php

	if( !function_exists('checkName') ){
		function checkName( $nom ){
			if( strcmp($nom , '') == 0 ){
				return false;
			}else{
				return true;
			}
		}
	}
?>
