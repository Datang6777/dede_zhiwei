<?
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>��ͼ��������������Դ����</title>
</head>

<body style="text-align:center;padding-top:20px;">
<?php
ini_set("error_reporting", "E_ALL & ~E_NOTICE");
if ($_SESSION['htusername'] != "1") {

//    if ($_POST['szyzm'] == $_SESSION["sessionRound"]) {
    if ($_POST['name'] == "1" && $_POST['pwd'] == "1") {
        $_SESSION['htusername'] = $_POST['name'];
        $_SESSION['htpwd'] = $_POST['pwd'];
        echo "<script>alert('��½�ɹ�');</script>";
//header("location:meb_list.php");
        echo "<script> window.location.href = 'meb_list.php';</script>";
    } else {
        $_SESSION['htusername'] = "";
        $_SESSION['htpwd'] = "";
        echo "�û����������" . "  ";
        echo "<a href='../index.php'>����</a>";
        exit();
    }
//    } else {
//        echo "��֤�����" . "  ";
//        echo "<a href='../index.php'>����</a>";
//        exit();
//    }
} else {
    echo("<script>alert('��½ʧ�ܣ�')</script>");
    echo("<script>window.location.href = '../index.php';</script>");

}

?>

</body>

</html>
