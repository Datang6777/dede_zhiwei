<?php
if(!isset($GLOBALS['_vars'])) $GLOBALS['_vars'] = array(); 
$fields = array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $cfg_soft_lang; ?>">
    <title>文档管理</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script language="javascript" src="../include/js/dedeajax2.js"></script>
    <script language="javascript" src="js/ieemu.js"></script>
    <script language="javascript" src="js/context_menu.js"></script>
    <script language="javascript" src="js/main.js"></script>
    <!--<script language="javascript" src="js/list.js"></script>-->
    <script language="javascript" src="js/list_youhui.js"></script>
</head>
<body leftmargin="8" topmargin="8" background='images/allbg.gif' onLoad="ContextMenu.intializeContextMenu()">

<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#ccd9b9" align="center">
    <tr>
        <td height="26" background="images/newlinebg3.gif">
            <table width="98%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <form  name= "form2" action="content_search.php" method="post">
                            <input type="text" name="search" placeholder="按省份搜索">
                            <input type="text" name="search2" placeholder="按考试类型搜索">
                            <input type="text" name="search3" placeholder="按华图职位代码搜索">
                            <input type="submit" value="搜 索">
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<form action="upload_file.php?action=import" method="post" enctype="multipart/form-data" >
    <label for="file">导入新数据</label>
    <input type="file" name="file" id="file" />
    <input type="submit" name="submit" value="确定导入" />
</form>
<!--  内容列表   -->
<form name="form2">
    <table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center" style="margin-top:8px">
        <tr bgcolor="#E7E7E7" >
            <td height="28" colspan="14" background="images/tbg.gif" style="padding-left:10px;">
                ◆ <?php echo $GLOBALS['positionname']; ?>职位列表 &nbsp;
            </td>
        </tr>
        <tr align="center" bgcolor="#FBFCE2" height="25">
            <td width="6%">id</td>
            <!--<td width="6%"></td>-->
            <td width="6%">用人司局</td>
            <td width="8%">职位名称</td>
            <td width="6%">官方职位代码</td>
            <td width="10%">华图唯一职位代码</td>
            <td width="6%">计划人数</td>
            <td width="6%">控制人数</td>
            <td width="6%">省份</td>
            <td width="8%">考试类型</td>
            <td width="12%">学历</td>
            <td width="8%">详细</td>
            <td width="6%">操作</td>
        </tr>
        <?php
$atts = array();
$atts['tagname'] = 'datalist';
$blockValue = $this->refObj->GetArcList($atts,$this->refObj,$fields); 
if(is_array($blockValue)){
foreach( $blockValue as $key=>$fields )
{
?>
        <tr align='center' bgcolor="#FFFFFF" height="26" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';">
            <td><?php echo $fields['id']; ?></td>
            <td><?php echo $fields['yrsj']; ?></td>
            <td><?php echo $fields['zwmc']; ?></td>
            <td><?php echo $fields['gfgbzwdm']; ?></td>
            <td><?php echo $fields['htwyzwdm']; ?></td>
            <td><?php echo $fields['jhrs']; ?></td>
            <td><?php echo $fields['kzrs']; ?></td>
            <td><?php echo $fields['shengfen']; ?></td>
            <td><?php echo $fields['kslx']; ?></td>
            <td><?php echo $fields['xueli']; ?></td>
            <td>详情</td>

            <td>
                <img src='images/gtk-edit.png' title="编辑" alt="编辑" onClick="editArc_youhui(<?php echo $fields['id']; ?>);" style='cursor:pointer' border='0' width='16' height='16' />
                <!--<input type="submit" value="删除"  >-->
                <img src='images/trun.gif' title="刪除" alt="刪除" onClick="delArc_youhui(<?php echo $fields['id']; ?>, event, this);" style='cursor:pointer' border='0' width='16' height='16' />
            </td>

        </tr>
        <?php
}
}?>

</form>
<tr align="right" bgcolor="#F9FCEF">
    <td height="36" colspan="14" align="center">
        <?php
$atts = array();
$atts['tagname'] = 'pagelist';
$atts['listsize'] = '3';
 echo $this->refObj->GetPageList($atts,$this->refObj,$fields); 
?>

    </td>
</tr>
</table>

<!--  搜索表单  -->
</body>
</html>