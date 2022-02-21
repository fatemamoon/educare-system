<?php
    session_start();
    include("../student/control/student_login_check.php")
?>

<html>
    <head>
        <h1> <center> student Login Page</center> </h1>
        
    </head>
    <hr>
    <body>
        <center>
            <form method="POST">
                <table>
                    <tr>
                        <td><?php echo $validateuname ?> </td>
                        <td><?php echo $validatepwd ?> </td>
                    </tr>
                    <tr>
                        <td><input type = "text" id ="uname" name = "uname" placeholder = "Enter your student username"></td>
                        <td><input type = "password" id = "pwd" name = "pwd" placeholder = "Enter your student password"></td>
                    </tr>
                    <tr>
                        <td><input type = "checkbox" name = "remember">
                            <label for = "remember">Remember Me</td>
                    </tr>
                    <tr>
                        <td><input type = "submit" name= "submit" value = "Login"></td>
                    </tr>
                </table>
            </form>
            <h4> Apply to become an student?<a href = "../student/view/student_registration.php">Click here!</a></h4>
            <br>
            <br>
            <h4> Go back to <a href = "../Homepage.php">Homepage</a></h4>
        </center>  
        
            
    </body>
</html>

     