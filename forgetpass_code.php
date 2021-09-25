<?php
require('dbconnection.php');
if(isset($_POST['submit'])){
	
	header('location:forgetpass.php?msg= A reset password link send to your mail.');
}
$email= $_POST['email'];

	
                    	$to = "$email";
                    	$subject = "Reset Your Login Password";
                    	
                    	$message = "
                    	<html>
                    	<head>
                    	<title>Reset your Password </title>
                    	</head>
                    	<body>
                    	<p>Dear User,</p>

						<p>Reset your Login password by following these steps:</p>
						
						<p>1. Click this link. <a href='http://localhost/to do list/resetpass.php?email=$email'>http://localhost/to do list/resetpass.php</a> A new browser window will open.</p>
						
						<p>2. Follow the on-screen instructions to reset your password.</p>
                        </body>
                    	</html>";
                    	
                    	
                    	
                    	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
                    	
                    	// More headers
                    	$headers .= 'From:LOGIN <jhilikmaji1998@gmail.com>';
                    	
                        	mail($to,$subject,$message,$headers);
?>