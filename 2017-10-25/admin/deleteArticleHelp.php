<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
$page=intval($_POST['page_id']);
include("../public/conn.php");
while(list($value,$name)=each($_POST))
{
    mysqli_query($conn,"delete from article where a_id='".$value."'");
}
header("location:article_column.php?page=".$page."");
?>
