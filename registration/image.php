<?php
session_start();
header('Content-type: image/jpeg');

//$total_lines=40;
$text=$_SESSION['code']=mt_rand(1111,9999);

$font_size= 30;
$height= 50;
$width= 200;

$image= imagecreate($width,$height);

$r=mt_rand(100, 200);
$g=mt_rand(100, 200);
$b=mt_rand(100, 200);
imagecolorallocate($image,$r,$g,$b);
$r=mt_rand(0, 100);
$g=mt_rand(0, 100);
$b=mt_rand(0, 100);
$font_color= imagecolorallocate($image,$r,$g,$b);

/*for($i=1;$i<=$total_lines;$i++){
	$x1=mt_rand(0, 100);
	$y1=mt_rand(0, 100);
	$x2=mt_rand(0, 100);
	$y2=mt_rand(0, 100);
	imageline($image,x1,y1,x2,y2,$font_color);
}*/

$angle=mt_rand(-10, 10);
imagettftext($image,$font_size,$angle,60,40,$font_color,'font/font1.ttf',$text);

imagejpeg($image);
?>