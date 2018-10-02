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
            <span>
                <img src="/img/icons/close-bold-red.svg" alt="close_icon" width = "60px">
            </span>
        </div>
    </div>
</div>

<style>
/*Кнопки*/

#name1,
#phone1 {
    position: relative;
}

.forms_btns {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-around;
    display: flex;
    justify-content: space-around;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    box-sizing: border-box;
}
.btn {
    box-sizing: border-box;
    width: 47%;
    margin-bottom: 10px;
    font-size: 16px;
    font-family: "PFDinTextUniversal-Light";
    display: block;
    color: #fff;
    letter-spacing: 3px;
    text-transform: uppercase;
    background-color: #0035aa;
    line-height: 40px;
    padding: 0 10px;
    border: 1px solid #003593;
}
.btn:hover {
    cursor: pointer;
    background-color: #0f1157;
}
.form {
    height: 235px;
}
.quest_form {
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 0px;
    z-index: 120;
    background-color: rgba(0, 53, 170, 0.9);
    transition: 0.5s;
}

.quest_form_show {
    left: 0px;
    opacity: 1;
}

.quest_form_hide {
    left: -100%;
    opacity: 0;
}

.quest_form .quest_form_wrapper {
    position:relative;
    width: 690px;
    margin: 50px auto;
    border: 1px solid white;
    padding: 16px;
}

.quest_form .quest_form_flex_cotainer {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: space-between;
}

.quest_form .quest_form_main {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}

.quest_form .quest_form_close {
    position: absolute;
    top: 6px;
    right: 0;
}
.quest_form .quest_form_close:hover {
    cursor: pointer;
}

.quest_form .form-main {
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

.quest_form .form-call {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    width: auto;
    justify-content: space-between;
}

.quest_form .form-com {
    width: auto;
}

.quest_form #name1, .quest_form #phone1 {
    width: 49%;
}

.quest_form .form-button input {
    height: 50px;
    line-height: 50px;
    width: 100%;
    background-color: transparent;
    outline: none;
    color: white;
    border: 1px solid white
}

.quest_form .form-main .iphone {
    top: 15px;
    right: 10px;
    left: auto;
}

.quest_form .form-main .itext {
    top: 15px;
    right: 10px;
    left: auto;
}

.logo {
    height: 236px;
}

@media screen and (max-width: 1024px) and (min-width: 768px) {
    .quest_form .form-main .iphone {
        top: 10px;
        left: 160px;
    }

    .quest_form .form-main .itext {
        top: 10px;
        left: 348px;
    }
}
@media screen and (max-width: 767px) and (min-width: 320px) {
    .form {
        height: auto;
    }
    .btn {
        width: 100%;
        line-height: 24px;
    }
    .form-text-more {
        padding-top: 0px;
    }
    .mm0:before, .mm1:before, .mm02:before, .mm12:before, .mm22:before, .not:before {
        top: 355px;
    }
    .quest_form .form-main .iphone {
        top: 85px;
        left: 280px;
    }

    .quest_form .form-main .itext {
        top: 35px;
        left: 280px;
    }

}

        /*End Additional Forms Styling*/

@media screen and (max-width: 850px) {
    .quest_form .form-call {
        flex-wrap: wrap;
    }
    .quest_form #name1, .quest_form #phone1 {
        width: 100%;
    }
    .quest_form .quest_form_flex_cotainer {
        flex-direction: column;
    }
    .quest_form .quest_form__top_inputs {
        flex-direction: column;
    }
    .quest_form .quest_form_main {
        order: 1;
    }
    .quest_form .quest_form_logo {
        order: 2;
        margin: 10px auto;
    }
    .quest_form .quest_form_wrapper {
        width: 320px;
        border: none;
    }
    .quest_form .quest_form_close {
        top: -6%;
    }
}
</style>
<?php /*Задача от 03.08.2017 по добалению форм Андрей*/ ?>
<script src="/js/callback.js"></script>
