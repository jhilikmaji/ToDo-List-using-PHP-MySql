<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <link rel="stylesheet" href="reset.css">
</head>
<body>
    <img src="pic/pic3.png" alt="logo">
    <div class="container">
    <form method="POST" action="resetpass_code.php">
        <div class="div1">
            <p>Reset password</p>
            <input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">
           <div class="input_box">
               
                <lable style="font-size: 1.2rem; color: rgb(48, 20, 48);"></lable>
                <input placeholder="Enter Password" name="password" type="password" required>
                <input placeholder="Confirm Password" name="rpassword" type="password" required>
            </div>
            <div class="input_box">
                <input type="submit" value="submit">
                
            </div>
            <?php
                    if(isset($_GET['msg'])){ ?>
			      <span style="text-align: center; font-size:1.2rem;  color:white;"><?php echo $_GET['msg']; ?></span> 
                   <?php } ?>
        </div>
    </form>
    </div>
</body>
</html>