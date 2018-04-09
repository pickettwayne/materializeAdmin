<?php 
include "dbconnection/connection.php";

$date = date("Y-m-d", strtotime($_POST['date']));
$event = $_POST['event'];
$venue = $_POST['venue'];
$round = $_POST['round'];
$comments = $_POST['comments'];
$host = $_POST['host'];
$type = $_POST['type'];
$price = $_POST['price'];


$query = "INSERT INTO events (date, event, venue, round, comments, host, type, price) VALUES ('$date', '$event', '$venue', '$round', '$comments', '$host', '$type', '$price')";


    $sql_result=mysqli_query($conn,$query);
    
    echo $sql_result;
    exit;
    
    
    if($sql_result){
       echo "inserted successfully";
    }else{
        echo "Query failed".mysqli_error($con);
    }

//if ($conn->query($query) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}