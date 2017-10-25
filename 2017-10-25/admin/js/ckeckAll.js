/**
 * Created by snail on 2017/8/15.
 */
    $(document).ready(function(){
        /****----全选----****/
        $("#check1").on('click',function(){

            // 全选、取消全选
            var isAll = $(this).prop('checked');
            $('input').prop('checked',isAll);

            if($(".do1").text()==""){

                $(".do1").text("");
            }
            else{
                $(".do1").text("");
            }
        });
        /****----全选----****/


            // 当点击普通checkbox时，更新全选checkbox的状态
        $('.chkbx6 input').on('click',function(){
            var isAll = ( $('.chkbx6 input').length/2 == $('.chkbx6 input:checked').length );  // 总共的个数与被选的个数相比较
            $('#check1').prop('checked', isAll);

            if (isAll){
                //$(".do1").text("取消");
                $(".do1").text("");
            } else {
                //$(".do1").text("全选");
                $(".do1").text("");
            }

        });// 当点击普通checkbox时，更新全选checkbox的状态


    });

