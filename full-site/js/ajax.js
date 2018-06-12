
$(document).ready(function() {
var len=document.getElementById("len").value;	
            $(".op_ajax").click(function() { 
                var url = $(this).attr("href") || $(this).attr("xlink:href");
                $.ajax({
                    url:     url + "?ajax=1",
                    success: function(data){
                    /*
						if(url=="/"+len+"kvartira/" || url=="/"+len+"plan3/" || url=="/"+len+"plan9/" ){
							document.getElementById("class_beg").className = "";
						}else{
							document.getElementById("class_beg").className = "header choice1";
						}*/
						if(location.pathname=="/kvartira/" ){
                            document.getElementById("class_beg").className = "";														
						}else{
                            document.getElementById("class_beg").className = "boby-plans";

                            switch(location.pathname.split('/').length) {
                                case 3:
                                    $('#class_beg').attr('data-content', 'plan');
                                    break;
                                case 6:
                                    $('#class_beg').attr('data-content', 'floor');
                                    break;
                                case 7:
                                    $('#class_beg').attr('data-content', 'flat');
                                    break;
                                default:
                                    break;
                            }
						}
						$("#content").html(data); 									
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }
                return false;			
            });

		
        });