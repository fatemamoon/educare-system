<?php
    session_start();
    
    if(empty($_SESSION['uname']))
    {
        header("location: ../project/student_login.php");
    }
?>
<html>
    <head>
        <h1><center>Welcome to Student page<center></h1>
        <hr>
    </head>
    <body>
        <h4>visit your profile <a href = "../view/student_profile.php"> view profile</a></h4>
        
        <a href = "../control/logout.php">logout</a>

        <br>
        <br>
        <center>
     

        </center>

     
    </body>
</html>