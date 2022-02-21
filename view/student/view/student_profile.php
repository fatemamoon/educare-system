<?php
    session_start();
    require("../model/db.php");
    include("../control/student_profile_check.php");

    $connection = new db();
    $conobj=$connection->OpenCon();
    $uname = $_SESSION["uname"];
    $userQuery=$connection->ViewProfile($conobj,"student",$uname);
    
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
            $_SESSION["id"] = $row["id"];
            $_SESSION["fname"] = $row["fname"];
            $_SESSION["lname"] = $row["lname"];
            $_SESSION["mobile"] = $row["mobile"];
            $_SESSION["dob"] = $row["dob"];
            $_SESSION["uname"] = $row["uname"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["pwd"] = $row["pwd"];
?>           
            <html>
                <head>
                    <h1>Profile of <?php echo $_SESSION["fname"] ?> </h1>
                </head>
                <body>
                    <form action = "" method = "POST">
                        <table>
                            <input type = "hidden" id="id" name="id" value= <?php echo $_SESSION["id"]?>>
                            <tr>
                                <td><label for = "fname" >First Name:</td>
                                <td><input type = "text" id = "fname" name = "fname" value =<?php echo $_SESSION["fname"] ?>></td>               
                            </tr>
                            <tr>
                                <td><label for = "lname" >Last Name:</td>
                                <td><input type = "text" id = "lname" name = "lname" value =<?php echo $_SESSION["lname"]?>></td>                              
                            </tr>
                            <tr>
                                <td><label for = "mobile" >Mobile Number:</td>
                                <td><input type = "tel" id = "mobile" name = "mobile" value =<?php echo $_SESSION["mobile"]?>></td>                                
                            </tr>
                            <tr>
                                <td><label for = "dob" >Date of birth:</td>
                                <td><input type = "date" id = "dob" name = "dob" value =<?php echo $_SESSION["dob"]?>></td>               
                            </tr>
                            <tr>
                                <td><label for = "uname" >UserName:</td>
                                <td><input type = "text" id = "uname" name = "uname" value =<?php echo $_SESSION["uname"]?>></td>                              
                            </tr>
                            <tr>
                                <td><label for = "email" >Email:</td>
                                <td><input type = "email" id = "email" name = "email" value =<?php echo $_SESSION["email"]?>></td>                              
                            </tr>
                            <tr>
                                <td><label for = "pwd" >Password:</td>
                                <td><input type = "text" id = "pwd" name = "pwd" value =<?php echo $_SESSION["pwd"] ?>></td>                              
                            </tr>
                        </table>
                        <input type="submit" name="update" value="Update">
                    </form> 
                    <?php echo $msg?>     
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

     
