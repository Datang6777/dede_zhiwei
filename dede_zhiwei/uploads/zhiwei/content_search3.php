<?php
/**
 * Created by PhpStorm.
 * User: 27500
 * Date: 2016/10/10
 * Time: 9:53
 */
require_once(dirname(__FILE__)."/config.php");
CheckPurview('a_Edit,a_AccEdit,a_MyEdit');
require_once(DEDEINC."/customfields.func.php");
require_once(DEDEADMIN."/inc/inc_archives_functions.php");


$arr= $_POST;

$query = "select * from  `dede_youhui`  where bc ='{$arr['search3']}' order by id desc ";

//var_dump($query);
//exit;
$res=$dsql->ExecuteNoneQuery($query);

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

