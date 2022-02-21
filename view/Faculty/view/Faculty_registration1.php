<?php
    session_start();
    include("../control/faculty_registration1_check.php");
?>

<html>
    <head> 
        <a href = "../faculty_login.php"><-cancel</a>            
        <h1><center>Faculty Registration Form</center></h1>
    </head>
    <hr>
    <body>
        <center>
            <form method = "POST" action ="">
                <table>
                    <tr>
                        <td><label for = "uname" >UserName:</td>
                        <td><input type = "text" id = "uname" name = "uname"></td>
                        <td><?php echo $validateuname ?> </td>
                    </tr>
                    <tr>
                        <td><label for = "email" >Email:</td>
                        <td><input type = "email" id = "email" name = "email"></td>
                        <td><?php echo $validateemail ?> </td>
                    </tr>
                    <tr>
                        <td><label for = "pwd" >Password:</td>
                        <td><input type = "password" id = "pwd" name = "pwd"></td>
                        <td><?php echo $validatepwd ?> </td>
                    </tr>
                    <tr>
                        <td><input type = "submit" name = "next2" value = "Next"></td>
                    </tr>
                </table>
            </form>                
        </center>


         
    </body>
</html>