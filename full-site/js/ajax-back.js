  $(window).bind("popstate", function() { 		 
		   var initialFire = document.location.href;
                $.ajax({ 
                    url:     location.pathname + "?ajax=1",
                    success: function(data) {  


                       if(location.pathname=="/kvartira/" ){
                            document.getElementById("class_beg").className = "";
						}else{
                            document.getElementById("class_beg").className = "boby-plans";
						}
						 $("#content").html(data);					
                    }
					
                });
				return false;
            });