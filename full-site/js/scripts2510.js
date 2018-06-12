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



// Логика для форм с вопросами маркетинга, коммерции, общего характера на странице callback.
(function() {
	//Поскольку все отправки форм заносяться в базу даных передаем туда цифру (второй параметр в showQuestForm()) третий параметр єто id юзера из битрикс
		$('.btn').click(function(e) {
			hideQuestForm();
			if($(e.target).hasClass('show_marketing_btn')) {
				showQuestForm($(e.target).data('type-of-form'), 7, 30);
			} else if($(e.target).hasClass('show_commercial_btn')) {
				showQuestForm($(e.target).data('type-of-form'), 4, 112);
			} else if ($(e.target).hasClass('show_general_btn')) {
				showQuestForm($(e.target).data('type-of-form'), 5, 268);
			} else if($(e.target).hasClass('show_sales_btn')){
				showQuestForm($(e.target).data('type-of-form'), 6, 268);
			} else {
				console.log('Error in scripts.js');
			}
		}); //End click
	
		$('.quest_form_close').click(function() {
			hideQuestForm();
		});
	
		function showQuestForm(heading, type, resp_employee) {
			$('.quest_form').removeClass('quest_form_hide').addClass('quest_form_show');
			$('.quest_form__heading').text(heading);
			$('#resp_employee').val(resp_employee);
			$('#quest_type').val(type);
		}
	
		function hideQuestForm() {
			$('.quest_form').removeClass('quest_form_show').addClass('quest_form_hide');
		}
	
	})(); //Конец логики для форм с вопросами маркетинга, коммерции, общего характера на странице callback.

	}); //end document ready






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
