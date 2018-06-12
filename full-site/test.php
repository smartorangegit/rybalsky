<html>
<head>
    <style>
        .item {width:1300px; display: inline-block; }
        .item .itemtitle {font-weight:bold; font-size:2em;}
        .hidden {display:none;}
	.b-lazy {
       opacity:0;
       transform: scale(0.9);
       transition: all 500ms;
    }
    .b-loaded {
       opacity:1;
       transform: scale(1);
    }
	
    </style>
	
	<script src="/js/blazy.js"></script>
	<script>
  var bLazy = new Blazy({
        breakpoints: [{
	    width: 420 // Max-width
          , src: 'data-src-small'
	}]
      , success: function(element){
	    setTimeout(function(){
		// We want to remove the loader gif now.
		// First we find the parent container
		// then we remove the "loading" class which holds the loader image
		var parent = element.parentNode;
		parent.className = parent.className.replace(/\bloading\b/,'');
	    }, 200);
        }
   });
</script>
</head>
<body>
    <h1>Amalgam Comics Characters</h1>
<div id="listing">

    <!-- first few items are loaded normally -->
    <div class="item">
        <img 

	 class="b-lazy"

	 data-src="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
	 data-src-small="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
	 
            width="300px" />
        <span class="itemtitle">Dark Claw</span>
    </div>
    
    <div class="item">
        <img 

	 class="b-lazy"

	 data-src="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
	 data-src-small="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
			
            alt="Super Soldier"
            width="300px" />
        <span class="itemtitle">Super Soldier</span>
    </div>
    
    <div class="item">
        <img 
                      
			 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	 class="b-lazy"

	 data-src="http://static3.comicvine.com/uploads/scale_super/3/36899/732353-spidey.jpg"
	 data-src-small="http://static3.comicvine.com/uploads/scale_super/3/36899/732353-spidey.jpg"
	 
            width="300px" />
        <span class="itemtitle">Spider Boy</span>
    </div>
    
	
	
	
	
		
    <div class="item">
        <img 
         

	 class="b-lazy"

	 data-src="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
	 data-src-small="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
            width="300px" />
        <span class="itemtitle">Iron Lantern</span>
    </div>
    
    <div class="item">
        <img 
          src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	 class="b-lazy"

	 data-src-small="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145"
	 data-src="http://vignette1.wikia.nocookie.net/amalgam/images/7/7c/Iron_Lantern.jpg/revision/latest?cb=20110828093145" 
          
            width="300px" />
        <span class="itemtitle">Amazon</span>
    </div>
    
    <div class="item">
        <img  class="b-lazy"
   src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	data-src="http://static4.comicvine.com/uploads/scale_super/0/1867/583727-bizarnage1.jpg" 
	data-src-small="http://static4.comicvine.com/uploads/scale_super/0/1867/583727-bizarnage1.jpg"
            width="300px" />
        <span class="itemtitle">Bizarnage</span>
    </div>
    
    <div class="item">
        <img 
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	 class="b-lazy"

	 data-src-small="http://static1.comicvine.com/uploads/scale_super/0/1867/583724-amcatsai1.jpg"
            data-src="http://static1.comicvine.com/uploads/scale_super/0/1867/583724-amcatsai1.jpg" 
         
            width="300px" />
        <span class="itemtitle">Catsai</span>
    </div>
    
    <div class="item">
        <img 
        
	 class="b-lazy"
	 data-src-small="http://static4.comicvine.com/uploads/scale_super/0/1867/583743-moonwing1.jpg"
            data-src="http://static4.comicvine.com/uploads/scale_super/0/1867/583743-moonwing1.jpg" 
            alt="Moonwing"
            width="300px" />
        <span class="itemtitle">Moonwing</span>
    </div>
    
    <div class="item">
        <img 
           src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	 class="b-lazy"

	 data-src-small="http://static5.comicvine.com/uploads/scale_super/0/1867/583739-hawkeyei.jpg"
            data-src="http://static5.comicvine.com/uploads/scale_super/0/1867/583739-hawkeyei.jpg" 
            alt="Hawkeye"
            width="300px" />
        <span class="itemtitle">Hawkeye</span>
    </div>
    
    <div class="item">
        <img 
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	 class="b-lazy"

	 data-src-small="http://static3.comicvine.com/uploads/scale_super/0/1867/583733-ammrcury1.jpg"
            data-src="http://static3.comicvine.com/uploads/scale_super/0/1867/583733-ammrcury1.jpg" 
            alt="Mercury"
            width="300px" />
        <span class="itemtitle">Mercury</span>
    </div>
    
    <div class="item">
        <img 
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
	 class="b-lazy"

	 data-src-small="http://static2.comicvine.com/uploads/scale_super/0/1867/583737-drfate3.jpg"
            data-src="http://static2.comicvine.com/uploads/scale_super/0/1867/583737-drfate3.jpg" 
            alt="Dr. Strangefate"
            width="300px" />
        <span class="itemtitle">Dr. Strangefate</span>
    </div>
	
		
		
		
		
		
		
		
	

  </span>
 </div>


</body>
</html>