<?php
if(!isset($GLOBALS['_vars'])) $GLOBALS['_vars'] = array(); 
$fields = array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $cfg_soft_lang; ?>">
    <title>�ĵ�����</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script language="javascript" src="../include/js/dedeajax2.js"></script>
    <script language="javascript" src="js/ieemu.js"></script>
    <script language="javascript" src="js/context_menu.js"></script>
    <script language="javascript" src="js/main.js"></script>
    <!--<script language="javascript" src="js/list.js"></script>-->
    <script language="javascript" src="js/list_youhui.js"></script>
</head>
<body leftmargin="8" topmargin="8" background='images/allbg.gif' onLoad="ContextMenu.intializeContextMenu()">

<!--  ����ת��λ�ð�ť  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#ccd9b9" align="center">
    <tr>
        <td height="26" background="images/newlinebg3.gif">
            <table width="98%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <form  name= "form2" action="content_search.php" method="post">
                            <input type="text" name="search" placeholder="��ʡ������">
                            <input type="text" name="search2" placeholder="��������������">
                            <input type="text" name="search3" placeholder="����ͼְλ��������">
                            <input type="submit" value="�� ��">
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<form action="upload_file.php?action=import" method="post" enctype="multipart/form-data" >
    <label for="file">����������</label>
    <input type="file" name="file" id="file" />
    <input type="submit" name="submit" value="ȷ������" />
</form>
<!--  �����б�   -->
<form name="form2">
    <table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center" style="margin-top:8px">
        <tr bgcolor="#E7E7E7" >
            <td height="28" colspan="14" background="images/tbg.gif" style="padding-left:10px;">
                �� <?php echo $GLOBALS['positionname']; ?>ְλ�б� &nbsp;
            </td>
        </tr>
        <tr align="center" bgcolor="#FBFCE2" height="25">
            <td width="6%">id</td>
            <!--<td width="6%"></td>-->
            <td width="6%">����˾��</td>
            <td width="8%">ְλ����</td>
            <td width="6%">�ٷ�ְλ����</td>
            <td width="10%">��ͼΨһְλ����</td>
            <td width="6%">�ƻ�����</td>
            <td width="6%">��������</td>
            <td width="6%">ʡ��</td>
            <td width="8%">��������</td>
            <td width="12%">ѧ��</td>
            <td width="8%">��ϸ</td>
            <td width="6%">����</td>
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
            <td>����</td>

            <td>
                <img src='images/gtk-edit.png' title="�༭" alt="�༭" onClick="editArc_youhui(<?php echo $fields['id']; ?>);" style='cursor:pointer' border='0' width='16' height='16' />
                <!--<input type="submit" value="ɾ��"  >-->
                <img src='images/trun.gif' title="�h��" alt="�h��" onClick="delArc_youhui(<?php echo $fields['id']; ?>, event, this);" style='cursor:pointer' border='0' width='16' height='16' />
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

<!--  ��������  -->
</body>
</html>