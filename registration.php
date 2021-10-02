<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_css.css">
    <title>Registration page</title>
</head>
<body>
    <section>
        <!-- left side image -->
        <div class="image">
            <img src="pic/pic6.gif">
        </div>


        <!-- right side contant -->
        <div class="registration_box">
            <div class="register">
                <h2>Registration </h2>
                <form method="post" action="registration_code.php">
                    <div class="input_box">
                        <span>Username</span>
                        <input type="text" name="username" placeholder="Enter your name" required>
                    </div>
                    <div class="input_box">
                        <span>E_Mail Id</span>
                        <input type="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="input_box">
                        <span>Password</span>
                        <input type="password" name="password" placeholder="Enter Your password" required>
                    </div>
                    <div class="input_box">
                        <span>Confirm Password</span>
                        <input type="password" name="repassword" placeholder="Re enter your Password" required>
                    </div>
                    <div class="input_box">
                        <input type="submit" name="submit" value="Submit"></div>
                </form>
              
                <div>
                    <p style="color: red; font-size:20px"> <?php
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                    ?></p>
                   
                </div>
            </div>
        </div>
    </section>
</body>
</html>