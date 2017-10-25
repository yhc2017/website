<?php
/**
 *17/10/21
 * 栏目添加页面
 */

?>
<html>
<head>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>栏目添加</strong></div>

    <div class="body-content">

        <form method="post" class="form-x" action="column_add_help.php">
            <input class="hidden" name="a_id" value="...">
            <div class="form-group">

                <div class="label">
                    <label>栏目名称：</label>
                </div>
                <div class="field">
                    <input id="title" type="text" class="input w50" value="" name="title"
                           data-validate="required:请输入栏目名称"/>
                </div>
                <div class="label">
                    <label>栏目链接：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="url"/>
                    <div class="tips">
                        <button class="button bg-main icon-check-square-o" type="submit"> 添加根栏目</button>
                    </div>
                </div>


            </div>
            <table class="table table-hover text-center">
                <tr>
                    <th width="10%">栏目ID</th>
                    <th width="35%">父栏目名称</th>
                    <th width="35%">栏目名称</th>
                    <th width="20%">操作</th>
                </tr>
                <?php
                include "../public/conn.php";
                $sql = mysqli_query($conn, "select * from menu;");
                while ($res = mysqli_fetch_array($sql)) {
                    $res["menu_id"];
                    if($res['menu_sid']==0){
                        $res['menu_sid']="一级";
                    }
                    else{
                        $sql1=mysqli_query($conn,"select menu_name from menu where menu_id={$res['menu_sid']};");
                        while($res1=mysqli_fetch_array($sql1)){
                            $res['menu_sid']=$res1['menu_name'];
                        }
                    }
//                    $res['menu_sid'];
                    $res["menu_name"];
                    ?>
                    <tr>
                        <td><?= $res["menu_id"]; ?></td>
                        <td><?= $res["menu_sid"]; ?></td>
                        <td><?= $res["menu_name"]; ?></td>
                        <td>
                            <div class="button-group">
                                <input class="button border-main" value=" 添加子栏目" type="button"
                                       onclick="addsColumn(<?= $res["menu_id"]; ?>)">
                            </div>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </form>
    </div>
</div>
<script>
    //判断并提交到php处理
    function addsColumn(id) {
        var name = document.getElementById('title').value;
        if (name == "") {
            alert("请输入栏目名称！");
            window.location="column_add.php";
        }
        else {
            window.location = "column_add_help.php?id=" + id + " & name=" + name;
        }
    }
</script>
</body>
</html>