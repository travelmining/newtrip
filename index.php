<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   <?php
	  include("headbar.php");
   ?>	                        

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-9 col-md-9  main" id="cityContent"> 

		    <div class="home-image-container" >   
		         <h1> Top destinations </h1>
				 <div class="row">
					  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					    <div class="thumbnail">
					      <a href=/main.php?cityName=beijing>
					      <img src="image/beijing/forbiddencity1.jpg" class="img-responsive"/>
					      </a>
					      <div class="caption">
						    <h3>Beijing</h3>
						  </div>
						</div>
				      </div>		  
						
					  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					    <div class="thumbnail">
					      <a href=/main.php?cityName=beijing>
					      <img src="image/beijing/national operahouse.jpg" class="img-responsive"/>
					      </a>
					      <div class="caption">
						    <h3>Beijing</h3>
						  </div>
						</div>
				      </div>
				      					      
					  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					    <div class="thumbnail">
					      <a href=/main.php?cityName=new_york_city>
					      <img src="image/new_york_city/14429809928_0237fe3f11_b.jpg" class="img-responsive"/>
					      </a>					      
					      <div class="caption">
						    <h3>New York City</h3>
						  </div>
						</div>
				      </div>
				      
				      <div class="clearfix visible-xs-block"></div>
				      					      
					  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					    <div class="thumbnail">
					      <img src="image/beijing/forbiddencity1.jpg" class="img-responsive"/>
					      <div class="caption">
						    <h3>Beijing</h3>
						  </div>
						</div>
				      </div>		  
						
					  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					    <div class="thumbnail">
					      <img src="image/beijing/national operahouse.jpg" class="img-responsive"/>
					      <div class="caption">
						    <h3>Beijing</h3>
						  </div>
						</div>
				      </div>
				      					      
					  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					    <div class="thumbnail">
					      <img src="image/new_york_city/14429809928_0237fe3f11_b.jpg" class="img-responsive"/>					      
					      <div class="caption">
						    <h3>New York City</h3>
						  </div>
						</div>
				      </div>
				      
				      <div class="clearfix visible-xs-block"></div>
					  
				 </div><!-- /. row -->     	  	
			</div><!-- /. home-image-container --> 
        </div> <!--/main-->
        
        <div class="col-sm-3 col-md-3 blog-sidebar"> <!--/col-sm-offset-1 -->
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>TravelSite <em>Useful info for travel planning</em> search, plan, travel, and have fun.</p>
          </div>
          <div class="sidebar-module">
            <h4>Top Destinations</h4>
            <ol class="list-unstyled">
              <li><a href="#">New York</a></li>
              <li><a href="#">Las Vegas</a></li>
              <li><a href="#">San Francisco</a></li>
              <li><a href="#">Los Angeles</a></li>
              <li><a href="#">Seattle</a></li>
              <li><a href="#">Hawaii</a></li>
              <li><a href="#">Miami</a></li>
              <li><a href="#">London</a></li>
              <li><a href="#">Paris</a></li>
              <li><a href="#">Rome</a></li>
              <li><a href="#">Beijing</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
         </div><!-- /.blog-sidebar -->
         
      </div> <!--/row-->
    </div> <!--/container-fluid-->
    
    <div class="blog-footer">
      <p>TravelMining: find the best destinations for you!</p>
      <p><a href="#">Back to top</a></p>
    </div>
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-1.11.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <script type="text/javascript" src="script.js"></script >    
  </body>
</html>

