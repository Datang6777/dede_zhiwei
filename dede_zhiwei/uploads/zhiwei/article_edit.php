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
//    //读取归档信息
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
//    //对保存的内容进行处理
//
//    //跳转网址的文档强制为动态
//    if(preg_match("#j#", $flag)) $ismake = -1;
//    //更新数据库的SQL语句
//
//    $query="update dede_youhui set bb='{$bb}',bc='{$bc}',fenxiao='{$fenxiao}',startTime='{$startTime}',endtime='{$endtime}',bx='{$bx}',jine='{$jine}',addtime='{$addtime}',if_zh='{$if_zh}',addyear='{$addyear}',userid='{$userid}',username='{$username}' where id={$id}";
//
//    if(!$dsql->ExecuteNoneQuery($query))
//    {
//        ShowMsg('更新数据库youhui表时出错，请检查',-1);
//        exit();
//    }
//
//    //生成HTML
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
//    //返回成功信息
//
//    $wintitle = "成功更改文章！";
//    $wecome_info = "文章管理::更改文章";
//    $win = new OxWindow();
//    $win->AddTitle("成功更改文章：");
//    $win->AddMsgItem($msg);
//    $winform = $win->GetWindow("hand","&nbsp;",false);
//    $win->Display();
//}