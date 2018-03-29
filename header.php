<!DOCTYPE html
<html lang="en">
<?php include 'dbconnection/connection.php'?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MOC Admin</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!--TESTING ONE-->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>-->
  <script src='js/script.js' type='text/javascript'></script>
  
  <script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
        });
        
          $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 200, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
            ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
              console.log(modal, trigger);
            },
            complete: function() { alert('Entry Added!!'); } // Callback for Modal close
            
            
          }
        );

    })
</script>

</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">MOC</a>
      <ul class="right hide-on-med-and-down">
            <li><a href="news.php">News</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="results.php">Results</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
            <li><div class="user-view">
              <div class="background"></div>
                <a href="#!user"><img class="circle" src="images/sidebarImage.jpg"></a>
                <a href="#!name"><span class="white-text name">LOGGED IN USER HERE</span></a>
                <a href="#!email"><span class="white-text email">EMAIL ADRESS HERE .COM</span></a>
              </div>
            </li>
            <li><a href="news.php">News</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="results.php">Results</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>