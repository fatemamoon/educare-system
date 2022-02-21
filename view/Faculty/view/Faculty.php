<?php
    session_start();
    
    if(empty($_SESSION['uname']))
    {
        header("location: ../project/faculty_login.php");
    }
?>
<html>
    <head>
        <h1><center>Welcome to faculty page<center></h1>
        <hr>
    </head>
    <body>
        <h4>visit your profile <a href = "../view/faculty_profile.php"> view profile</a></h4>

        <form action="../control/faculty_notice.php" method="POST">
            <table>
                <tr>
                    <td><label for = "notice" >Notice:</td>
                    <td><textarea id = "notice" name = "notice" rows = "4" cols = "50" ></textarea></td>
                </tr>
                <tr>
                    <td><input type = "submit" name = "submit" value = "Enter"></td>
                </tr>
            </table>
        </form>
        <a href = "../control/logout.php">logout</a>

            
    </body>
</html>