<?php
include "conn.php"
?>
<?php
//$newsContent = htmlspecialchars_decode($_POST['content']);
//$newsTiele = htmlspecialchars_decode($_POST['title']);
//$newsUrl = htmlspecialchars_decode($_POST['url']);
$newsContent = $_POST['content'];
$newsTiele = $_POST['title'];
$newsUrl = $_POST['url'];
//htmlspecialchars_decode($info['0'][content']);
date_default_timezone_set('PRC');
$showtime = date("Y-m-d H:i:s");
//$URL = "d://".$newsTiele.".txt";
//if(isset($newsUrl))
//    $URL = $newsUrl;
//else

mysqli_query($conn,"insert into article values(NULL ,'".$newsTiele."','".$newsContent."', '','".$showtime."');");
echo $newsContent,$newsTiele;


//$myfile = fopen("D://abc/".$newsTiele.".txt", "w") or die("Unable to open file!");
//$myfile = fopen("D://abc/".iconv("UTF-8","GBK",$newsTiele).".txt", "w") or die("Unable to open file!");
$myfile = fopen("F://appserv/www/websiteDemo/ueditor-gbk-php/aa/".iconv("UTF-8","GBK",$newsTiele).".txt", "w") or die("Unable to open file!");
//$myfile = fopen("D://abc/���ε�2.txt", "w") or die("Unable to open file!");
fwrite($myfile, $newsContent);
fclose($myfile);

$sql = mysqli_query($conn,"select a_title from article where a_time = '".$showtime."';");
$res = mysqli_fetch_array($sql);
?>
<?php
//iconv("UTF-8","GBK",$res[1])
echo "<script>alert('news:".iconv("UTF-8","GBK",$res["a_title"])."success!');window.location.href='test.php';</script>";
?>
<?php //echo "666666666666666666"?>