<?php
/**
 * Created by PhpStorm.
 * User: snail
 * Date: 2017/10/22
 * Time: 11:35
 * 首页脚部内容编辑部分
 */
include "../public/conn.php";
$sql1 = mysqli_query($conn, "SELECT footer_relation FROM footerInfo;");
$sql2 = mysqli_query($conn, "SELECT footer_cooperation FROM footerInfo;");


if(isset($_POST['footer_relation'])) {
    mysqli_query($conn, "UPDATE footerInfo SET footer_relation='{$_POST['footer_relation']}';");
    echo "编辑成功！";
} else {
    echo "";
}

if(isset($_POST['footer_cooperation'])) {
    mysqli_query($conn, "UPDATE footerInfo SET footer_cooperation='{$_POST['footer_cooperation']}';");
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>联系我们</strong></div>

    <div class="body-content">
        <form class="form-x">

            <!--文章内容板块************-->
            <!--              引入编辑器-->
            <div style="width:90%;height:300px;padding-left: 10%" id="editor"></div>
            <!--文章内容板块end**********-->

            <div class="field" style="text-align: center;">
                <!--              <button class="button bg-main icon-check-square-o" onclick="preview()"> 预览</button>&nbsp;&nbsp;&nbsp;-->
                <button type="button" id="preview" class="button bg-main ">预览</button>&nbsp;&nbsp;&nbsp;
                <button type="button" id="submit1" class="button bg-main icon-check-square-o""> 提交</button>
            </div>

        </form>
    </div>
</div>



<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>合作单位</strong></div>

    <div class="body-content">
        <form class="form-x">

            <!--文章内容板块************-->
            <!--              引入编辑器-->
            <div style="width:90%;height:300px;padding-left: 10%" id="editor2"></div>
            <!--文章内容板块end**********-->

            <div class="field" style="text-align: center;">
                <!--              <button class="button bg-main icon-check-square-o" onclick="preview()"> 预览</button>&nbsp;&nbsp;&nbsp;-->
                <button type="button" id="preview" class="button bg-main ">预览</button>&nbsp;&nbsp;&nbsp;
                <button type="button" id="submit2" class="button bg-main icon-check-square-o""> 提交</button>
            </div>

        </form>
    </div>
</div>


<script>
//    $(document).ready(function(){
//        <?php
//                if( $res = mysqli_fetch_array($sql1)) {
//                    echo "UE.getEditor('editor').setContent('{$res['footer_relation']}');";
//                } else {
//                    echo "UE.getEditor('editor').setContent('尚未设置任何“联系我们”的内容！');";
//                }
//                if( $res = mysqli_fetch_array($sql2)) {
//                    echo "UE.getEditor('editor2').setContent('{$res['footer_cooperation']}');";
//                } else {
//                    echo "UE.getEditor('editor2').setContent('尚未设置任何“合作单位”的内容！');";
//                }
//
//        ?>
//
//        UE.getEditor('editor').setContent('66666');
//    });

$(document).ready(function(){
    var ue = UE.getEditor('editor');
    var ue2 = UE.getEditor('editor2');
    ue.ready(function(){
        <?php
                        if( $res = mysqli_fetch_array($sql1)) {
                            echo "ue.setContent('{$res['footer_relation']}');";
                        } else {
                            echo "alert('测试用：数据库出现错误！');";
                        }
                ?>

    });
    ue2.ready(function(){
        <?php
        if( $res2 = mysqli_fetch_array($sql2)) {
            echo "ue2.setContent('{$res2['footer_cooperation']}');";
        } else {
            echo "alert('测试用：数据库出现错误！');";
        }
        ?>
    });

});

</script>


<script>
    var btn = document.getElementById("preview");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor').getContent();

        var url = "../home/article_detail_preview.php";
        $.post("article_preview_help.php",{precontent:jj});
        window.open(url);

    });
</script>


<script>
    var btn = document.getElementById("submit1");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor').getContent();

        if(jj == null) {
            jj = '尚未设置任何“联系我们”的内容！';
        } else {
            if(confirm("是否确认编辑？")) {
                $.post("footer_edit.php",{footer_relation:jj},function(data){
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

<script>
    var btn = document.getElementById("submit2");
    btn.addEventListener("click",function(){
        var jj = UE.getEditor('editor2').getContent();
        if(confirm("是否确认编辑？")) {
            $.post("footer_edit.php",{footer_cooperation:jj},function(data){
                if(data != "") {
                    alert("编辑成功！");
//                window.location.href="article_column.php";
                } else {
                    alert("编辑失败！");
                }
            });
        }
    });
</script>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    var ue2 = UE.getEditor('editor2');



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



    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }


</script>
</body>
</html>

