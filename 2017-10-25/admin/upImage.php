<meta charset="utf-8" />
<?php
include "../public/conn.php";
$uptypes = array(  
    'image/jpg', 
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
 );	
	
if($_POST['Submit']=='上传'){

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
//   $_SESSION['upresult'] =  "只能上传图片文件!";
//   echo " <script>alert('只能上传图片文件!');window.history.back(-1);</script>";
   echo " <script>alert('只能上传图片文件!');</script>";
//   exit;
  }
  if($file["size"]>$MAX_FILE_SIZE){
//   $_SESSION['upresult'] = "图片大小不能超过512KB!";
   echo " <script>alert('图片大小不能超过512KB!!');</script>";
//   echo " <script>alert('图片大小不能超过512KB!!');window.history.back(-1);</script>";
//   exit;
  }
  if(!file_exists($dest_folder)){
           mkdir($dest_folder);
  }
//  $randval    = date('Ymd').rand();

     date_default_timezone_set('PRC');
     $randval  = date("Y-m-d")."-".rand();

  $uploadfile = $dest_folder.$randval.'.'.$extend;


  $photo_url = $randval.'.'.$extend;
//  echo 'uploadfile: '.$uploadfile ;
//  session_start();
  if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploadfile)){
//   echo "<script>alert('图片上传成功!');window.history.forward();</script>";
   echo " <script>alert('图片上传成功!');</script>";

   //将照片路径存进数据库
   $sql = mysqli_query($conn, "UPDATE ins_profile SET  photo_url ='{$photo_url}';");




//   echo " <script>alert('图片上传成功!');window.history.back(-1);</script>";

//   $_SESSION['upresult'] = "图片上传成功!";
//   echo " <script>window.history.back(-1);</script>";

  }else{
//   echo "<script>alert('图片上传失败!');window.history.forward();</script>";
//   $_SESSION['upresult'] = "图片上传失败!";
//   echo " <script>alert('图片上传失败!');window.history.back(-1);</script>";
   echo " <script>alert('图片上传失败!');</script>";
  }
 }
}



?> 