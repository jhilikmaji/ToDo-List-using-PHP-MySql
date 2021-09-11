<?php
require('dbconnection.php');
if(isset($_POST['submit']))

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

$semail=mysqli_query($con,"SELECT * FROM `userdb` WHERE `email`='$email'") or die("connection error");
$seemail=mysqli_num_rows($semail);

if($seemail!=0)
{
    header('location:registration.php?msg=This Email id is already exsists');
}
else
{
     if($password==$repassword)
     {
         $password=password_hash($password,PASSWORD_DEFAULT);
         $store=mysqli_query($con,"INSERT INTO `userdb`(`username`,`email`,`password`)values('$username','$email','$password')")or die("connection error");
         if($store)
         {
             header('location:registration.php?msg=Successfully Registered');
          
         }
         else{
             header('location:registration.php?msg=Unsuccessful,Try Again');
         }
     }
     else{
         header('location:registration.php?msg=Password not matched');
     }
}
?>