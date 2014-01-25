<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());


   

    $query =  "select users.username as username, sum(likecount) as likes,count(*) as drizzles,sum(islive) as journals from users,images where images.username = users.username and users.username='".mysql_real_escape_string($_GET['user'])."';";
    
    $res = mysql_query($query);
    $returnArray = array();
		
	if(mysql_num_rows($res)==1){
		if($row=mysql_fetch_array($res)){
		$returnArray["username"] = $row["username"];
		$returnArray["likes"] = $row["likes"];
		$returnArray["drizzles"] = $row["drizzles"];
		$returnArray["journals"] = is_null($row["journals"])?0:$row["journals"];

		echo json_encode($returnArray);
    }
	}else{
    	header('HTTP/1.1 400 Bad Request', true, 400);
    	echo json_encode(array("status"=>"failed"));
    }
    mysql_close();

?>