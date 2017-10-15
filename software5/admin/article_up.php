<!--//上传文章页面-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="gbk" src="./ueditor-gbk-php/ueditor.config.js"></script>
    <script type="text/javascript" charset="gbk" src="./ueditor-gbk-php/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="gbk" src="./ueditor-gbk-php/lang/zh-cn/zh-cn.js"></script>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
    <script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
    <!---->
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>上传文章</strong></div>

    <div class="body-content">
        <form class="form-x">
            <div class="form-group">
                <div class="label">
                    <label>文章标题：</label>
                </div>
                <div class="field">
                    <input type="text" id="titleid" class="input w50" value="" name="title" data-validate="required:标题不能为空！请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>
            <!--文章内容板块************-->
            <!--              引入编辑器-->
            <div style="width:90%;height:300px;padding-left: 10%" id="editor"></div>
            <!--文章内容板块end**********-->

            <div class="field" style="text-align: center;">
                <!--              <button class="button bg-main icon-check-square-o" onclick="preview()"> 预览</button>&nbsp;&nbsp;&nbsp;-->
                <button type="button" id="preview" class="button bg-main icon-check-square-o">预览</button>&nbsp;&nbsp;&nbsp;
                <button type="button" id="submit" class="button bg-main icon-check-square-o""> 提交</button>
            </div>
        </form>
    </div>
</div>


<script>
    var btn = document.getElementById("preview");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor').getContent();
//        var kk = document.getElementById("titleid").value;
        var hh = $("#titleid").val();
        var url = "../home/article_detail_preview.php";
        $.post("article_preview_help.php",{precontent:jj,pretitle:hh});
        window.open(url)
    });
</script>
<script>
    var btn = document.getElementById("submit");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor').getContent();
        var kk = document.getElementById("titleid").value;
        $.post("article_up_help.php",{content:jj,title:kk},function(data){
            if(data != "") {
                alert("上传成功！请前往前台新闻板块查看");
//                alert(data);
            } else {
                alert("发布失败！");
            }


//
//            alert("Data Loaded: " + data);
        });
    });
</script>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');



    //    ******************获取编辑器内容********************************
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        var jj = UE.getEditor('editor').getContent();
        var kk = document.getElementById("titleid").value;
        $.post("article_up_help.php",{content:jj,title:kk},function(data){
            alert("Data Loaded: " + data);
        });
    }
    //    ******************获取编辑器内容end********************************


    //    function preview() {
    //        var arr = [];
    //        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
    //        arr.push("内容为：");
    //        var jj = UE.getEditor('editor').getContent();
    //        var kk = document.getElementById("titleid").value;
    //        $.post("article_preview_help.php",{precontent:jj,title:kk});
    ////        window.location.href='../home/article_detail_preview.php';
    //        window.open('../home/article_detail_preview.php','newframe','width=750,height=1200,left=100,top=100,menubar=no,toolbar=no,location=no,scrollbars=no');
    //            //        window.open("../home/article_detail_preview.php");
    //    }

    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }

    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
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
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
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
        alert("已清空草稿箱")
    }
</script>
</body>
</html>