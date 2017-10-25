<?php
include "../public/conn.php";
$preContent = $_POST['precontent'];

$preTitle = $_POST['pretitle'];
$prenewsTiele = "Temporary";
$premyfile = fopen("../public/article/".iconv("UTF-8","GBK",$prenewsTiele).".txt", "w") or die("Unable to open file!");
fwrite($premyfile, $preContent);
fclose($premyfile);

$premyfile2 = fopen("../public/article/".iconv("UTF-8","GBK","TemporaryTitle").".txt", "w") or die("Unable to open file!");
fwrite($premyfile2, $preTitle);
fclose($premyfile2);

?>
