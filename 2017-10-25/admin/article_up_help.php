<meta charset="utf-8" />
<?php
include "../public/conn.php";
$preContent = $_POST['precontent'];
$newsContent = $_POST['content'];
$newsTiele = trim($_POST['title']);
//$newsTiele = $_POST['title'];
$newsUrl = $_POST['url'];

$newsBelong = $_POST['belong'];

date_default_timezone_set('PRC');
$showtime = date("Y-m-d H:i:s");
//$a_centUrl = "../public/article/".$newsTiele.".txt";
if(isset($newsContent))
{
    session_start();
    mysqli_query($conn,"insert into article values(NULL ,'".$newsTiele."','', '".$_SESSION['loginName']."','".$showtime."','','".$newsBelong."');");
}
echo $newsContent,$newsTiele,$preContent;
//echo "上传成功";

$sql = mysqli_query($conn,"select a_id from article where a_title = '".$newsTiele."';");
$res = mysqli_fetch_array($sql);
$articlename = $res["a_id"];
$a_centUrl = "../public/article/".$articlename.".txt";
//mysqli_fetch_array($conn, "update article set a_centUrl = '".$a_centUrl."' where a_id = ".$articlename.";");
mysqli_query($conn, "update article set a_centUrl = '".$a_centUrl."' where a_id = ".$articlename.";");

$myfile = fopen("../public/article/".iconv("UTF-8","GBK",$articlename).".txt", "w") or die("Unable to open file!");
fwrite($myfile, $newsContent);
fclose($myfile);

?>
