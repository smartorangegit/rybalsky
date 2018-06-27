<?php /*Мова*/ include_once('include/lang.php'); ?>
<?php  /*Соединяемся с базой*/ include_once ("include/config.php"); ?>
<?
function cropStrWord($text, $max_words=20, $append = ' …')
{
       $max_words = $max_words+1;
       $words = explode(' ', $text, $max_words);
       array_pop($words);
       $text = implode(' ', $words) . $append;
       return $text;
}
/*$set_page=mysqli_escape_string(strip_tags($_GET['page'])); */

$set_page=strip_tags($_GET['page']);

$news_onpage=10;
$max_line_news=$end_line=4;
$start_line=1;
$news_onpage_start=0;
$news_onpage_end=$news_onpage_start+$news_onpage-1;
if($set_page){
  $news_onpage_start=($set_page-1)*$news_onpage; 	
  $news_onpage_end=$set_page*$news_onpage-1;
}else{
  $set_page=1;
}

if($_POST['lang']==''){
  $lg='ua';
}else{
  $lg=substr($_POST['lang'], 0,2);
}
	$result = $db->prepare("SELECT date, urls,name_news,description,filename,text FROM news WHERE lang='$lg' ORDER BY date DESC ");
	$result->execute();
  $result->store_result();	
  $num=$result->num_rows;
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text']);
  $i=0; 
  $it=0;
	 while ($result->fetch()) { 
     $s['img_news'] = '/admin/news/images/'.$s['filename'];
				$s['mini_text']	=cropStrWord($text=$s['text']);
				foreach($s as $key=>$k){			
          $rez[$key]=$k;	
        }
				if($i>=$news_onpage_start AND $i<=$news_onpage_end){	
          $ReaNews[$i]=$rez;
        }
      $i++;
    }
	?>
<!DOCTYPE html>
<html>
<html <?=$mes['i-mes8']?>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?if($set_page==1) echo $mes['meta_d']; ?>">
    <title><?=$mes['news-title'];?> <?if($set_page>1){echo $mes['news-mess1'].$set_page;}?></title>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
	<?	echo $pre;
		echo $nex;
		?>


    <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
    <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/newsstyle.css" />
    <script src="/js/jquery-1.12.0.min.js"></script>
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
  <body>
    <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>
      <div class="header quarty newnews">
        <div class="main_photo">
          <div class="wrap_header">
	         <?php /*Меню*/ $page="/"; include_once('include/top-menu.php'); ?>

				   <?php /*Меню Стрелки include_once('include/arrow.php'); */?>
				   <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
           <div class="webname namenews">
             <h1><?=$mes['news-mess']?></h1>
           </div>
          </div>
        </div>
      </div>

      <div class="news-content-wrapper">
        <div class="quarty newnews">
          <div class="news__quart-container">
            <?foreach($ReaNews as $key=>$s):?>
              <div class="quarter" data-date-2="<?=$s['date']?>">
                <div class="quarter__image">
                  <img src="<?=$s['img_news']?>" <?AltImgAdd($s['name_news'])?>  />
                </div>
                <div class="quarter__desc">
                  <h3 class="quarter__heading"><?=$s['name_news']?></h3>
                  <div class="quarter__text">
                    <p><?=$s['mini_text']?></p>
                  </div>
                  <div class="quarter__bottom">
                    <div class="quarter__date">
                      <?= date_format(date_create($s['date']), 'd.m.Y'); ?>
                    </div>
                    <div class="quarter__read-more-link">
                      <a href="/<?=$_POST['lang'].$s["urls"]?>/"><?= $mes['sub-mes7'];?></a>
                    </div>
                  </div>
                </div>
              </div> <!-- end quarter-->
            <?endforeach;?>
      </div> <!-- end news-content-wrapper -->
          <!-- <a 
            href="#" 
            class="load-more-news-btn" 
            data-lang="<?=$lg;?>"  
            data-loadmore="<?=$news_onpage;?>"><?=$mes['sub-mes6']?></a> -->
        </div>
      <?/*Пагинація*/
      if($news_onpage_start>$num){	
        ErrorPage404();	 
      }
      if($num>$news_onpage){	 
        $pagin=round($num/$news_onpage, 0, PHP_ROUND_HALF_UP);	 
      }
      //rel="prev" /rel="next"
      $pre=$set_page-1; if($set_page==1){
      $pre='';
      }
      $nex=$set_page+1; 
      if($set_page==$pagin){
        $nex='';
      }
      if($pre){ 
        $pre='<link rel="prev"  href="https://'.$_SERVER['SERVER_NAME'].'/'.$_POST['lang'].'news/?page='.$pre.'">';
      }
      if($nex){ 
        $nex='<link rel="next"  href="https://'.$_SERVER['SERVER_NAME'].'/'.$_POST['lang'].'news/?page='.$nex.'">';
      }
      
			if($pagin) {?>
          <div class="quarter_pag">
            <div class="news_nav">
      <?	$pre=$set_page-1; 
        if($set_page==1){$pre=$pagin;}
        $nex=$set_page+1; 
        if($set_page==$pagin){$nex='1';}
				$pre_no=$pre;
				$nex_no=$nex;
				if($pre!=1){$pre='?page='.$pre;}else{$pre='';}
				if($nex!=1){$nex='?page='.$nex;}else{$nex='';}
			?>
      <?if ($pre_no!=$pagin){?><a class="quart_last-page" href="/<?=$_POST['lang'].'news/'.$pre;?>"><?=$mes['last-page']?></a><?}?>

      <?if ($nex_no!=1){?><a class="quart_next-page" href="/<?=$_POST['lang'].'news/'.$nex;?>"><?=$mes['next-page']?></a><?}?>
				
			<?if ($set_page>2)	{	$start_line=$set_page-2;	}		
				if ($set_page>2 AND $set_page+1==$pagin)	{	$start_line=$set_page-3;	}	
				if ($set_page==$pagin)	{	$start_line=$set_page-$max_line_news;	}?>
        <div class="news_nav_page">
          <ul>
          <?$n=0; for($i=$start_line; $i<$pagin+1; $i++){ $n++;?>
				  <?$c=''; if($set_page==$i){$c='action';}
				  if($n>$max_line_news){ 
            if($set_page==$pagin){$c='action';}  
            if($start_line+$max_line_news<$pagin){echo '<li ><span class="pag">&hellip;</span></li>';}
              echo'<li><a class="'.$c.'" href="/'.$_POST['lang'].'news/?page='.$pagin.'">'.$pagin.'</a></li>'; 
            break;
				  }
				  if($i==1){$get_pg='';}else{$get_pg="?page=$i";}
				?>
            <li><a class='<?=$c?>' href='/<?=$_POST['lang'].'news/'.$get_pg;?>'><?=$i?></a></li>
        <?}?>
          </ul>
        </div>
      </div>
      <div class="more_news_link">
        <p class="more_news_link_heading"><?=$mes['q-mes22']?></p>
        <div class="more_news_link_links">
          <a class="more_news_link_item" href="<?=$l.'kvartira-podol/'?>"><?=$mes['mes-name-8']?></a>
          <a class="more_news_link_item" href="<?=$l.'vidovaya/'?>"><?=$mes['mes-name-7']?></a>
          <a class="more_news_link_item" href="<?=$l.'parking/'?>"><?=$mes['mes-name-6']?></a>
          <a class="more_news_link_item" href="<?=$l.'novostroyka-center/'?>"><?=$mes['mes-name-5']?></a>
          <a class="more_news_link_item" href="<?=$l.'novostroyka-podol/'?>"><?=$mes['mes-name-3']?></a>
          <a class="more_news_link_item" href="<?=$l.'naberejnaya/'?>"><?=$mes['mes-name-1']?></a>
          <a class="more_news_link_item" href="<?=$l.'top-planirovok/'?>"><?=$mes['mes-name']?></a>
        </div>
      </div>
    </div>
<?}/*---*/?>

    </div>
  </div>

      <div class="content-bottom">
          <div class="footer">
            <div class="foot-wrap">
              <div class="allright">
                <p>
                  <?=$mes['v01']?>

                </p>
              </div>
              <div class="web">
           <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
              </div>
              <span><?=$mes['v02']?></span>
			  
            </div>
          </div>
        </div>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="/js/scripts.js"></script>
			<script src="/js/owl.carousel.min.js"></script>
      <!-- Google Tag Manager -->
<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    </body>
</html>
