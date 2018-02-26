<!DOCTYPE html>
<html>
<head>
<meta name="layout" />
<title>Welcome to Materializecss - Sass way</title>
 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/materialize.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>

<style type="text/css">
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}
 
main {
    flex: 1 0 auto;
}
</style>

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
    })
</script>

</head>
 
<body>
 
    <header>
        <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#!">News</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="#!">Location</a></li>
          <li><a href="#!">Results</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
             <li><div class="user-view">
               <div class="background"></div>
                 <a href="#!user"><img class="circle" src="images/sidebarImage.jpg"></a>
                 <a href="#!name"><span class="white-text name">LOGGED IN USER HERE</span></a>
                 <a href="#!email"><span class="white-text email">EMAIL ADRESS HERE .COM</span></a>
               </div>
             </li>
             <li><a href="#!"><i class="material-icons">info</i>News</a></li>
             <li><a href="events.php"><i class="material-icons">perm_contact_calendar</i>Events</a></li>
             <li><a href="#!"><i class="material-icons">place</i>Locations</a></li>
             <li><a href="#!"><i class="material-icons">assistant_photo</i>Results</a></li>
         </ul>
        </div>
      </nav>
 
    </header>