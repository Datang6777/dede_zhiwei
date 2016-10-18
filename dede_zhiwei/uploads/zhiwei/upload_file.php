<?php

require_once(dirname(__FILE__).'/config.php');
require_once(DEDEINC.'/typelink.class.php');
require_once(DEDEINC.'/datalistcp.class.php');
require_once(DEDEADMIN.'/inc/inc_list_functions.php');



$action = $_GET['action'];
if ($action == 'import') { //导入XLS

    $uploadfile = basename($_FILES['file']['name']);
    $kzname = explode(".", $uploadfile);
    $kzname = strtolower($kzname[1]);


    if ($kzname == "xls" or $kzname == "xlsx") {

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "上传成功.\n";
            echo '&nbsp;&nbsp;';
//            ShowMsg('开始添加，正在转向添加主页！','upload_file2.php');
//            echo "<a href = 'upload_file2.php'>点击开始添加</a>";
             echo "<a href='upload_file2.php?action=suc&name=" . $uploadfile . "'>点击开始添加</a>";
        } else {
            echo "上传失败!\n";
            echo "<a href='upload_file.php'>返回上传</a>";
        }
    } else {
        echo "上传格式不对...请上传 .xls .xlsx 格式文档";
    }

}else{
    exit;
}

