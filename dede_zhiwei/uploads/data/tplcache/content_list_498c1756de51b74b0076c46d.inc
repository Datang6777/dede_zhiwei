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
<script language="javascript" src="js/list.js"></script>
</head>
<body leftmargin="8" topmargin="8" background='images/allbg.gif' onLoad="ContextMenu.intializeContextMenu()">

<!--  ����ת��λ�ð�ť  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#ccd9b9" align="center">
<tr>
 <td height="26" background="images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
  <input type='button' class="coolbg np" onClick="location='catalog_do.php?channelid=<?php echo $GLOBALS['channelid']; ?>&cid=<?php echo $GLOBALS['cid']; ?>&dopost=addArchives';" value='�����ĵ�' />
  <?php if($adminid==$mid){ ?>
	<input type='button' class="coolbg np" onClick="location='content_list.php?cid=<?php echo $GLOBALS['cid']; ?>&mid=0';" value='ȫ���ĵ�' />
	<?php
}
else{
?>
	<input type='button' class="coolbg np" onClick="location='content_list.php?cid=<?php echo $GLOBALS['cid']; ?>&mid=<?php echo $cuserLogin->getUserID(); ?>';" value='�ҵ��ĵ�' />
	<?php }  echo $GLOBALS['CheckUserSend']; ?>
 <input type='button' class="coolbg np" onClick="location='catalog_main.php';" value='��Ŀ����' />
 <input type='button' class="coolbg np" name='bb1' onClick="location='makehtml_list.php?cid=<?php echo $GLOBALS['cid']; ?>';" value='�����б�' />
 <input type='button' class="coolbg np" name='bb2' onClick="location='makehtml_archives.php?cid=<?php echo $GLOBALS['cid']; ?>';" value='�����ĵ�' />
 <input type='button' class="coolbg np" name='bb1' onClick="location='recycling.php?cid=<?php echo $GLOBALS['cid']; ?>';" value='���»���վ' />
 </td>
 </tr>
</table>
</td>
</tr>
</table>
  
<!--  �����б�   -->
<form name="form2">
<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7" >
	<td height="28" colspan="14" background="images/tbg.gif" style="padding-left:10px;">
	�� <?php echo $GLOBALS['positionname']; ?>�Ż��б� &nbsp;(ʹ������Ҽ������˵�)
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
	<td width="4%">add_year</td>
	<td width="6%">userid</td>
	<td width="6%">username</td>

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
	<td><?php echo $fields['bb']; ?></td>
	<td><?php echo $fields['bc']; ?></td>
	<td><?php echo $fields['fenxiao']; ?></td>
	<td><?php echo $fields['starTime']; ?></td>
	<td><?php echo $fields['endTime']; ?></td>
	<td><?php echo $fields['bx']; ?></td>
	<td><?php echo $fields['jine']; ?></td>
	<td><?php echo $fields['if_zh']; ?></td>
	<td><?php echo $fields['addtime']; ?></td>
	<td><?php echo $fields['addyear']; ?></td>
	<td><?php echo $fields['userid']; ?></td>
	<td><?php echo $fields['username']; ?></td>

	<td>
		<img src='images/gtk-edit.png' title="�༭" alt="�༭" onClick="editArc(<?php echo $fields['id']; ?>);" style='cursor:pointer' border='0' width='16' height='16' />
		<!--<input type="submit" value="ɾ��"  >-->
		<img src='images/trun.gif' title="�h��" alt="�h��" onClick="delArc(<?php echo $fields['id']; ?>, event, this);" style='cursor:pointer' border='0' width='16' height='16' />
	</td>

</tr>
<?php
}
}?>
<tr bgcolor="#ffffff">
<td height="36" colspan="14">
	&nbsp;
	<a href="javascript:selAll()" class="coolbg">ȫѡ</a>
	<a href="javascript:noSelAll()" class="coolbg">ȡ��</a>
	<a href="javascript:updateArc(0)" class="coolbg">&nbsp;����&nbsp;</a>
	<a href="javascript:checkArc(0)" class="coolbg">&nbsp;���&nbsp;</a>
	<a href="javascript:adArc(0)" class="coolbg">&nbsp;�Ƽ�&nbsp;</a>
	<a href="javascript:;" onClick="moveArc(event,this,<?php echo (empty($channelid) ? 0 : $channelid); ?>)" class="coolbg">&nbsp;�ƶ�&nbsp;</a>
	<a href="javascript:delArc(0)" class="coolbg">&nbsp;ɾ��&nbsp;</a>
	<?php if($channelid==1) echo "	<a href=\"javascript:kwArc(0)\" class=\"coolbg\">&nbsp;�Զ��ؼ���&nbsp;</a>\r\n"; ?>
	<a href="javascript:;" onClick="cAtts('attsAdd',event,this)" class="coolbg">&nbsp;��������&nbsp;</a>
	<a href="javascript:;" onClick="cAtts('attsDel',event,this)" class="coolbg">&nbsp;ɾ������&nbsp;</a>
</td>
</tr>
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
<form name='form3' action='content_list.php' method='get'>
<input type='hidden' name='dopost' value='listArchives' />
<table width='98%'  border='0' cellpadding='1' cellspacing='1' bgcolor='#cfcfcf' align="center" style="margin-top:8px">
  <tr bgcolor='#EEF4EA'>
    <td background='images/wbg.gif' align='center'>
      <table border='0' cellpadding='0' cellspacing='0' height="32">
        <tr>
          <td width='160'>
          <select name='cid' style='width:150px'>
          <option value='0'>ѡ����Ŀ...</option>
          	<?php echo $GLOBALS['optionarr']; ?>
          </select>
        </td >
        <td nowrap>
          �ؼ��֣�
        </td>
        <td width='130'>
          	<input type='text' name='keyword' value='<?php echo $GLOBALS['keyword']; ?>' style='width:120px' />
        </td>
        <td width='90'>
    		<select name='orderby' style='width:80px'>
            <option value='id'>����...</option>
            <option value='pubdate'>����ʱ��</option>
            <option value='sortrank'>�ö�Ȩֵ</option>
            <option value='click'>�����</option>
            <option value='scores'>���ۻ���</option>
            <option value='lastpost'>�������</option>
      	</select>
      </td>
      <td width='90'>
    		<select name='flag' style='width:80px'>
            <option value=''>����...</option>
            <?php echo $GLOBALS['flagsArr']; ?>
      	</select>
      </td>
       <td>
          <input name="imageField" type="image" src="images/button_search.gif" width="60" height="22" border="0" class="np" />
       </td>
      </tr>
     </table>
   </td>
  </tr>
</table>
</form>

</body>
</html>