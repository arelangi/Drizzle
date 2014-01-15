<?php

        header('Content-Type: application/json');

        $b64image = $_POST["image"]/*base64_encode(file_get_contents('img/test.JPG'))*/;
        $fileName = generateRandomString(16);
        $originalPath = 'img/';
        $thumbPath = 'thumb/thumb';

        echo saveImage($b64image,$fileName,$originalPath,$thumbPath);

        function saveImage($codedImage, $fileName, $originalPath, $thumbPath){

                try{
                        $img = new Imagick();
                        $decoded = base64_decode($codedImage);
                        $img->readimageblob($decoded);
                        $img->writeImage($originalPath.$fileName.'.jpg');
                        $img->thumbnailImage(154,null);
                        $img->writeImage($thumbPath.$fileName.'.png');
                        $im->destroy();    

                        return json_encode(array("status"=>"success"));
                }catch(Exception $e){
                        //echo $e->getMessage();
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