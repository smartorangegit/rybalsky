<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['space-for-life-description']; ?>">
  <title><?=$mes['life-mes0']?></title>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <?php
	   $url_origin = $_SERVER["REQUEST_URI"];
	   $url_str = explode("/", $url_origin);
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){ ?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo substr($url_origin, 3);?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo substr($url_origin, 3);   ?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo substr($url_origin, 3);?>" />
	<?php }
	else {?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo $url_origin;?>" />
    <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo $url_origin;?>" />
    <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo $url_origin;?>" />
	<?php } ?>
  </head>
  <body class="space_for_life">
    <div class="loader">
      <div class="loader__background">
        <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
      </div>
    </div>
    <section class="life_one">
      <h1><?=$mes['life-mes1']?></h1>
    </section>
    <section class="life_two">
      <div class="life_item">
        <div class="block__name"><?=$mes['life-mes2']?></div>
        <div class="text__block">
          <p><?=$mes['life-mes3']?>
          <!-- Нижні поверхи будинків займатимуть магазини, супермаркети, центри обслуговування, кафе, ресторани, бутіки, шоуруми, салони краси, тож мешканці району матимуть усе необхідне зовсім поруч — лише за кілька хвилин пішки від дому. Діти зможуть навчатися неподалік від дому, адже в RYBALSKY відкриється навчальний комплекс. На бульварі та у дворах ми облаштовуємо спортивні майданчики просто неба.
          Також ми подбали про медичну інфраструктуру — у RYBALSKY працюватимуть аптеки, сімейні поліклініки, амбулаторії, офтальмологічні клініки, а також ветеринарні кабінети. На других і третіх поверхах деяких будинків розташуються офіси. Там відкриються IT-компанії, творчі й архітектурні майстерні, юридичні агентства. -->
          </p>
        </div>
      </div>
      <div class="life_item">
        <div class="vp_triptih">
          <div class="side_l">
            <div class="vp_triptih_name">
              <img src="/img/icons/icon-medicine.png" alt="">
              <span><?=$mes['life-mes4']?></span>
            </div>
            <table>
              <?=$mes['life-mes5']?>
              <!-- <tr><td><div class="tp_round"></div></td><td>кабінети сімейного лікаря</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>кабінети стоматології</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>аптеки</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>приватні медичні практики</td>
              </tr> -->
            </table>
          </div>
          <div class="side_center">
            <img src="/img/life/life_1.jpg" <?AltImgAdd($mes['alt-logo'])?>>
            <img src="/img/life/life_2.jpg" <?AltImgAdd($mes['alt-logo'])?>>
          </div>
          <div class="side_r">
            <div class="vp_triptih_name">
              <img src="/img/icons/icon-files.png" alt="">
              <span><?=$mes['life-mes6']?></span>
            </div>
            <table>
              <?=$mes['life-mes7']?>
              <!-- <tr><td><div class="tp_round"></div></td><td>ІТ - офіси</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>художні студії</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>архітектурні майстерні</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>кабінети нотаріусів</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>офіси юридичних компаній</td>
              </tr> -->
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="life_three">
      <div class="life_item">
        <div class="vp_triptih">
          <div class="side_l">
            <div class="vp_triptih_name">
              <img src="/img/icons/icon-house.png" alt="">
              <span><?=$mes['life-mes8']?></span>
            </div>
            <table>
              <?=$mes['life-mes10']?>
              <!-- <tr><td>2500 м<sup>2</sup></td><td>простору для відпочинку мешканців</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>гравійні доріжки</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>workout зона</td>
              </tr>
              <tr><td><div class="tp_round"></div></td><td>дитячий майданчик з ігровими пагорбами</td>
              </tr> -->

            </table>
          </div>
          <div class="side_center">
            <img src="/img/life/life_3.jpg" <?AltImgAdd($mes['alt-logo'])?>>
            <!-- <img src="/img/vp_4.jpg" <?AltImgAdd($mes['alt-logo'])?>> -->
          </div>
          <div class="side_r">
            <div class="vp_triptih_name">
              <img src="/img/icons/icon-house.png" alt="">
              <span><?=$mes['life-mes8']?></span>
            </div>
            <table>
              <?=$mes['life-mes11']?>

            </table>
          </div>
        </div>
      </div>
      <div class="life_item">
        <div class="block__name"><?=$mes['life-mes9']?></div>
        <div class="text__block">
          <p><?=$mes['life-mes12']?>
            <!-- Периметральна забудова з усіх боків відмежовує внутрішні двори від вулиць, тому простір усередині кварталів буде тихим і затишним. Доступ до подвір’я матимуть тільки мешканці будинку, тож діти зможуть гратись у безпеці.
            Зручні лави, столики для пікніків, дитячі та спортивні майданчики — ми подбали, щоб на внутрішньому подвір’ї було все для сімейного відпочинку та дозвілля з дітьми. Зелені газони та дерева дадуть змогу відчути себе на природі та відновити сили. -->
          </p>
        </div>
      </div>

    </section>
    <section class="life_four">
      <div class="life_item">
        <div class="block__name"><?=$mes['life-mes13']?></div>
        <div class="text__block">
          <p><?=$mes['life-mes15']?>
          <!-- На бульварі будуть пішохідні та велосипедні доріжки, дерева, газони та місця для відпочинку. Уздовж бульвару не пролягають міські автомагістралі, тож тут буде спокійно та безпечно. Кожен знайде тут комфортне місце для себе, адже бульвар поділено на три частини: парк, площу та спортивну зону.
          Парк стане гарним місцем для тихого відпочинку: тут можна буде посидіти на лаві під яблунею, пройтися доріжками зі зручним мощенням. У центральній частині бульвару розташована площа, а із боків від неї стоятимуть столики. На вихідних тут можна буде влаштовувати сімейні пікніки, а на свята — фестивалі. На газонах у тіні платанів ми поставимо лежаки, у спортивній зоні встановимо три батути та скейт-рампи. Поруч будуть зони для відпочинку. -->
          </p>
        </div>
        <div class="call-button button-flat">
          <a href="/<?=$_POST['lang']?>kvartira/"><?=$mes['menu-mes7']?></a>
        </div>
        <style media="screen">
          .button-flat{  display: block;  width: 100%;  max-width: 250px;  margin: 20px auto;}
          .button-flat a{ text-transform: inherit;}
        </style>


      </div>
      <div class="life_item">
        <div class="vp_triptih">
          <div class="side_l">
            <div class="vp_triptih_name">
              <img src="/img/icons/icon-dog.png" alt="">
              <span><?=$mes['life-mes14']?></span>
            </div>
            <table>
              <?=$mes['life-mes16']?>

            </table>
          </div>
          <div class="side_center">
            <img src="/img/life/life_4.jpg" <?AltImgAdd($mes['alt-logo'])?>>
            <img src="/img/life/life_5.jpg" <?AltImgAdd($mes['alt-logo'])?>>
          </div>
          <div class="side_r">
            <div class="vp_triptih_name">
              <img src="/img/icons/icon-dog.png" alt="">
              <span><?=$mes['life-mes14']?></span>
            </div>
            <table>
              <?=$mes['life-mes17']?>

            </table>
          </div>

        </div>

      </div>

    </section>

    <style media="screen">
    .life_one {
        background: url(/img/life_1.jpg) center no-repeat;
        background-size: cover;
        padding: 140px 0;
      }
    .life_one h1{
      text-align: center;
      font-size: 40px;
    }
    .life_two, .life_three, .life_four{
      max-width: 1200px;
      box-sizing: border-box;
      margin: 0 auto;
      padding: 20px 10px;
      display: flex;
      display: -webkit-flex;
      flex-direction: row;
      justify-content: space-between;
      -webkit-flex-direction: row;
      -webkit-justify-content: space-between;
      align-items: center;
      -webkit-align-items: center;
    }
    .life_two .life_item:first-child,
    .life_three .life_item:nth-child(2),
    .life_four .life_item:first-child{
      width: 40%;
    }
    .life_two .life_item:nth-child(2),
    .life_three .life_item:first-child,
    .life_four .life_item:nth-child(2){
      width: 58%;
    }
    .space_for_life .vp_triptih{
      margin: 0;
    }
    .space_for_life .vp_triptih_name {
        font-size: 18px;
        margin: 0 auto 24px;
        text-align: center;
    }
    .space_for_life .vp_triptih_name span {
      text-align: left;
      }

    .space_for_life .vp_triptih_name img {
        width: 24px;
    }
    .space_for_life .vp_triptih td:first-child {
        font-size: 14px;
        white-space: nowrap;
    }
    .space_for_life .vp_triptih td:nth-child(2) {
      font-size: 12px;
      /* font-family: "Open Sans", sans-serif; */
      /* color: #d1d8eb; */
      /* letter-spacing: normal; */
      }
    .space_for_life .side_l, .side_r {
      width: 28%;
      padding: 24px 14px;
      }
    .tp_round{
      width: 6px;
      height: 6px;
      background: white;
      border-radius: 100%;
      margin: 0 0 0 auto;
      display: inline-block;
      vertical-align: middle;
    }
    .life_three .side_center img:first-child {
      margin-bottom: 0;
    }
    .life_four .vp_triptih_name {
      margin: 0 auto 12px;
      }
      @media only screen and (max-width:1024px) {
        .space_for_life .vp_triptih td:nth-child(2) {
          font-size: 10px;
          }
        .space_for_life .vp_triptih td:first-child {
          font-size: 10px;
          white-space: nowrap;
        }
      @media only screen and (max-width:768px) {
        .life_one h1 {
            width: 100%;
            max-width: 320px;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
        }
        .text__block {
            padding: 0 20px;
        }
        .life_two, .life_four{
          flex-direction: column;
          -webkit-flex-direction: column;
        }
        .life_three{
          flex-direction: column-reverse;
          -webkit-flex-direction: column-reverse;
        }
        .life_item{
          width: 100%!important;
        }
        .space_for_life .side_l, .side_r {
          width: 100%;
        }
        .space_for_life .vp_triptih td:nth-child(2) {
              font-size: 12px;
          }
          .space_for_life .vp_triptih td:first-child {
          font-size: 14px;
      }


      }

    </style>


    <footer>
          <div class="foot-wrap">
            <div class="allright"><p><?=$mes['v01']?></p></div>
            <div class="web">
              <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
            </div>
            <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
            <span><?=$mes['v02']?></span>
          </div>
        </footer>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
  <?php /*Меню*/ include_once('include/top-menu.php'); ?>


<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<script src="/js/scripts.js"></script>
  </body>
</html>
