<?php 

echo "IMG_0190.JPG:<br />\n";

$exif = exif_read_data('IMG_0190.JPG', 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

$exif = exif_read_data('IMG_0190.JPG', 0, true);
var_dump($exif);

?>