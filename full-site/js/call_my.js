

 /* 			$(document).ready(function () {
				
				 $("form").submit(function () {
				
					var m={'call_form':0,'call_form2':2,'form':1};
					var typ=m[$(this).attr('id')]; 
		
				///
				 var mas_p=[];
				 var mas=['name', 'phone']
				 for(var i=0; i<2; i++){
					mas_p[i]= document.getElementById(mas[i]+typ+"_").value; 
					document.getElementById(mas[i]+typ).className= 'new';
				 }
					 if(mas_p[0].length>1&& mas_p[1].length>1){

				 // ID �����
				 var formID = $(this).attr('id');
				 var formNm = $('#' + formID);

				 $.ajax({
				 type: "POST",
				 url: '/include/application.php',
				 data: formNm.serialize(),
				 success: function(data) {

							 if(data!=0){
				setTimeout(function() {window.location.reload();}, 500);
				document.location.replace('/message/');}else{
				if(typ>0){var num_cap=2;}else{var num_cap=1;}	
				document.getElementById("reCaptcha"+num_cap).className= 'mm'+typ+'2';
				setTimeout(function() {document.getElementById("reCaptcha"+num_cap).className='not';}, 3000);
				}
				//window.open("<?=$site?>message", "_blank")
				            },
				 error: function (jqXHR, text, error) {
				 // error
				 $(formNm).html(error);
				 }
				 })
				 
				 ///
				 }else{
	mas_p.forEach(function(item, k, mas_p) {
 if(item.length<2){
	document.getElementById(mas[k]+typ).className= 'mm'+k;
	}
});					
				 }

				 return false;				 
				 });
				});
				
		*/










		
				