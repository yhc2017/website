<!--删除管理员-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 删除管理员</strong></div>
<!--    <div class="padding border-bottom">-->
<!--        <ul class="search">-->
<!--            <li>-->
<!--                <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>-->
<!--                <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
    <table class="table table-hover text-center">
        <tr>
<!--            <th width="20">选择</th>-->
            <th width="40%">管理员账号</th>
            <th width="20%">操作</th>
            <th></th>
        </tr>
        <?php
        include "../public/conn.php";
        $sql = mysqli_query($conn,"select * from systemadmin;");
        while($res = mysqli_fetch_array($sql)) {
            $res["sys_adminId"];
            if($res['sys_adminId']=="admin"){
            }
            else{
            ?>
            <tr>
               <!--<td><?="<input type='checkbox' name='id[]'value='{$res['sys_adminId']}'/>" ?></td>-->
                <td><?php echo   "{$res["sys_adminId"]}" ?></td>
                <td><div class="button-group">
                        <a class="button border-red" href="admin_delect_help.php?id=<?=$res["sys_adminId"]?>" onclick="return del()"><span class="icon-trash-o"></span> 删除</a>
                        <a class="button border-red" href="admin_delect_help.php?resetid=<?=$res["sys_adminId"]?>" onclick="return reset()"><span class="icon-trash-o"></span> 重置密码</a>
                    </div>
                </td>
            </tr>
            <?php
        }
        }
        ?>
    </table>
</div>
<script type="text/javascript">

    function del(){
//        alert("{$res['sys_adminId']}");
        if(confirm("您确定要删除吗?")){
            return true;
        } else {
            return false;
        }
    }

    function reset(){
//        alert("{$res['sys_adminId']}");
        if(confirm("您确定要重置密码吗?")){
            alert("初始密码为：0000");
            return true;
        } else {
            return false;
        }
    }

    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    });

//    function DelSelect(){
//        var Checkbox=false;
//        $("input[name='id[]']").each(function(){
//            if (this.checked==true) {
//                Checkbox=true;
//            }
//        });
//        if (Checkbox){
//            var t=confirm("您确认要删除选中的内容吗？");
//            if (t==false) return false;
//        }
//        else{
//            alert("请选择您要删除的内容!");
//            return false;
//        }
//    }

</script>
</body>
</html>