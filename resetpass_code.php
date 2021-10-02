<?php
require('dbconnection.php');
// print_r($_REQUEST);
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$email=$_POST['email'];
if($password==$rpassword)
{
     $cpassword=mysqli_query($con,"UPDATE `userdb` SET `password`='$password' WHERE `email`= '$email'")or die(mysqli_error($con));
     if($cpassword)
     {
     
        header('location:resetpass.php?email='.$email.'&msg=Successfully change password');
     }
     else{
        header('location:resetpass.php?email='.$email.'&msg= Not update Successfully');

     }

}
else{
    header('location:resetpass.php?email='.$email.'&msg= password not matched');

}       
    
    

?>