<?
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>华图教育集团人力资源中心</title>
</head>

<body style="text-align:center;padding-top:20px;">
<?php
ini_set("error_reporting", "E_ALL & ~E_NOTICE");
if ($_SESSION['htusername'] != "1") {

//    if ($_POST['szyzm'] == $_SESSION["sessionRound"]) {
    if ($_POST['name'] == "1" && $_POST['pwd'] == "1") {
        $_SESSION['htusername'] = $_POST['name'];
        $_SESSION['htpwd'] = $_POST['pwd'];
        echo "<script>alert('登陆成功');</script>";
//header("location:meb_list.php");
        echo "<script> window.location.href = 'meb_list.php';</script>";
    } else {
        $_SESSION['htusername'] = "";
        $_SESSION['htpwd'] = "";
        echo "用户名密码错误" . "  ";
        echo "<a href='../index.php'>返回</a>";
        exit();
    }
//    } else {
//        echo "验证码错误" . "  ";
//        echo "<a href='../index.php'>返回</a>";
//        exit();
//    }
} else {
    echo("<script>alert('登陆失败！')</script>");
    echo("<script>window.location.href = '../index.php';</script>");

}

?>

</body>

</html>
