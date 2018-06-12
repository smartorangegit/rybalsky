<?php /*Мова*/ include_once('../include/lang.php'); ?>
<?php  /*Соединяемся с базой*/ include_once ("../include/config.php"); ?>
<?
function cropStrWord($text, $max_words=20, $append = ' …')
{
       $max_words = $max_words+1;
       $words = explode(' ', $text, $max_words);
       array_pop($words);
       $text = implode(' ', $words) . $append;
       return $text;
}

$lg='ua';

	$result = $db->prepare("SELECT date, urls,name_news,description,filename,text
	,time,meta_d,title,mark, typ
	FROM news WHERE lang='$lg'  ORDER BY date DESC LIMIT 1");
	$result->execute();
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['time'],$s['meta_d'],$s['title'],$s['mark'], $s['typ']);

	 while ($result->fetch()) { $s['img_news'] = '/admin/news/images/'.$s['filename'];
								$ts   = strtotime($s['time']);
								$s['timeNew'] = date('H:i', $ts);
								$s['mini_text']	=cropStrWord($s['text']);

				foreach($s as $key=>$k){			$rez[$key]=$k;	}

	 $ReaNews=$rez;  }
	 
	

	 $i=0;

	$marka = $ReaNews['mark'];
	$id_url=$ReaNews['urls'];
	
	$result = $db->prepare("select mark,min_i,id_n,date,fname,filename from pic_news WHERE mark='$marka'");
	$result->execute();
	$result->bind_result($s['mark'],$s['min_i'],$s['id_n'],$s['date'],$s['fname'],$s['filename']);
	 while ($result->fetch()) { $s['img']="/admin/pic/images/".$s['date']."/".$s['filename'];
								$s['img-min']="/admin/pic/images/".$s['date']."/min/".$s['filename'];

				foreach($s as $key=>$k){			$rez[$key]=$k;	}
		 $ReaNewsImgs[$i]=$rez;
	 $i++; }
	 //echo '<pre>'; print_r($ReaNewsImgs); echo '</pre>';
	 //Last News//
	 $i=0;
	 	$result2 = $db->prepare("SELECT date, urls,name_news,description,filename,text
	,time,meta_d,title
	FROM news WHERE  lang='$lg' AND  urls!='$id_url' ORDER BY date DESC LIMIT 3");
	$result2->execute();
	$result2->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['time'],$s['meta_d'],$s['title']);

	 while ($result2->fetch()) {$s['img_news'] = '/admin/news/images/'.$s['filename'];
								$ts   = strtotime($s['time']);
								$s['timeNew'] = date('H:i', $ts);
							//	echo '<pre>'; print_r($s); echo '</pre>';
				foreach($s as $key=>$k){			$rez2[$key]=$k;	}

	 $ReaNewsL[$i]=$rez2; $i++; }
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=600">
</head>
<body style="margin: 0px;">

<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" >
<tr>
<td width="100%" bgcolor="#ffffff" valign="top" align="center" style="padding:0px 0px 0px 0px;"> 

<table border="0" cellpadding="0" cellspacing="0" style="color: #606060; font: 12px arial,helvetica,sans-serif!important;" width="600" align="center">

<!---------------- HEADER ---------------->
<tr>
    <td width="600"  bgcolor="#ffffff" align="left" style="padding: 35px 0px 10px 0px; width: 600px; min-width: 600px; max-width: 600px;  border-bottom:1px solid #d5d5d5;">
        <table cellpadding="0" cellspacing="0" width="600" border="0">
        <tr>
            <td align="left"><a href="https://rybalsky.com.ua" target="_blank"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/logo.png" border="0" style="display:block;" ></a></td>
            <td align="right" valign="bottom" style="color: #111111; font: 14px/14px arial,helvetica,sans-serif!important;" ><?$date = date_create($ReaNews['date']);echo date_format($date, 'd.m.Y');?></td>
        </tr>
        </table> 
        
    </td>
</tr>
<!-- end HEADER -->
 
<!---------------- ЗАГОЛОВОК ---------------->
<tr>
    <td width="600" bgcolor="#ffffff" align="left"  style="color: #111111; font: 27px  arial,helvetica,sans-serif!important; padding: 25px 0px 20px 0px; text-transform: uppercase;"  >
       <?=$ReaNews['name_news']?>
    </td>
</tr>
<!-- end ЗАГОЛОВОК  --> 


<!---------------- КАРТИНКА ---------------->
<tr>
    <td width="600" bgcolor="#ffffff" align="center"  style="color: #000000; font: 20px  arial,helvetica,sans-serif!important; padding: 0px 0px 25px 0px;"  >
        <a href="https://rybalsky.com.ua/<?=$ReaNews['urls']?>/" target="_blank"><img src="http://rybalsky.com.ua<?=$ReaNews['img_news']?>" width="600" border="0" style="display:block;" ></a>
    </td>
</tr>
<!-- end КАРТИНКА  -->  

<!---------------- TEXT ---------------->
<tr>
    <td width="540" bgcolor="#ffffff" align="left"  style="color: #555555; font: 16px/24px arial,helvetica,sans-serif!important; padding: 0px 0px 25px 0px;"  >
<?=$s['mini_text']?>
    </td>
</tr>
<!-- end TEXT -->

<!---------------- КНОПКА ---------------->
<tr>
    <td width="600" bgcolor="#ffffff" align="left"  style="color: #666666; font: 14px/22px arial,helvetica,sans-serif!important; padding: 0px 0px 33px 0px;"  >
         <table cellpadding="0" cellspacing="0" border="0" style="border-collapse: separate!important;">
        <tr>
            <td align="center" height="40" bgcolor="#0e55d9" style="color: #ffffff; font: 15px arial,helvetica,sans-serif!important; padding: 0px 33px 0px 33px; border-collapse: separate!important;" >
                 <a href="https://rybalsky.com.ua/<?=$ReaNews['urls']?>/" target="_blank" style="color: #ffffff; text-decoration: none;">Читати далі</a>
            </td>
        </tr>
        </table>
    </td>
</tr>
<!-- end КНОПКА --> 

 
<!---------------- ЗАГОЛОВОК ---------------->
<tr>
    <td width="600" bgcolor="#ffffff" align="left" style="color: #111111; font: 27px  arial,helvetica,sans-serif!important; padding: 30px 0px 27px 0px; border-top:1px solid #d5d5d5; text-transform: uppercase;"  >
       ТАКОЖ ЧИТАЙТЕ У НАС НА САЙТI
    </td>
</tr>
<!-- end ЗАГОЛОВОК  --> 


<!---------------- ТРИ НОВОСТИ  ---------------->
<tr>
    <td width="600" bgcolor="#ffffff" align="center"  style="color: #666666; font: 14px/20px arial,helvetica,sans-serif; padding: 0px 0px 35px 0px;"  >
        <table cellpadding="0" cellspacing="0"  border="0" align="center" style="border-collapse: separate!important;">
        <tr>
            <!-- 1 --><?	foreach($ReaNewsL as $key=>$s){?>
            <td align="center" width="192" bgcolor="#ffffff" valign="top" style="padding: 0px 0px 0px 0px;">
                <table cellpadding="0" cellspacing="0" width="192" border="0">
                <tr>
                    <td align="center" style="color: #a3a4a3; font: 13px/20px arial,helvetica,sans-serif!important; padding-bottom: 15px;" >
                        <a href="https://rybalsky.com.ua/<?=$s['urls']?>/" target="_blank"><img src="https://rybalsky.com.ua<?=$s['img_news']?>" border="0" style="display:block;width:192px;height:175;" ></a>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="color: #111111; font: 15px/22px arial,helvetica,sans-serif!important; padding: 0px 0px 13px 0px; text-transform: uppercase;" >
                       <? $string = strip_tags($s['name_news']);
						  $string = substr($string, 0, 60);
                          $string = rtrim($string, "!,.-");
                          $string = substr($string, 0, strrpos($string, ' '));/* Обрезаем строку */?>
					   <?=$string."… ";?>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="color: #0e55d9; font: 14px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px;" >
                         <a href="https://rybalsky.com.ua/<?=$s['urls']?>/" target="_blank" style="color: #0e55d9; text-decoration: none;">Детальніше&nbsp;›</a>
                    </td>
                </tr>
                </table> 
            </td>
            <!-- end 1 -->
            <td width="12" bgcolor="#ffffff" style="color: #ffffff; font: 14px/18px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px;" >.</td><?}?>
     <?/*        <!-- 2 -->
            <td align="center" width="192" bgcolor="#ffffff" valign="top" style="padding: 0px 0px 0px 0px;">
                <table cellpadding="0" cellspacing="0" width="192" border="0">
                <tr>
                    <td align="center" style="color: #a3a4a3; font: 13px/20px arial,helvetica,sans-serif!important; padding-bottom: 15px;" >
                        <a href="https://rybalsky.com.ua/everything_to_know/" target="_blank"><img src="rybalsky_email/image_2.jpg" border="0" style="display:block;" ></a>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="color: #111111; font: 15px/22px arial,helvetica,sans-serif!important; padding: 0px 0px 13px 0px; text-transform: uppercase;" >
                       ГОЛОВНЕ, ЩО ТРЕБА<br>ЗНАТИ ПРО RYBALSKY
                    </td>
                </tr>
                <tr>
                    <td align="left" style="color: #0e55d9; font: 14px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px;" >
                         <a href="https://rybalsky.com.ua/everything_to_know/" target="_blank" style="color: #0e55d9; text-decoration: none;">Детальніше&nbsp;›</a>
                    </td>
                </tr>
                </table> 
            </td>
            <!-- end 2 -->
            <td width="12" bgcolor="#ffffff" style="color: #ffffff; font: 14px/18px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px;" >.</td>
            <!-- 3 -->
            <td align="center" width="192" bgcolor="#ffffff" valign="top" style="padding: 0px 0px 0px 0px;">
                <table cellpadding="0" cellspacing="0" width="192" border="0">
                <tr>
                    <td align="center" style="color: #a3a4a3; font: 13px/20px arial,helvetica,sans-serif!important; padding-bottom: 15px;" >
                        <a href="https://rybalsky.com.ua/parkomsce_v_podarunok/" target="_blank"><img src="rybalsky_email/image_3.jpg" border="0" style="display:block;" ></a>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="color: #111111; font: 15px/22px arial,helvetica,sans-serif!important; padding: 0px 0px 13px 0px; text-transform: uppercase;" >
                       ПАРКОМІСЦЕ<br>В ПОДАРУНОК
                    </td>
                </tr>
                <tr>
                    <td align="left" style="color: #0e55d9; font: 14px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px;" >
                         <a href="https://rybalsky.com.ua/parkomsce_v_podarunok/" target="_blank" style="color: #0e55d9; text-decoration: none;">Детальніше&nbsp;›</a>
                    </td>
                </tr>
                </table> 
            </td>
            <!-- end 3 --> */?>
        </tr>      
        </table> 
    </td>
</tr>
<!-- end ТРИ НОВОСТИ -->  
 
<!---------------- КНОПКА ПОДЕЛИТЬСЯ ---------------->
<tr>
    <td width="600" bgcolor="#0e55d9" align="center"  style="color: #666666; font: 14px/22px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px;"  >
         <table cellpadding="0" cellspacing="0" border="0" style="border-collapse: separate!important;" bgcolor="#0e55d9">
        <tr>
            <td align="left"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/ico.png" width="36" height="51" border="0" style="display:block;" ></td>
            <td align="center" height="51" style="color: #ffffff; font: 15px arial,helvetica,sans-serif!important; padding: 0px 0px 0px 0px; border-collapse: separate!important;" >
                 <a href="http://www.facebook.com/share.php?u=https://rybalsky.com.ua" target="_blank" style="color: #ffffff; text-decoration: none;">Поділитися в соц мережах</a>
            </td>
        </tr>
        </table>
    </td>
</tr>
<tr><td height="25" bgcolor="#ffffff"></td></tr>
<!-- end  КНОПКА ПОДЕЛИТЬСЯ  --> 

<!---------------- FOOTER ---------------->
<tr>
    <td width="600" bgcolor="#ffffff" align="center"  style="color: #666666; font: 14px/22px arial,helvetica,sans-serif!important; padding: 35px 0px 30px 0px; border-top:1px solid #d7d7d7;"  >
         <table cellpadding="0" cellspacing="0" width="600" border="0">
         <tr>
            <td align="left">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="left" width="20"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/ico_phone.png" width="11" height="11" border="0" style="display:block;" ></td>
                    <td align="left" style="color: #333333; font: 15px arial,helvetica,sans-serif!important;" >
                        <a style="color: #333333; text-decoration: none;" target="_blank" href="tel:+380442907399"><span style="color: #333333;">(044)&nbsp;290&nbsp;73&nbsp;99</span></a> 
                    </td>
                    <td width="44" align="center"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/vline.png" width="1" height="19" border="0" style="display:block;" ></td>
                    <td align="left" width="25"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/ico_mail.png" width="13" height="10" border="0" style="display:block;" ></td>
                    <td align="left" style="color: #333333; font: 15px arial,helvetica,sans-serif!important;" >
                        <a style="color: #333333; text-decoration: none;" target="_blank" href="mailto:marketing@saga-development.com.ua"><span style="color: #333333;">marketing@saga-development.com.ua</span></a> 
                    </td>
                </tr>
                </table> 
            </td>
            <td align="right">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="left" width="46"><a href="https://www.facebook.com/RYBALSKY.UKRAINE/?ref=bookmarks" target="_blank"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/soc_1.png" border="0" style="display:block;" ></a> </td>
                    <td align="left" width="35"><a href="https://www.youtube.com/channel/UCyhlsag-oKGAuIT035iBrEw/videos" target="_blank"><img src="http://rybalsky.com.ua/shablon_email/rybalsky_email/soc_2.png" border="0" style="display:block;" ></a> </td>                 
                </tr>
                </table> 
            </td>
         </tr>
         </table> 
    </td>
</tr>
<tr>
    <td width="600"  bgcolor="#ffffff" align="left" style="color: #888888; font: 11px/18px  arial,helvetica,sans-serif!important; padding: 0px 0px 35px 0px;   "  >
       Ви отримали цей лист, тому що підписалися на розсилку на RYBALSKY<br>
       Якщо Ви більше не хочете отримувати наші листи, перейдіть за <a href="{{UnsubscribeUrl}}" target="_blank" style="color: #888888; text-decoration: underline;">цим</a> посиланням.<br><br>
       © 2016 RYBALSKY Простір для життя. Усі права захищено.<br><br> 
       <a style="color: #0e55d9; text-decoration: none;" target="_blank" href="https://rybalsky.com.ua"><span style="color: #0e55d9;">Rybalsky.com.ua</span></a>
    </td>
</tr>
<!-- end FOOTER --> 


</table>
</td>
</tr>
</table>
</body>
</html>
