  <nav class="navbar navbar-default title-color" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#title-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Travel</a>
        </div>  <!--header-->     
		<div class="collapse navbar-collapse" id="title-navbar-collapse">
		  <ul class = "nav navbar-nav navbar-right">
		      <li class="greeting"></li>
			  <li class="showlogin"><a href = "#myModal" data-toggle="modal">login</a></li>
			  <li class="showlogin"><a href = "#myModalJoin" data-toggle="modal">join</a></li>
		  </ul>          
		</div> <!--navbar collapse--> 
  </nav> <!--navbar navigation--> 

    
  <nav class="navbar navbar-inverse" role="navigation">
      <!--div class="container-fluid"-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>      
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Flight</a></li>
            <li><a href="#">Hotel</a></li>
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">My Itins</a></li>
          </ul>
          <div id="dest" class="navbar-form navbar-right" >
            <input type="text" name="cityname" class="form-control" value= "" placeholder="Search...">
            <!--input type="submit" value="go"/-->
          </div>
        </div><!--navbar-collapse collapse-->
      <!--/div--><!--container-fluid-->
    
 </nav> <!--navbar navigation--> 
 
 	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Log in to Travel.com</h4>
		  </div>		  
		  

		   <div class="modal-body">
		   
		       <div class="row">
				  <div class="col-xs-6 col-sm-6" style="padding-right:20px; border-right: 1px solid #ccc;">
						<form class="contact">
						  <fieldset>               
							<ul class="nav nav-list">
								<li class="nav-header">Email</li>
								<li><input class="input-xlarge" value="" type="text" name="Email"></li> 
								<li class="nav-header">Password</li>
								<li><input class="input-xlarge" value="" type="password" name="Password"></li><p style="color:red"></p>
							</ul>
						  </fieldset>

							<button type="button" class="btn btn-primary" id="loginsubmit" data-dismiss="modal">login</button>		
							
							<div class="checkbox">
								<input id="remember" type="checkbox" />
								<label for="remember">Remember me on this computer</label>
							</div>	
						</form>
				  </div>
				  
				  <div class="col-xs-6 col-sm-6">
					<p>New to Travel.com?</p>
					<div>
					  <a href = "#myModalJoin" data-toggle="modal" data-dismiss="modal"> Join now for free </a>
					</div>
					<br/>
					<p>Forget your password? </p>
					<div>
					  <a href = "#resetPassword" data-toggle="modal" data-dismiss="modal"> Reset your password </a>
					</div>	
					<br/>				
					<p> Upload user image? </p>
					<div>
					  <a href = "#myModalUploadImage" data-toggle="modal" data-dismiss="modal"> Add your photo </a>
					</div>
				  </div>
				</div>
				
        </div>

		  <!--div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div-->
		</div>
	  </div>
	</div><!--end of login modal"-->
	
	<!--start of join modal" -->
	<div class="modal fade" id="myModalJoin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Join Travel.com</h4>
		  </div>		  
		  
		   <div class="modal-body">
		   
		       <div class="row">
				  <div class="col-xs-6 col-sm-6" style="padding-right:20px; border-right: 1px solid #ccc;">
						<form class="account">
						  <fieldset>               
							<ul class="nav nav-list">
							    <li class="nav-header ">User Name</li>
								<li><input class="input-xlarge " value="" type="text" name="Username"></li> 
								<li class="nav-header ">Email</li>
								<li><input class="input-xlarge " value="" type="text" name="Email"></li> 
								<li class="nav-header">Password</li>
								<li><input class="input-xlarge " value="" type="password" name="Password"></li>
								<li class="nav-header">Confirm Password</li>
								<li><input class="input-xlarge " value="" type="password" name="ConfirmPassword"></li>
								<li class="nav-header ">Zip Code</li>
								<li><input class="input-xlarge " value="" type="text" name="Zipcode"></li><p style="color:red"></p>						
							</ul>
						  </fieldset>		
						</form>
											
					  <!--div style="margin: 9px 0"; -->
						<button type="button" style="margin: 9px 0" class="btn btn-warning" id="joinsubmit">Join</button>	
					  <!--/div-->							
						 <div class="checkbox">
								<input id="remember" type="checkbox" />
								<label for="remember">Remember me on this computer</label>
						 </div>
						
				  </div>

				  <div class="col-xs-6 col-sm-6">
					<p>Why you'll love it</p>
					<div>
					  <li > Find the best trips </li>
					  <li > See all destinations you saved </li>
					  <li > Share your fun trips with your friends </li>
					</div>

					


				  </div>
				</div>
				
        </div>

		  <!--div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div-->
		</div>
	  </div>
	</div>	
	
	<div class="modal fade" id="myModalUploadImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Upload your picture</h4>
		  </div>		  
		  
		  <div class="modal-body">		   		
				<form id="image_upload_form" enctype="multipart/form-data" method="post">   
				    <input type="file" name="file1" id="file1"><br>
				    <button type="button" style="margin: 9px 0" class="btn btn-info" id="uploadFile">upload Image</button>
				</form>			
				<div id="uploadMsg">         
                </div>	
          </div>


		</div>
	  </div>
	</div>		

	<div class="modal fade" id="resetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Reset password</h4>
		  </div>		  
		  
		  <div class="modal-body">		   		
				<form class="resetPasswordForm">  				 
					<div class="nav-header ">Please reset your password through email:</div>
					<input class="input-xlarge " value="" type="text" name="Email"> 
					<button type="button" style="margin: 9px 0" class="btn btn-info" id="resetPW">Submit</button>
				</form>		
				<div id="resetMsg">         
                </div>		
          </div>

		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="returnMsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Sign up is successful!</h4>
		  </div>		  
		  
		  <div class="modal-body">		   		
				<div id="msg"> 
				<p> Now you can save the trips and share with your friends! </p>
				<p> You can close the window.</p>        
                </div>		
          </div>

		</div>
	  </div>
	</div>
	