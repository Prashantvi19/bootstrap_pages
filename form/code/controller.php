<?php 
error_reporting(0);
include('db.php');
if(isset($_POST['register'])) {
	$fullname = $_POST['fname']." ".$_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$contact = $_POST['contactnum'];
	$question = md5 ($_POST['question']);
	$answer = md5( $_POST['answer']);
	$cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
	
	
    if(empty($cpassword&&$password)){	
		$msg='password is compulsory';
		header('location:form.php?msg='.$msg);
		die();
    }
	
	if($cpassword == $password){		
		$cpassword = md5($cpassword);
		$password = md5($password);
	}
	else{	 
		$msg = 'confirm password did match ';  
		header('location:form.php?msg='.$msg);
		die();
		
	}

	$sql = "INSERT INTO `registerform`( `name`, `email`, `contact`, `gender`, `password`, `securityquestion`, `securityanswer`) VALUES ('$fullname','$email','$contact','$gender','$cpassword','$question','$answer')";
	
	$query = mysqli_query($con,$sql);
	
	if($query){
		$msg =  "Inserted Successfully";
	}else{
		$msg = "Something went wrong";
	}
	header('location:form.php?msg='.$msg);
	
}