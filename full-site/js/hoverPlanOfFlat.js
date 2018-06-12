$( document ).ready(function() {
  if($(".table-body__list").length > 0) {
    $(".table-body__list").bind('mouseover',function(){
      var elem = $(this);
      var elemWidth = elem.width();
      var coords = elem.offset();
      var elemLeft = coords.left;
      var pictLeft = (elemLeft + elemWidth / 2) + "px";
      var pict = elem.find(".plan-kvartiri");
      var pictHeight = pict.height();
      var topPictPosition = (coords.top - $(window).scrollTop() - pictHeight - 15) + "px";
	
	  pict.html('<img style="padding:15px;" alt="'+pict.data('alt')+'" src="'+pict.data('img')+'" >');
      pict.css({"top": topPictPosition, "left": pictLeft});
      pict.css({"display": "block"});

    });

    $(".table-body__list").bind('mouseout',function(){
      $(this).find(".plan-kvartiri").css({"display":"none"});

    });
  }

}); //end ready
