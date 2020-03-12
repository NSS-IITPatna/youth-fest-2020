<?php
include("utility.php");
// register user
function registerUser(){
    if($_SERVER['REQUEST_METHOD']=="POST"){

		//Initializing the variables
		$errors=array();
		$messages=array();
		$response=array();

		//Extracting datas from the post request
        $name=clean($_POST['name']);
		$email=trim(clean($_POST['email']));
		$phone=clean($_POST['phone']);
		$dob=clean($_POST['dob']);
		$college=clean($_POST["college"]);
		$degree=clean($_POST['degree']);
		$department=clean($_POST['department']);
		$address=clean($_POST['address']);

		//Undergoing various data checks
		if(empty($name)){
			$errors[]="Name cannot be empty.";
		}

		if(empty($phone)){
			$errors[]="Phone number field cannot be empty.";
		}

		if(empty($degree)){
			$errors[]="Degree field cannot be empty.";
		}

		if(empty($department)){
			$errors[]="Department field cannot be empty.";
		}

		if(strlen($email)<9){
			$errors[]="Your email cannot have less then 9 characters.";
		}

		if(strlen($phone)<10){
			$errors[]="Your phone number cannot have less then 10 digits.";
		}

		if(strlen($dob)!=10){
			$errors[]="Please enter valid date of birth.";
		}

		if(strlen($degree)==0){
			$errors[]="Degree field cannot be empty.";
		}

		if(strlen($address)==0){
			$errors[]="Address field cannot be empty.";
		}

		//Returning the errors to the request page, if errors are found
		if(!empty($errors)){
			$response['status']=400;
			$response['messages']=$errors;
			echo json_encode($response);
		}else{//Re cleaning the datas

			$name=escape($name);
			$email=escape($email);
			$phone=escape($phone);

			$dob=escape($dob);
			$degree=escape($degree);
			$department=escape($department);
			$address=escape($address);

			//Composing the email to be send for verification
			$subject="Youth Fest'20 Registration";
			$msg="
				<h3>Thank you $name for registering in Youth Fest'20. Our team will contact you soon.</h3>

				<h4>Thank You</h3>
				<h4>With Regards</h4>
				<h4>NSS IIT Patna</h4>
			";

			if(send_email($email,$subject,$msg)){

				$sql="INSERT INTO users( name, email, phone, dob, degree, department, address, college) VALUES('$name', '$email', '$phone', '$dob', '$degree', '$department' '$address', '$college')";
				$result=query($sql);
				confirm($result);
				//Composing the response
				$response['status']=200;
				$messages[]="You have been registered successfully. Please check your email for more details.";
				$response['messages']=$messages;
				echo json_encode($response);

			}else{
				$response['status']=400;
				$errors[]="Registration failed because we failed to send you the confirmation mail.";
				$response['messages']=$errors;
				echo json_encode($response);
			}//Else part of registration failing during sending email


		}
	}
}