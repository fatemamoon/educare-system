<?php
session_start();
if(session_destroy())
{
    setcookie('uname', "" , time()-3600);
    header("Location: ../student_login.php");
}
?>