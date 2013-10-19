<?php 
// Location to upload main image: 
$mainDir = $_SERVER['DOCUMENT_ROOT'].'/images/l/'; 
// Location to create the thumb image: 
$smalDir = $_SERVER['DOCUMENT_ROOT'].'/images/s/'; 
// Command to use: 
$command = '/usr/bin/convert'; 
// Thumbnail width: 
$size = 210; 
// Make sure we have an image: 
if(isset($_POST['submit'])){ 
    if(getimagesize($_FILES['photo']['tmp_name'])){ 
        $name = $_FILES['photo']['name']; 
        $uploadfile = $mainDir . $name; 
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile); 
        $lrgImg = $mainDir . $name; 
        $smlImg = $smalDir . $name; 
        $imageMagick = $command . " '". $lrgImg . "' -resize '$size' '" . $smlImg . "'";         
        shell_exec($imageMagick); 
    } 
    header("Location: test.php"); 
    exit; 
}else{ 
?> 
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post" enctype="multipart/form-data">
        <p><input type="file" name="photo" /></p>
        <p><input type="submit" value="Upload!" name="submit" /></p>
    </form>
<?php 
    foreach(glob($smalDir.'*') as $img){ 
        echo ' <img src="'.str_replace($_SERVER['DOCUMENT_ROOT'], '',$img).'" /> '; 
    } 
} 
?>