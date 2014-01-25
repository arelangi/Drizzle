<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());

    $query = "select id,hascontent,likecount,content,islive,contenttitle from images where id=".mysql_real_escape_string($_GET['id']);
    $result = mysql_query($query);

    $return = array();
    if(mysql_num_rows($result)>0){
	    while($row = mysql_fetch_array($result)){
	    	$return["id"] = $row["id"];
			$return["hascontent"] = $row["hascontent"];
			$return["likecount"] = $row["likecount"];
			$return["content"] = $row["content"];
			$return["islive"] = $row["islive"];
			$return["contenttitle"] = $row["contenttitle"];
		}
	}else{
		$return["id"] = null;
		$return["hascontent"] = null;
		$return["likecount"] = null;
		$return["content"] = null;
		$return["islive"] = null;
		$return["contenttitle"] = null;
	}

	echo json_encode($return);
	mysql_close();
?>