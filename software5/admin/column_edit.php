<!--文章管理-->
<html>
<head>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 文章管理</strong></div>
    <!--    <div class="padding border-bottom">-->
    <!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
    <!--    </div>-->
    <table class="table table-hover text-center">
        <tr>
            <th width="40%">栏目ID</th>
            <th width="40%">栏目名称</th>
            <th width="">操作</th>
        </tr>

        <tr>
            <td>1</td>
            <td>科学</td>
            <td>
            <div class="button-group">
                <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
                <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
            </div>
            </td>
        </tr>

    </table>
</div>
</body>
</html>