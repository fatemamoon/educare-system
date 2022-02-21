<?php

        $msg="";
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "educare";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error)
        {
            die("connection failed: " . $conn->connect_error);
        }

        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
        $mobile = $_SESSION['mobile'];
        $dob = $_SESSION['dob'];
        $uname = $_SESSION['uname'];
        $email = $_SESSION['email'];
        $pwd = $_SESSION['pwd'];
        
        if(isset($_POST['register']))
        {
            $sql = "INSERT INTO faculty(fname,lname,mobile,dob,uname,email,pwd) VALUES('$fname','$lname','$mobile','$dob','$uname','$email','$pwd')";

            if($conn->query($sql) == TRUE)
            {
                $msg = " Registered Successfully";
?>
                <html>
                    <head></head>
                    <body>
                        <a href = "../faculty_login.php"> <-- Login Page </a>
                    </body>
                </html>
<?php                
            }

            else
            {
?>
                <html>
                    <head></head>
                    <body>
                        <a href = "../view/faculty_registration.php"> <-- Try again </a>
                    </body>
                </html>
<?php
                $msg ="Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
?>