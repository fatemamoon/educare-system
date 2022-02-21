<?php
      require("../model/db.php");

      $id=$fname=$lname=$mobile=$dob=$uname=$email=$pwd=$msg="";
  
  
  
      $connection = new db();
  
      $conobj=$connection->OpenCon();
  
      $uname=$_SESSION["unme"];
  
      $userQuery=$connection->ViewProfile($conobj,"student", $uname);
  
     
  
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
?>

     