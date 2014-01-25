<?php

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());

    if(isset($_GET["follower"]) && $_GET["username"]){
        $query = "insert into followers values('".mysql_real_escape_string($_GET['follower'])."' , '".mysql_real_escape_string($_GET['username'])."');";
        $res = mysql_query($query);
        

        if($res==1){
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