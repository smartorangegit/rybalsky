function t121_setHeight(recid){var div=$("#youtubeiframe"+recid);var height=div.width()*0.5625;div.height(height);div.parent().height(height)}
function t071_unifyHeights(recid){$('#rec'+recid+' .t071 .t-container').each(function(){var highestBox=0;$('.t071__wrapper',this).each(function(){if($(this).height()>highestBox)highestBox=$(this).height()});if($(window).width()>=960){$('.t071__wrapper',this).css('height',highestBox)}else{$('.t071__wrapper',this).css('height',"auto")}})}
function t131_unifyHeights(){$('.t131 .t-container').each(function(){var highestBox=0;$('.t131__title',this).each(function(){if($(this).height()>highestBox)highestBox=$(this).height()});if($(window).width()>=960){$('.t131__title',this).css('height',highestBox)}else{$('.t131__title',this).css('height',"auto")}
var highestBox=0;$('.t131__descr',this).each(function(){if($(this).height()>highestBox)highestBox=$(this).height()});if($(window).width()>=960){$('.t131__descr',this).css('height',highestBox)}else{$('.t131__descr',this).css('height',"auto")}})}
if(!window.yashare2scriptLoaded){var scriptService=document.createElement('script');scriptService.src="https://yastatic.net/share2/share.js";scriptService.type="text/javascript";scriptService.charset="UTF-8";document.documentElement.appendChild(scriptService);window.yashare2scriptLoaded=!0}
function t219_showcomments(recid){$("#rec"+recid+" .t-btn").css("display","none");$("#rec"+recid+" .t219__blocktitle").css("display","block");var disqus_shortname=$("#rec"+recid+" .t219__disqusthread").attr('data-disqus-shortname');console.log(disqus_shortname);if(disqus_shortname!==""){var disqus_identifier=disqus_shortname}else{var disqus_identifier="t_page_"+$("#rec"+recid+" .t219__disqusthread").attr("data-page-id")}
var dsq=document.createElement('script');dsq.type='text/javascript';dsq.async=!0;dsq.src='//'+disqus_shortname+'.disqus.com/embed.js';(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(dsq)}
function t232_expandtext(recid){$("#rec"+recid).find(".t232__text").toggle()}
function t260_init(){$(".t260").each(function(){var el=$(this);if(el.attr('data-block-init')=='yes'){}else{el.attr('data-block-init','yes');var toggler=el.find(".t260__header");var content=el.find(".t260__content");toggler.click(function(){$(this).toggleClass("t260__opened");if($(this).hasClass("t260__opened")==!0){content.slideDown()}else{content.slideUp()}})}})}
function t262_appendGoogleMap(recid,key){var grecid=recid;if(typeof google==='object'&&typeof google.maps==='object'){t262_handleGoogleApiReady(grecid)}else{if(window.googleapiiscalled!==!0){var runfunc='window.t262_handleGoogleApiReady_'+grecid+' = function () { t262_handleGoogleApiReady("'+grecid+'") }';eval(runfunc);var script=document.createElement("script");script.type="text/javascript";script.src="//maps.google.com/maps/api/js?key="+jQuery.trim(key)+"&callback=t262_handleGoogleApiReady_"+grecid;document.body.appendChild(script);window.googleapiiscalled=!0}else{setTimeout(function(){t262_appendGoogleMap(grecid,key)},200)}}}
function t262_setMapHeight(recid){var el=$('#rec'+recid);var map=el.find('.t262__map');var textwrapper=el.find('.t262__col_text').height();map.css('height',textwrapper)}
function t262_handleGoogleApiReady(recid){$('#rec'+recid).find('.t262__map').each(function(index,Element){var el=$(Element);var arMarkers=window['arMapMarkers'+recid];window.isDragMap=$isMobile?!1:!0;var myLatLng=arMarkers.length>0?new google.maps.LatLng(parseFloat(arMarkers[0].lat),parseFloat(arMarkers[0].lng)):!1;var myOptions={zoom:parseInt(el.attr('data-map-zoom')),center:myLatLng,scrollwheel:!1,draggable:window.isDragMap,zoomControl:!0};var map=new google.maps.Map(Element,myOptions);var i,mrk,marker,markers=[],infowindow;var bounds=new google.maps.LatLngBounds();for(i in arMarkers){mrk=arMarkers[i];myLatLng=new google.maps.LatLng(parseFloat(mrk.lat),parseFloat(mrk.lng));marker=new google.maps.Marker({position:myLatLng,map:map,title:mrk.title});bounds.extend(myLatLng);if(mrk.descr>''){attachInfoMessage(marker,mrk.descr)}else{attachInfoMessage(marker,mrk.title)}
markers[markers.length]=marker;infowindow='';marker=''}
function attachInfoMessage(marker,descr){var infowindow=new google.maps.InfoWindow({content:$("<textarea/>").html(descr).text()});marker.addListener('click',function(){infowindow.open(marker.get('map'),marker)})}
if(arMarkers.length>1){map.fitBounds(bounds);if(map.getZoom()>parseInt(el.attr('data-map-zoom'))){map.setZoom(parseInt(el.attr('data-map-zoom')))}}
google.maps.event.addDomListener(window,"resize",function(){var center=map.getCenter();google.maps.event.trigger(map,"resize");map.setCenter(center)});if($isMobile){google.maps.event.addDomListener(window,"dblclick",function(){if(window.isDragMap){window.isDragMap=!1}else{window.isDragMap=!0}
map.setOptions({draggable:window.isDragMap})})}})}
function t262_appendYandexMap(recid,key){var yarecid=recid;if(typeof ymaps==='object'&&typeof ymaps.Map==='function'){t262_handleYandexApiReady(recid)}else{if(window.yandexmapsapiiscalled!==!0){var runfunc='window.t262_handleYandexApiReady_'+yarecid+' = function () { return t262_handleYandexApiReady("'+yarecid+'") }';eval(runfunc);var script=document.createElement("script");script.type="text/javascript";script.src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&coordorder=latlong&onload=t262_handleYandexApiReady_"+yarecid;if(key>''){script.src=script.src+'&apikey='+key}
document.body.appendChild(script);window.yandexmapsapiiscalled=!0}else{setTimeout(function(){t262_appendYandexMap(yarecid,key)},200)}}}
function t262_handleYandexApiReady(recid){$('#rec'+recid).find('.t262__map').each(function(index,Element){var el=$(Element);var arMarkers=window['arMapMarkers'+recid];window.isDragMap=$isMobile?!1:!0;if(el.attr('data-map-style')!=''){var mapstyle=eval(el.attr('data-map-style'))}else{var mapstyle='[]'}
var myLatlng=arMarkers.length>0?[parseFloat(arMarkers[0].lat),parseFloat(arMarkers[0].lng)]:!1;var myStates={zoom:parseInt(el.attr('data-map-zoom')),center:myLatlng,scrollZoom:!1,controls:['typeSelector','zoomControl'],drag:window.isDragMap};var map=new ymaps.Map(Element,myStates),i,mrk,marker;var myGroup=new ymaps.GeoObjectCollection({});map.behaviors.disable('scrollZoom');for(i in arMarkers){mrk=arMarkers[i];myLatlng=[parseFloat(mrk.lat),parseFloat(mrk.lng)];myGroup.add(new ymaps.Placemark(myLatlng,{hintContent:mrk.title,balloonContent:mrk.descr>''?$("<textarea/>").html(mrk.descr).text():mrk.title}))}
map.geoObjects.add(myGroup);if(arMarkers.length>1){map.setBounds(myGroup.getBounds(),{checkZoomRange:!0})}
$(window).resize(function(){map.container.fitToViewport()});if($isMobile){$(window).dblclick(function(){if(window.isDragMap){window.isDragMap=!1}else{window.isDragMap=!0}
if(window.isDragMap){map.behaviors.enable('drag')}else{map.behaviors.disable('drag')}})}})}
function t300_init(){$(".t300").each(function(){var $hook=$(this).attr('data-tooltip-hook'),$recid=$(this).attr('data-tooltip-id');if($hook!==''){var $obj=$('a[href*="'+$hook+'"]');var $content=$(this).find('.t300__content').html();if($hook.charAt(0)=='#'){var touchDevices=!0}else{var touchDevices=!1}
var position=$(this).attr('data-tooltip-position');if(position!==''){}else{position='top'}
$obj.tooltipster({'theme':'t300__tooltipster-noir t300__tooltipster-noir_'+$recid+'','contentAsHTML':!0,'content':$content,interactive:!0,touchDevices:touchDevices,position:position})}})}
$(document).ready(function(){t300_init();setTimeout(function(){t300_init()},500)});function t341_showCaptions(recid){var el=$("#t-carousel"+recid);var caption=el.find('.item:nth-child(1) .t-carousel__caption-inside');var captioncontainer=el.find('.t-carousel__caption__container');captioncontainer.html(caption.html());caption.css('display','none');$("#t-carousel"+recid).on('slide.bs.carousel',function(evt){var el=$("#t-carousel"+recid);var caption=el.find('.item:nth-child('+($(evt.relatedTarget).index()+1)+') .t-carousel__caption-inside');var captioncontainer=el.find('.t-carousel__caption__container');captioncontainer.html(caption.html());caption.css('display','none')})}
function t341_checkSize(recid){var el=$("#rec"+recid);var containerinside=el.find(".t-carousel__arrows__container_inside");var containeroutside=el.find(".t-carousel__arrows__container_outside");var inner=el.find(".t-carousel__inner");var arrowleft=el.find(".t-carousel__arrow_left");var arrowright=el.find(".t-carousel__arrow_right");containeroutside.css({'max-width':(arrowleft.width()+arrowright.width()+inner.width()+60+'px')});containerinside.css({'max-width':(inner.width()+'px')});var sizer=el.find('.t-carousel__height');var height=sizer.height();var width=sizer.width();if(width==0){var width=$(window).width()}
var ratio=width/height;var gallerywrapper=el.find(".t-carousel__checksize");var gallerywidth=gallerywrapper.width();if(height!=$(window).height()){gallerywrapper.css({'height':((gallerywidth/ratio)+'px')})}}
function t409_unifyHeights(recid){if($(window).width()>=960){var el=$("#rec"+recid);var imgwidth=el.find(".t409__img").width();var imgwrapperwidth=el.find(".t409__imgwrapper").css("max-width");var imgwrapperwidthpx=parseInt(imgwrapperwidth,10);var margin=imgwrapperwidthpx-imgwidth;el.find(".t409__img").css("margin-left",margin)}}
function t410_init(recid){var el=$('#rec'+recid);var firstimgurl=el.find(".t410__wrapper").attr("data-juxtapose-imgurl-first");var firstimgdescr=el.find(".t410__wrapper").attr("data-juxtapose-imgdescr-first");var secondimgurl=el.find(".t410__wrapper").attr("data-juxtapose-imgurl-second");var secondimgdescr=el.find(".t410__wrapper").attr("data-juxtapose-imgdescr-second");new juxtapose.JXSlider('#t410-juxtapose__'+recid+'',[{src:firstimgurl,label:firstimgdescr},{src:secondimgurl,label:secondimgdescr}],{animate:!1,showLabels:!0,showCredits:!1,startingPosition:'50%',makeResponsive:!0,callback:function(){if(window.$isMobile){el.find('.t410__wrapper').append('<div class="t410__mobile_left"></div><div class="t410__mobile_right"></div>');var hanlerWidth=el.find('.jx-handle').width(),leftSide=el.find('.jx-image.jx-left'),rightSide=el.find('.jx-image.jx-right'),leftWidth=leftSide.width()-hanlerWidth/2,rightWidth=rightSide.width()-hanlerWidth/2,wrapper=el.find('.t410__wrapper'),mobileLeft=el.find('.t410__mobile_left'),mobileRight=el.find('.t410__mobile_right');mobileLeft.css('width',leftWidth);mobileRight.css('width',rightWidth);wrapper.on('touchend',function(){leftWidth=leftSide.width()-hanlerWidth/2;rightWidth=rightSide.width()-hanlerWidth/2;mobileLeft.css('width',leftWidth);mobileRight.css('width',rightWidth)})}}})}
function t418_checkSize(recid){var el=$("#rec"+recid);var sizer=el.find('.t418__height');var height=sizer.height();var width=sizer.width();var ratio=width/height;var gallerywrapper=el.find(".t418__checksize");var gallerywidth=gallerywrapper.width();gallerywrapper.css({'height':((gallerywidth/ratio)+'px')});var maxwidth=el.find(".t418__height").width();var windowwidth=$(window).width();var value=windowwidth-80;if(maxwidth>windowwidth){el.find(".t418__item").css("max-width",value+"px");el.find(".t418__img").css("left","20px");el.find(".t418__img").css("right","20px")}else{el.find(".t418__item").css("max-width","");el.find(".t418__img").css("left","");el.find(".t418__img").css("right","")}}
function t418_init(recid){var el=$('#rec'+recid);var pos=0;var t418_doResize;var totalSlides=el.find('.t418__item').length;var sliderWidth=el.find('.t418__item').width();$(window).resize(function(){if(t418_doResize)clearTimeout(t418_doResize);t418_doResize=setTimeout(function(){sliderWidth=el.find('.t418__slider').width();el.find('.t418__slidecontainer').width(sliderWidth*totalSlides);console.log(sliderWidth)},200)});el.find('.t418__slidecontainer').width(sliderWidth*totalSlides);el.find('.t418__next').click(function(){slideRight(recid)});el.find('.t418__previous').click(function(){slideLeft(recid)});function slideLeft(recid){var el=$('#rec'+recid);pos--;if(pos==-1){pos=totalSlides-1}
el.find('.t418__slidecontainer').css({transform:'translate(-'+(sliderWidth*pos)+'px, 0)'})
el.find('.t418__slidecontainer').css("transition-duration",".3s");if(window.lazy=='y'){t_lazyload_update()}}
function slideRight(recid){var el=$('#rec'+recid);pos++;if(pos==totalSlides){pos=0}
el.find('.t418__slidecontainer').css({transform:'translate(-'+(sliderWidth*pos)+'px, 0)'})
el.find('.t418__slidecontainer').css("transition-duration",".3s");if(window.lazy=='y'){t_lazyload_update()}}
var swipeOptions={triggerOnTouchEnd:!0,swipeStatus:swipeStatus,allowPageScroll:"vertical",threshold:75};el.find(".t418__slidecontainer").swipe(swipeOptions);el.find(".t418__slidecontainer").swipe({tap:function(event,target){slideRight(recid)}});function swipeStatus(event,phase,direction,distance){if(phase=="move"&&(direction=="left"||direction=="right")){var duration=0;if(direction=="left"){scrollImages((sliderWidth*pos)+distance,duration)}else if(direction=="right"){scrollImages((sliderWidth*pos)-distance,duration)}}else if(phase=="cancel"){scrollImages(sliderWidth*pos)}else if(phase=="end"){if(direction=="right"){slideLeft(recid)}else if(direction=="left"){slideRight(recid)}}}
function scrollImages(distance,duration){el.find(".t418__slidecontainer").css("transition-duration",(duration/1000).toFixed(1)+"s");var value=(distance<0?"":"-")+Math.abs(distance).toString();el.find(".t418__slidecontainer").css("transform","translate("+value+"px, 0)")}}
function t456_setListMagin(recid,imglogo){if($(window).width()>980){var t456__menu=$('#rec'+recid+' .t456');var t456__leftpart=t456__menu.find('.t456__leftwrapper');var t456__listpart=t456__menu.find('.t456__list');if(imglogo){t456__listpart.css("margin-right",t456__leftpart.width())}else{t456__listpart.css("margin-right",t456__leftpart.width()+30)}}}
function t456_highlight(){var url=window.location.href;var pathname=window.location.pathname;if(url.substr(url.length-1)=="/"){url=url.slice(0,-1)}
if(pathname.substr(pathname.length-1)=="/"){pathname=pathname.slice(0,-1)}
if(pathname.charAt(0)=="/"){pathname=pathname.slice(1)}
if(pathname==""){pathname="/"}
$(".t456__list_item a[href='"+url+"']").addClass("t-active");$(".t456__list_item a[href='"+url+"/']").addClass("t-active");$(".t456__list_item a[href='"+pathname+"']").addClass("t-active");$(".t456__list_item a[href='/"+pathname+"']").addClass("t-active");$(".t456__list_item a[href='"+pathname+"/']").addClass("t-active");$(".t456__list_item a[href='/"+pathname+"/']").addClass("t-active")}
function t456_checkAnchorLinks(recid){if($(window).width()>=960){var t456_navLinks=$("#rec"+recid+" .t456__list_item a:not(.tooltipstered)[href*='#']");if(t456_navLinks.length>0){t456_catchScroll(t456_navLinks)}}}
function t456_catchScroll(t456_navLinks){var t456_clickedSectionId=null,t456_sections=new Array(),t456_sectionIdTonavigationLink=[],t456_interval=100,t456_lastCall,t456_timeoutId;t456_navLinks=$(t456_navLinks.get().reverse());t456_navLinks.each(function(){var t456_cursection=t456_getSectionByHref($(this));if(typeof t456_cursection.attr("id")!="undefined"){t456_sections.push(t456_cursection)}
t456_sectionIdTonavigationLink[t456_cursection.attr("id")]=$(this)});$(window).bind('resize',t_throttle(function(){t456_updateSectionsOffsets(t456_sections)},200));$('.t456').bind('displayChanged',function(){t456_updateSectionsOffsets(t456_sections)});setInterval(function(){t456_updateSectionsOffsets(t456_sections)},5000);setTimeout(function(){t456_updateSectionsOffsets(t456_sections);t456_highlightNavLinks(t456_navLinks,t456_sections,t456_sectionIdTonavigationLink,t456_clickedSectionId)},1000);t456_navLinks.click(function(){if(!$(this).hasClass("tooltipstered")){t456_navLinks.removeClass('t-active');t456_sectionIdTonavigationLink[t456_getSectionByHref($(this)).attr("id")].addClass('t-active');t456_clickedSectionId=t456_getSectionByHref($(this)).attr("id")}});$(window).scroll(function(){var t456_now=new Date().getTime();if(t456_lastCall&&t456_now<(t456_lastCall+t456_interval)){clearTimeout(t456_timeoutId);t456_timeoutId=setTimeout(function(){t456_lastCall=t456_now;t456_clickedSectionId=t456_highlightNavLinks(t456_navLinks,t456_sections,t456_sectionIdTonavigationLink,t456_clickedSectionId)},t456_interval-(t456_now-t456_lastCall))}else{t456_lastCall=t456_now;t456_clickedSectionId=t456_highlightNavLinks(t456_navLinks,t456_sections,t456_sectionIdTonavigationLink,t456_clickedSectionId)}})}
function t456_updateSectionsOffsets(sections){$(sections).each(function(){var t456_curSection=$(this);t456_curSection.attr("data-offset-top",t456_curSection.offset().top)})}
function t456_getSectionByHref(curlink){var t456_curLinkValue=curlink.attr("href").replace(/\s+/g,'');if(curlink.is('[href*="#rec"]')){return $(".r[id='"+t456_curLinkValue.substring(1)+"']")}else{return $(".r[data-record-type='215']").has("a[name='"+t456_curLinkValue.substring(1)+"']")}}
function t456_highlightNavLinks(t456_navLinks,t456_sections,t456_sectionIdTonavigationLink,t456_clickedSectionId){var t456_scrollPosition=$(window).scrollTop(),t456_valueToReturn=t456_clickedSectionId;if(t456_sections.length!=0&&t456_clickedSectionId==null&&t456_sections[t456_sections.length-1].attr("data-offset-top")>(t456_scrollPosition+300)){t456_navLinks.removeClass('t-active');return null}
$(t456_sections).each(function(e){var t456_curSection=$(this),t456_sectionTop=t456_curSection.attr("data-offset-top"),t456_id=t456_curSection.attr('id'),t456_navLink=t456_sectionIdTonavigationLink[t456_id];if(((t456_scrollPosition+300)>=t456_sectionTop)||(t456_sections[0].attr("id")==t456_id&&t456_scrollPosition>=$(document).height()-$(window).height())){if(t456_clickedSectionId==null&&!t456_navLink.hasClass('t-active')){t456_navLinks.removeClass('t-active');t456_navLink.addClass('t-active');t456_valueToReturn=null}else{if(t456_clickedSectionId!=null&&t456_id==t456_clickedSectionId){t456_valueToReturn=null}}
return!1}});return t456_valueToReturn}
function t456_setPath(){}
function t456_setBg(recid){var window_width=$(window).width();if(window_width>980){$(".t456").each(function(){var el=$(this);if(el.attr('data-bgcolor-setbyscript')=="yes"){var bgcolor=el.attr("data-bgcolor-rgba");el.css("background-color",bgcolor)}})}else{$(".t456").each(function(){var el=$(this);var bgcolor=el.attr("data-bgcolor-hex");el.css("background-color",bgcolor);el.attr("data-bgcolor-setbyscript","yes")})}}
function t456_appearMenu(recid){var window_width=$(window).width();if(window_width>980){$(".t456").each(function(){var el=$(this);var appearoffset=el.attr("data-appearoffset");if(appearoffset!=""){if(appearoffset.indexOf('vh')>-1){appearoffset=Math.floor((window.innerHeight*(parseInt(appearoffset)/100)))}
appearoffset=parseInt(appearoffset,10);if($(window).scrollTop()>=appearoffset){if(el.css('visibility')=='hidden'){el.finish();el.css("top","-50px");el.css("visibility","visible");el.animate({"opacity":"1","top":"0px"},200,function(){})}}else{el.stop();el.css("visibility","hidden")}}})}}
function t456_changebgopacitymenu(recid){var window_width=$(window).width();if(window_width>980){$(".t456").each(function(){var el=$(this);var bgcolor=el.attr("data-bgcolor-rgba");var bgcolor_afterscroll=el.attr("data-bgcolor-rgba-afterscroll");var bgopacityone=el.attr("data-bgopacity");var bgopacitytwo=el.attr("data-bgopacity-two");var menushadow=el.attr("data-menushadow");if(menushadow=='100'){var menushadowvalue=menushadow}else{var menushadowvalue='0.'+menushadow}
if($(window).scrollTop()>20){el.css("background-color",bgcolor_afterscroll);if(bgopacitytwo=='0'||menushadow==' '){el.css("box-shadow","none")}else{el.css("box-shadow","0px 1px 3px rgba(0,0,0,"+menushadowvalue+")")}}else{el.css("background-color",bgcolor);if(bgopacityone=='0.0'||menushadow==' '){el.css("box-shadow","none")}else{el.css("box-shadow","0px 1px 3px rgba(0,0,0,"+menushadowvalue+")")}}})}}
function t456_createMobileMenu(recid){var window_width=$(window).width(),el=$("#rec"+recid),menu=el.find(".t456"),burger=el.find(".t456__mobile");burger.click(function(e){menu.fadeToggle(300);$(this).toggleClass("t456_opened")});$(window).bind('resize',t_throttle(function(){window_width=$(window).width();if(window_width>980){menu.fadeIn(0)}},200))}
function t570_init(recid){if($(window).width()>750){t570_setMapHeight(recid);$(window).load(function(){t570_setMapHeight(recid)});$(window).resize(function(){t570_setMapHeight(recid)})}}
function t570_setMapHeight(recid){var t570__el=$('#rec'+recid),t570__map=t570__el.find('.t-map');var t570__textwrapper=t570__el.find('.t570__col_text').height();t570__map.css('height',t570__textwrapper).trigger('sizechange')}
function t602_init(recid){var t602_lastCall,t602_timeoutId,t602_interval=100;$(window).scroll(function(){var t602_now=new Date().getTime();if(t602_lastCall&&t602_now<(t602_lastCall+t602_interval)){clearTimeout(t602_timeoutId);t602_timeoutId=setTimeout(function(){t602_lastCall=t602_now;t602_setProgressBarWidth(recid)},t602_interval-(t602_now-t602_lastCall))}else{t602_lastCall=t602_now;t602_setProgressBarWidth(recid)}})}
function t602_setProgressBarWidth(recid){var t602_windowScrollTop=$(window).scrollTop(),t602_docHeight=$(document).height(),t602_winHeight=$(window).height();t602_scrollPercent=(t602_windowScrollTop/(t602_docHeight-t602_winHeight))*100;$(".t602__indicator").css('width',t602_scrollPercent+'%')}
function t604_init(recid){t604_imageHeight(recid);t604_arrowWidth(recid);t604_show(recid);t604_hide(recid);$(window).bind('resize',t_throttle(function(){t604_arrowWidth(recid)},200))}
function t604_show(recid){var el=$("#rec"+recid),play=el.find('.t604__play');play.click(function(){if($(this).attr('data-slider-video-type')=='youtube'){var url=$(this).attr('data-slider-video-url');$(this).next().html("<iframe class=\"t604__iframe\" width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/"+url+"?autoplay=1\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>")}
if($(this).attr('data-slider-video-type')=='vimeo'){var url=$(this).attr('data-slider-video-url');$(this).next().html("<iframe class=\"t604__iframe\" width=\"100%\" height=\"100%\" src=\"https://player.vimeo.com/video/"+url+"?autoplay=1\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>")}
$(this).next().css('z-index','3')})}
function t604_hide(recid){var el=$("#rec"+recid),body=el.find('.t604__frame');el.on('updateSlider',function(){body.html('').css('z-index','')})}
function t604_imageHeight(recid){var el=$("#rec"+recid);var image=el.find(".t604__separator");image.each(function(){var width=$(this).attr("data-slider-image-width");var height=$(this).attr("data-slider-image-height");var ratio=height/width;var padding=ratio*100;$(this).css("padding-bottom",padding+"%")})}
function t604_arrowWidth(recid){var el=$("#rec"+recid),arrow=el.find('.t-slds__arrow_wrapper'),slideWidth=el.find('.t-slds__wrapper').width(),windowWidth=$(window).width(),arrowWidth=windowWidth-slideWidth;if(windowWidth>960){arrow.css('width',arrowWidth/2)}else{arrow.css('width','')}}
function t650_unifyHeights(recid){if($(window).width()>=960){$('#rec'+recid+' .t650 .t-container .t650__row').each(function(){var t650_highestBox=0,t650_currow=$(this);$('.t650__inner-col',this).each(function(){var t650_curCol=$(this),t650_curText=t650_curCol.find(".t650__text"),t650_curBtn=t650_curCol.find(".t650__btn-container"),t650_curColHeight=t650_curText.outerHeight()+t650_curBtn.outerHeight();if(t650_curColHeight>t650_highestBox){t650_highestBox=t650_curColHeight}});$('.t650__inner-col',this).css('height',t650_highestBox)})}else{$('.t650__inner-col').css('height','auto')}}
function t819_init(recid){var rec=$('#rec'+recid);var curMode=$('.t-records').attr('data-tilda-mode');var tab=rec.find('.t819__tab');var select=rec.find('.t819__select');var content=rec.find('.t819__content');if(curMode!='edit'&&curMode!='preview'){t819_scrollToTabs(recid)}
t819_showTabByUrl(recid,tab,content,select);t819_showTab(tab,content,recid);t819_showTabMobile(select,content,recid)}
function t819_showTab(tab,content,recid){var tabNumber;var curUrl=window.location.href;var curMode=$('.t-records').attr('data-tilda-mode');tab.on('click',function(e){tabNumber=$(this).attr('data-tab-number');tab.removeClass('t819__tab_active');content.removeClass('t819__content_active');$(this).addClass('t819__tab_active');t819_removeUrl();content.each(function(i){if($(content[i]).attr('data-tab-content-number')==tabNumber){$(content[i]).addClass('t819__content_active')}});if(curMode!='edit'&&curMode!='preview'){if(typeof history.replaceState!='undefined'){window.history.replaceState('','',window.location.href+'#!/tab/'+recid+'-'+tabNumber)}}
if(typeof $('.t-records').attr('data-tilda-mode')=='undefined'){if(window.lazy=='y'){t_lazyload_update()}}
e.preventDefault()})}
function t819_showTabMobile(select,content,recid){var tabNumberMobile;var curUrl=window.location.href;var curMode=$('.t-records').attr('data-tilda-mode');select.change(function(e){tabNumberMobile=$(this).val();content.removeClass('t819__content_active');t819_removeUrl();content.each(function(i){if($(content[i]).attr('data-tab-content-number')==tabNumberMobile){$(content[i]).addClass('t819__content_active')}});if(curMode!='edit'&&curMode!='preview'){if(typeof history.replaceState!='undefined'){window.history.replaceState('','',window.location.href+'#!/tab/'+recid+'-'+tabNumberMobile)}}
if(typeof $('.t-records').attr('data-tilda-mode')=='undefined'){if(window.lazy=='y'){t_lazyload_update()}}
e.preventDefault()})}
function t819_showTabByUrl(recid,tab,content,select){var curUrl=window.location.href;var tabIndexNumber=curUrl.indexOf(recid+'-');var tabIndex=curUrl.substring(tabIndexNumber+recid.length+1);if(tabIndexNumber!=-1){tab.each(function(i){if($(tab[i]).attr('data-tab-number')==tabIndex){$(tab[i]).addClass('t819__tab_active')}});content.each(function(i){if($(content[i]).attr('data-tab-content-number')==tabIndex){$(content[i]).addClass('t819__content_active')}});select.val(tabIndex)}else{tab.first().addClass('t819__tab_active');content.first().addClass('t819__content_active')}}
function t819_scrollToTabs(recid){var curUrl=window.location.href;var tabIndexNumber=curUrl.indexOf('#!/tab/');var tabIndexNumberStart=curUrl.indexOf('tab/');if(tabIndexNumber!=-1){var tabRec=curUrl.substring(tabIndexNumberStart+4,tabIndexNumberStart+4+recid.length)
if(+tabRec==+recid){var tabBlock=$('#rec'+tabRec).find('.t819');var targetOffset=tabBlock.offset().top;if($(window).width()>960){var target=targetOffset-200}else{var target=targetOffset-100}
$('html, body').animate({scrollTop:target},400)}}}
function t819_removeUrl(){var curUrl=window.location.href;var indexToRemove=curUrl.indexOf('#!/tab/');if(/iPhone|iPad|iPod/i.test(navigator.userAgent)&&indexToRemove<0){indexToRemove=curUrl.indexOf('%23!/tab/')}
curUrl=curUrl.substring(0,indexToRemove);if(indexToRemove!=-1){if(typeof history.replaceState!='undefined'){window.history.replaceState('','',curUrl)}}}