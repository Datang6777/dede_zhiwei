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
                            <input type="text" name="search" placeholder="按分校搜索">
                            <input type="text" name="search2" placeholder="按班别bb搜索">
                            <input type="text" name="search3" placeholder="按班次bc搜索">
                            <input type="submit" value="搜 索">
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!--  内容列表   -->
<form name="form2">
    <table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center" style="margin-top:8px">
        <tr bgcolor="#E7E7E7" >
            <td height="28" colspan="14" background="images/tbg.gif" style="padding-left:10px;">
                ◆ <?php echo $GLOBALS['positionname']; ?>优惠列表 &nbsp;(使用鼠标右键弹出菜单)
            </td>
        </tr>
        <tr align="center" bgcolor="#FBFCE2" height="25">
            <td width="6%">id</td>
            <td width="6%">bb</td>
            <td width="6%">bc</td>
            <td width="6%">fenxiao</td>
            <td width="6%">starTime</td>
            <td width="6%">endTime</td>
            <td width="6%">bx</td>
            <td width="8%">jine</td>
            <td width="8%">addtime</td>
            <td width="8%">if_zh</td>
            <td width="4%">addyear</td>
            <td width="6%">userid</td>
            <td width="6%">username</td>
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
            <td><?php echo $fields['bb']; ?></td>
            <td><?php echo $fields['bc']; ?></td>
            <td><?php echo $fields['fenxiao']; ?></td>
            <td><?php echo $fields['starTime']; ?></td>
            <td><?php echo $fields['endTime']; ?></td>
            <td><?php echo $fields['bx']; ?></td>
            <td><?php echo $fields['jine']; ?></td>
            <td><?php echo $fields['addtime']; ?></td>
            <td><?php echo $fields['if_zh']; ?></td>
            <td><?php echo $fields['addyear']; ?></td>
            <td><?php echo $fields['userid']; ?></td>
            <td><?php echo $fields['username']; ?></td>

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