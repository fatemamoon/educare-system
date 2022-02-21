<?php

    $validateuname = "";
    $validateemail = "";
    $validatepwd = "";

    if(isset($_POST['next2']))
    {
        $_SESSION['uname'] = $_REQUEST['uname'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['pwd'] = $_REQUEST['pwd'];
       

        if(empty($_SESSION['uname']))
        {
            $validateuname = " -> Enter you username PLEASE!";
        }
        else
        {
            $validateuname = "";
        }
        if(empty($_SESSION['email']))
        {
            $validateemail = " -> Enter your email PLEASE!";
        }
        else if(!preg_match("/^([a-z0-9+-]+)(.[a-z0-9+_-]+)@([a-z0-9-]+.)+[a-z]{2,6}$/ix",$_SESSION['email']))
        {
            $validateemail = " -> INVALID email!";
        }
        else
        {
            $validateemail = "";
        }

        if(empty($_SESSION['pwd'])) 
        {
            $validatepwd = " -> Enter your password PLEASE!";
        } 
        else if(!preg_match("/(?=.[@#$%^&+=]).*$/", $_SESSION['pwd'])) 
        {
            $validatepwd = " -> Password must atleast contain 1 special character";
        } 
        else if(strlen($_SESSION['pwd']) < 8) 
        {
            $validatepwd = " -> Password must contain atleast 8 characters";
        }
        else
        {
            $validatepwd = "";
        }

        if($validateuname == "" && $validateemail == ""  && $validatepwd == "")
        {
            $_SESSION['uname'] = $_REQUEST['uname'];
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['pwd'] = $_REQUEST['pwd'];
                 
            header("location: ../view/admin_registration2.php");
        }               
    }
?>