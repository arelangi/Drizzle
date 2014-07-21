<?php

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());


    if(isset($_GET["follower"]) && $_GET["username"]){
        $query = "delete from followers where followerid = '".mysql_real_escape_string($_GET['follower'])."' and userid= '".mysql_real_escape_string($_GET['username'])."';";
        $res = mysql_query($query);
        
        if(mysql_affected_rows()==1){
            echo json_encode(array("status"=>"success"));
        }else{
            header('HTTP/1.1 400 Bad Request', true, 400);
            echo json_encode(array("status"=>"failed"));
        }
        mysql_close();
    }else{
            header('HTTP/1.1 400 Bad Request', true, 400);
            echo json_encode(array("status"=>"failed"));   
    }
   
?>