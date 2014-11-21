<?php
require_once 'randstring.php';

function verify_image($type = 3, $length = 4, $sess_name = "verify") {
	session_start();
	$width = 80;
	$height = 32;
	$image = imagecreatetruecolor ( $width, $height );
	$white = imagecolorallocate ( $image, 255, 255, 255 );
	// $black = imagecolorallocate($image, 0, 0, 0);
	
	//画布
	imagefilledrectangle ( $image, 1, 1, $width - 2, $height - 2, $white );
	$chars = random_string ( $type, $length );
	$_SESSION [$sess_name] = strtolower($chars);
	
	$fontfiles = "MSYH.TTF";
	for($i = 0; $i < $length; $i ++) {
		$size = mt_rand ( 14, 18 );
		$angle = mt_rand ( - 15, - 15 );
		$x = 5 + $i * $size;
		$y = mt_rand ( 20, 25 );
		$font = "../fonts/" . $fontfiles;
		$color = imagecolorallocate ( $image, mt_rand ( 0, 120 ), mt_rand ( 0, 120 ), mt_rand ( 0, 120 ) );
		$text = substr ( $chars, $i, 1 );
		imagettftext ( $image, $size, $angle, $x, $y, $color, $font, $text );
	}
	
	// 干扰点
	for($i = 0; $i < 300; $i ++) {
		$pointcolor = imagecolorallocate ( $image, rand ( 50, 200 ), rand ( 50, 200 ), rand ( 50, 200 ) );
		imagesetpixel ( $image, rand ( 1, 99 ), rand ( 1, 99 ), $pointcolor );
	}
	// 干扰线
	for($i = 0; $i < 4; $i ++) {
		$linecolor = imagecolorallocate ( $image, rand ( 80, 220 ), rand ( 80, 220 ), rand ( 80, 220 ) );
		imageline ( $image, rand ( 1, 99 ), rand ( 1, 99 ), rand ( 1, 99 ), rand ( 1, 29 ), $linecolor );
	}
	
	header ( "content-type:image/gif" );
	ob_clean (); // 清空下浏览器的缓存
	imagegif ( $image );
	imagedestroy ( $image );
}
	

	
	
	
	
	
	