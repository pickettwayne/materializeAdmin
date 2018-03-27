<?php 
include "dbconnection/connection.php";

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM events WHERE id=".$id;

mysqli_query($conn,$query);

echo "DELETED";