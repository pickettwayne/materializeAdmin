<?php
include '../dbconnection/connection.php';

$id = $_POST['id'];


if($_POST['action'] == 'delete'){
    test();
}








function delete(){
    // sql to delete a record
    $sql = "DELETE FROM events WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    //    exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    //    exit;
    }
    
    return;
}



?>
