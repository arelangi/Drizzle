<?php
		mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());

        mysql_select_db('drizzle')
         or die(mysql_error());


        $query = "insert into users(username,email,pwd) values('".mysql_real_escape_string($_POST['username'])."','".mysql_real_escape_string($_POST['email'])."','".mysql_real_escape_string($_POST['pwd'])."');";

        $res = mysql_query($query);

        if($res==1){
			echo json_encode(array("status"=>"success"));
        }else{
        	header('HTTP/1.1 400 Bad Request', true, 400);
        	echo json_encode(array("status"=>"failed"));
        }
        mysql_close();
?>