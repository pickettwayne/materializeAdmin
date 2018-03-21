<?php include 'header.php' ?>

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
        <h4>Events</h4>
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
                           <div class="input-field col s13">
                             <!--<input id="price" type="text" class="validate">-->
                             <input id="price" type="text" >
                             <label for="price" >Price (£)</label>
                           </div>
                         </div>
                  </div>
<!--                  <div class="switch">
                      <label>
                        Disable
                        <input type="checkbox">
                        <span class="lever"></span>
                        Enable
                      </label>
                  </div>-->
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
        
        
                        <table id="table" class="striped responsive-table centered">
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
                                <th>Price</th>
                                <th colspan="2">Edit</th>

                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td><strong>22-04-2018</strong></td>
                              <td>Newmans Quarry</td>
                              <td>Newmans Quarry</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>£20</td>
                              <td><i class="material-icons md-40 green-text">edit</i></td>
                              <td><i class="material-icons md-40 red-text">delete</i></td>
                            </tr>
                            <tr>
                              <td><strong>22-04-2018</strong></td>
                              <td>Wooton Wawen</td>
                              <td>Wooton Wawen</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>£20</td>
                              <td><i class="material-icons md-40 green-text">edit</i></td>
                              <td><i class="material-icons md-40 red-text">delete</i></td>
                            </tr>
                            <tr>
                              <td><strong>07-10-2018</strong></td>
                              <td>Halton</td>
                              <td>Halton</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>£20</td>
                              <td><i class="material-icons md-40 green-text">edit</i></td>
                              <td><i class="material-icons md-40 red-text">delete</i></td>
                            </tr>
                            <tr>
                              <td><strong>18-11-2018</strong></td>
                              <td>Newmans Quarry</td>
                              <td>Newmans Quarry</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>£20</td>
                              <td><i class="material-icons md-40 green-text">edit</i></td>
                              <td><i class="material-icons md-40 red-text">delete</i></td>
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