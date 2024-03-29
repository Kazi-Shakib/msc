<?php

	session_start();

	$width = 130;
	$height = 30;
	$font_size = 20;
	$font = "./verdana.ttf";
	$font = realpath($font);

	$captcha_characters = '0123456789';

	$image = imagecreatetruecolor($width, $height);
	$bg_color = imagecolorallocate($image, 255, 0, 0);
	$font_color = imagecolorallocate($image, 255, 255, 255);
	imagefilledrectangle($image, 0, 0, $width, $height, $bg_color);

	//background random-line
	$vert_line = round($width/5);
	$color = imagecolorallocate($image, 255, 255, 255);
	for($i=0; $i < $vert_line; $i++) {
		imageline($image, rand(0,$width), rand(0,$height), rand(0,$height), rand(0,$width), $color);
	}

	$digit = '';
	for($i = 1; $i < 5; $i++) {
		$letter = $captcha_characters[rand(0, strlen($captcha_characters)-1)];
		$digit .= $letter;
		imagettftext($image, $font_size, rand(-10,20), $i*25, rand(27, $height-5), $font_color, $font, $letter);
	}

	// record token in session variable
	$_SESSION['captcha_code'] = strtolower($digit);

	// display image
	header('Content-Type: image/png');
	imagepng($image);
	imagedestroy($image);
?>