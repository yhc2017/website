<?php include "../public/conn.php"?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>ArticleDetail</title>
	<script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
	<style type="text/css">
		div{
			float: left;
			border: 2px solid red;
			text-align: center;
		}
	</style>
</head>
<body>
<h1><b>新闻细节展示</b></h1>
<div style="width: 100%;height: 100px;">顶部</div>
<div style="width: 20%;height: 600px;" id="aa">左侧</div>
<div style="width: 75%;height: 600px;" id="showdetail">新闻细节展示</div>
<div style="width: 100%;height: 100px;">底部</div>

<script type="text/javascript">
	$(document).ready(function(){
        <?php
                $a_id = $_GET['id'];
                $sql = mysqli_query($conn, "select a_title from article where a_id = $a_id;");
                $res = mysqli_fetch_array($sql);
                $content = $res["a_title"].".txt";
                echo "var detailUrl = \"../public/article/$content\";";
        ?>
        $('#showdetail').load(detailUrl);
    });
</script>
</body>
</html>
