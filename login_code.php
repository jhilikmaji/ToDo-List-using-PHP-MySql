<?php
require('dbconnection.php');
if(isset($_POST['submit']))
$username=$_POST['username'];
$password=$_POST['password'];
$uname=mysqli_query($con,"SELECT * FROM `userdb` WHERE `username`= '$username' AND `password`='$password'")or die("connection error");
$nname=mysqli_num_rows($uname);
if($nname==0)
{
    header('location:login.php?msg=Wrong Userid or Password');
}
else{
    session_start();
    $_SESSION['loginuser']=$username;
    header('location:to_do_list.php');
    
}