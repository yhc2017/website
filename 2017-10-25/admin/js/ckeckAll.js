/**
 * Created by snail on 2017/8/15.
 */
    $(document).ready(function(){
        /****----ȫѡ----****/
        $("#check1").on('click',function(){

            // ȫѡ��ȡ��ȫѡ
            var isAll = $(this).prop('checked');
            $('input').prop('checked',isAll);

            if($(".do1").text()==""){

                $(".do1").text("");
            }
            else{
                $(".do1").text("");
            }
        });
        /****----ȫѡ----****/


            // �������ͨcheckboxʱ������ȫѡcheckbox��״̬
        $('.chkbx6 input').on('click',function(){
            var isAll = ( $('.chkbx6 input').length/2 == $('.chkbx6 input:checked').length );  // �ܹ��ĸ����뱻ѡ�ĸ�����Ƚ�
            $('#check1').prop('checked', isAll);

            if (isAll){
                //$(".do1").text("ȡ��");
                $(".do1").text("");
            } else {
                //$(".do1").text("ȫѡ");
                $(".do1").text("");
            }

        });// �������ͨcheckboxʱ������ȫѡcheckbox��״̬


    });

