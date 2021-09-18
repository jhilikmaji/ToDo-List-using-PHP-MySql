
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_css.css">
    <title>Login page</title>
</head>
<body>
    <section>
         


        <!-- left side contant -->
        <div class="registration_box">
            <div class="register">
                <h2>LOGIN</h2>
                <form method="post" action="login_code.php">
                    
                    <div class="input_box">
                        <span>User Id</span>
                        <input type="text" name="username" placeholder="Enter your username">
                    </div>
                    <div class="input_box">
                        <span>Password</span>
                        <input type="password" name="password" placeholder="Enter Your password" required>
                    </div>
                    
                    <div class="input_box">
                      
                            <input type="submit" name="submit" value="Submit">
                      
                    </div>   
                </form>
                <div style="font-size: 25px; color:red; ">
                <?php
			   if(isset($_GET['msg'])){
			       echo $_GET['msg'];
			   }
               ?> 
                </div>
                <div class="input_box">
                     <a href="forgetpass.php">forget password? </a>
                    
                    
                </div>
                <div class="input_box">
                    <p>Don't have an account?  <a href="registration.php">Sing up</a></p>
                    
                    
                </div>
                
            </div>
        </div>
        <!-- right side image -->
        <div class="image">
            <img src="pic/pic6.gif">
        </div>
    </section>
</body>
