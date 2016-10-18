<?php
/**
 * Created by PhpStorm.
 * User: 27500
 * Date: 2016/10/10
 * Time: 9:53
 */
require_once(dirname(__FILE__) . "/config.php");
CheckPurview('a_Edit,a_AccEdit,a_MyEdit');
require_once(DEDEINC . "/customfields.func.php");
require_once(DEDEADMIN . "/inc/inc_archives_functions.php");

$arr = $_POST;
if ($arr['search'] && $arr['search2'] == '' && $arr['search3'] == '') {
    $query = "select * from  `dede_zhiwei`  where shengfen = '{$arr['search']}'   order by id  ";
} elseif ($arr['search2'] && $arr['search'] == '' && $arr['search3'] == '') {
    $query = "select * from  `dede_zhiwei`  where kslx = '{$arr['search2']}'   order by id  ";
} elseif ($arr['search3'] && $arr['search'] == '' && $arr['search2'] == '') {
    $query = "select * from  `dede_zhiwei`  where htwyzwdm = '{$arr['search3']}'   order by id  ";
} elseif ($arr['search'] && $arr['search2'] && $arr['search3'] == '') {
    $query = "select * from  `dede_zhiwei`  where shengfen = '{$arr['search']}' and  kslx = '{$arr['search2']}' order by id ";
} elseif ($arr['search2'] && $arr['search3'] && $arr['search'] == '') {
    $query = "select * from  `dede_zhiwei`  where kslx = '{$arr['search2']}' and  htwyzwdm = '{$arr['search3']}' order by id  ";
} elseif ($arr['search'] && $arr['search3'] && $arr['search2'] == '') {
    $query = "select * from  `dede_zhiwei`  where shengfen = '{$arr['search']}' and  htwyzwdm= '{$arr['search3']}' order by id  ";
} else {
//    $query = "select * from  `dede_youhui`  where fenxiao like '%{$arr['search']}%' and  bb like '%{$arr['search2']}%'  and bc like '%{$arr['search3']}%'   order by id desc ";
    $query = "select * from  `dede_zhiwei`  where shengfen = '{$arr['search']}' and  kslx = '{$arr['search2']}'  and htwyzwdm = '{$arr['search3']}'   order by id  ";
}

$res = $dsql->ExecuteNoneQuery($query);

if (empty($f) || !preg_match("#form#", $f)) $f = 'form1.arcid1';

//初始化
$dlist = new DataListCP();
$dlist->pageSize = 30;

//GET参数
$dlist->SetParameter('dopost', 'listArchives');

//模板
if (empty($s_tmplets)) $s_tmplets = 'templets/content_list_youhui.htm';
$dlist->SetTemplate(DEDEADMIN . '/' . $s_tmplets);

//查询
$dlist->SetSource($query);

//显示
$dlist->Display();
// echo $dlist->queryTime;
$dlist->Close();

