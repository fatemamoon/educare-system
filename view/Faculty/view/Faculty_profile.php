<?php
    session_start();
    require("../model/db.php");

    $connection = new db();
    $conobj=$connection->OpenCon();
    $uname = $_SESSION["uname"];
    $userQuery=$connection->ViewProfile($conobj,"faculty",$uname);
    
    if($userQuery !== false && $userQuery->num_rows > 0) 
    {
        while($row = $userQuery->fetch_assoc()) 
        {
            // echo "First Name: ".$row["fname"]."<br>";
            // echo "Last Name: ".$row["lname"]."<br>";
            // echo "Mobile Number: ".$row["mobile"]."<br>";
            // echo "Date of Birth: ".$row["dob"]."<br>";
            // echo "UserName: ".$row["uname"]."<br>";
            // echo "Email: ".$row["email"]."<br>";
            // echo "Password: ".$row["pwd"];
            
            // $_POST["fname"] = $row["fname"];
            // $_POST["lname"] = $row["lname"];
            // $_POST["mobile"] = $row["mobile"];
            // $_POST["dob"] = $row["dob"];
            // $_POST["uname"] = $row["uname"];
            // $_POST["email"] = $row["email"];
            // $_POST["pwd"] = $row["pwd"];
?>           
            <html>
                <head>
                    <h1>Profile of <?php echo $_SESSION["uname"] ?> </h1>
                </head>
                <body>
                    <form action = "" method = "POST">
                        <table>
                            <tr>
                                <td><label for = "fname" >First Name:</td>
                                <td><input type = "text" id = "fname" name = "fname" value =<?php echo $row["fname"]?>></td>               
                            </tr>
                            <tr>
                                <td><label for = "lname" >Last Name:</td>
                                <td><input type = "text" id = "lname" name = "lname" value =<?php echo $row["lname"]?>></td>                              
                            </tr>
                            <tr>
                                <td><label for = "mobile" >Mobile Number:</td>
                                <td><input type = "tel" id = "mobile" name = "mobile" value =<?php echo $row["mobile"]?>></td>                                
                            </tr>
                            <tr>
                                <td><label for = "dob" >Date of birth:</td>
                                <td><input type = "date" id = "dob" name = "dob" value =<?php echo $row["dob"]?>></td>               
                            </tr>
                            <tr>
                                <td><label for = "uname" >UserName:</td>
                                <td><input type = "text" id = "uname" name = "uname" value =<?php echo $row["uname"]?>></td>                              
                            </tr>
                            <tr>
                                <td><label for = "email" >Email:</td>
                                <td><input type = "email" id = "email" name = "email" value =<?php echo $row["email"]?>></td>                              
                            </tr>
                            <tr>
                                <td><label for = "pwd" >Password:</td>
                                <td><input type = "text" id = "pwd" name = "pwd" value =<?php echo $row["pwd"]?>></td>                              
                            </tr>
                        </table>
                    </form>      
                </body>
            </html>
<?php
        }
    } 
    else 
    {
        echo "0 results";
    }
?>

     <!--- /footer ---->
     <?php include 'footer.php'; ?>
    

