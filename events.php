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
    <!--<form class="col s12" action="eventsAdd.php" method="post" id ="addEvent" name="addEvent">-->
    <form class="col s12" action="" method="post" id="addEvent">
        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">
              <h4>Events</h4>
                      <div class="row">
                          <div class="input-field col s6">
                              <input type="text" class="datepicker" id="date" name="date"> <label for="date">Date</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input type="text" class="validate" id="event" name="event"> <label for="event">Event</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input type="text" class="validate" id="venue" name="venue"> <label for="venue">Venue</label>
                          </div>
                          <div class="input-field col s12">
                              <input id="round" type="text" name="round"> <label for="round">Round</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <!--<i class="material-icons prefix">mode_edit</i>-->
                              <textarea id="comments" class="materialize-textarea" data-length="400" name="comments"></textarea>
                              <label for="comments">Comments</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input type="text" class="validate" id="host" name="host"> <label for="host">Host</label>
                          </div>
                          <div class="input-field col s12">
                              <input type="text" class="validate" id="type" name="type"> <label for="type">Type</label>
                          </div>
                      </div>  
              
                      <div class="row">
                             <div class="col s12">
                               <div class="input-field col s13">
                                 <!--<input id="price" type="text" class="validate">-->
                                 <input id="price" type="text" name="price">
                                 <label for="price" >Price (£)</label>
                               </div>
                             </div>
                      </div>
          </div>

          <div class="modal-footer">
            <a class="modal-action modal-close waves-effect waves-green btn-flat ">Exit</a>

            <!--GET THE ADD BUTTON WORKING!-->
            <button type="submit" id="addButton"><a class="modal-action modal-close waves-effect waves-green btn-flat">Add</a></button>
          </div>
        </div>
        <!--END OF MODAL-->
    </form>
    
                    <script>
                            $(document).on('click','#addButton',function(e) {
                                var data = $("#addEvent").serialize();
                                $.ajax({
                                    data: data,
                                    type: "post",
                                    url: "eventsAdd.php",
                                    success: function(data){
                                        alert("Data: " + data);
                                    }
                                });
                            });
                    </script>
    
    <!--MAIN CONTENT SECTION FOR THE EVENTS-->
    <div class="section">
                <!--<h5 class="header light">Events</h5>-->
                        <table id="table" class="striped responsive-table centered">
                          <thead>
                            <tr>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Venue</th>
                                <th>Round</th>
                                <th>Comments</th>
                                <th>Host</th>
                                <th>Type</th>
                                <th>Price</th>

                            </tr>
                          </thead>
                          <tbody>
                              <?php 
                                $query = "SELECT * FROM events";
                                $result = mysqli_query($conn,$query);

                                $count = 1;
                                while($row = mysqli_fetch_array($result) ){
                                    $id = $row['id'];
                                    $date = strtotime($row['date']);
                                    $event = $row['event'];
                                    $venue = $row['venue'];
                                    $round = $row['round'];
                                    $comments = $row['comments'];
                                    $host = $row['host'];
                                    $type = $row['type'];
                                    $price = $row['price'];

                               ?>
                              
                            <tr>
                                <!--<td align='center'><?php echo $id; ?></td>-->
                                <td class="width10"><strong><?php echo date('d-m-Y', $date);?></strong></td>
                                <td ><?php echo $event; ?></td>
                                <td><?php echo $venue; ?></td>
                                <td><?php echo $round; ?></td>
                                <td class="trun"><?php echo $comments; ?></td>
                                <td><?php echo $host; ?></td>
                                <td><?php echo $type; ?></td>
                                <td><?php echo "£" . $price; ?></td>
                                <td>
                                    <i class="material-icons md-40 green-text">edit</i>
                                    <span class='delete' id='del_<?php echo $id; ?>'><i class="material-icons md-40 red-text">delete</i></span>
                                </td>
                            </tr>
                                <?php
                                        $count++;
                                    }
                                ?>
                              
                          </tbody>
                        </table>
    </div>
    
                  <!-- Modal Trigger -->
        <div class="left">
            <a class="btn-floating btn-large waves-effect waves-light green btn modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
        </div>   
          
          <div style="clear:both"></div>
    <br>
       
  </div>

<?php include 'footer.php' ?>