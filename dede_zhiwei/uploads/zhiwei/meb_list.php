<!doctype html>
<html lang="en">
<HEAD><TITLE>��ͼ����ְλ��</TITLE>
    <META content="text/html; charset=gb2312" http-equiv="Content-Type">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <STYLE type="text/css">
        table {
            background: #cccccc;
        }
        td {
            background: #ffffff;
        }
        tr {
            height: 30px;
        }
        TD {
            FONT-FAMILY: "����";
            FONT-SIZE: 12px
        }

        .spn_k {
            padding-top: 10px;
        }

        a {
            text-decoration: none;
            color: #0099FF;
        }

        a:hover {
            text-decoration: underline;
            color: #FF9900;
        }

        .list_page {
            padding-left: 5px;
        }

        .list_page_box {
            float: left;
            text-align: center;
            margin-left: 5px;
            line-height: 25px;
        }
        .list_page_my {
            float: left;
            text-align: center;
            margin-left: 5px;
            line-height: 25px;
        }

        .list_page_box2 {
            width: 20px;
            float: left;
            text-align: center;
            margin-left: 5px;
            line-height: 25px;
        }

        .list_page_box2 a:link {
            color: #666;
            text-decoration: none;
        }

        /* δ���ʵ����� */
        .list_page_box2 a:visited {
            color: #666;
            text-decoration: none;
        }

        /* �ѷ��ʵ����� */
        .list_page_box2 a:hover {
            color: #F00;
            text-decoration: none;
        }

        /* ���������ͣ�������� */
        .list_page_box2 a:active {
            color: #666;
        }

        /* ��ѡ������� */
    </STYLE>
    <script language="javascript">
        $(document).ready(function () {
//ȫѡ
            $("#qdel").click(function () {
                $("[name='tdel']").attr("checked", 'true');
            });
//ȡ��
            $("#xdel").click(function () {
                $("[name='tdel']").removeAttr("checked");
            });
//��ѡ
            $("#fdel").click(function () {
                $("[name='tdel']").each(function () {
                    if ($(this).attr("checked")) {
                        $(this).removeAttr("checked");
                    }
                    else {
                        $(this).attr("checked", 'true');
                    }
                })
            });
//����ɾ��
            $("#godel").click(function () {
                if (confirm("ȷ��ɾ��")) {
                    var aa = "";
                    $("[name='tdel']").each(function () {
                        if ($(this).attr("checked")) {
                            aa += "," + $(this).val();
                        }
                    });
//ajax
                    var sjs = Math.random();
                    $.ajax({
                        type: "GET",
                        url: "quanbudel.php",
                        data: "act=" + sjs + "&delid=" + aa,
                        success: function (data) {
                            if (data == "yes") {
                                alert('ɾ���ɹ�');
                                location.reload();
                            } else {
                                alert('ɾ��ʧ��');
                            }
                        }
                    });
                }
            });
//�༭
            $("#goedit").click(function () {
                var ee = "";
                $("[name='tdel']").each(function () {
                    if ($(this).attr("checked")) {
                        ee += "," + $(this).val();
                    }
                });
                location.href = "quanbuedit.php?editid=" + ee;
            });

        });

    </script>

    <META name=GENERATOR content="MSHTML 8.00.7600.16671">
</HEAD>
<BODY>

<DIV align=center>

    <TABLE border=0 cellSpacing=0 cellPadding=0 width=928>
        <TBODY>
        <TR>
            <TD align=left><IMG alt=��ͼ��Ƹ src="../../../baokaozhiwei/images/top.jpg" width=691
                                height=95></TD>
            <td>
                <div style="float:right;"><a href="../../../baokaozhiwei/htexit.php">�˳�</a></div>
            </td>
        </TR>
        </TBODY>
    </TABLE>
    <TABLE border=0 cellSpacing=0 borderColor=#cccccc cellPadding=0 width=928>
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
                    align=middle><FONT
                        size=+2><STRONG>��ͼ��������Ա����Ϣ��</STRONG></FONT></TD>
            </TR>
            </TBODY>
    </TABLE>
    <?php
    if ($_GET[id] and $_GET[act] == "del") {
        $delid = $_GET[id];
        $sql = "select id from dede_zhiwei where id=$delid";
        $query = mysql_query($sql);
        $arr = mysql_fetch_array($query);
        if ($arr) {
            $sql = "delete from dede_zhiwei where id=$delid";
            if (mysql_query($sql)) {
                echo "<script>alert('ɾ���ɹ���')</script>";
            } else {
                echo "<script>alert('ɾ��ʧ�ܣ�')</script>";
            }
        }
    }
    $start = 1;
    if (empty($_GET['start'])) {
        $start = 1;
    } else {
        $start = $_GET['start'];
    }
    $sql = "select * from  dede_zhiwei where ";
    //��������;
    $shengfen = $_POST['shengfen'] ? $_POST['shengfen'] : $_GET['shengfen'];
    if ($shengfen) {
        $sql .= " shengfen='" . $shengfen . "' and ";
    }
    $kslx = $_POST['kslx'] ? $_POST['kslx'] : $_GET['kslx'];
    if ($xingming) {
        $sql .= " kslx = '" . $kslx . "'  and ";
    }
    $htwyzwdm = $_POST['htwyzwdm'] ? $_POST['htwyzwdm'] : $_GET['htwyzwdm'];
    if ($htwyzwdm) {
        $sql .= " htwyzwdm like '" . $htwyzwdm . "%' and ";
    }
    $bsksrq = $_POST['bsksrq'] ? $_POST['bsksrq'] : $_GET['bsksrq'];
    if ($bsksrq) {
        $sql .= " bsksrq='" . $bsksrq . "' and ";
    }


    $sql .= " 1=1 order by id ASC ";
    mysql_query("set names gbk");
    $rest = mysql_query($sql);
    if ($rest) {
        $tnums = mysql_num_rows($rest);
    }
    //mysql_free_result($tresult);
    //��ҳ��;
    $tyeshu = $tnums / 30;
    $tyeshu = ceil($tyeshu);

    //ÿҳ��ʾ����Ŀ
    $evnum = 30;
    if ($_GET['fanye'] == "up" and $start < $tyeshu) {
        $start = $start + 1;
    }
    if ($_GET['fanye'] == "down" and $start > 1) {
        $start = $start - 1;
    }

    $starty = ($start - 1) * 30;
    $end = $start * 30;

    //��ǰҳ��ʾ�ļ�¼
    $sql .= "    limit " . $starty . ",30";
    // echo $sql;
    mysql_query("set names gbk");
    $result = mysql_query($sql);

    $numsye = $tyeshu / 10;
    $numsye = intval($numsye);

    $numsyey = $start / 10;
    $numsyey = round($numsyey);
    ?>

    <TABLE border=0 cellSpacing=1 cellPadding=0 width=928>
        <TBODY>
        <TR>
            <TD colSpan=12>
                <form name="form1" action="meb_list.php" method="post">
                    <div
                        style=" text-align:left; padding-left:20px;   padding-top:10px; padding-bottom:10px;float:left; width:700px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ʡ�ݣ�<input type="text" name="shengfen"
                                                                                  value="<?= $shengfen ?>"
                                                                                  style="border:1px solid #CCCCCC ;"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�������ͣ�<input type="text" value="<?= $kslx ?>" name="kslx"
                                                                        style="border:1px solid #CCCCCC ;"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ͼְλ���룺<input type="text" name="htwyzwdm" value="<?= $htwyzwdm ?>"
                                                                    style="border:1px solid #CCCCCC ;"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ʱ�䣺<input class="Wdate" style="border:1px solid #CCCCCC ;"
                                                                        type="text" onClick="WdatePicker()"
                                                                        value="<?= $bsksrq ?>" name="bsksrq"/>
                    </div>
                    <div
                        style=" float:left; border-left:1px solid #7B7B7B; margin-top:5px; margin-left:20px;padding-left:60px; height:65px;">
                        <input name="" type="image" src="../../../baokaozhiwei/images/SK_seach.gif"/></div>
                </form>
            </TD>
        </TR>
        <TR>
            <td colSpan=6 align="left" style="border-right:0px">&nbsp;&nbsp;<a href="../../../baokaozhiwei/daoru_20111107.php">����������</a></td>
            <TD height=33 style="border-left:0px" colSpan=6 align=right>&nbsp;&nbsp;</TD>
        </TR>

        <TR>
            <TD style="background:url(../../../baokaozhiwei/images/box_1.gif) repeat-x #FFF;" height=33 colSpan=12
                align=middle>ְλ��Ϣ�б�
            </TD>
        </TR>
        <TR>
            <TD width="30"><strong>ɾ��</strong></TD>
            <TD width="141"><strong>����˾��</strong></TD>
            <TD width="72"><strong>ְλ����</strong></TD>
            <TD width="46"><strong>�ٷ�ְλ����</strong></TD>
            <TD width="121"><strong>��ͼΨһְλ����</strong></TD>
            <TD width="27"><strong>�ƻ�����</strong></TD>
            <TD width="30"><strong>��������</strong></TD>
            <TD width="83"><strong>ʡ��</strong></TD>
            <TD width="100"><strong>��������</strong></TD>
            <TD width="130"><strong>ѧ��</strong></TD>
            <TD width="60"><strong>��ϸ</strong></TD>
            <TD width="68"><strong>����</strong></TD>
        </TR>
        <?
        while ($arr = mysql_fetch_array($result)) {
            ?>
            <TR>
                <TD width="30" align="center"><input type="checkbox" value="<?= $arr[id] ?>" name="tdel"/></TD>
                <TD width="141"><?= $arr['yrsj'] ?></TD>
                <TD width="72"><?= $arr['zwmc'] ?></TD>
                <TD width="46"><?= $arr['gfgbzwdm'] ?></TD>
                <TD width="121"><?= $arr['htwyzwdm'] ?>&nbsp;</TD>
                <TD width="27"><?= $arr['jhrs'] ?>&nbsp;</TD>
                <TD width="30"><?= $arr['kzrs'] ?>&nbsp;</TD>
                <TD width="83"><?= $arr['shengfen'] ?>&nbsp;</TD>
                <TD width="100"><?= $arr['kslx'] ?>&nbsp;</TD>
                <TD width="130"><?= $arr['xueli'] ?>&nbsp;</TD>
                <TD width="58"><a href="../../../baokaozhiwei/meb_detail.php?hr_ygh=<?= $arr['id'] ?>">����</strong></TD>
                <TD width="70"><a href="../../../baokaozhiwei/hr.php?hr_ygh=<?= $arr['id'] ?>" target="_blank">�༭</a>
                    <a
                        href="javascript: if(confirm('ȷ��ɾ��')){ location.href='?act=del&id=<?= $arr[id] ?>';}">ɾ��</a>
                </TD>
            </TR>
            <?
        }
        ?>
        </TBODY>
        <TR>
            <TD colSpan="2" height="33" align="left">ȫѡ��<input type="checkbox" name="qdel" id="qdel"/>
                ȡ����<input type="checkbox" name="xdel" id="xdel"/>��ѡ��<input type="checkbox" name="fdel" id="fdel"/></TD>
            <TD height="33" colSpan="10" align="left"><input type="button" value="ɾ��" id="godel"/>&nbsp;<input
                    type="button" value="�༭" id="goedit"/></TD>
        </TR>
    </TABLE>


    <TABLE border=0 cellSpacing=1 cellPadding=0 width=928>
        <TBODY>
        <TR>
            <TD colSpan=9>
                <div class="list_page">
                    <div class="list_page_box" style="width:180px;text-align:left;">

                        �ܼ�¼��<?= $tnums ?> ��ҳ����<?= $tyeshu ?></div>

                    <? if ($start > 1) { ?>
                        <div class="list_page_box"><a
                                href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&fanye=down&start=1">��ҳ</a>
                        </div>
                        <div class="list_page_box"><a
                                href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&fanye=down&start=<?= $start ?>">��һҳ</a>
                        </div>
                    <? } else { ?>
                        <div class="list_page_box">��ҳ</div>
                        <div class="list_page_box">��һҳ</div>
                    <? } ?>

                    <?
                    //��ҳ��ʵ��
                    if ($numsye == 0) {
                        for ($i = 1; $i <= $tyeshu; $i++) {
                            ?>
                            <div class="list_page_box2"><a <? if ($start == $i) {
                                    echo "style='color:red;font-weight:bold;'";
                                } ?>
                                    href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&start=<?= $i ?>"><?= $i ?></a>
                            </div>
                            <?
                        }
                    } else {

                        if ($numsyey < $numsye && $start >= 10) {
                            for ($i = ($numsyey * 10 - 6); $i <= ($numsyey * 10 + 5); $i++) {
                                ?>
                                <div class="list_page_box2"><a <? if ($start == $i) {
                                        echo "style='color:red;font-weight:bold;'";
                                    } ?>
                                        href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&start=<?= $i ?>"><?= $i ?></a>
                                </div>
                                <?
                            }
                        } elseif ($numsyey == $numsye) {
                            for ($i = ($numsyey * 10 - 6); $i <= $tyeshu; $i++) {
                                ?>
                                <div class="list_page_box2"><a <? if ($start == $i) {
                                        echo "style='color:red;font-weight:bold;'";
                                    } ?>
                                        href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&start=<?= $i ?>"><?= $i ?></a>
                                </div>
                                <?
                            }

                        } else {
                            for ($i = 1; $i <= 10; $i++) {
                                ?>
                                <div class="list_page_box2"><a <? if ($start == $i) {
                                        echo "style='color:red;font-weight:bold;'";
                                    } ?>
                                        href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&start=<?= $i ?>"><?= $i ?></a>
                                </div>
                                <?
                            }
                        }
                    }
                    ?>


                    <? if ($tyeshu > 1 && $start < $tyeshu) { ?>
                        <div class="list_page_box"><a
                                href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&fanye=up&start=<?= $start ?>">��һҳ</a>
                        </div>
                        <div class="list_page_my"><a
                                href="?gonghao=<?= $gonghao ?>&xingming=<?= $xingming ?>&xingbie=<?= $xingbie ?>&scw=<?= $scw ?>&yjbm=<?= $yjbm ?>&ejbm=<?= $ejbm ?>&rz_begin=<?= $rz_begin ?>&rz_end=<?= $rz_end ?>&fanye=up&start=<?= $tyeshu ?>">ĩҳ</a>
                        </div>
                    <? } else { ?>
                        <div class="list_page_box">��һҳ</div>
                        <div class="list_page_my">ĩҳ</div>
                    <? } ?>
                </div>
            </TD>
        </TR>
        <TR>
            <TD colSpan=9>&nbsp; </TD>
        </TR>
        </TBODY>

    </TABLE>
</DIV>
<div
    style="width:928px;text-align:center; color:#FFFFFF; font-size:12px; background:#cc0000; padding-bottom:10px; padding-top:10px;  margin-left:auto; margin-right:auto;  margin-top:20px;">
    ��ͼ���� 2010
    <div>
        <SCRIPT>

            function check(form) {
                if (form.xingming.value == "") {
                    alert('����д����');
                    return false;
                }

                if (form.zhiwei.value == "") {
                    alert('����дְλ');
                    return false;
                }
                if (form.xzjb.value == "") {
                    alert('����д��������');
                    return false;
                }
                if (form.zhicheng.value == "") {
                    alert('����дְ��');
                    return false;
                }
                if (form.rzsj.value == "") {
                    alert('����д��ְʱ��');
                    return false;
                }
                if (form.sfzh.value == "") {
                    alert('����д���֤��');
                    return false;
                }
                if (form.csrq.value == "") {
                    alert('����д��������');
                    return false;
                }
                if (form.nianling.value == "") {
                    alert('����д����');
                    return false;
                }
                if (form.xingbie.value == "") {
                    alert('����д�Ա�');
                    return false;
                }
                if (form.xueli.value == "") {
                    alert('����дѧ��');
                    return false;
                }

                if (form.zhuanye.value == "") {
                    alert('����дרҵ');
                    return false;
                }
                if (form.byyx.value == "") {
                    alert('����д��ҵԺУ');
                    return false;
                }
                if (form.lxfs.value == "") {
                    alert('����д��ϵ��ʽ');
                    return false;
                }
                if (form.htksrq.value == "") {
                    alert('����д��ͬ��ʼ����');
                    return false;
                }
                if (form.htzzrq.value == "") {
                    alert('����д��ͬ��ֹ����');
                    return false;
                }
                if (form.jyxz.value == "") {
                    alert('����д��ҵ����');
                    return false;
                }
                if (form.minzu.value == "") {
                    alert('����д����');
                    return false;
                }
                if (form.jiguan.value == "") {
                    alert('����д����');
                    return false;
                }
                if (form.zzmm.value == "") {
                    alert('����д������ò');
                    return false;
                }

                if (form.jjlxr.value == "") {
                    alert('����д������ϵ��');
                    return false;
                }
                if (form.lxrdh.value == "") {
                    alert('����д��ϵ�˵绰');
                    return false;
                }
                if (form.xjzdz.value == "") {
                    alert('����д��ס��ַ');
                    return false;
                }
                if (form.hjxxdz.value == "") {
                    alert('����д������ϸ��ַ');
                    return false;
                }


            }


        </SCRIPT>
</BODY>
</HTML>



