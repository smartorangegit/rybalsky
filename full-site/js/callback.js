    window.scrollTo('0', '0');

    // Убираем скролл у боди чтобы не прокручивать его при открытой форме
    function preventBodyFromScrollig() {
        $('body').css({'overflow': 'hidden'});
    }
    // Возвращаем скролл боди
    function returnScrollToBody() {
        $('body').css({'overflow': 'auto'});
    }
    // Кнопка заказать звонок
    $(document).on('click','#call_ma_please',function() {
        $('#call_my_forms').addClass('call_my_visible');
        preventBodyFromScrollig();
    });
    // Закрыть форму заказа звонка
    $(document).on('click', '.call_my_close', function() {
        $('#call_my_forms').removeClass('call_my_visible');
        returnScrollToBody();
    });

    function call(){
        $('#call_my_forms').css({
          'opacity':'1',
          'left':'0',
          'top': '0',
		  'display':'block'
      });
    }


    function openLargeSchema() {
        $('#forms_floor').css({
            'opacity':'1',
            'left' : '50%',
            'z-index' : '999999999',
            'width' : '100%',
            'height' : '100vh',
            'pointer-events' : 'auto'            
        });
        //Данные преобразования делаются для открытия планировок
        $('.call_my_wrap').css({'margin' : '0px auto'})
        $('#class_beg').css({'min-height': '100%'})
        //------------------------------------------------------
        window.scrollTo(0, 0);
    }

    $('.call_my_close').click(function() {
        //$('.call_my').css('opacity','0').css('left','-100%');
    $('.call_my').removeAttr("style");
    //Данные преобразования делаются для открытия планировок
        $('.call_my_wrap').css({'margin' : '0px auto'});
        if($(window).width() > 700){
            $('#class_beg').css({'min-height': '680px'})
        }
    //----------------------------------------------------
    });

$('.submit').on('click', function (e) {
    e.preventDefault();
    sendForm($(this).data('id'), $('#call_my_forms').data('lang'));
    // console.log($(this).data('id'), $('#call_my_forms').data('lang'));
    return false;
});

function sendForm(id, d){

    var elem = $('#' + id);
    var data = elem.serialize();

     var inputs = ["name", "phone", "email","name_an"];
    var r = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
    var error = 0;

    for (var key in inputs) {

        var el = elem[0].elements[inputs[key]];
		
		if (el==undefined) { continue; }
		
        var clas = '';
        el.classList.value = el.classList.value.replace(" error", "");

        if (el.value.length < 2) {
            clas = ' error';
            error++;

        }
     /*   if (key == 1 && !r.test(el.value)) {
            clas = ' error';
            error++;
        }*/

        el.classList.value = el.classList.value + clas
    }
    if (error) {
        return false;
    }

    $.ajax({
        type: "POST", //Метод отправки
        url: "/include/application.php", //путь до php фаила отправителя
        data: data,
        success: function(dat) {
        var AntiBot = parseInt(dat)
        if(AntiBot == 1){

                if(id=='call_form3'){	document.location.replace('http://rybalsky.com.ua/pdf/inv.php');	}
                else{	document.location.replace('/' + d + 'message/');	}

        } else {

                $('.succses__form_text').html(dat);
            $('.succses__form_info').fadeIn();
            setTimeout(function(){
                $('.succses__form_info').fadeOut();
            },4000)
        }

            $('.callback-form-pupop').css ({
                display: 'none'
            });

        }
    });
}


var ct = 0;
var addCount = document.createElement('input');
addCount.type = "hidden";
addCount.id = "count";
addCount.name = "count";
addCount.value = "0";

function countme(form) {
    var form;
    document.getElementById(form).appendChild(addCount);
    document.getElementById('count').value = ++ct;
}

$(document).on('change', '.error', function (e) {
    $(this).removeClass('error')
});

function form(id){

    $(id).submit(function(event) { //устанавливаем событие отправки для формы с id=form
        var elem = $(id);

        //elem.append("<div class='succses__form_text'><p >Тест</p></div>");

        event.preventDefault()
        var form_data = $(this).serialize(); //собераем все данные из формы
        if ($(this).find('.subscribeForm').val()=='') {
            $(this).find('.subscribeForm').addClass('error');
            return false;
        }

        $.ajax({
            type: "POST", //Метод отправки
            url: "/include/podpiska.php", //путь до php фаила отправителя
            data: form_data,
            success: function(html) {
                //код в этом блоке выполняется при успешной отправке сообщения
                $('.succses__form_text').html(html);
                $('.succses__form_info').fadeIn();

                setTimeout(function(){
                    $('.succses__form_info').fadeOut();
                },5000)

                $('#contactForm').css ({
                    display: 'none'
                });
                $('.callback-form-pupop').css ({
                    display: 'none'
                });
                $(id).trigger('reset');
            }
        });
    });
}
$(document).ready(function(){
    if ($('.form_podpiska_news').length) {

            form('#fr1');
            form('#fr2');
        }
    });
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    // Кнопка заказать звонок
    $(document).on('click','#call_ma_please_ctc',function() {
        $('#call_my_forms_ctc').addClass('call_my_visible');
        preventBodyFromScrollig();
    });
    // Закрыть форму заказа звонка
    $(document).on('click', '.call_my_close', function() {
        $('#call_my_forms_ctc').removeClass('call_my_visible');
        returnScrollToBody();
    });

    function call(){
        $('#call_my_forms_ctc').css({
          'opacity':'1',
          'left':'0',
          'top': '0',
		  'display':'block'
      });
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    // Кнопка оставить заявку на проведения ивента
    $(document).on('click','#call_ma_please_events',function() {
        $('#call_my_forms_events').addClass('call_my_visible');
        preventBodyFromScrollig();
    });
    // Закрыть форму оставить заявку на проведения ивента
    $(document).on('click', '.call_my_close', function() {
        $('#call_my_forms_events').removeClass('call_my_visible');
        returnScrollToBody();
    });

    function call(){
        $('#call_my_forms_events').css({
          'opacity':'1',
          'left':'0',
          'top': '0',
		  'display':'block'
      });
    }
