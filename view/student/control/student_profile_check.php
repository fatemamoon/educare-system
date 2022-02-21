<?php

    

    $id=$fname=$lname=$mobile=$dob=$uname=$email=$pwd=$msg="";



    $connection = new db();

    $conobj=$connection->OpenCon();

    $id=$_SESSION["id"];

    $userQuery=$connection->ViewProfile1($conobj,"student", $id);

   

    if($userQuery !== false && $userQuery->num_rows > 0)

    {
        while($row = $userQuery->fetch_assoc())

        {      

            $_SESSION["id"] = $row["id"];    

            $_SESSION["fname"] = $row["fname"];

            $_SESSION["lname"] = $row["lname"];

            $_SESSION["mobile"] = $row["mobile"];

            $_SESSION["dob"] = $row["dob"];

            $_SESSION["uname"] = $row["uname"];

            $_SESSION["email"] = $row["email"];

            $_SESSION["pwd"] = $row["pwd"];



        }

    }

    else

    {

     

    }

    if(isset($_POST["update"]))

    {

        $id = $_POST["id"];

        $fname = $_POST["fname"];

        $lname = $_POST["lname"];

        $mobile = $_POST["mobile"];

        $dob = $_POST["dob"];

        $uname = $_POST["uname"];

        $email = $_POST["email"];

        $pwd = $_POST["pwd"];



        $connection = new db();

        $conobj=$connection->OpenCon();

        $userQuery=$connection->UpdateProfile($conobj,"student", $id, $fname, $lname, $mobile, $dob, $uname, $email, $pwd);



        if($conobj->query($userQuery) != TRUE)

        {

            $msg = "Updated successfully!";



            $_SESSION["fname"]=$_POST["fname"];

            $_SESSION["lname"]=$_POST["lname"];

            $_SESSION["mobile"]=$_POST["mobile"];

            $_SESSION["dob"]=$_POST["dob"];

            $_SESSION["uname"]=$_POST["uname"];

            $_SESSION["email"]=$_POST["email"];

            $_SESSION["pwd"]=$_POST["pwd"];

        }

        else

        {

            $msg = "Update Failed!";

        }  

    }

?> 

    