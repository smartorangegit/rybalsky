// var clock2;

(function(){
    
  //$(document).ready(initClock);  
  function initClock() {
    var clock2;
    var deadline = 'April 23 2018 23:59:59 GMT+02:00';
    // console.log(deadline);
    var t = Date.parse(deadline);
    var time = Date.parse(deadline) - Date.parse(new Date());
    // console.log(time);
    time1 = time/1000;
    // console.log(time1);
    clock2 = $('.clock2').FlipClock({
          clockFace: 'DailyCounter',
          autoStart: true,
          callbacks: {
            stop: function() {
              $('.message').html('The clock has stopped!')
        console.log('ttt')
            }
          }
      });			 
     if(time1 > 0){

    clock2.setTime(time1);
      clock2.setCountdown(true);
      clock2.start(); 
      }else{
      $('.modal_window__clock').attr('style', 'display:none;');
      }  




      $(".underprice").click(function(){
        $(".mesage").css("right","-15px")
        $(this).fadeOut('slow')
      });

      $('#clock-close').click(function(){
/*         $('.mesage').css('right','-570px')
        $(".underprice").fadeIn('slow') */
         $('.modal_window__clock').css('display','none')
      });
  };

})()

