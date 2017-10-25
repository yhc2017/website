<meta charset="utf-8" />
<?php
include "../public/conn.php";

session_start();
//global $photo_url;
//图片上传处理********
$uptypes = array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

//图片一主要负责人
if($_POST['Submit']=='上传*'){

    $file        =  $_FILES["upfile"];
    $fname         =  $_FILES["upfile"]["name"];
    $fname_array   =  explode('.',$fname);
    $extend        =  $fname_array[count($fname_array)-1];
    $MAX_FILE_SIZE =  512000;
    //文件当前位置创建picture文件夹，若要在上一层目录创建则为"../picture/";
// $dest_folder   =  "../picture/";
    $dest_folder   =  "../home/images/";
    if($extend!=""){
        if(!in_array($file["type"],$uptypes)){

            echo " <script>alert('只能上传图片文件!');</script>";
        }
        if($file["size"]>$MAX_FILE_SIZE){
            echo " <script>alert('图片大小不能超过512KB!!');</script>";
        }
        if(!file_exists($dest_folder)){
            mkdir($dest_folder);
        }
        date_default_timezone_set('PRC');
        $randval  = date("Y-m-d")."-".rand();
        $uploadfile = $dest_folder.$randval.'.'.$extend;

        $photo_url1 = $randval.'.'.$extend;

        if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploadfile)){
            echo " <script>alert('图片上传成功!');</script>";
            $_SESSION['team_photo1'] = $photo_url1;
        }else{
            echo " <script>alert('图片上传失败!');</script>";
        }

    }
}

//图片二技术骨干
if($_POST['Submit']=='上传**'){

    $file        =  $_FILES["upfile"];
    $fname         =  $_FILES["upfile"]["name"];
    $fname_array   =  explode('.',$fname);
    $extend        =  $fname_array[count($fname_array)-1];
    $MAX_FILE_SIZE =  512000;
    //文件当前位置创建picture文件夹，若要在上一层目录创建则为"../picture/";
// $dest_folder   =  "../picture/";
    $dest_folder   =  "../home/images/";
    if($extend!=""){
        if(!in_array($file["type"],$uptypes)){

            echo " <script>alert('只能上传图片文件!');</script>";
        }
        if($file["size"]>$MAX_FILE_SIZE){
            echo " <script>alert('图片大小不能超过512KB!!');</script>";
        }
        if(!file_exists($dest_folder)){
            mkdir($dest_folder);
        }
        date_default_timezone_set('PRC');
        $randval  = date("Y-m-d")."-".rand();
        $uploadfile = $dest_folder.$randval.'.'.$extend;

        $photo_url2 = $randval.'.'.$extend;

        if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploadfile)){
            echo " <script>alert('图片上传成功!');</script>";
            $_SESSION['team_photo2'] = $photo_url2;
        }else{
            echo " <script>alert('图片上传失败!');</script>";
        }

    }
}


//图片三团队成员
if($_POST['Submit']=='上传***'){

    $file        =  $_FILES["upfile"];
    $fname         =  $_FILES["upfile"]["name"];
    $fname_array   =  explode('.',$fname);
    $extend        =  $fname_array[count($fname_array)-1];
    $MAX_FILE_SIZE =  512000;
    //文件当前位置创建picture文件夹，若要在上一层目录创建则为"../picture/";
// $dest_folder   =  "../picture/";
    $dest_folder   =  "../home/images/";
    if($extend!=""){
        if(!in_array($file["type"],$uptypes)){

            echo " <script>alert('只能上传图片文件!');</script>";
        }
        if($file["size"]>$MAX_FILE_SIZE){
            echo " <script>alert('图片大小不能超过512KB!!');</script>";
        }
        if(!file_exists($dest_folder)){
            mkdir($dest_folder);
        }
        date_default_timezone_set('PRC');
        $randval  = date("Y-m-d")."-".rand();
        $uploadfile = $dest_folder.$randval.'.'.$extend;

        $photo_url3 = $randval.'.'.$extend;

        if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploadfile)){
            echo " <script>alert('图片上传成功!');</script>";
            $_SESSION['team_photo3'] = $photo_url3;
        }else{
            echo " <script>alert('图片上传失败!');</script>";
        }

    }
}





//图片上传处理*end*******


//添加专家信息***********

//主要负责人
if(isset($_POST['nameId1'])) {
    mysqli_query($conn, "insert into ins_team value('主要负责人','{$_POST['nameId1']}','{$_POST['content']}','{$_SESSION['team_photo1']}',null);");
    echo "编辑成功！";
} else {
    echo "";
}

//技术骨干
if(isset($_POST['nameId2'])) {
    mysqli_query($conn, "insert into ins_team value('技术骨干','{$_POST['nameId2']}','{$_POST['content2']}','{$_SESSION['team_photo2']}',null);");
    echo "编辑成功！";
} else {
    echo "";
}

//团队成员
if(isset($_POST['nameId3'])) {
    mysqli_query($conn, "insert into ins_team value('团队成员','{$_POST['nameId3']}','{$_POST['content3']}','{$_SESSION['team_photo3']}',null);");
    echo "编辑成功！";
} else {
    echo "";
}
//添加专家信息*end**********


?>