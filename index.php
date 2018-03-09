<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>-->

      <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
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
            <li><a href="#!">News</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="#!">Location</a></li>
            <li><a href="#!">Results</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
            <li><div class="user-view">
              <div class="background"></div>
                <a href="#!user"><img class="circle" src="images/sidebarImage.jpg"></a>
                <a href="#!name"><span class="white-text name">LOGGED IN USER HERE</span></a>
                <a href="#!email"><span class="white-text email">EMAIL ADRESS HERE .COM</span></a>
              </div>
            </li>
            <li><a href="#!">News</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="#!">Location</a></li>
            <li><a href="#!">Results</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center brown-text">MOC Admin Page</h1>
      <div class="row center">
        <h5 class="header col s12 light">This page to show Google Analytics Stuff for MOC</h5>
      </div>
<!--      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>-->
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

         Home page to show google analytics.  
      <div class="row">
        <div class="col s12 m4">
<!--          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>-->
        </div>

<!--        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>-->

<!--        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>-->
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
                        <div class="row">
                                                      <!--        <div class="col l6 s12">
                                                                <h5 class="white-text">Company Bio</h5>
                                                                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                                                              </div>-->
                                                      <!--        <div class="col l3 s12">
                                                                <h5 class="white-text">Settings</h5>
                                                                <ul>
                                                                  <li><a class="white-text" href="#!">Link 1</a></li>
                                                                  <li><a class="white-text" href="#!">Link 2</a></li>
                                                                  <li><a class="white-text" href="#!">Link 3</a></li>
                                                                  <li><a class="white-text" href="#!">Link 4</a></li>
                                                                </ul>
                                                              </div>-->
                                                      <!--        <div class="col l3 s12">
                                                                <h5 class="white-text">Connect</h5>
                                                                <ul>
                                                                  <li><a class="white-text" href="#!">Link 1</a></li>
                                                                  <li><a class="white-text" href="#!">Link 2</a></li>
                                                                  <li><a class="white-text" href="#!">Link 3</a></li>
                                                                  <li><a class="white-text" href="#!">Link 4</a></li>
                                                                </ul>
                                                              </div>-->
                        </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Midland Offroad Club 2018
      </div>
    </div>
  </footer>




  </body>
</html>
