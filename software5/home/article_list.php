<?php include "../public/conn.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新闻列表</title>
    <script src="../public/jquery-3.1.1.js"></script>
</head>
<body>
<h1><b>这是前台新闻列表页面</b></h1>
<ul>
    <?php
    $sql = mysqli_query($conn,"select * from article;");

    while($res = mysqli_fetch_array($sql)) {
        $res["a_title"];
        $res["a_id"];
        ?>
        <li><a href="article_detail.php?id=<?php echo $res["a_id"] ?>" onclick="showdetail(this)" id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a></li>
    <?php
        }
    ?>
</ul>

<script>
    function showdetail(obj){
        var id = obj.id;
        var kk = document.getElementById(id);
        var jj = kk.innerHTML;
        alert(jj);
    }
</script>

</body>
</html>