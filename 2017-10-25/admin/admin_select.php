<!--查看管理员信息-->
<html>
<head>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 查看管理员信息</strong></div>
    <table class="table table-hover text-center">
        <tr>
            <th width="40%">管理员账号</th>
            <th width="40%">管理员等级</th>
            <th></th>
        </tr>


            <?php
            include "../public/conn.php";
            $sql = mysqli_query($conn,"select * from systemadmin;");
            while($res = mysqli_fetch_array($sql)) {
                $res["sys_adminId"];
                $res["sys_grade"];
            ?>
        <tr>
<!--                <li><a href="article_detail.php?id=--><?php //echo $res["a_id"] ?><!--" onclick="showdetail(this)" id="--><?php //echo $res["a_id"] ?><!--">--><?php //echo $res["a_title"] ?><!--</a></li>-->
                <td><?php echo $res["sys_adminId"] ?></td>
                <td><?php echo $res["sys_grade"] ?></td>
        </tr>
            <?php
                }
            ?>



    </table>
</div>
</body>
</html>
