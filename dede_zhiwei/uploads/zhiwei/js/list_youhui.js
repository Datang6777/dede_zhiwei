/**
 * Created by 27500 on 2016/10/9.
 */
/*编辑职位信息*/
function editArc_youhui(aid){
    if(aid==0) aid = getOneItem();
    location="archives_do_youhui.php?id="+aid+"&dopost=editArchives";
}

/*职位详情*/
function detailArc_youhui(aid){
    if(aid==0) aid = getOneItem();
    location="archives_do_youhui.php?id="+aid+"&dopost=detailArchives";
}
/*删除职位*/
function delArc_youhui(aid){
    var qstr=getCheckboxItem();
    if(aid==0) aid = getOneItem();
    location="archives_do_youhui.php?qstr="+qstr+"&id="+aid+"&dopost=delArchives";
}
function getCheckboxItem()
{
    //var allSel="";
    //if(document.form2.ids.value) return document.form2.ids.value;
    //for(i=0;i<document.form2.ids.length;i++)
    //{
    //    if(document.form2.ids[i].checked)
    //    {
    //        allSel = ( allSel=='' ? document.form2.ids[i].value : allSel+","+document.form2.ids[i].value);
    //    }
    //}
    //return allSel;
}