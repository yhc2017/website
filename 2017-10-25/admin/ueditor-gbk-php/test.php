<?php include "conn.php";
header("Content-type: text/html; charset=gbk");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>����demo</title>
    <meta http-equiv="Content-Type" content="text/html;charset=gbk"/>
    <script type="text/javascript" charset="gbk" src="ueditor.config.js"></script>
    <script type="text/javascript" charset="gbk" src="ueditor.all.min.js"></script>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <!--�����ֶ��������ԣ�������ie����ʱ��Ϊ��������ʧ�ܵ��±༭������ʧ��-->
    <!--������ص������ļ��Ḳ������������Ŀ����ӵ��������ͣ���������������Ŀ�����õ���Ӣ�ģ�������ص����ģ�������������-->
    <script type="text/javascript" charset="gbk" src="lang/zh-cn/zh-cn.js"></script>

    <style type="text/css">
        div{
            width:100%;
        }
    </style>
</head>
<body>

<!--<form id="pageform" name="pageform" method="post" action="insertHelp.php" onsubmit="return checkform()">-->

<div>
    <h1>���Ǻ�̨�༭��</h1>
    <!--���⣬URL***-->
    <!--    <form id="pageform" name="pageform" method="post" action="insertHelp.php" onsubmit="return checkform()">-->
    <table>
        <tr>
            <td align="right">���ű���:</td>
            <td><input name="title" type="text" size="80" id="titleid"/>
            </td>
        </tr>
        <tr>
            <td align="right">��תURL:</td>
            <td><input name="url" type="text" size="80"  value="<?php echo $rs['url'];?>"/>
                (���Ҫ����URL��ַ,��������ַ,���������գ���ת�����: http://)</td>
        </tr>
        <tr>
            <td></td>
            <!--                    <td><input type="submit" name="Submit" value="ȷ���ύ" /></td>-->
        </tr>
    </table>
    <!--        --><?php
    //        $sql= "select * from n_find_cn where id='".$_GET['id']."'";  //��ȡ��Ӧ�Ľ������Ҫдwhere id =where id='".$_GET['id']."',�����޷���ȡ�ɹ�
    //        $query=mysql_query($sql);
    //        while($r = mysql_fetch_array($query)){
    //            $id = $r["id"];
    //            $ab = $r["title"];
    //            $ac = $r["url"];
    //            ?>
    <!--            <input type="hidden" name="id" value="--><?php //echo $id?><!--">-->
    <!--            <input type="hidden" name="do_action" value="--><?php //echo $do_action?><!--">-->
    <!--            --><?php
    //        }
    //        ?>
    <!--    </form>-->
    <!--���⣬URL***end-->
    <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
</div>

<div id="btns">
    <div>
        <button onclick="getAllHtml()">�������html������</button>
        <button onclick="getContent()">�������</button>
        <!--        <input type="submit" name="Submit" value="ȷ���ύ" onclick="getContent()"/>-->
        <button onclick="setContent()">д������</button>
        <button onclick="setContent(true)">׷������</button>
        <button onclick="getContentTxt()">��ô��ı�</button>
        <button onclick="getPlainTxt()">��ô���ʽ�Ĵ��ı�</button>
        <button onclick="hasContent()">�ж��Ƿ�������</button>
        <button onclick="setFocus()">ʹ�༭����ý���</button>
        <button onmousedown="isFocus(event)">�༭���Ƿ��ý���</button>
        <button onmousedown="setblur(event)" >�༭��ʧȥ����</button>
    </div>
    <div>
        <button onclick="getText()">��õ�ǰѡ�е��ı�</button>
        <button onclick="insertHtml()">�������������</button>
        <button id="enable" onclick="setEnabled()">���Ա༭</button>
        <button onclick="setDisabled()">���ɱ༭</button>
        <button onclick=" UE.getEditor('editor').setHide()">���ر༭��</button>
        <button onclick=" UE.getEditor('editor').setShow()">��ʾ�༭��</button>
        <button onclick=" UE.getEditor('editor').setHeight(300)">���ø߶�Ϊ300Ĭ�Ϲر����Զ�����</button>
    </div>

    <div>
        <button onclick="getLocalData()" >��ȡ�ݸ�������</button>
        <button onclick="clearLocalData()" >��ղݸ���</button>
    </div>

</div>
<div>
    <button onclick="createEditor()">
        �����༭��</button>
    <button onclick="deleteEditor()">
        ɾ���༭��</button>
</div>

<!--</form>-->


<script type="text/javascript" >

    //ʵ�����༭��
    //����ʹ�ù�������getEditor���������ñ༭��ʵ���������ĳ���հ������øñ༭����ֱ�ӵ���UE.getEditor('editor')�����õ���ص�ʵ��
    var ue = UE.getEditor('editor');
    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('����html����', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("ʹ��editor.getContent()�������Ի�ñ༭��������");
        arr.push("����Ϊ��");
        var jj = UE.getEditor('editor').getContent();
        var kk = document.getElementById("titleid").value;
        $.post("insertHelp.php",{content:jj,title:kk},function(data){
            alert("Data Loaded: " + data);
        });
    };

    function getPlainTxt() {
        var arr = [];
        arr.push("ʹ��editor.getPlainTxt()�������Ի�ñ༭���Ĵ���ʽ�Ĵ��ı�����");
        arr.push("����Ϊ��");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("ʹ��editor.setContent('��ӭʹ��ueditor')�����������ñ༭��������");
        UE.getEditor('editor').setContent('��ӭʹ��ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //��������ťʱ�༭�����Ѿ�ʧȥ�˽��㣬���ֱ����getText������õ����ݣ�����Ҫ��ѡ������Ȼ��ȡ������
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("ʹ��editor.getContentTxt()�������Ի�ñ༭���Ĵ��ı�����");
        arr.push("�༭���Ĵ��ı�����Ϊ��");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("ʹ��editor.hasContents()�����жϱ༭�����Ƿ�������");
        arr.push("�жϽ��Ϊ��");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("����ղݸ���")
    }
</script>
</body>
</html>