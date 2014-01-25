<?php

        header('Content-Type: application/json');

        mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());
        mysql_select_db('drizzle')  or die(mysql_error());


        $b64image = $_POST["image"]; /*base64_encode(file_get_contents('pics/hohoho (1).jpg'));*/
        $fileName = generateRandomString(16);
        $originalPath = 'img/';
        $thumbPath = 'thumb/thumb';
        $username = mysql_real_escape_string($_GET['username']);
        $lat = mysql_real_escape_string($_GET['lat']);
        $lng = mysql_real_escape_string($_GET['lng']);
        $primetag = mysql_real_escape_string($_GET['primetag']);

        echo saveImage($b64image,$fileName,$originalPath,$thumbPath,$username,$lat,$lng,$primetag);
        
        mysql_close();

        function saveImage($codedImage, $fileName, $originalPath, $thumbPath,$username,$lat,$lng,$primetag){

            $filePath = $originalPath.$fileName.'.jpg';
            $thumbNailPath = $thumbPath.$fileName.'.png';
            $domain="https://adirelangi.com/drizzle/web/";

            try{
                    $img = new Imagick();
                    $decoded = base64_decode($codedImage);
                    $img->readimageblob($decoded);
                    $img->writeImage($filePath);
                    $img->thumbnailImage(154,null);
                    $img->writeImage($thumbNailPath);
                    $img->destroy();

                    $query = "insert into images( username, imagepath,thumbnailpath, lat, lng, primetag ) values ('".$username."','".($domain.$filePath)."','".($domain.$thumbNailPath)."',".$lat.",".$lng.",'".$primetag."');";

                    $res = mysql_query($query);

                    if($res == 1){
                        return json_encode(array("status"=>"success"));
                    }else{
                        return json_encode(array("status"=>"failed"));
                    }

                    
            }catch(Exception $e){
                return json_encode(array("status"=>"failed"));
            }


                
        }

        function generateRandomString($length = 40) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $randomString;
        }



        


?>