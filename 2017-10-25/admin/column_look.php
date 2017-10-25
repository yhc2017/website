
<?php
/*
 * 2017/10/21
 * 栏目浏览页面
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
    <div class="panel-head"><strong class="icon-reorder"> 栏目预览</strong></div>
    <!--    <div class="padding border-bottom">-->
    <!--        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>-->
    <!--    </div>-->

    <!--    <table class="table table-hover text-center">-->
    <!--        <tr>-->
    <!--            <th width="40%">栏目ID</th>-->
    <!--            <th width="40%">栏目名称</th>-->
    <!--            <th></th>-->
    <!--        </tr>-->
    <!--        --><?php
    //        include "../public/conn.php";
    //        $sql = mysqli_query($conn,"select * from menu;");
    //        while($res = mysqli_fetch_array($sql)) {
    //        $res["menu_id"];
    //        $res["menu_name"];
    //        ?>
    <!--        <tr>-->
    <!--            <td>--><? //=$res["menu_id"];?><!--</td>-->
    <!--            <td>--><? //=$res["menu_name"];?><!--</td>-->
    <!--        </tr>-->
    <?php //}?>
    <!--    </table>-->

    <?php
    include "../public/conn.php";
    $sql = "select * from menu";
    $sql = mysqli_query($conn, $sql);
    $data = '';
    while ($res = mysqli_fetch_array($sql)) {
        $data[] = $res;
    }

    function getTree($data, $pId)
    {
        $tree = '';
        foreach ($data as $k => $v) {
            if ($v['menu_sid'] == $pId) { //父亲找到儿子
                $v['menu_sid'] = getTree($data, $v['menu_id']);
                $tree[] = $v;
            }
        }
        return $tree;
    }

    $tree = getTree($data, 0);

    function procHtml($tree)
    {
        $html = '';
        foreach ($tree as $t) {
            if ($t['menu_sid'] == '') {
                $html .= "<li>{$t['menu_name']}</li>";
            } else {
                $html .= "<li>" . $t['menu_name'] ;
                $html .= procHtml($t['menu_sid']);
                $html = $html . "</li>";
            }
        }
        return $html ? '<ul>' . $html . '</ul>' : $html;
    }

    echo procHtml($tree);
    ?>
</div>
</body>
</html>