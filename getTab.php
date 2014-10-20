<?php

require 'ini.php';
if (isset($_GET['cityName'])) $cityName = $_GET['cityName'];
if (isset($_GET['tab'])) $tab = $_GET['tab'];


switch ($tab) {
  case "attraction":
    	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		//$stmt = $db->prepare("select type, poi from wikitravel_poi where city=:city and type like :type ");
		$stmt = $db->prepare("select poi, left(a.poiDescription,100) as description
		,concat(SUBSTRING_INDEX(b.poiDescription,'/',-1),'.jpg') as img, 
		SUBSTRING_INDEX(b.poiDescription,'/',-1) as imgID
		from fb_poi a, fb_img b, city c where a.poiID=b.poiID and a.cityID=c.cityID and c.cityName =:city and imgSeqID=0;");
		$stmt->bindParam(':city', $cityName, PDO::PARAM_STR, 20);
		//$stmt->bindParam(':type', $cityPOI, PDO::PARAM_STR, 15); 
		$stmt->execute(); 
		$i = 1;
		while( $row = $stmt->fetch() )
			{
			echo '<div class="col-lg-3 col-md-3 col-sm-3  col-xs-3">';
			echo '<div class="thumbnail">';
			echo '<a href="/item.php?cityName=' . $cityName . '&tab=attraction' . '&item=' . $row['imgID'] . '">';
			echo '<img src="image/fb_new_york_city_resize/' . $row['img'] . '" class="img-responsive"/>';
			echo '</a>';
			echo '<div class="caption">';
			echo '<h5>' .$row['poi'] . '</h5>';
			echo '<p>' .$row['description'] . '...' .'</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			if (($i%4)==0)
			echo '<div class="clearfix visible-xs-block"></div>';
			$i = $i + 1; 
			}

		$db = null;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
    break;
  case "hotel":
		try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$stmt = $db->prepare("select a.hotelName,b.description,concat(SUBSTRING_INDEX(c.imgFbID,'/',-1),'.jpg') as img,SUBSTRING_INDEX(a.hotelFbID,'/',-1) as hotelFbID 
		from fb_htl a join fb_hotel b on a.hotelFbID=b.hotelFbID join fb_hotel_img c on a.hotelFbID=c.hotelFbID 
		join city d on a.cityID=d.cityID and d.cityName=:city where imgSeqID=0;");
		$stmt->bindParam(':city', $cityName, PDO::PARAM_STR, 20);
		$stmt->execute(); 
		$i = 1;
		while( $row = $stmt->fetch() )
			{
			echo '<div class="media">';
			echo '<a class="pull-left" href="/item.php?cityName=' . $cityName . '&tab=hotel' . '&item=' . $row['hotelFbID'] . '">';
			echo '<img class="media-object" src="image/fb_new_york_city_hotel/' .$row['img']  .'" alt="..." height="150" width="150">';
			echo '</a>';
			echo '<div class="media-body">';
			echo '<h4 class="media-heading" >' . $row['hotelName'] . '</h4>';
			echo '<p class="list-group-item-text">' . $row['description'] . '</p>';
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
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		//$stmt = $db->prepare("select type, poi from wikitravel_poi where city=:city and type like :type ");
		$stmt = $db->prepare("select SUBSTRING_INDEX(a.restID,'/',-1) as restID, a.restName,left(b.restDescription,200) as description,
		concat(SUBSTRING_INDEX(a.restID,'/',-1),'.jpg') as img,
		b.cuisine, concat(b.address, ', d.state ', b.zip) as address, c.phone from fb_rest a,fb_restaurant b,yelp_rest c,city d 
		where  d.cityName=:city and a.cityID=d.cityID and a.restID=b.restID and a.restSeq=c.restSeq and CHAR_LENGTH(b.restDescription)>15;");
		$stmt->bindParam(':city', $cityName, PDO::PARAM_STR, 20);
		//$stmt->bindParam(':type', $cityPOI, PDO::PARAM_STR, 15); 
		$stmt->execute(); 
		$i = 1;
		while( $row = $stmt->fetch() )
			{
			echo '<div class="media">';
			echo '<a class="pull-left" href="/item.php?cityName=' . $cityName . '&tab=rest' . '&item=' . $row['restID'] . '">';
			echo '<img class="media-object" src="image/yelp_new_york_city/' .$row['img']  .'" alt="...">';
			echo '</a>';
			echo '<div class="media-body">';
			echo '<h4 class="media-heading" >' . $row['restName'] . '</h4>';
			echo '<p class="list-group-item-text">' . $row['cuisine'] .  '</p>';
			echo '<p class="list-group-item-text">' . $row['phone'] .  '</p>';
			echo '<p class="list-group-item-text">' . $row['address'] .  '</p>';
			echo '<p class="list-group-item-text">' . $row['description'] . '...' . '</p>';
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
    echo "The site to be built!";
}


?>

