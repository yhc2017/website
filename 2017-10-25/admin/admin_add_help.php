<?php
/**
 * Created by PhpStorm.
 * User: snail
 * Date: 2017/10/6
 * Time: 19:36
 * 添加管理员帮助文件，将信息写进数据库
 */
include "../public/conn.php";
$id = $_POST['adminId'];
$pwd = $_POST['adminPwd'];
$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
mysqli_query($conn,"insert into systemadmin VALUES ('".$id."', '".$hashPwd."',2);");
echo "<script>alert('管理员".$id."添加成功!');window.location.href='admin_select.php';</script>";