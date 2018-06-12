<!--    форма   ЗАБРОНЮВАТИ КВАРТИРУ 555 -->
                <?php $webAd = $_SERVER['SCRIPT_URI']; ?>
    <div class="call_my" id="id_reservations">
      <div class="call_my_wrap">
        <div class="call_my_left">
          <div class="call_my_name">
           <?=$mes['pl-mes8']?>
          </div>

          <div class="call_my_bottom">
            <div class="call_my_logo">
              <img src="/img/rybalsky-logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" <?AltImgAdd($mes['alt-logo'])?> />
            </div>
            <div class="call_my_form">
              <div class="form">
                <form  id="call_form2">

					<p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name2">
                      <input name="name" id="name2_"  type="text" placeholder="<?=$mes['c-mes3']?>">
                      <span class="itext">*</span>
                    </p>
                    <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>" id="phone2">
                      <input name="phone" id="phone2_"  onkeyup="javascript:countme('call_form2');" type="tel" placeholder="<?=$mes['c-mes4']?>" class='inputtelmask'>
                      <span class="iphone">*</span>
						<input name="typ" hidden value="2" >
						<input name="kv" hidden value="<?=$_SERVER['SCRIPT_URL']?>" >
  <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
   <input  name="metka" class="metka" type="hidden" value="Form from Rybalsky"/>
   <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
                    </p>

                    <p>
                      <textarea name="formData" cols="30" rows="10" placeholder="<?=$mes['c-mes12']?>"></textarea>
                    </p>

<!--					<div style="padding:0px 15px 20px;" id="reCaptcha2" class="not" data-description="--><?//=$mes['p3-mes']?><!--"></div> -->
						  
	<div class="succses__form_info"><p class="succses__form_text"></p></div>
	
                       <input  type="submit" data-id="call_form2" value="<?=$mes['c-mes14']?>" class="button submit">
                    </form>


                </div>
              </div>
            </div>
          </div>
          <div class="call_my_right">
            <a class="call_my_close" >
              <!-- <img src="<?=$site?>img/icons/close-bold-red.svg" alt="logo" width="70px"/> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="50 98.5 60 60"><path d="M55.21 153.29L50 148.08l9.79-9.79 9.788-9.79-9.79-9.79L50 108.92l5.21-5.21 5.21-5.21 9.79 9.79 9.79 9.788 9.79-9.79 9.79-9.788 5.21 5.21 5.21 5.21-9.79 9.79-9.788 9.79 9.79 9.79 9.788 9.79-5.21 5.21-5.21 5.21-9.79-9.79-9.79-9.788-9.79 9.79-9.79 9.788-5.21-5.21z" fill="red"/></svg>

            </a>
          </div>
        </div>
      </div>
  <div class="call_my" id="forms_floor">
      <div class="call_my_wrap call_my_wrap-popup" style="width: 100%;">
        <div class="call_my_left" style="height: 100%; margin: 0 auto;" id="img_copy" >
<?=$imgs?>
          </div>
          <div class="call_my_right">
            <a class="call_my_close" >
              <!-- <img src="<?=$site?>img/icons/close-bold-red.svg" alt="logo" width="70px"/> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="50 98.5 60 60"><path d="M55.21 153.29L50 148.08l9.79-9.79 9.788-9.79-9.79-9.79L50 108.92l5.21-5.21 5.21-5.21 9.79 9.79 9.79 9.788 9.79-9.79 9.79-9.788 5.21 5.21 5.21 5.21-9.79 9.79-9.788 9.79 9.79 9.79 9.788 9.79-5.21 5.21-5.21 5.21-9.79-9.79-9.79-9.788-9.79 9.79-9.79 9.788-5.21-5.21z" fill="red"/></svg>

            </a>
          </div>
        </div>
      </div>
<!--    конец  формы ЗАБРОНЮВАТИ КВАРТИРУ  -->
