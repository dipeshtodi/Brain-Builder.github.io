<?php
     $userName = $_POST['userName'];
     $Password = $_POST['Password'];

   //Database connection
     $con = new mysqli("localhost","root","","firebase_login");
     if($con->connect_error) {
         die("Failed to connect : ".$con->connect_error);
     } else{
         $stmt = $con->prepare("select * from login where userName = ?");
         $stmt->bind_param("s",$userName);
         $stmt->execute();
         $stmt_result = $stmt->get_result();
         if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['Password']===$Password){
                echo "<h2>Login Successful</h2>";
                echo "<a href='dashboard.html'><h2>Go To Dashboard</h2></a>"; // added echo and changed quotes
            } else{
                echo "<h2>Invalid Username or Password</h2>";
            } 
         } else {
            echo "<h2>Invalid Username or Password</h2>";
         }
     } 
?>
