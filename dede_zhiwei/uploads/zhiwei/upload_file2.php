<?php
/**
 * Created by PhpStorm.
 * User: 27500
 * Date: 2016/10/17
 * Time: 9:29
 */
error_reporting(E_ALL);

date_default_timezone_set('Asia/Shanghai');


/** PHPExcel_IOFactory */
require_once 'excel/Classes/PHPExcel.php';
require_once 'excel/Classes/PHPExcel/IOFactory.php';
require_once 'excel/Classes/PHPExcel/Reader/Excel2007.php';

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(true);
$objPHPExcel = PHPExcel_IOFactory::load($_GET['name']);

$objWorksheet = $objPHPExcel->getActiveSheet();

$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'

$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

$num = 0;
for ($row = 2; $row <= $highestRow; ++$row) {
    $htjs = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(0, $row)->getValue());
    $gonghao = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(1, $row)->getValue());
    $xingming = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(2, $row)->getValue());
    $scw = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(3, $row)->getValue());
    $yjbm = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(4, $row)->getValue());
    $ejbm = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(5, $row)->getValue());
    $sjbm = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(6, $row)->getValue());
    $zhiwei = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(7, $row)->getValue());
    $xzjb = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(8, $row)->getValue());
    $zhicheng = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(9, $row)->getValue());
    $rzsj = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(10, $row)->getValue());
    $sfzh = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(11, $row)->getValue());
    $csrq = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(12, $row)->getValue());
    $nianling = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(13, $row)->getValue());
    $objWorksheet->setCellValue('N' . $row, PHPExcel_Shared_Date::ExcelToPHP($nianling));
    $nianling = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(13, $row)->getValue());
    $nianling = date("Y-m-d", $nianling);
    $xingbie = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(14, $row)->getValue());
    $xueli = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(15, $row)->getValue());
    $zhuanye = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(16, $row)->getValue());
    $byyx = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(17, $row)->getValue());
    $lxfs = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(18, $row)->getValue());
    $htks = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(19, $row)->getValue());
    $htksq = iconv("utf-8", "gbk", $objWorksheet->getCellByColumnAndRow(20, $row)->getValue());


    include_once("connect.php");
    $sql = "select htwyzwdm from dede_zhiwei where htwyzwdm='$scw'";
    $query = mysql_query($sql);
//    $query=mysql_query("$sql");
//
    $result = @mysql_fetch_array($query);

    mysql_free_result($query);

    if (!$result) {
        $num++;
        $sql = "insert into dede_zhiwei values(NULL,'" . $htjs . "','" . $gonghao . "','" . $xingming . "','" . $scw . "'," . $yjbm . "," . $ejbm . ",'" . $sjbm . "','" . $zhiwei . "','" . $xzjb . "','" . $zhicheng . "','" . $rzsj . "','" . $sfzh . "','" . $csrq . "','" . $nianling . "','" . $xingbie . "','" . $xueli . "','" . $zhuanye . "','" . $byyx . "','" . $lxfs . "','" . $htks . "','" . $htksq . "',2016)";
//         $sql="insert into dede_zhiwei(id,yrsj) values(NULL,'".$htjs."')";
        // echo $sql;	 exit();
//        $result2 = $dsql->ExecuteNoneQuery($sql) or die("Could not insert: " . mysql_error());

        mysql_query($sql) or die("Could not insert: " . mysql_error());
    } else {

//        $sql = "delete from dede_zhiwei where htwyzwdm='$scw'";
//        $query = mysql_query($sql);
//        $num++;

    }
}
echo "<tr><td colspan='13'>新添加成功 <font color='red'>" . $num . "</font> 条数据&nbsp;&nbsp;</td></tr>";
?>
<a href='content_list_youhui.php'>返回查看</a>



