<?php 


	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
	mysql_select_db('drizzle')
         or die(mysql_error());	


	$lat = mysql_real_escape_string($_GET['lat']);
	$lng = mysql_real_escape_string($_GET['lng']);
	$distance = isset($_GET['distance'])?mysql_real_escape_string($_GET['distance']):50;
	$length = isset($_GET['length'])?mysql_real_escape_string($_GET['length']):30;
	$page = isset($_GET['page'])?mysql_real_escape_string($_GET['page']):0;
	$user = mysql_real_escape_string($_GET['user']);



	$resultArray = array();
	$resultArray["around"] = getAroundStream($lat,$lng,$distance,$length,$page,$user);
	$resultArray["followers"] = getFollowerStream($length,$page,$user);

	echo json_encode($resultArray);



	mysql_close();


	function getAroundStream($lat,$lng,$distance,$length,$page,$user){
		$query = "SELECT SQL_CALC_FOUND_ROWS id,imagepath, thumbnailpath, 3959 * ACos( Cos(RADIANS(Lat)) * Cos(RADIANS(".$lat.")) * Cos(RADIANS(".$lng.") - RADIANS(Lng)) + Sin(RADIANS(Lat)) * Sin(RADIANS(".$lat.")) ) AS distance,lat,lng, title, primetag, tags, hascontent,likecount,islive FROM images having distance < ".$distance." ORDER BY distance Limit ".($length*$page).",".$length.";";
		$q = "select FOUND_ROWS()";

		$result = mysql_query($query);
		$r = mysql_query($q);
		$r = mysql_fetch_array($r);

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

		return $returnArray;
	}


	function getFollowerStream($length,$page,$user){

		$length = isset($_GET['length'])?mysql_real_escape_string($_GET['length']):30;
		$page = isset($_GET['page'])?mysql_real_escape_string($_GET['page']):0;	   

		$query = "select SQL_CALC_FOUND_ROWS id,imagepath, thumbnailpath,lat,lng, title, primetag, tags, hascontent,likecount,islive from images where username in (select followerid from followers where userid='".mysql_real_escape_string($_GET['user'])."') order by time desc limit ".($length*$page).",".$length.";";
		$q = "select FOUND_ROWS()";

		$result = mysql_query($query);
		$r = mysql_query($q);
		$r = mysql_fetch_array($r);

		$images = array();

		while($row = mysql_fetch_array($result)){
			
			$image = array();
			$image["id"] = $row["id"];
			$image["imagepath"] = $row["imagepath"];
			$image["thumbnailpath"] = $row["thumbnailpath"];
		    $image["lat"] = $row["lat"];
		    $image["lng"] = $row["lng"];
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

		return $returnArray;
	}




?>