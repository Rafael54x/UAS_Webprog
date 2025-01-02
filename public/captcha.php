// public/captcha.php
<?php
session_start();

// Generate random string
$randomStr = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);
$_SESSION['captcha'] = $randomStr;

// Create image
$image = imagecreate(120, 40);
$background = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);

// Add noise
for ($i = 0; $i < 50; $i++) {
    $noiseColor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($image, rand(0, 120), rand(0, 40), $noiseColor);
}

// Add text
imagestring($image, 5, 10, 10, $randomStr, $textColor);

// Output image
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
?>
