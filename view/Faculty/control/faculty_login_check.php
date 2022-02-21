<?php
   require("../faculty/model/db.php");
   $validateuname="";
   $validatepwd="";
   $uname ="";
   $pwd="";

   if(isset($_POST['submit']))
   {
       
       if(empty($_REQUEST['uname']))
       {
            $validateuname = "  Enter your username PLEASE!";
       }
       else
       {
            $validateuname = "";           
       }

       if(empty($_REQUEST['pwd']))
       {
            $validatepwd = "  Enter your password PLEASE!";
       }
       else
       {
            $validatepwd = "";           
       }

       if($validateuname == "" && $validatepwd == "")
       {
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            
            $connection = new db();
            $conobj = $connection->OpenCon();

            $userQuery = $connection->CheckUser($conobj,"faculty",$uname,$pwd);

            if($userQuery !== false && $userQuery->num_rows > 0)
            {
                $_SESSION['uname'] = $uname;
                $_SESSION['pwd'] = $pwd;
                $_SESSION['fname'] = $rows["fname"];
                $_SESSION['lname'] = $rows["lname"];
                $_SESSION['mobile'] = $rows["mobile"];
                $_SESSION['dob'] = $rows["dob"];
                $_SESSION['email'] = $rows["email"];
                if($_SESSION['uname'] == $uname && $_SESSION['pwd'] == $pwd)
                {
                    if(isset($_POST['remember']))
                    {
                        setcookie('uname', $_SESSION['uname'], time()+60*60*30);                      
                        header("location: ../faculty/view/faculty.php");                      
                    }
                    else
                    {
                        $_SESSION['uname'] = $_REQUEST['uname'];
                        $_SESSION['pwd'] = $_REQUEST['pwd'];
                        $_SESSION['fname'] = $rows["fname"];
                        $_SESSION['lname'] = $rows["lname"];
                        $_SESSION['mobile'] = $rows["mobile"];
                        $_SESSION['dob'] = $rows["dob"];
                        $_SESSION['email'] = $rows["email"];
                        header("location: ../faculty/view/faculty.php");                                            
                    }
                }
                else
                {
                    header("location: ../faculty/view/faculty.php");
                    
                }
            }
            else
            {
                echo "error";
            }
       }
       else
       {
            echo "error";
       }
   } 
?>