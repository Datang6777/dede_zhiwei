<?php
if(!isset($GLOBALS['_vars'])) $GLOBALS['_vars'] = array(); 
$fields = array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $cfg_soft_lang; ?>">
    <title> �޸�ְλ����</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script language="javascript" src="../include/js/dedeajax2.js"></script>
    <script language="javascript" src="js/ieemu.js"></script>
    <script language="javascript" src="js/context_menu.js"></script>
    <script language="javascript" src="js/main.js"></script>
    <!--<script language="javascript" src="js/list.js"></script>-->
    <script language="javascript" src="js/list_youhui.js"></script>
</head>
<body leftmargin="8" topmargin="8" background='images/allbg.gif' onLoad="ContextMenu.intializeContextMenu()">

<form name="form2" method="POST" action="content_save.php">
    <!--<form name="form2">-->
    <table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center"
           style="margin-top:8px">
        <tr bgcolor="#E7E7E7">
            <td height="28" colspan="14" background="images/tbg.gif" style="padding-left:10px;">
               ְλ����
            </td>
        </tr>
        <tr bgcolor="#FBFCE2" height="25">
            <td width="6%">id</td>
            <td><?php echo $row['id']?></td>
        </tr>
        <tr height="25">
            <td width="6%">����˾��</td>
            <td><?php echo $row['yrsj']?></td>
        </tr>
        <tr>
            <td width="6%">ְλ����</td>
            <td><?php echo $row['zwmc']?></td>
        </tr>
        <tr bgcolor="#FBFCE2">
            <td width="6%">�ٷ�����ְλ����</td>
            <td><?php echo $row['gfgbzwdm']?></td>
        </tr>
        <tr>
            <td width="6%">��ͼΨһְλ����</td>
            <td><?php echo $row['htwyzwdm']?></td>
        </tr>
        <tr>
            <td width="6%">�ƻ�����</td>
            <td><?php echo $row['jhrs']?></td>
        </tr>
        <tr>
            <td width="6%">��������</td>
            <td><?php echo $row['kzrs']?></td>
        </tr>
        <tr>
            <td width="8%">ʡ��</td>
            <td><?php echo $row['shengfen']?></td>
        </tr>
        <tr>
            <td width="8%">У��</td>
            <td><?php echo $row['xiaoqu']?></td>
            <!--<td><input type="text" name="addtime" value="<?php echo $row['addtime']?>"></td>-->
        </tr>
        <tr>
            <td width="8%">��������</td>
            <td><?php echo $row['kslx']?></td>
        </tr>
        <tr>
            <td width="4%">�п�ְλ������</td>
            <td><?php echo $row['zkzwsyr']?></td>
        </tr>
        <tr bgcolor="#FBFCE2">
            <td width="6%">רҵ</td>
            <td><?php echo $row['zhuanye']?></td>
        </tr>
        <tr bgcolor="#FBFCE2">
            <td width="6%">ѧ��</td>
            <td><?php echo $row['xueli']?></td>
        </tr>
        <tr>
            <td width="8%">ѧλ</td>
            <td><?php echo $row['xuewei']?></td>
        </tr>
        <tr>
            <td width="8%">�����������</td>
            <td><?php echo $row['bsksrq']?></td>
        </tr>
        <tr>
            <td width="8%">������ò</td>
            <td><?php echo $row['zzmm']?></td>
        </tr>
        <tr>
        <tr>
            <td width="8%">��������</td>
            <td><?php echo $row['gznx']?></td>
        </tr>
        <tr>
            <td width="8%">��������</td>
            <td><?php echo $row['bmmc']?></td>
        </tr>
        <tr>
            <td width="8%">���Ŵ���</td>
            <td><?php echo $row['bmdm']?></td>
        </tr>
        <tr>
            <td width="8%">��ע</td>
            <td><?php echo $row['beizhu']?></td>
        </tr>
        <tr>
            <td width="8%">ְλ���</td>
            <td><?php echo $row['zwjj']?></td>
        </tr>
        <tr>
            <td width="6%">����</td>
            <td>
                <!--<img src='images/gtk-edit.png' title="????" alt="????" onClick="updateArc(<?php echo $fields['id']; ?>);" style='cursor:pointer' border='0' width='16' /> <img src='images/trun.gif' title="?h??" alt="?h??" onClick="delArc(<?php echo $fields['id']; ?>, event, this);" style='cursor:pointer' border='0' width='16' height='16' />-->
                <input type="submit" value="�޸�">
                <input type="submit" value="����">
            </td>

        </tr>


</form>

</table>


</body>
</html>