<?php
//
//require_once(dirname(__FILE__)."/config.php");
//CheckPurview('a_Edit,a_AccEdit,a_MyEdit');
//require_once(DEDEINC."/customfields.func.php");
//require_once(DEDEADMIN."/inc/inc_archives_functions.php");
//if(file_exists(DEDEDATA.'/template.rand.php'))
//{
//    require_once(DEDEDATA.'/template.rand.php');
//}
//if(empty($dopost)) $dopost = '';
//$aid = isset($aid) && is_numeric($aid) ? $aid : 0;
//if($dopost!='save')
//{
//    require_once(DEDEADMIN."/inc/inc_catalog_options.php");
//    require_once(DEDEINC."/dedetag.class.php");
//    ClearMyAddon();
//
//    //��ȡ�鵵��Ϣ
//    $query="select * from `#@__youhui` where arc.id='$aid' ";
//    $arcRow = $dsql->GetOne($query);
//
//}
///*--------------------------------
//function __save(){  }
//-------------------------------*/
//else if($dopost=='save')
//{
//    require_once(DEDEINC.'/image.func.php');
//    require_once(DEDEINC.'/oxwindow.class.php');
//    $flag = isset($flags) ? join(',',$flags) : '';
//    $notpost = isset($notpost) && $notpost == 1 ? 1: 0;
//
//    if(empty($typeid2)) $typeid2 = 0;
//    if(!isset($autokey)) $autokey = 0;
//    if(!isset($remote)) $remote = 0;
//    if(!isset($dellink)) $dellink = 0;
//    if(!isset($autolitpic)) $autolitpic = 0;
//
//
//
//
//    //�Ա�������ݽ��д���
//
//    //��ת��ַ���ĵ�ǿ��Ϊ��̬
//    if(preg_match("#j#", $flag)) $ismake = -1;
//    //�������ݿ��SQL���
//
//    $query="update dede_youhui set bb='{$bb}',bc='{$bc}',fenxiao='{$fenxiao}',startTime='{$startTime}',endtime='{$endtime}',bx='{$bx}',jine='{$jine}',addtime='{$addtime}',if_zh='{$if_zh}',addyear='{$addyear}',userid='{$userid}',username='{$username}' where id={$id}";
//
//    if(!$dsql->ExecuteNoneQuery($query))
//    {
//        ShowMsg('�������ݿ�youhui��ʱ��������',-1);
//        exit();
//    }
//
//    //����HTML
//    UpIndexKey($id, $arcrank, $typeid, $sortrank, $tags);
//    if($cfg_remote_site=='Y' && $isremote=="1")
//    {
//        if($serviterm!=""){
//            list($servurl, $servuser, $servpwd) = explode(',', $serviterm);
//            $config=array( 'hostname' => $servurl, 'username' => $servuser,
//                'password' => $servpwd,'debug' => 'TRUE');
//        } else {
//            $config=array();
//        }
//        if(!$ftp->connect($config)) exit('Error:None FTP Connection!');
//    }
//    $artUrl = MakeArt($id,true,true,$isremote);
//    if($artUrl=='')
//    {
//        $artUrl = $cfg_phpurl."/view.php?aid=$id";
//    }
//    ClearMyAddon($id, $title);
//
//    //���سɹ���Ϣ
//
//    $wintitle = "�ɹ��������£�";
//    $wecome_info = "���¹���::��������";
//    $win = new OxWindow();
//    $win->AddTitle("�ɹ��������£�");
//    $win->AddMsgItem($msg);
//    $winform = $win->GetWindow("hand","&nbsp;",false);
//    $win->Display();
//}