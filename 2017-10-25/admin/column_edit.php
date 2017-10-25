<?php
/*
 * 2017/10/21
 * 栏目编辑（修改和删除）页面
 */

$id=$_GET['id'];
$sid=$_GET['sid'];
$name=$_GET['name'];
$url=$_GET['url'];
//echo $id;
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
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span>栏目菜单</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="column_edit_help.php" >
    <div class="form-group">

        <div class="label">
            <label>父栏目ID：</label>
        </div>
        <div class="field">
            <input id="sid" type="text" class="input w50" value="<?=$sid?>" name="sid" data-validate="required:请输入id" />
        </div>
        <div class="label">
            <label>栏目名称：</label>
        </div>
        <div class="field">
            <input id="name" type="text" class="input w50" value="<?=$name?>" name="name" data-validate="required:请输入栏目名称" />
        </div>
        <div class="label">
            <label>栏目链接：</label>
        </div>
        <div class="field">
            <input id="url" type="text" class="input w50" value="<?=$url?>" name="url" />
            <input type="hidden" value="<?=$id?>" name="id">
            <div class="tips">
                <button class="button bg-main icon-check-square-o" type="submit">确定修改</button>
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
        $sql = mysqli_query($conn,"select * from menu;");
        while($res = mysqli_fetch_array($sql)) {
            $res["menu_id"];
            $id1=$res["menu_sid"];
            if($res['menu_sid']==0){
                $res['menu_sid']="一级";
            }
            else{
                $sql1=mysqli_query($conn,"select menu_name from menu where menu_id={$res['menu_sid']};");
                while($res1=mysqli_fetch_array($sql1)){
                    $res['menu_sid']=$res1['menu_name'];
                }
            }
            $res["menu_name"];
            $res["menu_url"];
            ?>
            <tr>
                <td><?=$res["menu_id"];?></td>
                <td><?=$res["menu_sid"];?></td>
                <td><?=$res["menu_name"];?></td>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="#add" onclick="editColumn(<?=$res['menu_id'];?>,'<?=$id1;?>','<?=$res['menu_name'];?>','<?=$res['menu_url']?>')"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="return deleteColumn(<?=$res['menu_id'];?>)"><span class="icon-trash-o"></span> 删除</a>
                    </div>
                </td>
            </tr>
        <?php }?>

    </table>
        </div>
            </form>
        </div>
</div>
<script>
    function editColumn(id,sid,name,url){
//        alert(sid);
        window.location="column_edit.php?id="+id+"&sid="+sid+"&name="+name+"&url="+url;
    }
    function  deleteColumn(id){
        if(confirm("确认删除吗？")){
            window.location="column_delete_help.php?id="+id;
        }

    }
</script>
</body>
</html>