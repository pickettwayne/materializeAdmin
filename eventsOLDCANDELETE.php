<?php include "header.php"; ?>

    <main class="grey lighten-4">
    <div class="container">
        <h2>Events</h2>
        <div class="row">
 
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
            
                <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Submit <i class="material-icons right">send</i>
                    </button>
                    </div>
                </div>
            </form>
 
        </div>
        <div class="fixed-action-btn" style="bottom: 125px; right: 150 px;">
            <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
        </div>
    </div>
    </main>
    
<?php include "footer.php"; ?>
