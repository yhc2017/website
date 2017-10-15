<?php include "conn.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新闻列表</title>
    <script src="jquery-3.1.1.js"></script>
</head>
<body>
<h1><b>这是前台新闻列表页面</b></h1>
<ul>
    <?php
    $sql = mysqli_query($conn,"select * from article;");

//    $res = mysqli_fetch_array($sql);
//    echo $res[1];
    while($res = mysqli_fetch_array($sql)) {
        $res["a_title"];
        $res["a_id"];
        ?>
<!--        <a href='delete.php?id=value'>点我跳转</a>-->
        <li><a href="newsdetail.php?id=<?php echo $res["a_id"] ?>" onclick="showdetail(this)" id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a></li>
    <?php
        }
    ?>

</ul>

<script>
    function showdetail(obj){
//        var kk = document.getElementById("titleid").value;
////        var kk = $(this).getElementsByTagName("a").value;
//        $.post("newsdetail.php",{a_title:kk},function(data){
//            alert(kk);
//        });
        var id = obj.id;
        var kk = document.getElementById(id);
        var jj = kk.innerHTML;
        alert(jj);
//        $.post("newsdetail.php", {a_title:jj+".txt"});
//        $.post("newsdetail.php",{a_title:"11111"},function(data){
//            alert("Data Loaded: " + data);
//        })
    }
</script>

</body>
</html>