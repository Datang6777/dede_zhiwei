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

//初始化
$dlist = new DataListCP();
$dlist->pageSize = 30;

//GET参数
$dlist->SetParameter('dopost', 'listArchives');

//模板
if(empty($s_tmplets)) $s_tmplets = 'templets/content_list_youhui.htm';
$dlist->SetTemplate(DEDEADMIN.'/'.$s_tmplets);

//查询
$dlist->SetSource($query);

//显示
$dlist->Display();
// echo $dlist->queryTime;
$dlist->Close();

