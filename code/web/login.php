<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
	mysql_select_db('drizzle')	or die(mysql_error());

	$query = "select username, pwd from users where username='".mysql_real_escape_string($_GET['username'])."' and pwd = '".mysql_real_escape_string($_GET['pwd'])."';";

	$res = mysql_query($query) or die(mysql_error());

	if(mysql_num_rows($res)==1){

		$q = "update users set code='".generateRandomString()."' where username='".mysql_real_escape_string($_GET['username'])."';";
		$r = mysql_query($q);
		if($r==1){
			echo json_encode(array("status"=>"success"));
		}else{
			echo json_encode(array("status"=>"failed"));
		}
	}else{
		echo json_encode(array("status"=>"failed"));
	}


	function generateRandomString($length = 40) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $randomString;
	}

	mysql_close();
?>