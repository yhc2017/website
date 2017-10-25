<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/21
 * Time: 18:44
 * 删除菜单处理
 */

include_once ("../public/conn.php");

$id=$_GET['id'];
$sql = mysqli_query($conn,"delete from menu where menu_id={$id};");
echo "<script>alert('删除成功！');window.location.href='column_edit.php';</script>";
