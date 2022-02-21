<?php
    session_start();
    include("../control/faculty_registration_check.php");
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
                        <td><label for = "fname" >First Name:</td>
                        <td><input type = "text" id = "fname" name = "fname"></td>
                        <td><?php echo $validatefname ?> </td>
                    </tr>
                    <tr>
                        <td><label for = "lname" >Last Name:</td>
                        <td><input type = "text" id = "lname" name = "lname"></td>
                        <td><?php echo $validatelname ?> </td>
                    </tr>
                    <tr>
                        <td><label for = "mobile" >Mobile Number:</td>
                        <td><input type = "tel" id = "mobile" name = "mobile"></td>
                        <td><?php echo $validatemobile ?> </td>
                    </tr>
                    <tr>
                        <td><label for = "dob" >Date of birth:</td>
                        <td><input type = "date" id = "dob" name = "dob"></td>
                        <td><?php echo $validatedate ?> </td>
                    </tr>


                    <tr>
                        <td><input type = "submit" name = "next1" value = "Next"></td>
                    </tr>
                </table>
            </form>                
        </center>

     
    </body>
</html>