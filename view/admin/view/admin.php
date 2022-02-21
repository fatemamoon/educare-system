<?php
    session_start();
    
    if(empty($_SESSION['uname']))
    {
        header("location: ../project/admin_login.php");
    }
?>
<html>
    <head>
        <h1><center>Welcome to admin page<center></h1>
        <hr>
    </head>
    <body>
        <h4>visit your profile <a href = "../view/admin_profile.php"> view profile</a></h4>
        //<h4>To see students <a href = "../view/admin_ah.php">click here!</a></h4>
        //<h4>To see faculty <a href = "../view/admin_emp.php">click here!</a></h4>

        <form action="../control/admin_notice.php" method="POST">
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