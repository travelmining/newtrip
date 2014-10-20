<?php

require 'ini.php';
//if (isset($_POST['cityPOI'])) $cityPOI = strip_tags($_POST['cityPOI']);
if (isset($_GET['cityName'])) $cityName = $_GET['cityName'];
if (isset($_GET['tab'])) $cityName = $_GET['tab'];
if (isset($_GET['item'])) $item = $_GET['item'];

switch ($tab) {
  case "attraction":
    		try {
			$imgID = '/m/' . $item;
			$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
			$stmt = $db->prepare("select a.poi,a.poiDescription,concat(SUBSTRING_INDEX(b.poiDescription,'/',-1),'.jpg') as img
			from fb_poi a join fb_img b 
			where a.poiID=b.poiID and imgSeqID=0 and b.poiDescription=:imgID;");
			$stmt->bindParam(':imgID', $imgID, PDO::PARAM_STR, 20); 
			$stmt->execute(); 
			while( $row = $stmt->fetch() )
				{
				echo '<div class="media">';
                //echo '<a class="pull-left" href="/item.php?cityName=' . $cityName . '&tab=attraction' . '&item=' . $row['imgID'] . '">';
                echo '<a class="pull-left">';
				echo '<img class="media-object" src="image/fb_new_york_city_resize/' .$row['img']  .'" alt="...">';
				echo '</a>';
				echo '<div class="media-body">';
				echo '<h4 class="media-heading" >' . $row['poi'] . '</h4>';
				echo '<p class="list-group-item-text">' . $row['poiDescription'] .  '</p>';
				echo '</div>';
				echo '</div>';
				}

			$db = null;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
    break;
  case "hotel":
    		try {
			$hotelFbID = '/en/' . $item;
			$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
			$stmt = $db->prepare("select a.hotelName,b.description,concat(SUBSTRING_INDEX(c.imgFbID,'/',-1),'.jpg') as img,
			b.officialsite,b.othersite,d.address,d.zipcode, 
			SUBSTRING_INDEX(a.hotelFbID,'/',-1) as hotelFbID 
			from fb_htl a join fb_hotel b on a.hotelFbID=b.hotelFbID join fb_hotel_img c on a.hotelFbID=c.hotelFbID 
			join fb_geo d on a.hotelFbID=d.fbID
			where a.hotelFbID=:hotelFbID;");
			$stmt->bindParam(':hotelFbID', $hotelFbID, PDO::PARAM_STR, 20); 
			$stmt->execute(); 
			while( $row = $stmt->fetch() )
				{
				echo '<div class="media">';
                echo '<a class="pull-left">';
				echo '<img class="media-object" src="image/fb_new_york_city_hotel/' .$row['img']  .'" alt="...">';
				echo '</a>';
				echo '<div class="media-body">';
				echo '<h4 class="media-heading" >' . $row['hotelName'] . '</h4>';
				echo '<p class="list-group-item-text">' . 'Street address: ' . $row['address'] . '</p>';
				if (!empty($row['officialsite']))
				  echo '<p class="list-group-item-text">' . 'Website: ' . $row['officialsite'] .  '</p>';
				if (!empty($row['othersite']))  
				  echo '<p class="list-group-item-text">' . 'Other sources: ' . $row['othersite'] .  '</p>';								
				echo '<p class="list-group-item-text">' . $row['description'] .  '</p>';
				echo '</div>';
				echo '</div>';
				}

			$db = null;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
    break;
  case "rest":
		try {
			$restID = '/m/' . $item;
			$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
			$stmt = $db->prepare("select a.restID, a.restName,b.restDescription as restDescription,
			concat(SUBSTRING_INDEX(a.restID,'/',-1),'.jpg') as poipic,
			b.cuisine, concat(b.address, ', NY ', b.zip) as address, c.phone,
			c.rating, c.reviewCnt, c.snippet 
			from fb_rest a,fb_restaurant b,yelp_rest c 
			where  a.restID=b.restID and a.restID =:restID and
			a.restSeq=c.restSeq ;");
			$stmt->bindParam(':restID', $restID, PDO::PARAM_STR, 20);
			$stmt->execute(); 
			while( $row = $stmt->fetch() )
				{
				echo '<div class="media">';
				//echo '<a  class="pull-left" href="/item.php?cityName=' . $cityName . '&tab=rest' . '&item=' . $row['restID'] . '">';
				echo '<a class="pull-left">';
				echo '<img class="media-object" src="image/yelp_new_york_city/' .$row['poipic']  .'" alt="...">';
				echo '</a>';
				echo '<div class="media-body">';
				echo '<h4 class="media-heading" >' . $row['restName'] . '</h4>';
				echo '<p class="list-group-item-text">' . $row['cuisine'] .  '</p>';
				echo '<p class="list-group-item-text">' . $row['phone'] .  '</p>';
				echo '<p class="list-group-item-text">' . $row['address'] .  '</p>';
				echo '<p class="list-group-item-text">' . $row['restDescription'] . '</p>';        
				echo '<p class="list-group-item-text">' . 'Yelp rating: ' . $row['rating'] .  '</p>';
				echo '<p class="list-group-item-text">' . 'Yelp reviews: ' .$row['reviewCnt'] .  '</p>';
				echo '<p class="list-group-item-text">' . 'Yelp review snippet: ' .$row['snippet'] .  '</p>';
				echo '</div>';
				echo '</div>';
				}

			$db = null;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
    break;
  default:
    echo "Your favorite color is neither red, blue, or green!";
}


?>



