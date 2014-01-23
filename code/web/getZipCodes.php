<?php

	$db = new mysqli('localhost', 'developer', 'developer', 'drizzle');

	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	/*6371 for kms , 3959 for miles*/

	$query = "SELECT city, 3959 * ACos( Cos(RADIANS(Lat)) * Cos(RADIANS(?)) * Cos(RADIANS(?) - RADIANS(Lng)) + Sin(RADIANS(Lat)) * Sin(RADIANS(?)) ) AS Distance,zip FROM zip having Distance < ? ORDER BY Distance Limit ? , ?";
	$lat = 40.819118;
	$lng = -96.638719;
	$city='';
	$distance='';
	$limitMin=0;
	$distance = 50;
	$limitCount=30;

	

	/* Lincoln -> 40.819118,-96.638719*/
	$statement = $db->prepare($query);

	$statement->bind_param('ddddii', $lat,$lng,$lat,$distance,$limitMin,$limitCount);

	$statement->execute();

	$statement->bind_result($city,$distance,$zip);

	while($statement->fetch()){
    	echo $city . '     '.$distance.'     '.$zip.'<br />';
	}

?>