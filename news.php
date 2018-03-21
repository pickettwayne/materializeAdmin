<?php include 'header.php' ?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
   
      <!--<h1 class="header center brown-text">MOC Admin Page</h1>-->
      <div class="row center">
        <h5 class="header light">News</h5>
      </div>
    </div>
  </div>


  <div class="container">
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>News</h4>
            <form class="col s12">
<!--                  <div class="row">
                      <div class="input-field col s6">
                          <input type="text" class="datepicker" id="date"> <label for="date">Title</label>
                      </div>
                  </div>-->
                  <div class="row">
                      <div class="input-field col s12">
                          <input type="text" class="validate" id="event"> <label for="event">Title</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <!--<i class="material-icons prefix">mode_edit</i>-->
                          <textarea id="comments" class="materialize-textarea" data-length="400"></textarea>
                          <label for="comments">Comments</label>
                      </div>
                  </div>


                        <div class="left">
                                   <a><i class="material-icons md-40 red-text">delete</i></a>
                        </div>
                                        
            </form>
      </div>
       
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Add</a>
      </div>
    </div>
    <!--END OF MODAL-->
   
    <!--MAIN CONTENT SECTION FOR THE EVENTS-->
    <div class="section">
        
     
        
                        <table id="table" class="striped responsive-table centered fixed">
                          
                          <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Story</th>
                                </tr>
                          </thead>
                          <tbody>
                                
                            <tr>
                                <td class="title-column-width"><h5>MSA Cover</em></h5></td>
                                <td class="truncate">We are covered by the MSA (motor sports Association). Please register your name and telephone number with one of the officials today</td>
                              <td><i class="material-icons md-40 green-text">edit</i></td>
                            </tr>
                            <tr>
                                <td><h5>Come and have a go</h5></td>
                              <td>Come and have a go at offroading, we offer a variety of different disciplines, tyro, trials, challenges and comp safari. From starting off slow to finding punches and winching yourself around, to zooming round a course as fast as you can. This is your chance to join a Club that will improve your driving skills with a friendly group of like-minded people.</td>
                              <td class="center-align"><i class="material-icons md-40 green-text">edit</i></td>
                            </tr>
                            <tr>
                                <td><h5>MSA Cover</h5></td>
                              <td>We are covered by the MSA (motor sports Association). Please register your name and telephone number with one of the officials today</td>
                              <td><i class="material-icons md-40 green-text">edit</i></td>
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