<?php
    session_start();
    require("../model/db.php");
?>
<html>
    <head>
        <h1><center>Account Holders<center></h1>
        <a href = "../view/student.php"><-go back</a>
        <hr>        
    </head>
    <body>
    <center>
    <?php    
    $connection = new db();
    $conobj = $connection->OpenCon();

    $userQuery = $connection->ShowAll($conobj,"account_holder");

    if($userQuery !== false && $userQuery->num_rows > 0)
    {       
        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Username</th><th>Email</th><th>Password</th><th>Account Type</th></tr>";
        while($row = $userQuery->fetch_assoc())
        {
            echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["uname"]."</td><td>".$row["email"]."</td><td>".$row["pwd"]."</td><td>".$row["account"]."</td></tr>";
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