<?php


require_once(dirname(__FILE__).'/config.php');
require_once(DEDEINC.'/typelink.class.php');
require_once(DEDEINC.'/datalistcp.class.php');
require_once(DEDEADMIN.'/inc/inc_list_functions.php');


//$query = "SELECT id,bb,bc,fenxiao,starTime,endTime,bx,jine, addtime,if_zh,addyear,userid,username FROM `#@__youhui` order by id desc ";
$query = "select * from dede_zhiwei";

if(empty($f) || !preg_match("#form#", $f)) $f = 'form1.arcid1';

//��ʼ��
$dlist = new DataListCP();
$dlist->pageSize = 30;

//GET����
$dlist->SetParameter('dopost', 'listArchives');

//ģ��
if(empty($s_tmplets)) $s_tmplets = 'templets/content_list_youhui.htm';
$dlist->SetTemplate(DEDEADMIN.'/'.$s_tmplets);

//��ѯ
$dlist->SetSource($query);

//��ʾ
$dlist->Display();
// echo $dlist->queryTime;
$dlist->Close();

