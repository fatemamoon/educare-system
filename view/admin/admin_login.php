<?php
    session_start();
    include("../admin/control/admin_login_check.php")
?>
<link rel="stylesheet" href="admin.css">
    <script src="view/admin.js"></script>

<html>
    <head>
    <header class ="header">  Admin Login Page </header>
        
    </head>
    <hr>
    <body>
    
    <div class="regform">
    
   
    <form aciton ="/myaction.php" name="myForm" onsubmit="return validateForm()" method="post">
        <div ID="fullform">
        <div class="formdesign" id="name">
            Name: <input type="text" name="fname" required><b><span class="formerror"> </span></b>
        </div>


        <div class="formdesign" id="pass">
            Password: <input type="password" name="fpass" required><b><span class="formerror"</span></b>
        </div>

    </div>
        <div class="submitbutton" id="submitbutton">
        <input class="submitbutton1" type="submit" value="Submit">
        </div>
    </form>
    </div>
            
               
          
            <h4> Go back to <a href = "../Homepage.php">Homepage</a></h4>
           
    </body>
</html>