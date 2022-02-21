<?php
    class db
    {
        function OpenCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "educare";
    
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

            return $conn;
        }

        function CheckUser($conn, $table, $username, $password)
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."' AND pwd='". $password."'");
            return $result;
        }

        function ShowAll($conn,$table)
        {
            $result = $conn->query("SELECT * FROM $table");
            return $result;
        }

        function ViewProfile($conn,$table,$uname)
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $uname."'");
            return $result;
        }
        function ViewProfile1($conn,$table,$id)
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."'");
            return $result;
        }

        function UpdateProfile($conn, $table, $id, $fname, $lname, $mobile, $dob, $uname, $email, $pwd)

        {

            $result = $conn->query("UPDATE $table SET fname ='$fname', lname='$lname', mobile='$mobile', dob='$dob', uname='$uname', email='$email', pwd='$pwd' WHERE id='$id'");

            return $result;      

        }


        function CloseCon($conn)
        {
            $conn->close();
        }
    }
?>