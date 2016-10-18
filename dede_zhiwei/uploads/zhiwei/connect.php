<?php
/**
 * Created by PhpStorm.
 * User: 27500
 * Date: 2016/10/17
 * Time: 13:56
 */

//$host = '192.168.200.126:3306';
//$db_name = 'huatubm';
//$dbuser = 'xiaozh';
//$dbpass = 'xzh8877511';
//$cfg_dbprefix = 'dede_';
//$cfg_db_language = 'gbk';


$host = 'localhost';
$db_name = 'dedecmsv57gbksp1';
$db_user = 'root';
$db_pass = '';
$cfg_dbprefix = 'dede_';
$cfg_db_language = 'gbk';

$link=@mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
//mysql_query("SET names UTF8");

//header("Content-Type: text/html; charset=utf-8");