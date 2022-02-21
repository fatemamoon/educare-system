<?php
    session_start();
    require("../model/db.php");
?>
<html>
    <head>
        <h1><center>Faculty<center></h1>
        <a href = "../view/faculty.php"><-go back</a>
        <hr>        
    </head>
    <body>
    <center>
    <?php    
    $connection = new db();
    $conobj = $connection->OpenCon();

    $userQuery = $connection->ShowAll($conobj,"faculty");

    if($userQuery !== false && $userQuery->num_rows > 0)
    {       
        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Gender</th><th>dDate Of Birth</th><th>Email</th><th>Job position</th><th>uname</th><th>Password</th></tr>";
        while($row = $userQuery->fetch_assoc())
        {
            echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["email"]."</td><td>".$row["jobpos"]."</td><td>".$row["uname"]."</td><td>".$row["pwd"]."</td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo "0 results";
    }
?>

    </center>
    </body>
</html>