<?php

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
	mysql_select_db('drizzle')
         or die(mysql_error());



    $lat = mysql_real_escape_string($_GET['lat']);
	$lng = mysql_real_escape_string($_GET['lng']);
	$distance = isset($_GET['distance'])?mysql_real_escape_string($_GET['distance']):50;
	$length = isset($_GET['length'])?mysql_real_escape_string($_GET['length']):30;
	$page = isset($_GET['page'])?mysql_real_escape_string($_GET['page']):0;

	/*  
		$lat = 40.819118;
		$lng = -96.638719;
		$distance = 30;
		$length=30;
		$page=0;
	*/

	if(isset($_GET["lat"]) && isset($_GET["lng"])){
		$query = "SELECT SQL_CALC_FOUND_ROWS id,imagepath, thumbnailpath, 3959 * ACos( Cos(RADIANS(Lat)) * Cos(RADIANS(".$lat.")) * Cos(RADIANS(".$lng.") - RADIANS(Lng)) + Sin(RADIANS(Lat)) * Sin(RADIANS(".$lat.")) ) AS distance,lat,lng, title, primetag, tags, hascontent,likecount,islive FROM images having distance < ".$distance." ORDER BY distance Limit ".($length*$page).",".$length.";";
		$q = "select FOUND_ROWS()";

		$result = mysql_query($query);
		$r = mysql_query($q);
		$r = mysql_fetch_array($r);

		if(mysql_num_rows($result) > 0 ){

			$images = array();

			while($row = mysql_fetch_array($result)){
				
				$image = array();
				$image["id"] = $row["id"];
				$image["imagepath"] = $row["imagepath"];
				$image["thumbnailpath"] = $row["thumbnailpath"];
			    $image["lat"] = $row["lat"];
			    $image["lng"] = $row["lng"];
			    $image["distance"] = $row["distance"];
			    $image["title"] = $row["title"];
			    $image["primetag"] = $row["primetag"];
			    $image["tags"] = $row["tags"];
			    $image["hascontent"] = $row["hascontent"];
			    $image["likecount"] = $row["likecount"];
			    $image["islive"] = $row["islive"];

			    $images[] = $image;
			}

			$total_pages = floor($r[0]/$length);

			$returnArray = array();
			$returnArray["count"] = $r[0];
			$returnArray["total_pages"] = $total_pages;
			$returnArray["current_page"] = $page;
			$returnArray["prev_page"] = ($page-1 <= 1)?null:$page-1;
			$returnArray["next_page"] = ($page+1 >= $total_pages)?null:$page+1;
			$returnArray["data"] = $images;

			mysql_close();

			echo json_encode($returnArray);
		}else{
			mysql_close();
			$returnArray = array();
			$returnArray["count"] = 0;
			$returnArray["total_pages"] = 0;
			$returnArray["current_page"] = null;
			$returnArray["prev_page"] = null;
			$returnArray["next_page"] = null;
			$returnArray["data"] = null;
			echo json_encode($returnArray);
		}
	}else{
		header('HTTP/1.1 400 Bad Request', true, 400);
        echo json_encode(array("status"=>"failed"));
	}

	


?>