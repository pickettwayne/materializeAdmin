<?php 
include "dbconnection/connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
//$result = $conn->query($sql);

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);



//echo "<pre>" . print_r($row, 1) . "</pre>";
//exit;




    if ($result->num_rows == 1) {
        session_start();
        //SET SESSION ??
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['login_time'] = time();
            $_SESSION['logged_in'] = 1;
     
//            print_r($_SESSION);
//            exit;
            
            
            
        //DIRECT TO HOME PAGE? 
        header("Location: home.php");
        
    }else{
       echo "User cannot be found!";

       //DIRECT TO HOME PAGE? 
        header("Location: index.php");
       
    }

?>