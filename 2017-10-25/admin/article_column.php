<?php include "../public/conn.php"?>

<?php
//$sql = mysqli_query($conn,"select * from article;");
//$res = mysqli_fetch_array($sql);
?>


<!--栏目文章管理-->
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
    <script src="js/ckeckAll.js"></script>
</head>
<body>

<!--*********************************************加入分页，修改和删除*************************-->
<?php
$sql=mysqli_query($conn,"select count(*) as total from article ");
$info=mysqli_fetch_array($sql);
$total=$info['total'];
if($total==0){
    echo "无相关信息!请先添加";
}
else{
$pagesize=5;
if ($total<=$pagesize){
    $pagecount=1;
}
if(($total%$pagesize)!=0){
    $pagecount=intval($total/$pagesize)+1;
}else{
    $pagecount=$total/$pagesize;
}
if(!isset($_GET['page'])){
    $page=1;

}else{
    $page=intval($_GET['page']);
}
//$sql1=mysqli_query($conn,"select * from article limit ".($page-1)*$pagesize.",$pagesize");
$sql1=mysqli_query($conn,"select * from article GROUP BY a_id DESC limit ".($page-1)*$pagesize.",$pagesize");
//                    $info1=mysqli_fetch_array($sql1);

?>

    <!--//***********-->
    <table class="table table-hover text-center">
        <tr>
            <td>文章查询</div></td>
        </tr>
        <tr>
            <td>
        <tr>
            <td>
                <table class="table table-hover text-center">
                    <script language="javascript">
                        function chkinput3(form)
                        {
                            if((form.username.value=="")&&(form.ddh.value==""))
                            {
                                alert("请输入文章名称或ID");
                                form.username.select();
                                return(false);
                            }
                            return(true);

                        }
                    </script>
                    <form name="form3" method="post" action="article_column.php" onSubmit="return chkinput3( this)">
                        <tr>
                            <td><div align="center">文章名称:<input type="text" name="username" class="inputcss" >
                                    文章ID:<input type="text" name="ddh" size="25" class="inputcss" ></div></td>
                        </tr>
                        <tr>
                            <td height="25">
                                <div align="center">
                                    <input type="hidden" value="show_find" name="show_find">
                                    <input name="button" type="submit" class="buttoncss" id="button" value="查 找">
                                </div></td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table></td>
    </tr>
    </table>
    <table class="table table-hover text-center">
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>
<?php
if(isset($_POST['show_find']) && $_POST['show_find']!=""){
$username=trim($_POST['username']);
$ddh=trim($_POST['ddh']);
if($username==""){
//    $sql5=mysqli_query($conn,"select * from article where a_id =$ddh");
    $sql5=mysqli_query($conn,"select * from article where a_id ='".$ddh."' GROUP BY a_id DESC ");
}
elseif($ddh==""){
//    $sql5=mysqli_query($conn,"select * from article where a_title = '".$username."'");
    $sql5=mysqli_query($conn,"select * from article where a_title = '".$username."' GROUP BY a_id DESC");
}
else{
//    $sql5=mysqli_query($conn,"select * from article where a_title ='".$username."' and a_id =$ddh");
    $sql5=mysqli_query($conn,"select * from article where a_title ='".$username."' and a_id ='".$ddh."' GROUP BY a_id DESC");
}
$info5=mysqli_fetch_array($sql5);
if($info5==null){
    echo "<div algin='center'>对不起,没有查找到该信息!</div>";
}
else{
?>

    <!--//*************-->
    <script type="text/javascript">
        $(document).ready(function(){
            var key = "";
            $("input[class='pp']").click(function () {
                key = $(this).val();
                if($(this).attr("checked")){
                }else{
                    if(this.checked==true){
                        $('#'+key).prop('checked',true);
                    }
                    else{
                        $('#'+key).prop('checked',false);
                    }
                }
            });
        });
    </script>
<!--//*************-->

    <form name="form1" method="post" action="deleteArticleHelp.php">
        <table class="table table-hover text-center">
            <tr>
                <td >查询结果</div></td>
            </tr>
            <tr>
                <td >
                    <table class="table table-hover text-center">
                        <tr>
                            <!--                        <td ><div align="center">栏目名称</div></td>-->
                            <td ><div align="center">文章ID</div></td>
                            <td ><div align="center">文章标题</div></td>
                            <td ><div align="center">发布人</div></td>
                            <td ><div align="center">发布时间</div></td>
                            <td ><div align="center">操作</div></td>
                        </tr>
                        <?php
                        do{
                            ?>
                            <tr>
                                <!--                            <td  ><div align="center">--><?php //echo $info5['name'];?><!--</div></td>-->
                                <!--                            <td  ><div align="center">学院要闻</div></td>-->
                                <td  ><div align="center"><?php echo $info5['a_id'];?></div></td>
                                <td  ><div align="center"><?php echo $info5['a_title'];?></div></td>
                                <td  ><div align="center"><?php echo $info5['a_user'];?></div></td>
                                <td  ><div align="center"><?php echo $info5['a_time'];?></div></td>
                                <td  >
                                    <div align="center">

                                        <!--                                    <input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='article_alter.php?id=--><?php //echo $info1['a_id'];?><!--';" value="修改">-->
                                        <input type="checkbox"  name=<?php echo $info5['a_id'];?> value=<?php echo $info5['a_id'];?> class="pp">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"><div align="center"><input type="hidden" name="page_id" value=<?php echo $page;?>><input type="submit" value="删除所选择项" class="buttoncss" onclick="return confirm('是否确认删除？')"></div></td>
                            </tr>
                            <?php
                        }while($info5=mysqli_fetch_array($sql5));
                        ?>
                    </table>
                </td>
            </tr>
        </table>
    </form>

<?php
}
}
?>

    <!--//***********-->


<form name="form1" method="post" action="deleteArticleHelp.php">
    <table class="table table-hover text-center">
        <tr>
            <td><div align="center" class="style1">全部文章信息</div></td>
        </tr>
        <tr>
            <td ><table class="table table-hover text-center">

                    <tr>
                        <!--                        <td ><div align="center">栏目名称</div></td>-->
                        <td ><div align="center">文章ID</div></td>
                        <td ><div align="center">文章标题</div></td>
                        <td ><div align="center">发布人</div></td>
                        <td ><div align="center">发布时间</div></td>
                        <td  >
                            <div align="center">全选
                                <input type="checkbox" id = "check1" /><label for="check1" class="do1"></label>
                            </div>
                        </td>

                    </tr>


                    <?php
                    while($info1=mysqli_fetch_array($sql1)){
//                    do{
//                        $array=explode("@",$info1['spc']);
//                        $sum=count($array)*20+260;
                        ?>
                        <tr>
                            <!--                            <td  ><div align="center">--><?php //echo $info1['name'];?><!--</div></td>-->
                            <!--                            <td  ><div align="center">学院要闻</div></td>-->
                            <td  ><div align="center"><?php echo $info1['a_id'];?></div></td>
                            <td  ><div align="center"><?php echo $info1['a_title'];?></div></td>
                            <td  ><div align="center"><?php echo $info1['a_user'];?></div></td>
                            <td  ><div align="center"><?php echo $info1['a_time'];?></div></td>
                            <td  >
                                <div align="center" class="chkbx6">
                                    <input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='article_alter.php?id=<?php echo $info1['a_id'];?>//';" value="修改">
                                    <input type="checkbox"  name=<?php echo $info1['a_id'];?> value=<?php echo $info1['a_id'];?> id=<?php echo $info1['a_id'];?>>
                                </div>
                            </td>
                        </tr>
                        <?php
//                    }while($info1=mysqli_fetch_array($sql1))
                    }
                    ?>

                </table></td>
        </tr>
    </table>
    <table class="table table-hover text-center">
        <tr>
            <td >
                <div align="right">
                    共有信息
                    <?php
                    echo $total;
                    ?>
                    &nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
                    <?php
                    if($page>=2)
                    {
                        ?>
                        <!--                        <a href="article_column.php?page=1" title="首页"><font face="webdings"> 9 </font></a>-->
                        <a href="article_column.php?page=1" >首页</a>
                        <!--                        <a href="article_column.php?id=--><?php //echo $info1['a_id'];?><!--&page=--><?php //echo $page-1;?><!--" title="前一页"><font face="webdings"> 7 </font></a>-->
                        <a href="article_column.php?page=<?php echo $page-1;?>" >前一页</a>
                        <?php
                    }
                    if($pagecount<=4){
                        for($i=1;$i<=$pagecount;$i++){
                            ?>
                            <a href="article_column.php?page=<?php echo $i;?>"><?php echo $i;?></a>
                            <?php
                        }
                    }else{
                        for($i=1;$i<=4;$i++){
                            ?>
                            <a href="article_column.php?page=<?php echo $i;?>"><?php echo $i;?></a>
                        <?php }
                        echo "....."?>
                        <!--                        <a href="article_column.php?page=--><?php //echo $page-1;?><!--" title="后一页"><font face="webdings"> 8 </font></a>-->
                        <a href="article_column.php?page=<?php echo $page+1;?>">后一页</a>
                        <!--                        <a href="article_column.php?id=--><?php //echo $info1['a_id'];?><!--&page=--><?php //echo $pagecount;?><!--" title="尾页"><font face="webdings"> : </font></a>-->
                        <a href="article_column.php?page=<?php echo $pagecount;?>">尾页</a>
                    <?php }?>

                </div>
            </td>
            <td ><div align="center"><input type="hidden" name="page_id" value=<?php echo $page;?>><input type="submit" value="删除所选择项" class="buttoncss" onclick="return confirm('是否确认删除？')"></div></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>
<!--*********************************************加入分页，修改和删除**********************end-->

</body>
</html>