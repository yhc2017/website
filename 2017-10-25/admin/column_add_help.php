<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/15
 * Time: 18:38
 * 修改日期：2017/10/21
 * 内容：数据处理
 */

include_once('../public/conn.php');

//$menu_url="";
//$sid=0;
$menu_url=$_POST['url'];
$title=$_POST['title'];
//echo $title;
$sid=$_GET["id"];

$name=$_GET['name'];

//一级菜单添加
if(!empty($title)) {
    $sql = mysqli_query($conn," insert into menu (menu_sid,menu_name,menu_url) VALUES (0,'{$title}','{$menu_url}');");
    echo "<script>alert('添加成功！');window.location.href='column_add.php';</script>";
}

//子菜单添加
if(!empty($sid)) {
    $sql = mysqli_query($conn," insert into menu (menu_sid,menu_name,menu_url) VALUES ({$sid},'{$name}','{$menu_url}');");
    echo "<script>alert('添加成功！');window.location.href='column_add.php';</script>";
}


