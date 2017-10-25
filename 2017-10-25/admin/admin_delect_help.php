<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/15
 * Time: 14:39
 */
require_once ('../public/conn.php');

$id=$_GET['id'];
$sql="delete from systemadmin where sys_adminId='".$id."';";
$res=mysqli_query($conn, $sql);


$hashPwd = password_hash("0000", PASSWORD_DEFAULT);
$id=$_GET['resetid'];
$sql="update systemadmin  set sys_adminPwd='{$hashPwd}' where sys_adminId='{$id}';";
$res=mysqli_query($conn, $sql);

if($res>0){
//    echo "<script>alert('删除成功');</script>";
header('Location:admin_delect.php');
}