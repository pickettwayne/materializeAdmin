<!DOCTYPE html>
<html>
<head>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/logincss/loginmaterialize.css"/>
      <link type="text/css" rel="stylesheet" href="css/logincss/loginstyle.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/loginjs/login.materialize.min.js"></script>
      <script type="text/javascript">
      	
     $(document).ready(function(){
//     $('.modal').modal();

     $('#snipper').hide(); 

     $('#connect').click(function(){
         $('#snipper').show();
         $('#form').hide();
         $('#connect').hide();
       
       });

     });
     
        //START MODAL AUTOMATICALLY AND DON'T ALLOW TO CLOSE IT BY CLICKING OUT OF MODAL!
        $(document).ready(function(){
        $('#modal').modal({dismissible:false});
        $('#modal').modal('open'); 
 });
     
   
       
      </script>
      
	    <title>MOC Login</title>
</head>
<body>


<div class="container">

<!--          <div class="col s10 offset-s1 center-align">
              
              
            <a class=" waves-effect waves-light  btn  red" href="#modal1" style="margin-top:300px;">Admin Login</a>
          </div>-->

          <div id="modal" class="modal">

            <div class="container"> 
            <div class="modal-content">
                  <h4 class="orange-text center-align" style="margin-top:25px;">MOC Admin Login</h4>
                  </br>
                  <form class="cols12" id="form" method="post" action="loginAction.php">
                      	<div class="row">
                        		<div class="input-field cols6">
                               <i class="material-icons prefix red-text">account_circle</i>
                        		   <input placeholder="email" id="email" class="email" name="email" type="text">
                        		</div>
                        		<div class="input-field cols6 ">
                               <i class="material-icons prefix  red-text">lock</i>
                        	    	<input placeholder="Insert Password" id="password" name="password" class="password " type="password">
                        		</div>
                      	</div>

                      
                </div>
                 <div class="spinner" id="snipper">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                        <div class="rect6"></div>
                        <div class="rect7"></div>
               </div>
                <div class="modal-footer">
                   <button class=" orange btn waves-effect waves-light blue" type="submit" name="submit" id="connect">Login</button>
                </div></form>
                <br><br>
          </div>

     </div>

</div>
</body>
</html>