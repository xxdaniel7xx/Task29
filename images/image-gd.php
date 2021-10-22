<?php
$image1= imagecreate(300,150);
imagecolorallocate($image1,47,63,99);
$text_color = imagecolorallocate($image1,255,85,109);
imagestring($image1,5,60,70,'Something Interesting',$text_color);
header('Content-Type: image/png;');
imagepng($image1);
?>