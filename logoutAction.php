<?php 
//include "dbconnection/connection.php";

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();

//DIRECT TO index page? 
header("Location: index.php");

?>