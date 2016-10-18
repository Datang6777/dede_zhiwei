<?php
/**
 * 后台登陆
 *
 * @version        $Id: login.php 1 8:48 2010年7月13日Z tianya $
 * @package        DedeCMS.Administrator
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */

ini_set("error_reporting","E_ALL & ~E_NOTICE");
require_once(dirname(__FILE__).'/config.php');


require_once(DEDEINC.'/userlogin.class.php');
$cuserLogin = new userLogin($admindir);
$res = $cuserLogin->checkUser($userid,$pwd);


if(!empty($res))
{
     header("location:content_list_youhui.php");
     exit();
}else{
    ShowMsg('用户和密码没填写完整!','login.php',0,1000);
    exit;
}

