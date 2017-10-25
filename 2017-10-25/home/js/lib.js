$(function(){

  $('.nv-smenu').hide();
      $('#nv').hover(function(){
        $(this).find('.nv-smenu').stop().slideDown(300);
      },function(){
        $(this).find('.nv-smenu').stop().slideUp(300);
      });
      
      $('.menu-btn1').click(function(){
      		$('#pop-menu').stop().slideToggle(400);
      	});

      	$('#pop-menu a.v1').click(function(){
      		if( $(this).next('dl').length > 0 ){
      			$(this).parents('li').siblings('li').find('dl').stop().slideUp(400);
      			$(this).next('dl').stop().slideToggle(400);
      			return false;
      		}
      	});


        $('.side-btn').click(function(e){

      			$('.side-menu').stop().animate({
      				'left': 0
      			}, 300);
            e.stopPropagation();

      	});
       $('.side-menu').click(function(e){
            e.stopPropagation();
      	});
       $('body').click(function(){
            $('.side-menu').stop().animate({
      				'left':'-100%'
      			}, 300);
       });

      // 二维码
      $('.s-weix').hover(function() {
        var _toLeft = $(this).find('img').offset().left;
        var _toTop = $(this).find('img').offset().top;
        $('.weix-ma').css({
          left:_toLeft,
          top:_toTop
        }).stop().show();
      }, function() {
        $('.weix-ma').stop().hide();
      });

      $('.s-sina').hover(function() {
        var _toLeft = $(this).find('img').offset().left;
        var _toTop = $(this).find('img').offset().top;
        $('.sina-ma').css({
          left:_toLeft,
          top:_toTop
        }).stop().show();
      }, function() {
        $('.sina-ma').stop().hide();
      });



});