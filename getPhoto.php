<?php // getPhoto.php

require 'ini.php';
if (isset($_GET['cityPOI'])) $cityPOI = preg_replace('/[^A-Za-z\_]/', '',$_GET['cityPOI']);
if (isset($_GET['cityName'])) $cityName = preg_replace('/[^A-Za-z\_]/', '',$_GET['cityName']);
$cityPOI = "%$cityPOI%";


try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $db->prepare("select photoname from photo_links where city=:city and inuse=1 and poitype like :poitype");
    //$stmt = $db->prepare("select photoname from photo_links where city=:city and inuse=1");
    $stmt->bindParam(':city', $cityName, PDO::PARAM_STR, 50);
    $stmt->bindParam(':poitype', $cityPOI, PDO::PARAM_STR, 50);
    $stmt->execute(); 
    $j = 0;
    while( $row = $stmt->fetch() )
        {
        if ($j == 0 ) {
			echo ' <div class="item active">';
			}
		else {
			echo ' <div class="item">';
			}
		echo ' <img src="image/' . $cityName . '/' .  $row['photoname'] . '">';
		echo ' <div class="container">';
		echo ' <div class="carousel-caption">';
		echo ' </div>';
		echo ' </div>';
		echo ' </div>';
		$j += 1;
        }

    $db = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }



?>


				