<?php

require_once(dirname(__FILE__).'/config.php');
require_once(DEDEINC.'/typelink.class.php');
require_once(DEDEINC.'/datalistcp.class.php');
require_once(DEDEADMIN.'/inc/inc_list_functions.php');



$action = $_GET['action'];
var_dump($action);
if ($action == 'import') { //����XLS
    var_dump($_FILES);
    $uploadfile = basename($_FILES['file']['name']);
    var_dump($uploadfile);
    echo '<br>';
    $kzname = explode(".", $uploadfile);
    var_dump($kzname);
    echo '<br>';
    $kzname = strtolower($kzname[1]);
    var_dump($kzname);
    if ($kzname == "xls" or $kzname == "xlsx") {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "�ϴ��ɹ�.\n";
            echo '&nbsp;&nbsp;';?>

            <form action="upload_file2.php" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="name" value="<?=$uploadfile?>" />
                <input type="submit" name="submit" value="�������" />
            </form>
            <?php
//            ShowMsg('��ʼ��ӣ�����ת�������ҳ��',"upload_file2.php");
//           echo "<a href='upload_file2.php?action=suc&name=" . $uploadfile . "'>�����ʼ���</a>";

        } else {
            echo "�ϴ�ʧ��!\n";
            // echo "<a href='shangchuan.php'>�����ϴ�</a>";
        }
    } else {
        echo "�ϴ���ʽ����...���ϴ� .xls .xlsx ��ʽ�ĵ�";
    }

}elseif(1111){
    exit;
}

