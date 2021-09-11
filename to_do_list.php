<?php
require('dbconnection.php');
session_start();
if(!isset($_SESSION['loginuser']))
 {
         header('location:login.php');
 }
if(isset($_SESSION['loginuser'])){
$user=$_SESSION['loginuser'];
if(isset($_POST['submit'])){
    $task=$_POST['task'];
   
    

    mysqli_query($con,"INSERT INTO list(todo,username)values('$task','$user')");
    header('location:to_do_list.php');

}
$tasks=mysqli_query($con,"SELECT * FROM list WHERE username='$user'");

$task1=mysqli_num_rows($tasks);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($con,"DELETE FROM `list` WHERE `id`='$id'");
    header('location:to_do_list.php');
}

if(isset($_GET['update']))
{
    $id=$_GET['update'];
    mysqli_query($con,"UPDATE list SET `status`=NOT`status` WHERE `id`='$id'");
    header("location:to_do_list.php");
}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="to_do_list.css">
</head>
<body>
    <h1>TO DO LIST</h1>
    <a href="logout.php" style="color: black;"> <i class="fa fa-sign-out logout" aria-hidden="true">Log out</i></a>
    <div class="container">
        <div class="subcontainer">
          <P>WELCOME</P>
          <span class="spanc"><?php echo $_SESSION['loginuser']; ?></span>
          <form method="post" action="to_do_list.php">
              <div class="input">
                 <input type="text" name="task" name="task" placeholder="What do you need to do" required>
                 <button type="submit" name="submit"><i class="fa fa-plus" aria-hidden="true"></i></button>
              </div>
              <?php
              if($task1>0)
              {?>
              <table style="width:100%">
                <?php
                while($row=mysqli_fetch_array($tasks)){?>
                <tr>
                  <?php
                    if($row['status']=='1'){?>
                    <td style="width:90%">
                      <a href="to_do_list.php?update=<?php echo $row['id']?>"><i style="color: #1a0d00;" class="fa fa-check-circle" aria-hidden="true"></i></a>
                      <span style="text-decoration:line-through; color:brown"><?php echo $row['todo'] ?></span>
                    </td>
                  <?php
                    }
                    else{?>
                    <td style="width:90%">
                      <a href="to_do_list.php?update=<?php echo $row['id']?>"><i style="color:black" class="fa fa-check-circle-o" aria-hidden="true"></i></a>
                      <span><?php echo $row['todo'] ?></span>
                    </td>
                  <?php
                    }?>
                    <td>
                      <a href="to_do_list.php?delete=<?php echo $row['id']?>" style="color: black;"> <i  class="fa fa-times delet" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php } ?>
              </table>
              <?php } 
              else{ ?>
              <div class="div1"> <?php  echo " No Task To do";?></div>
                 
              <?php    
              }
              ?>
          </form>    
        </div>
</div>
</body>
</html>