<?php

require_once(dirname(__FILE__).'/config.php');
require_once(DEDEINC.'/typelink.class.php');
require_once(DEDEINC.'/datalistcp.class.php');
require_once(DEDEADMIN.'/inc/inc_list_functions.php');



$action = $_GET['action'];
if ($action == 'import') { //����XLS

    $uploadfile = basename($_FILES['file']['name']);
    $kzname = explode(".", $uploadfile);
    $kzname = strtolower($kzname[1]);


    if ($kzname == "xls" or $kzname == "xlsx") {

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "�ϴ��ɹ�.\n";
            echo '&nbsp;&nbsp;';
//            ShowMsg('��ʼ��ӣ�����ת�������ҳ��','upload_file2.php');
//            echo "<a href = 'upload_file2.php'>�����ʼ���</a>";
             echo "<a href='upload_file2.php?action=suc&name=" . $uploadfile . "'>�����ʼ���</a>";
        } else {
            echo "�ϴ�ʧ��!\n";
            echo "<a href='upload_file.php'>�����ϴ�</a>";
        }
    } else {
        echo "�ϴ���ʽ����...���ϴ� .xls .xlsx ��ʽ�ĵ�";
    }

}else{
    exit;
}

