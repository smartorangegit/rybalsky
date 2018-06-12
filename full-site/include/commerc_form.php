  <!-- popup text -->
  <div id="commerc_info" class="hidden">
    <div class="commerc_space">
      <h2 id="commerc_info_msg_container"></h2>
    </div>
  </div>
  <!-- popup text -->

  <!-- Form start -->

  <div class="commerc_form_container hidden_form" id="commerc_form_container">
    <div class="commerc_form">
      <div class="commerc_form_container__form_main_heading"><h3 id="form_heading_text"></h3></div>
      <div class="closeForm"><img src="/img/icons/close-bold-red.svg" alt="close" width="70px"></div>
      <form method="POST" id="commerc_form_tag" enctype="multipart/form-data" >
        <div>
          <div class="commerc_form__subheading">Контакти для зв'язку:</div>
          <div class="commerc_form_element__container">
            <div class="commerc_form_element">
              <input class="commerc_form_element__input commerc_form_element__lastName" type="text" placeholder="Прізвище" name="lastName">
              <div class="error_message error_message_lastName"></div>
            </div>
            <div class="commerc_form_element">
              <input class="commerc_form_element__input commerc_form_element__firstName" type="text" placeholder="Ім'я" name="firstName">
              <div class="error_message error_message_firstName">Напишіть ваше ім'я</div>
            </div>
          </div>
          <div class="commerc_form_element__container">
            <div class="commerc_form_element">
              <input class="commerc_form_element__input commerc_form_element__phone inputtelmask" onkeyup="javascript:countme('commerc_form_tag');" type="text" placeholder="Ваш телефон у форматі 0ХХХХХХХХХ"   name="phone">
              <div class="error_message error_message_phone">Заповніть ваш телефон у форматі 0ХХХХХХХХХ</div>
            </div>
            <div class="commerc_form_element">
              <input class="commerc_form_element__input commerc_form_element__email" type="email" placeholder="E-mail" name="email">
              <div class="error_message error_message_email"></div>
            </div>
          </div>
        </div>

        <div>
          <div class="commerc_form__subheading">Скорочений опис проекту:</div>
          <div class="commerc_form_element__container commerc_form_element__container_description">
            <input class="commerc_form_element__input commerc_form_element__brand" type="text" placeholder="Бренд. Імя проекту" name="brand">
            <textarea class="commerc_form_element__input commerc_form_element__activity" type="text" placeholder="Вид діяльності" name="description"></textarea>
          </div>
        </div>

        <div> 
          <div class="commerc_form__subheading">Умови оренди:</div>
          <div class="commerc_form_element__container commerc_form_element__container_lease">
            <div class="commerc_form_element">
              <input class="commerc_form_element__input commerc_form_element__lease_term" name="leaseTerm" type="text" placeholder="Строк оренди">
            </div>
            <div class="commerc_form_element commerc_form_element__lease_type">
              <div class="commerc_form_element__lease_type__heading">Ставка оренди:</div>
                <input class="commerc_form_element__radio_btn" type="radio" name="leaseRate" value="% від обігу коштів" id="leaseRatePercent">
                <label class="commerc_form_element__radio_btn_label" for="leaseRatePercent">% від обігу коштів</label>
                <input class="commerc_form_element__radio_btn" type="radio" name="leaseRate" value="$ м.кв" id="leaseRateArea" checked>
                <label class="commerc_form_element__radio_btn_label" for="leaseRateArea">$ м.кв</label>
            </div>
          </div>
        </div>

        <!-- <div>
          <div class="commerc_form__subheading">Додати презентацію:</div>
          <div class="commerc_form_element__container commerc_form_element__container_presentation">
            <div class="fl_upld">
              <label class="commerc_form__interaction"><input id="fl_inp" class="commerc_form_element commerc_form_element__presentation" name="presentationFile" type="file">Оберіть файл</label>
              <div id="fl_nm">Файл не обрано</div>
            </div>
          </div>
        </div> -->

        <div>
          <input class="commerc_form_element__input commerc_form_element__submit_btn commerc_form__interaction" type="submit" value="Відправити">
        </div>
        <div>
          <input type="hidden" name="typ" value="8">
          <input type="hidden" name="metka" value="Commercial Premise Form">
          <input type="hidden" name="inn" value="Rybalsky">
          <input type="hidden" name="premiseNumber" value="" id="premiseNumber">
        </div>
      </form>
    </div>
  </div>

  <!-- Form end -->

  <style>
  /* popup styles */
  #commerc_info {
    padding: 5px;
    border-radius: 5px;
    background-color: rgba(0, 53, 170, 0.9);
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .hidden {
    display: none;
  }

  .visible {
    display: block;
  }
  /* popup styles end */

  /*Commercial Form styes start here */

  .ch-link .commerc_form_container {
    text-align: left;
  }

  #commerc_info {
      position: fixed;
      left: 0;
      top: 65%;
      transition: all .2s;
      background-color: #0035aa;
    }
    .closeForm {
      display: inline-block;
      float:right;
    }
    .closeForm:hover {
      cursor: pointer;
    }
    .commerc_show_form_btn:hover {
      cursor: pointer;
    }
    .commerc_space {
      padding: 20px;
    }
    #commerc_info_msg_container {
      text-align:center;
      font-size: 20px;
    }

    .hidden_form {
      transform: translateX(-100%);
    }

    .visible_form {
      transform: translateX(0%);
    }

    .commerc_form_container__form_main_heading {
      display: inline-block;
      margin-left: 20px;
    }

    .commerc_form__subheading {
      margin-left: 3%;
    }

    .commerc_form_container {
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 120;
      background-color: rgba(0, 53, 170, 0.9);
      top: 0;
      left: 0;
      transition: transform 0.2s;
      overflow: auto;
    }

    .commerc_form {
      width: 60%;
      border: 1px solid #fff;
      padding: 5px;
      margin: 30px auto 0 auto;

    }
    .commerc_form_element__container {
      width: 100%;
      display: flex;
      justify-content:space-around;
    }
    .commerc_form_element {
      width: 45%;
    }

    .commerc_form_element__input {
      width: 100%;
      height: 48px;
      margin-bottom: 10px;
      font-size: 18px;
      text-indent: 10px;
    }
    
    .commerc_form_element__submit_btn {
      width: 50%;
    }

    /* Radio Buttons Start*/
    .commerc_form_element__radio_btn_label {
      margin: 5px;
      padding: 5px;
      border: 1px solid #fff;
    }
    .commerc_form_element__radio_btn_label:hover {
      cursor: pointer;
    }
    .commerc_form_element__radio_btn {display: none;}
    .commerc_form_element__radio_btn:checked + label {
      background-color: #fff;
      color: rgba(0, 53, 170, 0.9);
    }
    /* Radio Buttons End*/

    /* File Upload Start*/
    .fl_upld {
      margin-bottom: 15px;
      margin-left: 20px;
    }
    #fl_inp{display:none;}
    .fl_upld label {
      width: 200px;
      display: inline-block;
      margin: auto;
      padding: 5px;
      border: 1px solid #fff;
      cursor:pointer;
      color:#fff;
      text-align: center;
    }
    #fl_nm {
      display: inline-block;
      margin-top:20px;
      color:#fff;
    }
    /* File Upload End*/

    /* Submit Button Start */
    .commerc_form_element__submit_btn {
      display: block;
      margin: 0 auto;
      color: #fff;
      background-color: transparent;
      border: 1px solid #fff;
    }
    .commerc_form_element__submit_btn:hover {
      cursor: pointer;
    }
    /* Submit Button End */

    .commerc_form_element__input::-webkit-input-placeholder {color: rgba(0, 53, 170, 0.9);} /* Chrome/Opera/Safari */
    .commerc_form_element__input::-moz-placeholder {color: rgba(0, 53, 170, 0.9);} /* Firefox 19+ */
    .commerc_form_element__input:-ms-input-placeholder {color: rgba(0, 53, 170, 0.9);} /* IE 10+ */
    .commerc_form_element__input  :-moz-placeholder { color: rgba(0, 53, 170, 0.9);} /* Firefox 18- */

    .commerc_form_element__brand, 
    .commerc_form_element__activity {
      width: 95%;
      margin: 0 auto;
      margin-bottom: 10px;
    }

    .commerc_form_element__container_description {
      flex-direction: column;
    }

    .commerc_form_element__lease_type {
      margin-top: -14px;
    }

    .commerc_form_element__lease_type__heading {
      margin-bottom: 20px;
      font-size: 16px; 
    }

    .commerc_form_element__activity {
      height: 90px;
    }

    .error_message {
      display: none;
      background: rgba(0, 0, 0, 0.8);
      padding: 5px;
      margin-bottom: 5px;
      border-radius: 5px;
      position: relative;
    }

    .error_message:before {
      content: '';
      width: 0;
	    height: 0;
	    border-left: 5px solid transparent;
	    border-right: 5px solid transparent;
	    border-bottom: 10px solid rgba(0, 0, 0, 0.8);
      position: absolute;
      top: -10px;
      left: 46%;
    }

    .commerc_form__interaction {
      transition: all .3s;
    }

    .commerc_form__interaction:hover {
      background-color: #01277A;
    }

    .commerc_form_element__container_presentation {
      justify-content: flex-start;
    }
    @media screen and (max-width: 1200px) {
      .commerc_form {
        width: 95%;
      }
    }
    @media screen and (max-width: 768px) {
      .closeForm {
        margin-left: 80%;
      }
      .commerc_form_element__container {
        flex-direction: column;
      }
      .commerc_form_element {
        width: 95%;
        margin: 5px auto;
      }
     .commerc_form_element__lease_type {
       margin: 20px 0px;
     }
    }

  /* Commercial Form styes end here */
  </style>

  <script>
      $(document).ready(function() {

        $('[data-sold]').mouseover(function(e) {
          var app = $(this).data();
          if(app.sold) {
            $('#commerc_info_msg_container').html('Приміщення '+ app.appnumber  + ' ПРОДАНО');
            $('#commerc_info').removeClass('hidden').addClass('visible').css({
              top: e.pageY + 5 ,
              left: e.pageX + 5
            });
          }
        }); //end commercial premise mouseover

        $('[data-sold]').mouseout(function() {
          $('#commerc_info').removeClass('visible').addClass('hidden');
        });//end commercial premise mouseout

        function showCommercForm() {
          var number = $('.st-on').parent().data().appnumber;
          $('#commerc_form_container').removeClass('hidden_form').addClass('visible_form');
          $('#class_beg').css({minHeight: 0 + 'px'});
          $('#premiseNumber').val(number);
          $('#form_heading_text').html($('.appart-name').html());
        }

        function hideCommercForm() {
          $('#commerc_form_container').removeClass('visible_form').addClass('hidden_form');
          $('#class_beg').css({minHeight: 680 + 'px'}); 
        }

        $('.commerc_show_form_btn').click(showCommercForm); //Показать форму
        $('.closeForm').click(hideCommercForm); //Спрятать форму

        $("#fl_inp").change(function() {
          var filename = $(this).val().replace(/.*\\/, "");
          $("#fl_nm").html(filename);
        });//Приблуда для того чтобы при выброе файла отображалось имя файла...

        // Отправка формы начинается тут

        // var validPhone = false;
        // var validName = false;
        // Функция для валидации передаем туда регулярку и селектор контейнера ошибки
        function showHideInputError(regularExpression, errorContainerSelector) {
          var value = $(this).val();
          if(regularExpression.test(value)) {
            $(errorContainerSelector).css({display: 'none' });
            return true;
          } else {
            $(errorContainerSelector).css({display: 'block' });
            return false;
          }
        }

        // $('.commerc_form_element__phone').keyup(function() {
        //   validPhone = showHideInputError.call(this, /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/, '.error_message_phone');
        // });

        // $('.commerc_form_element__firstName').keyup(function() {
        //   validName = showHideInputError.call(this, /^[a-zA-Zа-яА-Я]+$/, '.error_message_firstName');
        // });

        $('#commerc_form_tag').submit(function(e) {
          e.preventDefault();
          // validPhone = showHideInputError.call($('.commerc_form_element__phone'), /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/, '.error_message_phone');
          // validName = showHideInputError.call($('.commerc_form_element__firstName'), /^[a-z]+$/i, '.error_message_firstName');
          //FormData берет все значаения из формы если ей пережать ее селектор
          var formData = new FormData($('#commerc_form_tag')[0]);
          $.ajax({
            type: 'POST',
            url: '/include/application2.php',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(html) {
//              console.log('Sended')
                console.log(html);
            }
          });


        });//end submit

      }); //end document ready
  </script>
