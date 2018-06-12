<?php /*Задача от 03.08.2017 по добалению форм Андрей*/ ?>
<!--Кнопки которые видит юзер-->
<div class="forms_btns">
    <button class="show_sales_btn btn" data-type-of-form="<?=$mes['c-mes16']?>"><?=$mes['c-mes16']?></button>
    <button class="show_commercial_btn btn" data-type-of-form="<?=$mes['c-mes17']?>"><?=$mes['c-mes17']?></button>
    <button class="show_marketing_btn btn" data-type-of-form="<?=$mes['c-mes18']?>"><?=$mes['c-mes18']?></button>
    <button class="show_general_btn btn" data-type-of-form="<?=$mes['c-mes19']?>"><?=$mes['c-mes19']?></button>

</div>

<!--Модальное окно-->
<div class="quest_form quest_form_hide">
  <div class="quest_form_wrapper">
    <h3 class="quest_form__heading"></h3>
    <div class="quest_form_flex_cotainer">
      <div class="quest_form_logo">
        <img src="/img/rybalsky-logo-w-.svg" alt="RYBALSKY">
      </div>
      <div class="quest_form_main">
        <form  id="form">
          <div class="form-main">
            <div class="form-call">
              <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name1" >
                <input name="name" type="text" id="name1_" placeholder="<?=$mes['c-mes3']?>">
                <span class="itext">*</span>
              </p>
              <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>" id="phone1" >
                <input  name="phone" id="phone1_" onkeyup="javascript:countme('form');" type="text" placeholder="<?=$mes['c-mes21']?>" class='inputtelmask'>
                <span class="iphone">*</span>
              </p>
            </div>
              <input id="quest_type" name="typ" type="hidden" value="" />
              <input id="resp_employee" name="resp_employee" type="hidden" value="">
              <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
              <input  name="metka" class="metka" type="hidden" value="Form from Rybalsky"/>
              <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
              <div class="form-com">
                <textarea name="formData" cols="30" rows="10"  placeholder="<?=$mes['c-mes20']?>"></textarea>
              </div>
							<div class="succses__form_info"><p class="succses__form_text"></p></div>
                <div class="form-button">
                    <input id="subb" type="submit" data-id="form" value="<?=$mes['c-mes6']?>" class="button submit">
                </div>
<!--                        <div style="padding:0px 0px 2px;" id="reCaptcha2" class="not" data-description="--><?//=$mes['p3-mes']?><!--"></div>-->
            </div>
          </form>
        </div>
      </div>
        <div class="quest_form_close">
          <img src="/img/icons/close-bold-red.svg" alt="close_icon" width = "60px">
        </div>
    </div>
</div>


<!-- модальне вікно для "Співпраця для ріелторів" -->
<div id="realtor" class="realtor_quest_form quest_form_hide">
  <div class="quest_form_wrapper">
    <h3 class="quest_form__heading"></h3>
    <div class="quest_form_flex_cotainer">
      <div class="quest_form_logo">
        <img src="/img/rybalsky-logo-w-.svg" alt="RYBALSKY">
      </div>
      <div class="quest_form_main">
        <form  id="form-2">
          <div class="form-main">
            <div class="form-call">
              <p class="not name1" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name1" >
                <input name="name_an" type="text" id="name1_" placeholder="<?=$mes['c-mes31']?>">
                <span class="itext">*</span>
              </p>
              <p class="not name1" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name2" >
                <input name="name" type="text" id="name1_" placeholder="<?=$mes['c-mes3']?>">
                <span class="itext">*</span>
              </p>
            </div>
            <div class="form-call">
              <p class="not name1" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name3" >
                <input name="email" type="text" id="name1_" placeholder="<?=$mes['c-mes32']?>">
                <span class="itext">*</span>
              </p>
              <p class="not phone1" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>" id="phone1" >
                <input  name="phone" id="phone1_" onkeyup="javascript:countme('form-2');" type="text" placeholder="<?=$mes['c-mes21']?>" class='inputtelmask'>
                <span class="iphone">*</span>
              </p>
            </div>
              <input id="quest_type" name="typ" type="hidden" value="8" />
          
              <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
              <input  name="metka" class="metka" type="hidden" value="Форма сотрудничество для риелторов - RYBALSKY"/>
              <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
              <div class="form-com">
                <textarea name="formData" cols="30" rows="10"  placeholder="<?=$mes['c-mes20']?>"></textarea>
              </div>
                            <div class="succses__form_info"><p class="succses__form_text"></p></div>
                <div class="form-button">
                    <input id="subb" type="submit" data-id="form-2" value="<?=$mes['c-mes6']?>" class="button submit">
                </div>
            </div>
          </form>
        </div>
      </div>
        <div class="quest_form_close">
          <img src="/img/icons/close-bold-red.svg" alt="close_icon" width = "60px">
        </div>
    </div>
</div>






<style>
/*Кнопки*/

#name1,
#phone1 {
    position: relative;
}

.not {
    position: relative;
}

.realtor_quest_form {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 120;
    background-color: rgba(0, 53, 170, 0.9);
    transition: 0.5s;
    padding: 20px;
}

.forms_btns {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-between;
    display: flex;
    justify-content: space-between;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    box-sizing: border-box;
    padding-left: 20px;
}
.btn {
    box-sizing: border-box;
    width: 49%;
    margin-bottom: 20px;
    font-size: 16px;
    font-family: "PFDinTextUniversal-Light";
    display: block;
    color: #fff;
    letter-spacing: 3px;
    text-transform: uppercase;
    background-color: #0035aa;
    line-height: 60px;
    padding: 0 10px;
    border: 1px solid #003593;
    transition: 0.35s;
}
.btn:hover {
    cursor: pointer;
    background-color: #fff;
    color: #0035AA;
    transition: 0.35s;
}
.form {
    height: 235px;
}
.quest_form {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 120;
    background-color: rgba(0, 53, 170, 0.9);
    transition: 0.5s;
    padding: 20px;
}
.quest_form_logo{
  margin-right: 16px;
}
.quest_form_show {
    opacity: 1;
}
.quest_form_hide {
    left: -100%;
    opacity: 0;
}
.quest_form_wrapper {
    position:relative;
    width: 690px;
  }

.quest_form_flex_cotainer {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: space-between;
}

 .quest_form_main {
  width: 100%;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}

 .quest_form_close {
  width: 22px;
    position: absolute;
    top: -8px;
    right: 0;
    cursor: pointer;
}

.quest_form_close img{
  width: 100%;
}


 .form-main {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: space-between;
    margin-top: 0px;
    width: 100%;
    flex-direction: column;
}

 .form-call {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    width: auto;
    justify-content: space-between;
}

.form-com {
    width: auto;
}

.quest_form #name1, .quest_form #phone1 {
    width: 49%;
}
.realtor_quest_form .name1, .realtor_quest_form .phone1 {
    width: 49%;
}
.quest_form__heading{
  font-size: 24px;
  margin-bottom: 20px;
}

 .form-button input {
    height: 50px;
    line-height: 50px;
    width: 100%;
    background-color: transparent;
    outline: none;
    color: white;
    border: 1px solid white
}

 .form-main .iphone {
    top: 15px;
    right: 10px;
    left: auto;
}

 .form-main .itext {
    top: 15px;
    right: 10px;
    left: auto;
}

.logo {
    height: 236px;
}
#form{
  width: 100%;
}

@media screen and (max-width: 1024px) and (min-width: 768px) {
    .form-main .iphone {
        top: 10px;
    }

    .form-main .itext {
        top: 10px;
    }
}
@media screen and (max-width: 767px) and (min-width: 320px) {
    .form {
        height: auto;
        margin: 0 auto;
    }
    .forms_btns {
        flex-direction: column;
    }
    .btn {
        width: 300px;
        height: 62px;
        line-height: 62px;
    }
    .form-text-more {
        padding-top: 0px;
    }
    .mm0:before, .mm1:before, .mm02:before, .mm12:before, .mm22:before, .not:before {
        top: 355px;
    }
    .form-main .iphone {
        top: 12px;
        left: 280px;
    }

     .form-main .itext {
        top: 12px;
        left: 280px;
    }

}

        /*End Additional Forms Styling*/

@media screen and (max-width: 850px) {
    .quest_form_main .form-call{
      padding-top: 0;
    }
    .form-call {
        flex-wrap: wrap;
    }
    .quest_form #name1, .quest_form #phone1 {
        width: 100%;
    }
    .realtor_quest_form .name1, .realtor_quest_form .phone1 {
      width: 100%;
    }
    .quest_form_flex_cotainer {
        flex-direction: column;
    }
    .quest_form__top_inputs {
        flex-direction: column;
    }
    .quest_form_main {
        order: 1;
    }
    .quest_form_logo {
        display: none;
        width: 80px;
        order: 2;
        margin: 0px auto;
    }
    .quest_form_logo img{width: 100%;}
    .quest_form_wrapper {
        width: 270px;
        border: none;
    }
    .quest_form_close {
      top: -16px;
      right: -16px;
    }
    .anonymous-feedback{
      position: fixed;
      width: 290px;
      top: 70px;
      margin-left: 0;
      transform: translate(-50%, 0%);
      -webkit-transform: translate(-50%, 0%);
    }
    .anonymous-feedback__name {
      font-size: 20px;
    }
    .anonymous-feedback__message p {
      font-size: 14px;
      }
      .anonymous-feedback__submit_btn{
        font-size: 16px;
      }
}
</style>
<?php /*Задача от 03.08.2017 по добалению форм Андрей*/ ?>
<script src="/js/callback.js"></script>
