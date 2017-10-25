<!--//上传文章页面-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=gbk"/>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加管理员</strong></div>

    <div class="body-content">
        <form class="form-x" method="post" action="admin_add_help.php" name="form1">
            <div class="form-group">
                <div class="label">
                    <label>管理员账号：</label>
                </div>
                <div class="field">
                    <input type="text" id="titleid" class="input w50" value="" name="adminId" placeholder="请输入管理员账号" data-validate="required:账号不能为空！请分配账号" />
                    <font color="red">&nbsp;&nbsp;*</font>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>管理员密码：</label>
                </div>
                <div class="field">
                    <input type="password" id="titleid" class="input w50" value="" name="adminPwd" placeholder="请输入管理员密码" data-validate="required:密码不能为空！请分配密码" />
                    <font color="red">&nbsp;&nbsp;*</font>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>请确认密码：</label>
                </div>
                <div class="field">
                    <input type="password" id="surePwd" class="input w50"  name="surePwd" placeholder="请再次输入管理员密码" onblur="checkpsd2()" data-validate="required:密码不能为空！请确认密码" />
                    <font color="red">&nbsp;&nbsp;*</font>
                    <div class="tips" id="divpassword2"></div>
                </div>
            </div>
            <div class="field" style="text-align: left; padding-left: 100px">
                <button class="button bg-main " type="reset" id="reset"> 重置</button>&nbsp;&nbsp;&nbsp;
                <button class="button bg-main icon-check-square-o" type="submit" id="add" onclick="return confirm('是否确认添加？')"> 添加</button>
            </div>
        </form>
    </div>
</div>


<script>
    //验证确认密码
    function checkpsd2(){
        if(form1.adminPwd.value!=form1.surePwd.value) {
            divpassword2.innerHTML='<font >您两次输入的密码不一样</font>';
            alert("您两次输入的密码不一样");
            $("#add").attr("disabled", true);
        } else {
            divpassword2.innerHTML='<font >输入正确</font>';
        }
    }

    $(document).ready(function(){
        $("#reset").click(function(){
            $("#divpassword2").empty();
        });
    });
</script>


</body>
</html>
<!---->
<!--<!--//****************************-->
<?php //header("Content-type: text/html; charset=gb2312");?><!--?-->
<!--<html>-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">-->
<!--    <title>添加管理员</title>-->
<!--    <link rel="stylesheet" type="text/css" href="css/font.css">-->
<!--    <style type="text/css">-->
<!---->
<!--        .style1 {color: #FFFFFF}-->
<!---->
<!--    </style>-->
<!--</head>-->
<?php //include("conn/conn.php");?>
<!--<body topmargin="0" leftmargin="0" bottommargin="0">-->
<!--<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">-->
<!--    <tr>-->
<!--        <td height="25" bgcolor="#FFCF60"><div align="center" class="style1">添加管理员</div></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td height="100%" bgcolor="#666666"><table  width="720" border="0" cellpadding="0" cellspacing="1">-->
<!--                <script language="javascript">-->
<!--                    function chkinput(form)-->
<!--                    {-->
<!--                        if(form.name.value=="")-->
<!--                        {-->
<!--                            alert("请输入管理员姓名!");-->
<!--                            form.name.select();-->
<!--                            return(false);-->
<!--                        }-->
<!--                        if(form.count.value=="")-->
<!--                        {-->
<!--                            alert("请输入管理员账号!");-->
<!--                            form.count.select();-->
<!--                            return(false);-->
<!--                        }-->
<!--                        if(form.password.value=="")-->
<!--                        {-->
<!--                            alert("请输入密码!");-->
<!--                            form.password.select();-->
<!--                            return(false);-->
<!--                        }-->
<!--                        return(true);-->
<!--                    }-->
<!---->
<!--                </script>-->
<!--                <form name="form1" enctype="multipart/form-data" method="post" action="saveNewAdmin.php" onSubmit="return chkinput(this)">-->
<!--                    <tr>-->
<!--                        <td width="129" height="30" bgcolor="#FFFFFF"><div align="center">管理员姓名：</div></td>-->
<!--                        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="name" size="30" class="inputcss"><span style="color: #FF0000">&nbsp;&nbsp;*</span></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="center">账号ID：</div></td>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="left"><input type="text" name="count" class="inputcss" size="20"><span style="color: #FF0000">&nbsp;&nbsp;*</span></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="center">密码：</div></td>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="left"><input type="password" name="password" class="inputcss" size="20"><span style="color: #FF0000">&nbsp;&nbsp;*</span></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="center">性别：</div></td>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="left">-->
<!--                                <select name="sex" class="inputcss" >-->
<!--                                    <option selected value=男>男</option>-->
<!--                                    <option value=女>女</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="center">邮箱：</div></td>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="left"><input type="text" name="email" class="inputcss" size="20"></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="center">微信号：</div></td>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="left"><input type="text" name="wechat" class="inputcss" size="20"></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="center">QQ号：</div></td>-->
<!--                        <td height="30" bgcolor="#FFFFFF"><div align="left"><input type="text" name="qq" class="inputcss" size="20"></div></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td height="30" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="添加">-->
<!--                                &nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>-->
<!--                    </tr>-->
<!--                </form>-->
<!--            </table></td>-->
<!--    </tr>-->
<!--</table>-->
<!--</body>-->
<!--</html>-->
