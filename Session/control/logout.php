<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Staffreg.php"); // Redirecting To Home Page
}
?>