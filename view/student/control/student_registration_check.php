<?php

    $validatefname = "";
    $validatelname = "";
    $validatemobile = "";
    $validatedate = "";

    if(isset($_POST['next1']))
    {
        $_SESSION['fname'] = $_REQUEST['fname'];
        $_SESSION['lname'] = $_REQUEST['lname'];
        $_SESSION['mobile'] = $_REQUEST['mobile'];
        $_SESSION['dob'] = $_REQUEST['dob'];

        if(empty($_SESSION['fname']))
        {
            $validatefname = "  Enter your First Name PLEASE!";
        } 
        else
        {
            $validatefname = "";
        }

        if(empty($_SESSION['lname']))
        {
            $validatelname = "  Enter your Last Name PLEASE!";
        } 
        else
        {
            $validatelname = "";
        }

        if(empty($_SESSION['mobile']))
        {
            $validatemobile = "  Enter your Mobile Number PLEASE!";
        }
        // else if(new Regex(@"^([01]|\+88)?\d{11}").IsMatch(($_SESSION['mobile'])))
        // {
        //     $validatemobile = "";
        // }
        else
        {
            $validatemobile = "";
        }

        if(empty($_SESSION['dob']))
        {
            $validatedate = "  Enter your Date of Birth PLEASE!";
        } 
        else
        {
            $validatedate = "";
        }

        if($validatefname == "" && $validatelname == ""  && $validatemobile == "" && $validatedate == "")
        {
            $_SESSION['fname'] = $_REQUEST['fname'];
            $_SESSION['lname'] = $_REQUEST['lname'];
            $_SESSION['mobile'] = $_REQUEST['mobile'];
            $_SESSION['dob'] = $_REQUEST['dob'];
            
            header("location: ../view/student_registration1.php");
        }               
    }
?>

    