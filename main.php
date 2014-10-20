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
        
        <div class="col-sm-9 col-md-9  main"> <!--/col-sm-offset-3 col-md-offset-2-->

        <div id="cityName" class="page-header">
		<?php
		    $cityName = $_GET["cityName"];
		    echo  $cityName 
		?>
		</div>
		
		    <div id="image-container" >   
		    
				<div class="row">

				  <div class="col-xs-9 col-sm-9">
				  
				    <ul class="list-inline">
				      <a href="/tab.php?cityName=<?=$_GET["cityName"];?>&tab=attraction" ><button class='btn btn-custom'>Attractions</button></a>
				      <a href="/tab.php?cityName=<?=$_GET["cityName"];?>&tab=hotel" ><button class='btn btn-custom'>Hotels</button></a>
				      <a href="/tab.php?cityName=<?=$_GET["cityName"];?>&tab=rest" ><button class='btn btn-custom'>Restaurants</button></a>
				      <a href="/tab.php?cityName=<?=$_GET["cityName"];?>&tab=itin" ><button class='btn btn-custom'>Itineraries</button></a>
				      <a href="/tab.php?cityName=<?=$_GET["cityName"];?>&tab=build" ><button class='btn btn-custom'>Build Your Itineraries!</button></a>
				    </ul>  				  
					  				  			  					  
				<div>
				  
				</div>	  
					  <!-- Carousel ================== -->

					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
							  <?php
								  $cityName = $_GET["cityName"]; 
								  include("getPhoto.php");
							   ?>			 
						 </div>
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					  </div>	<!-- /.carousel -->	
					  <div>
						<ul class="list-inline">
						  <a>Photos filtered by:</a>
						  <li>Landmark</li>
						  <li>Museum</li>
						  <li>Park</li>
						</ul>
					  </div>
					  
				  </div> <!-- /.col -->	
				  <div class="col-xs-3 col-sm-3">
						<!--<input type="hidden" id="alignment" value="" />
						<div class="alignment btn-group-vertical" data-toggle="buttons-checkbox">
							<button type="button" class="btn btn-default active">Landmark</button>
							<button type="button" class="btn btn-default">Museum</button>
							<button type="button" class="btn btn-default">Park</button>
							<button type="button" class="btn btn-default">Hotel</button>
							<button type="button" class="btn btn-default">Restaurant</button>
							You have selected: <strong></strong>   
							<div id="thanks"> </div>
						</div>-->
				  </div>
				  

				  
			   </div>	<!-- /.row -->		    	    
				
			  <?php include("getSubcity.php"); ?>	  
			</div><!-- /. img container -->



          <h2 class="sub-header">Destination details</h2>
          <div id="destination" class="col-xs-6 col-sm-6">
            Click on a destination link to find out more!
          </div>
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
