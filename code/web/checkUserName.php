<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());

    if(isset($_GET["username"])){
    	$query = "select * from users where username='".mysql_real_escape_string($_GET["username"])."';";
	    $res = mysql_query($query);
	    if(mysql_num_rows($res)>0){
			echo json_encode(array("available"=>"no"));
		}else{
			echo json_encode(array("available"=>"yes"));
		}
		mysql_close();
    }else{
    	header('HTTP/1.1 400 Bad Request', true, 400);
    	echo json_encode(array("status"=>"error"));
    }

	

?>