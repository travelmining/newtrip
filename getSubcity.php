<?php
require 'ini.php';
if (isset($_GET['cityName'])) $cityName = preg_replace('/[^A-Za-z\_]/', '',$_GET['cityName']);


try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $db->prepare("select subcity,description from wikitravel_district where city=:city");
    $stmt->bindParam(':city', $cityName, PDO::PARAM_STR, 20);
    $stmt->execute(); 
    
	echo '<nav id="navbar-example" class="navbar navbar-default navbar-static subcity" role="navigation">';
	echo '<div class="navbar-header">';
		echo '<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-js-navbar-scrollspy">';
		echo '<span class="sr-only">Toggle navigation</span>';
		echo '<span class="icon-bar"></span>';
		echo '<span class="icon-bar"></span>';
		echo '</button>';
	echo '<a class="navbar-brand" href="#">Overview</a>';
	echo '</div>';
   echo '<div class="collapse navbar-collapse bs-js-navbar-scrollspy">';
	echo '<ul class="nav navbar-nav">';
    
    
    while( $row = $stmt->fetch() )
        {
         if (strlen( $row['description']) > 0) 
	     echo '<li><a href="#' . $row['subcity'] . '">' . $row['subcity'] . '</a></li>';
        }
        
		echo '</ul>';
		echo '</div>';
		echo '</nav>';   

    echo '<div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:400px;overflow:auto; position: relative;">';
    
    $stmt = $db->prepare("select subcity,description from wikitravel_district where city=:city");
    $stmt->bindParam(':city', $cityName, PDO::PARAM_STR, 20);
    $stmt->execute(); 
    while( $row = $stmt->fetch() )
        {
         if (strlen( $row['description']) > 0) 
	     	{
			echo '<h4 id="' . $row['subcity'] . '">' . $row['subcity'] . '</h4>';
			echo '<p>' . $row['description'] . '</p>';
			}
        }
    echo '</div>';

    $db = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>