<?php
/**
 * Created by PhpStorm.
 * User: snail
 * Date: 2017/10/22
 * Time: 11:35
 * 专家介绍内容编辑部分
 */
include "../public/conn.php";
$sql1 = mysqli_query($conn, "SELECT profile1 FROM ins_profile;");
$sql2 = mysqli_query($conn, "SELECT profile2 FROM ins_profile;");
$sql3 = mysqli_query($conn, "SELECT profile3 FROM ins_profile;");


if(isset($_POST['profile1'])) {
    mysqli_query($conn, "UPDATE ins_profile SET profile1='{$_POST['profile1']}';");
    echo "编辑成功！";
} else {
    echo "";
}

if(isset($_POST['profile2'])) {
    mysqli_query($conn, "UPDATE ins_profile SET profile2='{$_POST['profile2']}';");
    echo "编辑成功！";
} else {
    echo "";
}

if(isset($_POST['profile3'])) {
    mysqli_query($conn, "UPDATE ins_profile SET profile3='{$_POST['profile3']}';");
    echo "编辑成功！";
} else {
    echo "";
}


?>
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑主要负责人信息</strong></div>

    <div class="body-content">

            <form class="form-x" target="nm_iframe" enctype="multipart/form-data" name="upImage_form" action="team_edit_help.php" method="post">
                <div class="form-group">
                    <div class="label">
                        <label>上传照片:</label>
                    </div>
                    <div class="field">

                        <input class="input w50" name="upfile" type="file">
                        <input class="button bg-main icon-check-square-o" name="Submit" type="submit" value="上传*">
<!--                        <div class="tips">如需上传图片，请先上传，再编辑下面内容！</div>-->
                    </div>
                </div>

            </form>

        <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>

    </div>

    <div class="body-content">
        <form class="form-x">
            <div class="form-group">
                <div class="label">
                    <label>姓名：</label>
                </div>
                <div class="field">
                    <input type="text" id="nameId1" class="input w50" value="" name="title" data-validate="required:姓名不能为空！请输入姓名" />
                    <div class="tips"></div>
                </div>
            </div>

            <!--文章内容板块************-->
            <!--              引入编辑器-->
            <div style="width:90%;height:300px;padding-left: 10%" id="editor1"></div>
            <!--文章内容板块end**********-->

            <div class="field" style="text-align: center;">
                <!--              <button class="button bg-main icon-check-square-o" onclick="preview()"> 预览</button>&nbsp;&nbsp;&nbsp;-->
<!--                <button type="button" id="preview" class="button bg-main ">预览</button>&nbsp;&nbsp;&nbsp;-->
                <button type="button" id="submit1" class="button bg-main icon-check-square-o""> 提交</button>
            </div>

        </form>
    </div>
</div>



<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑技术骨干信息</strong></div>

    <div class="body-content">

        <form class="form-x" target="nm_iframe" enctype="multipart/form-data" name="upImage_form" action="team_edit_help.php" method="post">
            <div class="form-group">
                <div class="label">
                    <label>上传照片:</label>
                </div>
                <div class="field">

                    <input class="input w50" name="upfile" type="file">
                    <input class="button bg-main icon-check-square-o" name="Submit" type="submit" value="上传**">
                    <!--                        <div class="tips">如需上传图片，请先上传，再编辑下面内容！</div>-->
                </div>
            </div>

        </form>

        <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>

    </div>

    <div class="body-content">
        <form class="form-x">
            <div class="form-group">
                <div class="label">
                    <label>姓名：</label>
                </div>
                <div class="field">
                    <input type="text" id="nameId2" class="input w50" value="" name="title" data-validate="required:姓名不能为空！请输入姓名" />
                    <div class="tips"></div>
                </div>
            </div>

            <!--文章内容板块************-->
            <!--              引入编辑器-->
            <div style="width:90%;height:300px;padding-left: 10%" id="editor2"></div>
            <!--文章内容板块end**********-->

            <div class="field" style="text-align: center;">
                <!--              <button class="button bg-main icon-check-square-o" onclick="preview()"> 预览</button>&nbsp;&nbsp;&nbsp;-->
                <!--                <button type="button" id="preview" class="button bg-main ">预览</button>&nbsp;&nbsp;&nbsp;-->
                <button type="button" id="submit2" class="button bg-main icon-check-square-o""> 提交</button>
            </div>

        </form>
    </div>
</div>


<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑团队成员信息</strong></div>

    <div class="body-content">

        <form class="form-x" target="nm_iframe" enctype="multipart/form-data" name="upImage_form" action="team_edit_help.php" method="post">
            <div class="form-group">
                <div class="label">
                    <label>上传照片:</label>
                </div>
                <div class="field">

                    <input class="input w50" name="upfile" type="file">
                    <input class="button bg-main icon-check-square-o" name="Submit" type="submit" value="上传***">
                    <!--                        <div class="tips">如需上传图片，请先上传，再编辑下面内容！</div>-->
                </div>
            </div>

        </form>

        <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>

    </div>

    <div class="body-content">
        <form class="form-x">
            <div class="form-group">
                <div class="label">
                    <label>姓名：</label>
                </div>
                <div class="field">
                    <input type="text" id="nameId3" class="input w50" value="" name="title" data-validate="required:姓名不能为空！请输入姓名" />
                    <div class="tips"></div>
                </div>
            </div>

            <!--文章内容板块************-->
            <!--              引入编辑器-->
            <div style="width:90%;height:300px;padding-left: 10%" id="editor3"></div>
            <!--文章内容板块end**********-->

            <div class="field" style="text-align: center;">
                <!--              <button class="button bg-main icon-check-square-o" onclick="preview()"> 预览</button>&nbsp;&nbsp;&nbsp;-->
                <!--                <button type="button" id="preview" class="button bg-main ">预览</button>&nbsp;&nbsp;&nbsp;-->
                <button type="button" id="submit3" class="button bg-main icon-check-square-o""> 提交</button>
            </div>

        </form>
    </div>
</div>


<!--预览-->
<script>
    var btn = document.getElementById("preview");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor1').getContent();

        var url = "../home/article_detail_preview.php";
        $.post("article_preview_help.php",{precontent:jj});
        window.open(url);

    });
</script>


<!--主要负责人-->
<script>
    var btn = document.getElementById("submit1");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor1').getContent();
        var kk = document.getElementById("nameId1").value;
        if(kk == null) {
            alert("姓名不可为空！");
        } else {
            if(confirm("是否确认编辑？")) {
                $.post("team_edit_help.php",{content:jj,nameId1:kk},function(data){
                    if(data != "") {
                        alert("编辑成功！");
//                window.location.href="article_column.php";
                    } else {
                        alert("编辑失败！");
                    }
                });

            }
        }

    });
</script>


<!--技术骨干-->
<script>
    var btn = document.getElementById("submit2");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor2').getContent();
        var kk = document.getElementById("nameId2").value;
        if(kk == null) {
            alert("姓名不可为空！");
        } else {
            if(confirm("是否确认编辑？")) {
                $.post("team_edit_help.php",{content2:jj,nameId2:kk},function(data){
                    if(data != "") {
                        alert("编辑成功！");
//                window.location.href="article_column.php";
                    } else {
                        alert("编辑失败！");
                    }
                });

            }
        }

    })
</script>


<!--团队成员-->
<script>
    var btn = document.getElementById("submit3");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor3').getContent();
        var kk = document.getElementById("nameId3").value;
        if(kk == null) {
            alert("姓名不可为空！");
        } else {
            if(confirm("是否确认编辑？")) {
                $.post("team_edit_help.php",{content3:jj,nameId3:kk},function(data){
                    if(data != "") {
                        alert("编辑成功！");
//                window.location.href="article_column.php";
                    } else {
                        alert("编辑失败！");
                    }
                });

            }
        }

    })
</script>


<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor1');
    var ue2 = UE.getEditor('editor2');
    var ue3 = UE.getEditor('editor3');



    //    ******************获取编辑器内容********************************
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        var jj = UE.getEditor('editor').getContent();
        var kk = document.getElementById("nameId3").value;
        $.post("article_up_help.php",{content:jj,title:kk},function(data){
            alert("Data Loaded: " + data);
        });

    }
    //    ******************获取编辑器内容end********************************



    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }


</script>
</body>
</html>

