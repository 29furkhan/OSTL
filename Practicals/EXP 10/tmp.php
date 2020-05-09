<?php
	if(isset($_POST['email'])){
		checkEmail();
	}
	if(isset($_POST['name'])){
		checkName();
	}
	
	if(isset($_POST['casid'])){
		checkCasid();
	}

	if(isset($_POST['age'])){
		checkAge();
	}

	function checkEmail(){
		$email = $_POST['email'];
		$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
		if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
			$bool = ['value' => '1'];
	    	echo json_encode($bool);
		} 
		else{
	    	echo "0";
		}
	}

	function checkName(){
		$name = $_POST['name'];
		$regex = '/^[a-zA-Z ]*$/'; 
		if(preg_match($regex, $name)) { 
    		$bool = ['value' => '1'];
    		echo json_encode($bool);
    	} 
    	else{
    		$bool = ['value' => '0'];
    		echo json_encode($bool);
    	}
	}

	function checkCasid(){
		$casid = $_POST['casid'];
		$regex = '/^[S|s]{1}[0-9]{10}$/'; 
		if(preg_match($regex, $casid)) { 
    		$bool = ['value' => '1'];
    		echo json_encode($bool);
    	} 
    	else{
    		$bool = ['value' => '0'];
    		echo json_encode($bool);
    	}
	}

	function checkAge(){
		$age = $_POST['age'];
		if(filter_var($age, FILTER_VALIDATE_INT))
		{
			$bool = ['value' => '1'];
    		echo json_encode($bool);
		}
		else{
			$bool = ['value' => '0'];
    		echo json_encode($bool);
		}
	}
	
	

?>
	