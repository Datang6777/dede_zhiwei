<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>��ͼ��������������Դ����</title>
    <style type="text/css">
        .denglu {
            text-align: center;
            width: 350px;
            line-height: 30px;
        }
    </style>
</head>
<script language="javascript">
    function yzm() {
        if (document.hrform.name.value == "") {
            alert("�˺Ų���ȷ");
            return false;
        }
        if (document.hrform.pwd.value == "") {
            alert("���벻��ȷ");
            return false;
        }

        if (document.hrform.szyzm.value == "") {
            alert("��֤��Ϊ�գ�");
            return false;
        }
    }
</script>

<body>
<div style="width:900px; margin:auto;">
    <IMG alt=��ͼ��Ƹ src="images/top.jpg" width=691
         height=95>

    <div>
        <TABLE border=0 cellSpacing=0 borderColor=#cccccc cellPadding=0 width=900>
            <COLGROUP>
                <COL span=2 width=72>
                <COL width=92>
                <COL width=79>
                <COL width=72>
                <COL width=66>
                <COL width=104>
                <COL span=2 width=72>
                <TBODY>
                <TR borderColor=#cc0000>
                    <TD style="COLOR: #fff" bgColor=#cc0000 height=45 colSpan=9
                        align=center><FONT
                            size=+2><STRONG>�� ¼</STRONG></FONT></TD>
                </TR>
                </TBODY>
        </TABLE>
        <div
            style=" text-align:center;margin-top:40px; margin-left:auto; margin-right:auto;border:1px solid #999999; height:150px; width:350px; padding-top:20px;">
            <table class="denglu">
                <form name="hrform" action="shangchuan.php" method="POST" onSubmit="return yzm()">
                    <tr>
                        <td>
                            �ˡ��ţ�<input type="text" name="name"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            �ܡ��룺<input type="password" name="pwd"/>
                        </td>
                    </tr>

                    <tr>
<!--                        <td>-->
<!--                            ��֤�룺<input type="text" id="szyzm" size="10" name="szyzm"/> <img id="yzm"-->
<!--                                                                                            onclick="this.src=this.src+'?'"-->
<!--                                                                                            align="absmiddle"-->
<!--                                                                                            src="numzy.php"/>-->
<!--                        </td>-->
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="Submit" value="��½"/>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <div
            style="width:900px;text-align:center; color:#FFFFFF; font-size:12px; background:#cc0000; padding-bottom:10px; padding-top:10px;  margin-left:auto; margin-right:auto;  margin-top:50px;">
            ��ͼ���� 2010
            <div>
</body>

</html>
