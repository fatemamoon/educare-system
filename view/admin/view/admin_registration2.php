<?php
    session_start();
    require("../control/admin_registration2_check.php");
?>

<!DOCTYPE HTML>
    <html>
        <head>
            <h1><center>Admin Registration Form</center></h1>
        </head>
        <hr>
        <body>
            <form action="" method="POST">
            <center>
                Your First name is: <?php echo $_SESSION['fname'] ?>
                </br>
                Your Last name is: <?php echo $_SESSION['lname'] ?>
                </br>
                Your mobile number is: <?php echo $_SESSION['mobile'] ?>
                </br>
                Your Date of Birth is: <?php echo $_SESSION['dob'] ?>
                </br>
                Your Username is: <?php echo $_SESSION['uname'] ?>
                </br>
                Your email is: <?php echo $_SESSION['email'] ?>
                </br>
                Your Password is: <?php echo $_SESSION['pwd'] ?>
                </br> 
                </br>
                <input name = "register" type = "submit" value = "Register">
                </br>
                <a href = "../admin_login.php">cancel</a>
            </form>
                <?php
                    echo $msg;
                ?>
            </center>
        </body>
    </html>