<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());

    $query = "select id,hascontent,likecount,content,islive,contenttitle from images where id=".mysql_real_escape_string($_GET['id']);
    $result = mysql_query($query);

    $return = array();
    while($row = mysql_fetch_array($result)){
    	$return["id"] = $row["id"];
		$return["hascontent"] = $row["hascontent"];
		$return["likecount"] = $row["likecount"];
		$return["content"] = $row["content"];
		$return["islive"] = $row["islive"];
		$return["contenttitle"] = $row["contenttitle"];
	}

	echo json_encode($return);
	mysql_close();
?>