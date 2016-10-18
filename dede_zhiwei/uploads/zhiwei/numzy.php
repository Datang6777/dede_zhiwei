<?php
/**
 * Created by PhpStorm.
 * User: 27500
 * Date: 2016/10/15
 * Time: 10:18
 */


//生成验证码图片

@session_start();

Header("Content-type: image/png");

srand((double)microtime() * 1000000);

$roundNum = rand(1000, 9999);

//把随机数存入session以便以后用

$_SESSION["sessionRound"] = $roundNum;
var_dump($_SESSION["sessionRound"]);
exit;
$im = @imagecreate(58, 25);

$red = imagecolorallocate($im, 222, 123, 111);

$blue = imagecolorallocate($im, 222, 222, 111);

$black = imagecolorallocate($im, 0, 0, 0);
//局域填充，相当于背景
imagefill($im, 68, 30, $red);

//将四位整数验证码绘入图片

imagestring($im, 5, 10, 5, $roundNum, $blue);

for ($i = 0; $i < 50; $i++)   //加入干扰象素
{

    imagesetpixel($im, rand() % 70, rand() % 30, $black);


}


ImagePNG($im);

ImageDestroy($im);

?>

