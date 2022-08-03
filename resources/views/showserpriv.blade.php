<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>الخبراء</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link            href="{{ asset('/css3/font-awesome.min.css') }}" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

  <link href="{{ asset('/css3/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/css3/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('/css3/flexslider.css') }}" rel="stylesheet">
  <link href="  {{ asset('/css3/templatemo-style.css') }}" rel="stylesheet">

<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
<style>
#mythis {
width :70% ;
height : 700px ;
margin-left :15% ;

}

</style>
 
  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
              <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
            
  				</div>	
	  			<div class="">
                      
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
                        <li><a href="/mlogo">تسجيل خروج </a></li>
                      
                        <li>      <?php
if (Auth::check()) { 
$usere = Auth::user();

echo  "<a href='/sat/".$usere-> mainid ."' > ";
echo  "عرض الاحصائيات " ;
echo  "</a> " ;


}
?></li>
							<li><a  class="active"><?php if (Auth::check()) { 
$userm = Auth::user();

echo $userm->name ;



} ?> </a></li>
                         
			
			
                      
						</ul>
					</nav>	
                    	
	  			</div>	
                 		
  			</div>
              
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
            
		  <ul class="slides">
		  
		    <li>
			    <div class="tm-banner-inner">

					
				</div>
             
		      <img  id="mythis"  />
		    </li>
            
		  </ul>
          
		</div>	
	</section>

	<!-- gray bg -->	
    
	<section class="container tm-home-section-1" id="more">
		<div>
			<div>
				<!-- Nav tabs -->
		
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>			
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">الوصف  : </h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
			
                <script>



const firebaseConfig = {

apiKey: "AIzaSyBHIHhERzXQmQWWtHXHbyKUy3ZU25FmUIE",

authDomain: "kubaraa-59964.firebaseapp.com",

databaseURL: "https://kubaraa-59964-default-rtdb.firebaseio.com",

projectId: "kubaraa-59964",

storageBucket: "kubaraa-59964.appspot.com",

messagingSenderId: "72693922570",

appId: "1:72693922570:web:6a9ad466303b81f16c18f3"

};


firebase.initializeApp(firebaseConfig);

</script>

               


@foreach ($pr as $pr) 


	







	<script>






var playersRef990 = firebase.database().ref('services');




var playersRef9902 = playersRef990.child('{{$pr->mainid}}');

var playersmRef9902 = playersRef9902.child('en');
//alert(playersRef990);
var posthtml2 = "" ;
playersmRef9902.once("value", function (blogs9) {
if (blogs9.exists()) {


blogs9.forEach(function (singleBlog9) {
//alert(singleBlog9.val()) ;
//posthtml2 +=  "<img src= '"+singleBlog9.val()+"' alt = 'image here' class='img-responsive' >  ";                   

document.getElementById("mythis").src = singleBlog9.val() ;


});
//  $("#{{$pr->mainid}}").html(posthtml2);
}
});

</script>


<center>
		<h3>  {{ $pr->opname  }}</h3>
	

        <h3>  {{ $pr->des  }} </h3>
</br>


</center>

@endforeach

              


                






			     
				
			   				
					</div>
			   	</div>
			</div>		
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Designed by <a href="https://www.instagram.com/programmer.shosha"> Shahad ALEdani </a> &copy; for alkubaraa Company 2022
			</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="{{ asset('js3/jquery-1.11.2.min.js') }}"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="{{ asset('js3/moment.js') }}"></script>							<!-- moment.js -->
	<script type="text/javascript" src="{{ asset('js3/bootstrap.min.js') }}"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="{{ asset('js3/bootstrap-datetimepicker.min.js') }}"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="{{ asset('js3/jquery.flexslider-min.js') }}"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="{{ asset('js3/templatemo-script.js') }}"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
			// Vimeo API nonsense

/*
			  var player = document.getElementById('player_1');
			  $f(player).addEvent('ready', ready);
			 
			  function addEvent(element, eventName, callback) {
			    if (element.addEventListener) {
			      element.addEventListener(eventName, callback, false)
			    } else {
			      element.attachEvent(eventName, callback, false);
			    }
			  }
			 
			  function ready(player_id) {
			    var froogaloop = $f(player_id);
			    froogaloop.addEvent('play', function(data) {
			      $('.flexslider').flexslider("pause");
			    });
			    froogaloop.addEvent('pause', function(data) {
			      $('.flexslider').flexslider("play");
			    });
			  }
*/

			 
			 
			  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

			  $(".flexslider")
			    .fitVids()
			    .flexslider({
			      animation: "slide",
			      useCSS: false,
			      animationLoop: false,
			      smoothHeight: true,
			      controlNav: false,
			      before: function(slider){
			        $f(player).api('pause');
			      }
			  });
*/


			  

//	For images only
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});
	</script>
 </body>
 </html>