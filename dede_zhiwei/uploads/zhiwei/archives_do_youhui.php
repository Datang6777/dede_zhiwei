<?php

require_once(dirname(__FILE__).'/config.php');
require_once(DEDEADMIN.'/inc/inc_batchup.php');
require_once(DEDEADMIN.'/inc/inc_archives_functions.php');
require_once(DEDEINC.'/typelink.class.php');
require_once(DEDEINC.'/arc.archives.class.php');
$ENV_GOBACK_URL = (empty($_COOKIE['ENV_GOBACK_URL']) ? 'content_list.php' : $_COOKIE['ENV_GOBACK_URL']);

if(empty($dopost))
{
    ShowMsg('�Բ�����ûָ�����в�����','-1');
    exit();
}
$aid = isset($aid) ? preg_replace("#[^0-9]#", '', $aid) : '';

/*--------------------------
//�༭�Ż�ȯ
function editArchives(){ }
---------------------------*/
if($dopost=='editArchives')
{

    $aid = $_GET['id'];
    $query="select * from dede_zhiwei  where  id  = $aid";
    $row = $dsql->GetOne($query);
    include DedeInclude('templets/content_edit.htm');


}
/*--------------------------
//ɾ���Ż�ȯ
function editArchives(){ }
---------------------------*/
else if($dopost=="delArchives")
{
    $aid = $_GET['id'];
    $query="delete from  `dede_zhiwei` where  id  = $aid";

    $res=$dsql->ExecuteNoneQuery($query);
    include(dirname(__FILE__)."/content_list_youhui.php");


}
/*--------------------------
//�����Ż�ȯ
function editArchives(){ }
---------------------------*/
else if($dopost=="detailArchives")
{
    $aid = $_GET['id'];
    $query="select * from dede_zhiwei  where  id  = $aid";
    $row = $dsql->GetOne($query);
    include DedeInclude('templets/content_list_detail.htm');


}


?>
