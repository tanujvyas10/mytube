<?php
$ffmpeg ="/Users/USERNAME/ffmpeg/ffmpeg";
$filename="Challa.mp4"
$src ="/".$filename."_original.".$ext;
$img="/image/".$filename."_1.jpg";
$img2 ="/image/".$filename."_2.jpg";
$img3 ="/image/".$filename."_3.jpg";
$video ="/".$filename.".mp4";
$src = preg_replace("/ /","\ ", $src);
$img = preg_replace("/ /","\ ", $img);
$imgOutput = shell_exec("$ffmpeg -ss 1 -i $src -s 960x540 -f image2 -vframes 1 $img");
$imgOutput2 = shell_exec("$ffmpeg -ss 15 -i $src -s 960x540 -f image2 -vframes 1 $img2");
$imgOutput3 = shell_exec("$ffmpeg -ss 30 -i $src -s 960x540 -f image2 -vframes 1 $img3")?>
<img src="<?php $imgOutput3 ?>" height="200" width="200" />
