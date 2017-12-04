<script type="text/javascript" src="{{asset('js/jquery.1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
<script src="contactform/contactform.js"></script>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

    <script>
    /** loading modal **/
            $('#loadingModal').modal("show");
            count = 0;
            slots = ["Adding information to lottery system", "Running lottery","Processing results"];
           ri = $('#ri').val(); console.log("ri = " + ri);
            
            if(ri == "yes") {
            window.setInterval(slot, 5000);
           } 
          // window.setTimeout(function(){$("#submitForm").submit();}, 5000);
          
          function slot(){
           if(count < 3){
           	console.log("slot() running: count = " + count);
           	$("#loadingResponse").html(slots[count] + "...");
               count++;
           }
           else{
           	wu = $('#wu').val();             
           	window.location = wu;
            } 
         } 
    </script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>
  
<script type="text/javascript">
	var rotatingTexts = ["enriching peoples lives", "making millionaires", "making people winners"];
	 var c = 0;
    $(document).ready(function(e) {
    	textRotInterval = window.setInterval(function(){
            if(c >= rotatingTexts.length) c=0;
            else c++;
             $('#text-rot').fadeOut();
            $('#text-rot').html(rotatingTexts[c]);
            $('#text-rot').fadeIn();
         },3000);
         return false;        
      });       
</script>


<script type="text/javascript">
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

var c = 0;
var effects = ["explode", "fold", "highlight"];
var images = ["{{asset('img/ad-2.jpg')}}","{{asset('img/ad-3.jpg')}}","{{asset('img/ad-4.jpg')}}","{{asset('img/ad-5.jpg')}}","{{asset('img/ad-6.jpg')}}"];

$(document).ready(function(e) {
	    //shuffle(effects);
        //shuffle(images);
        
    	adsInterval = window.setInterval(function(){
    	    prev = ""; next = "";
    
            if(c >= images.length){
               c=0;              
            } 
            else{
            	c++;
            }
            
            next= images[c];
            console.log("next: " + next);
             $("#ad-active").toggle("highlight");
             $("#ad-active").attr({"src":next});    
             $("#ad-active").toggle("highlight");
         },5000);
         return false;            
        });
</script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>