<?php
/**
 * 修改菜单处理
 */
include_once ("../public/conn.php");

$id=$_POST['id'];
$sid=$_POST['sid'];
$name=$_POST['name'];
$url=$_POST['url'];

$sql = mysqli_query($conn," update menu set menu_sid={$sid},menu_name='{$name}',menu_url='{$url}' where menu_id={$id};");
echo "<script>alert('修改成功！');window.location.href='column_edit.php';</script>";