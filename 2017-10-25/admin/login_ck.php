<meta charset="utf-8" />
<?php
include "../public/conn.php";
$code = $_POST['code'];
$id = $_POST['adminId'];
$pwd = $_POST['adminPwd'];
$sql=mysqli_query($conn,"select * from systemadmin where sys_adminId='".$id."'");
$info=mysqli_fetch_array($sql);
if($info==false) {
    echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
    exit;
} else {
    session_start();
    if($_SESSION['randcode'] != $code) {
        echo "<script>alert('验证码错误!');window.location.href='login.php';</script>";
    } else{
        if(password_verify($pwd,$info['sys_adminPwd'])){
            $_SESSION['loginName']=$info['sys_adminId'];
            header("location:index.php");
        } else {
            echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
            exit;
        }
    }
}

