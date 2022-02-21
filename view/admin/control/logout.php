<?php
session_start();
if(session_destroy())
{
    setcookie('uname', "" , time()-3600);
    header("Location: ../admin_login.php");
}
?>