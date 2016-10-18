<?php
require_once(dirname(__FILE__)."/config.php");
CheckPurview('a_Edit,a_AccEdit,a_MyEdit');
require_once(DEDEINC."/customfields.func.php");
require_once(DEDEADMIN."/inc/inc_archives_functions.php");

$arr = $_POST;

$time = strtotime("$arr[addtime]");

$query = "update `dede_zhiwei` set yrsj='{$arr['yrsj']}',zwmc='{$arr['zwmc']}', gfgbzwdm='{$arr['gfgbzwdm']}',htwyzwdm='{$arr['htwyzwdm']}',jhrs='{$arr['jhrs']}',kzrs='{$arr['kzrs']}',shengfen='{$arr['shengfen']}',kslx='{$arr['kslx']}',zkzwsyr='{$arr['zkzwsyr']}',zhuanye='{$arr['zhuanye']}',xueli='{$arr['xueli']}',xuewei='{$arr['xuewei']}',bsksrq='{$arr['bsksrq']}',zzmm='{$arr['zzmm']}',gznx='{$arr['gznx']}',bmmc='{$arr['bmmc']}',bmdm='{$arr['bmdm']}',beizhu='{$arr['beizhu']}',zwjj='{$arr['zwjj']}' where id = '{$arr['id']}'";

$res=$dsql->ExecuteNoneQuery($query);

include(dirname(__FILE__)."/content_list_youhui.php");
