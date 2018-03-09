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
   
      <!--<h1 class="header center brown-text">MOC Admin Page</h1>-->
      <div class="row center">
        <h5 class="header light">Events</h5>
      </div>
    </div>
  </div>


  <div class="container">
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Add Event</h4>
            <form class="col s12">
                  <div class="row">
                      <div class="input-field col s6">
                          <input type="text" class="datepicker" id="date"> <label for="date">Date</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <input type="text" class="validate" id="event"> <label for="event">Event</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <input type="text" class="validate" id="venue"> <label for="venue">Venue</label>
                      </div>
                      <div class="input-field col s12">
                          <input id="round" type="text"> <label for="round">Round</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <!--<i class="material-icons prefix">mode_edit</i>-->
                          <textarea id="comments" class="materialize-textarea" data-length="400"></textarea>
                          <label for="comments">Comments</label>
                      </div>
                  </div>
  <!--                <div class="row">
                      <div class="input-field col s12">
                          <input type="text" class="validate" id="price"> <label for="price">Price (£)</label>
                      </div>
                  </div>-->
                  <div class="row">
                         <div class="col s12">
                           <div class="input-field col s1">
                             <input id="price" type="text" class="validate">
                             <label for="price" >Price (£)</label>
                           </div>
                         </div>
                  </div>
                  <div class="switch">
                      <label>
                        Disable
                        <input type="checkbox">
                        <span class="lever"></span>
                        Enable
                      </label>
                  </div>
              </form>
      </div>
       
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Exit</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Add</a>
      </div>
    </div>
    <!--END OF MODAL-->
   
    <!--MAIN CONTENT SECTION FOR THE EVENTS-->
    <div class="section">
        
        
                        <table id="table" class="striped responsive-table">
                          <thead>
                            <tr>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Venue</th>
                                <th>Venue</th>
                                <th>Round</th>
                                <th>Comments</th>
                                <th>Host</th>
                                <th>Type</th>
                                <th class="right">Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>22-04-2018</td>
                              <td>Newmans Quarry</td>
                              <td>Newmans Quarry</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td class="right">£20</td>
                              <td class="center-align"><i class="material-icons md-40">edit</i></td>
                              <td class="center-align"><i class="material-icons md-40 red-text">delete</i></td>
                            </tr>
                            <tr>
                              <td>22-04-2018</td>
                              <td>Wooton Wawen</td>
                              <td>Wooton Wawen</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td class="right">£20</td>
                              <td class="center-align"><i class="material-icons md-40">edit</i></td>
                              <td class="center-align"><i class="material-icons md-40">delete</i></td>
                            </tr>
                            <tr>
                              <td>07-10-2018</td>
                              <td>Halton</td>
                              <td>Halton</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td class="right">£20</td>
                              <td class="center-align"><i class="material-icons md-40">edit</i></td>
                              <td class="center-align"><i class="material-icons md-40">delete</i></td>
                            </tr>
                            <tr>
                              <td>18-11-2018</td>
                              <td>Newmans Quarry</td>
                              <td>Newmans Quarry</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td class="right">£20</td>
                              <td class="center-align"><i class="material-icons md-40">edit</i></td>
                              <td class="center-align"><i class="material-icons md-40">delete</i></td>
                            </tr>

                          </tbody>
                        </table>
          
        
    </div>
    
          <!-- Modal Trigger -->
        <div class="center">
            <a class="btn-floating btn-large waves-effect waves-light green btn modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
        </div>
          <div style="clear:both"></div>
    <br>
       
  </div>

    
  <footer class="page-footer orange">
    <div class="container">
                        <div class="row">
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