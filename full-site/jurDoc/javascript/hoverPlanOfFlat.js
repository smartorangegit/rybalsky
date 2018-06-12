
$( document ).ready(function() {
  if($(".table-body__list").length > 0) {
  $(".table-body__list").bind('mouseover',function(){
    var elem = $(this);
    var pict = elem.find(".plan-kvartiri");
    var coords = elem.offset();
    var top = (coords.top - 210) + "px";
    pict.css({"top":top}) ;
    pict.css({"display":"block"});
  });

  $(".table-body__list").bind('mouseout',function(){
    $(this).find(".plan-kvartiri").css({"display":"none"});
  });
  }
});
