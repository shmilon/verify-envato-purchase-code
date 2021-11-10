<?php
    error_reporting(0);
 		 ob_start();
    session_start();
    require("language.php");
    require("function.php");
 	header("Content-Type: text/html;charset=UTF-8");
 	
	$envato_purchase_code = filter_input(INPUT_POST, 'envato_purchase_code', FILTER_SANITIZE_STRING);
    
    if($envato_purchase_code==""){
		$_SESSION['msg']="18"; 
		header( "Location:index.php");
		exit;
	}
	else{
		
        $envato_buyer= verify_envato_purchase_code(trim($_POST['envato_purchase_code']));

        if($envato_buyer->buyer!=''){

            $_SESSION['msg']="19";
            $_SESSION['envato_purchase_code'] = $envato_purchase_code;
			header( "Location:verification_details.php");
			exit;
        }else{
			$_SESSION['msg']="18"; 
			header( "Location:index.php");
			exit;
		}
	}
?> 