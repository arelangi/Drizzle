<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
    mysql_select_db('drizzle')  or die(mysql_error());

    $query = "update images set likecount=likecount+1 where id=".mysql_real_escape_string($_GET["id"]);
    $res = mysql_query($query);

    if(isset($_GET["id"])){
        if($res==1){
        echo json_encode(array("status"=>"success"));
        }else{
            header('HTTP/1.1 400 Bad Request', true, 400);
            echo json_encode(array("status"=>"failed"));
        }
    }else{
        header('HTTP/1.1 400 Bad Request', true, 400);
        echo json_encode(array("status"=>"failed"));
    }

    mysql_close();

?>