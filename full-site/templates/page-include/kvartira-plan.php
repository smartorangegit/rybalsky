<?php
/**
 *  @file kvartira-plan.php
 *  @brief  Сторінка вибору будинку
 *  /plan/, /kvartira/
 */
	$ur='/sections';
 ?>


 <?php /*Контактна форма*/ //include_once('include/call_my.php'); ?>
		  <!--start-->
<?  /*Заглушка для мобільних*/mobiledet(); ?>

<!-- СТРАНИЦА С ВЫБОРОМ ДОМА -->

  <!-- <section class="function_first"> -->
    <input id="len" value="<?=$_POST['lang']?>" hidden>
  <?if(!$_GET['ajax']):?>

   <?endif;?>
<!-- МОДУЛЬ -->
<div id=new_app><router-view></router-view>
    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" style="
    height: 0;
    visibility: hidden;
    display: block;
    margin: 0;
    padding: 0;
    overflow: hidden;">
    <defs id="fs-svg-gradients">
    </defs>
    </svg>

    <link rel="stylesheet" href="https://flat.show/static/css/custom/rybalsky.css">
    <script>
      function fs_t(str) {
        return fs_messages[str] ? fs_messages[str] : str;
      }

      function latToCyr(str) {
      	let cyr = [
                  'À','à',
                  'Á','á',
                  'Â','â',
                  'Ã','ã',
                  '¥','¥',
                  'Ä','ä',
                  'Å','å',
                  'ª','º',
                  'Æ','æ',
                  'Ç','ç',
                  'È','è',
                  '²','³',
                  '¯','¿',
                  'Ê','ê',
                  'Ë','ë',
              ];
            let lat = [
                  'A','a',
                  'B','b',
                  'V','v',
                  'H','h',
                  'G`','g`',
                  'D','d',
                  'E','e',
                  'YE','ye',
                  'ZH','zh',
                  'Z','Z',
                  'Y','y',
                  'I','i',
                  'YI','yi',
                  'K','k',
                  'L','l',
              ];
      		let arr = str.split();
      		let newArr = [];
      		for(var i in arr) {
      			let index = lat.indexOf(arr[i]);
      			newArr.push(cyr[index]);
      		}
      		return newArr.join();
      }
  </script>
  <script src="https://flat.show/static/js/init.js"></script>
  <script>
      var flatShowLang = "<?=$mes['kv-mes9'];?>",
          complex = 'rybalsky';

    var fsl = new FSLoader(
    [
      "https://flat.show/static/css/app.css",
      "https://api.mapbox.com/mapbox-gl-js/v0.42.2/mapbox-gl.css"
    ],
    [
      "https://flat.show/static/messages/" + flatShowLang + ".js",
      "https://flat.show/static/module_config/" + complex + ".js",
      "https://flat.show/static/js/wNumb.js",
      "https://flat.show/static/js/manifest.js",
      "https://flat.show/static/js/vendor.js",
      "https://flat.show/static/js/app.js",
      "https://commerce.flat.show/src/js/inflate.min.js",
      "https://commerce.flat.show/src/js/FBXLoader.js"
  ], null);
  </script>
  <script src="https://api.mapbox.com/mapbox-gl-js/v0.42.2/mapbox-gl.js"></script>
  <script src="https://commerce.flat.show/src/js/threebox.js"></script>
</div>
<!-- КІНЕЦЬ МОДУЛЯ -->

    <div class="new_houses">
        <?php include_once('include/call_my.php'); ?>
        <?php /*Меню*/ include_once('include/top-menu.php'); ?>
   	</div>

      <!-- </section> -->
      <!-- <section class="function_second"> -->
        <div class="header proj1 main-content--2">
 <?php if ($_SERVER["REQUEST_URI"] == '/kvartira/' || $_SERVER["REQUEST_URI"] == '/ru/kvartira/' || $_SERVER["REQUEST_URI"] == '/en/kvartira/' ) { ?>
          <div class="wrap_header clearfix" style="position:relative;">


            <!-- </div> -->
              <div class="filter-appart">
                <a class="filter__link" href="/<?=$_POST['lang']?>filter/"><img <?AltImgAdd($mes['fil-mes-h1'])?> src="/img/filter.png" alt="filter"><div style="color:#fff"><?=$mes['p7-mes']?></div></a>
                <ul class="filter__list">
                  <li><a href="/<?=$_POST['lang']?>kvartira/odnokomnatnaya/"><?=$mes['kv-mes-flat-1']?></a></li>
                  <li><a href="/<?=$_POST['lang']?>kvartira/dvuhkomnatnaya/"><?=$mes['kv-mes-flat-2']?></a></li>
                  <li><a href="/<?=$_POST['lang']?>kvartira/trehkomnatnaya/"><?=$mes['kv-mes-flat-3']?></a></li>
                  <li><a href="/<?=$_POST['lang']?>kvartira/chetirehkomnatnaya/"><?=$mes['kv-mes-flat-4']?></a></li>
				  
                </ul>
              </div>

              <div class="content-layer">

                <div class="modal_window_wrap">
                  <? if(COMERC):?>
                  <h1><?=$mes['cp-text14']?></h1>
                  <? else: ?>
                  <h1><?=$mes['i-mes12']?></h1>
                  <? endif; ?>
                    <p><?=$mes['i-mes13']?></p>
                      <a id="modal-call" href="#"><?=$mes['i-to-read']?> &rarr;</a>
                      <!-- <a id="modal-close1" href="#"><?=$mes['i-roll']?> &uarr;</a> -->
                      <div class="wrap_inner">
                       <?=$mes['i-mes14']?>
                      </div>
                      <a id="modal-close" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="30" height="30"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"/></svg>
                      </a>
                    </div>

                  </div>
              </div> <? } ?>
      		  <!-- <?footerAdd();?> -->
            </div>
          <!-- </section> -->


     <script type="text/javascript">
         $('#modal-call').click(function(e){
           e.preventDefault();
           $('.content-layer').css({'width':'100%', "margin": "0 auto", "position": "absolute"}),
           $('.modal_window_wrap').addClass('modal_window_wrap__opened'),
           $('.wrap_inner').css({'height':'auto', 'transition':'0.5s'}),
           $(this).hide(),
           $('#modal-close').show()
         });
         $('#modal-close').click(function(e) {
           e.preventDefault();
           if (screen.width > 768){
             $('.content-layer').css({'width':'40%', "margin": "30vh 0 0 0", "position": "static"})
           }
           else {
             $('.content-layer').css({'width':'100%', "margin": "10vh 0 0 0", "position": "static"})
           }

           $('.wrap_inner').css({'height':'0px','transition':'0.5s'}),
           $('.modal_window_wrap').removeClass('modal_window_wrap__opened'),
           $('#modal-close').hide(),
           $('#modal-call').show()
         });
     </script>

     <script>
      var header = document.querySelector('.header.proj1');

      function hideShow(url) {
        if(/\/kvartira\/$/.test(url)) {
          if(header.style.display === 'block') return;
          header.style.display = 'block';
        } else {
          if(header.style.display === 'none') return;
          header.style.display = 'none';
        }
      }

      setInterval(function() {
        hideShow(window.location.href);
      }, 1000);
     </script>

<style media="screen">
@media (min-width: 769px){
	#fs-controls {
		height: auto;
	}

}
</style>
<style>
input,textarea {
	color: black;
}
#new_app {
	min-height: 100vh;
}
</style>
	<!--END-->
<?	//echo  $content;?>
 <script src="<?=$site?>js/ajax.js"></script>
