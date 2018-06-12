//creative menu

$(document).ready(function() {
		$(document).delegate('.open', 'click', function(event){
			$(this).addClass('oppenned');
			$('.header.build .build-name').css('display','none')
			event.stopPropagation();
		})
		$(document).delegate('body', 'click', function(event) {
			$('.open').removeClass('oppenned');
		})
		$(document).delegate('.cls', 'click', function(event){
			$('.open').removeClass('oppenned');
			event.stopPropagation();
		});
		
		
		
		
		//    всплывайка над стрелочками
		$('a.block-prev').hover(function(){
	    $('.block-left').css('display','block');
	  }, function() {
	    $('.block-left').css('display','none');
	  })

	  $('a.block-next').hover(function(){
	    $('.block-right').css('display','block');
	  }, function() {
	    $('.block-right').css('display','none');
	  });
	  
	  //Галерея
	 	$('.stroy_overlay').click(
	function(){	   if(document.getElementById('group'+this.id)){document.getElementById('group'+this.id).click();	}

	  }
	);

	});

		
	
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


$(window).on('load', function () {
	var $preloader = $('.loader'),
			$svg_anm   = $preloader.find('.loader__inner');
			$preloader.delay(300).fadeOut('slow');
			$svg_anm.delay(1500).fadeOut();
	});


	

			$('#call_ma_please').click(function(){
				$('.call_my').css('display','block').css('opacity','1');
			})
			$('.call_my_close').click(function() {
				$('.call_my').css('display','none').css('opacity','0');
			})


	

