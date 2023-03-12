<?php
     $userName = $_POST['userName'];
     $email = $_POST['email'];
     $Password = $_POST['Password'];

   //Database connection
     $con = new mysqli("localhost","root","","firebase_login");
     if($con->connect_error) {
     	die("Failed to connect : ".$con->connect_error);
     } else{
     	$stmt = $con->prepare("insert into signup(userName,email,Password) values(?,?,?)");
     	$stmt->bind_param("sss",$userName,$email,$Password);
     	$stmt->execute();
     	echo "Registration Successful!";
     	$stmt->close();
     	$con->close();

     } 
?>