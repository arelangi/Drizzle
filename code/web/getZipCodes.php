<?php

	$db = new mysqli('localhost', 'developer', 'sagar', 'drizzle');

	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	/*6371 for kms , 3959 for miles*/

	/*SELECT city, 6371 * ACos( Cos(RADIANS(Lat)) * Cos(RADIANS(55.395359)) * Cos(RADIANS(-131.67537) - RADIANS(Lng)) + Sin(RADIANS(Lat)) * Sin(RADIANS(55.395359)) ) AS Distance FROM zip ORDER BY Distance
*/

	$query = "SELECT city, 3959 * ACos( Cos(RADIANS(Lat)) * Cos(RADIANS(?)) * Cos(RADIANS(?) - RADIANS(Lng)) + Sin(RADIANS(Lat)) * Sin(RADIANS(?)) ) AS Distance,zip FROM zip having Distance < ? ORDER BY Distance Limit ? , ?";
	$lat = 40.819118;
	$lng = -96.638719;
	$city='';
	$distance='';
	$limitMin=0;
	$distance = 50;
	$limitMax=30;

	

	/* Lincoln -> 40.819118,-96.638719*/
	$statement = $db->prepare($query);

	$statement->bind_param('ddddii', $lat,$lng,$lat,$distance,$limitMin,$limitMax);

	$statement->execute();

	$statement->bind_result($city,$distance,$zip);

	while($statement->fetch()){
    	echo $city . '     '.$distance.'     '.$zip.'<br />';
	}

?>