<?php
/**
 * Created by PhpStorm.
 * User: 27500
 * Date: 2016/10/15
 * Time: 10:18
 */


//������֤��ͼƬ

@session_start();

Header("Content-type: image/png");

srand((double)microtime() * 1000000);

$roundNum = rand(1000, 9999);

//�����������session�Ա��Ժ���

$_SESSION["sessionRound"] = $roundNum;
var_dump($_SESSION["sessionRound"]);
exit;
$im = @imagecreate(58, 25);

$red = imagecolorallocate($im, 222, 123, 111);

$blue = imagecolorallocate($im, 222, 222, 111);

$black = imagecolorallocate($im, 0, 0, 0);
//������䣬�൱�ڱ���
imagefill($im, 68, 30, $red);

//����λ������֤�����ͼƬ

imagestring($im, 5, 10, 5, $roundNum, $blue);

for ($i = 0; $i < 50; $i++)   //�����������
{

    imagesetpixel($im, rand() % 70, rand() % 30, $black);


}


ImagePNG($im);

ImageDestroy($im);

?>

