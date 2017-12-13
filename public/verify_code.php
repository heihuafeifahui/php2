<?php
session_start();
header ('Content-Type: image/png');
$im = @imagecreatetruecolor(300, 200)
      or die('Cannot Initialize new GD image stream');
$text_color = imagecolorallocate($im, 233, 14, 91);
$texts = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$fonts = array("fonts/78640___.TTF","fonts/HARLOWSI.TTF","fonts/HARNGTON.TTF","fonts/ITCKRIST.TTF","fonts/JOKERMAN.TTF","fonts/LHANDW.TTF","fonts/MAGNETOB.TTF","fonts/MAIAN.TTF");

$x=0;
$y=0;
$vcode = "";
for ($i=0; $i<5; $i++) {
	$x=$x+30;
	$y=$y+30;
	$color = imagecolorallocate($im, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
	$str = $texts[mt_rand(0,35)];
	$vcode.=$str;
	imagettftext($im, 20, mt_rand(-50,50), mt_rand($x,$y), 100, $color , $fonts[mt_rand(0,7)], $str);
}
$_SESSION['vcode']=$vcode;

imagepng($im);
imagedestroy($im);
?>