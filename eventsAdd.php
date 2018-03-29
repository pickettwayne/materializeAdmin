<?php 
include "dbconnection/connection.php";

//$id = $_POST['id'];

echo "here";

    print_r($_POST);
exit;

// Delete record
//$query = "DELETE FROM events WHERE id=".$id;

mysqli_query($conn,$query);

echo "DELETED";