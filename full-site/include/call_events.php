
<?php  $webAd = $_SERVER['SCRIPT_URI'];  ?>
<!--     контактная форма    -->
    <div class="call_my" id="call_my_forms_events" data-lang='<?=$_POST['lang']?>'>
      <div class="call_my_wrap">
        <div class="call_my_left">
          <div class="call_my_name">
           <?=$mes['call_events_form']?>
          </div>
          <div class="call_my_bottom">
            <div class="call_my_logo">
              <img src="/img/rybalsky-logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" <?AltImgAdd($mes['alt-logo'])?> />
            </div>
            <div class="call_my_form">
              <div class="form">
                  <form  id="call_form_events"> 
                    <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['call_events_name']?>" id="events_name0">
                      <input name="name" id="events_name0_"  type="text" placeholder="<?=$mes['call_events_name']?>">
                      <span class="itext">*</span>
                    </p>
					<p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['call_events_surname']?>" id="events_surname0">
                      <input name="surname" id="events_surname0_"  type="text" placeholder="<?=$mes['call_events_surname']?>">
                      <span class="itext">*</span>
                    </p>
                    <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>" id="events_phone0">
                      <input name="tel" id="events_phone0_"  onkeyup="javascript:countme('call_form');" type="tel" placeholder="<?=$mes['c-mes4']?>" class='inputtelmask' >
                      <span class="iphone">*</span>

					  <input name="typ" hidden value="0" >
                      <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                      <input  name="metka" class="metka" type="hidden" value="Form from Rybalsky"/>
                      <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
                    </p>
                    <p>
                      <textarea name="house_number" id="events_house_number" cols="30" rows="10"  placeholder="<?=$mes['call_events_house_number']?>"></textarea>
					  
					          </p>
					        <div>
					      </div>

	<div class="succses__form_info"><p class="succses__form_text"></p></div>

                      <input  type="submit" id="send" data-id="call_form" value="<?=$mes['call_events_button']?>" class="button submit">
                    <div class="answer"></div>
					</form>
					<div id="post_form_success"></div>
	 <?/*  <script src="/js/call_my.js"></script>*/?>
<!--end-->
                </div>
              </div>
            </div>
          </div>
          <div class="call_my_right">
            <a class="call_my_close" >
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="50 98.5 60 60"><path d="M55.21 153.29L50 148.08l9.79-9.79 9.788-9.79-9.79-9.79L50 108.92l5.21-5.21 5.21-5.21 9.79 9.79 9.79 9.788 9.79-9.79 9.79-9.788 5.21 5.21 5.21 5.21-9.79 9.79-9.788 9.79 9.79 9.79 9.788 9.79-5.21 5.21-5.21 5.21-9.79-9.79-9.79-9.788-9.79 9.79-9.79 9.788-5.21-5.21z" fill="red"/></svg>
              <!-- <img src="/img/icons/close-bold-red.svg" alt="logo" width="70px"/>-->
            </a>
          </div>
        </div>
      </div>

      <!-- перенесла в script.js 25/10 Аня -->

<style>
.error {
    border: 1px solid red!important;
}
.succses__form_info {
    display: none;
    width: 100%;
}
.succses__form_text {
    font-size: 20px;
    font-family: "PFDinTextUniversal-Regular";
    text-align: center;
    padding: 15px;
}
</style>
<script  type="text/javascript">
    // отправялем данные с формы в обработчик
    $("#send").click(function(){
		
        var msg = $('#call_form_events').serialize();
        $.ajax({
          type: 'POST',
          url: '/include/application_events.php',
          data: msg,
          success: function(data) {
            $('.answer').html(data).slideDown(300);
            console.log(data);
			console.log('111111');
          },
          error:  function(xhr, str){
                $('.answer').html('Возникла ошибка: ' + xhr.responseCode);
            }
        });
        return false;
    });



</script>
<script src="/js/callback.js"></script>

<!--    конец  контактная форма    -->
