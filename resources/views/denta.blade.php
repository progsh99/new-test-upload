<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>الخبراء</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="/css3/font-awesome.min.css" rel="stylesheet">
  <link href="/css3/bootstrap.min.css" rel="stylesheet">
  <link href="/css3/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="/css3/flexslider.css" rel="stylesheet">
  <link href="/css3/templatemo-style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
              <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              
              <a > <?php if (Auth::check()) { 
$userm = Auth::user();

echo $userm->name ;



} ?>   </a>

                  &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
                  <a  href="/mlogo"> تسجيل خروج   </a>
  				</div>	
	  			<div class="">
                      
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
                        <li><a href="/alloffice">الاحصائيات</a></li>
                        <li><a href="/addop">اضافة عملية </a></li>
                        <li><a href="/showoffice">المكاتب</a></li>
							<li><a href="/" >الصفحة الرئيسية  </a></li>
                         
			
			
                      
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
					<h1 class="tm-banner-title">شعار <span class="tm-yellow-text">الشركة</span> هنا</h1>
					<p class="tm-banner-subtitle">اقتباس </p>
					<a href="/public3" class="tm-banner-link">الصفحة العامة </a>	
				</div>
		      <img src="img/this.jpg" alt="Image" />
		    </li>
            
		  </ul>
          
		</div>	
	</section>

	<!-- gray bg -->	
    
	<section class="container tm-home-section-1" id="more">
		<div>
			<div>
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
    
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li >
                        


                        </li>
					   
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
                            <h2 id="hetext">
اضافة مكتب :

  </h2>
								<form method="POST" action="{{url('savere')}}" class="hotel-search-form">
                                @csrf
									<div class="tm-form-inner">
                                    <div class="form-group">
							                <div >
							                    <input type='text' class="form-control" name="name" placeholder="اسم المكتب" />
							                    
							                </div>
							            </div>
                                          <div class="form-group">
							                <div >
							                    <input type='text' class="form-control"  name="phone" placeholder=" رقم الهاتف الاساسي " />
							                    
							                </div>
							            </div>
							          	
										<div class="form-group">
							                <div >
							                    <input type='text' class="form-control"  name="phone1" placeholder=" رقم الهاتف الثاني (يمكن ان يكون فارغا )" />
							                    
							                </div>
							            </div>



										<div class="form-group">
							                <div >
							                    <input type='text' class="form-control"  name="phone2" placeholder=" رقم الهاتف الثالث (يمكن ان يكون فارغا )" />
							                    
							                </div>
							            </div>



										<div class="form-group">
							                <div >
							                    <input type='text' class="form-control"  name="phone3" placeholder=" رقم الهاتف الرابع (يمكن ان يكون فارغا )" />
							                    
							                </div>
							            </div>

                                        <div class="form-group">
							                <div  >
							                    <input type='email' name="email" class="form-control" placeholder="ايميل المكتب" />
							                    
							                </div>
							            </div>

                                        <div class="form-group">
							                <div  >
							                    <input type='text' class="form-control" name="password" placeholder="كلمة السر"  />
							                    
							                </div>
							            </div>

                                        <div class="form-group margin-bottom-0">
							                <select name="city"  class="form-control">
                                            <option> اختر المدينة</option>
                 
                 <option value="بغداد">بغداد</option>
                 <option value="البصرة">البصرة</option>
                 <option value="ميسان">ميسان</option>
                 <option value="ذي قار">ذي قار</option>
                 <option value="واسط">واسط</option>
                 <option value="النجف">النجف</option>
                 <option value="كربلاء">كربلاء</option>
                 <option value="بابل">بابل</option>
                 <option value="المثنى">المثنى</option>
                 <option value="القادسية">القادسية</option>
                 <option value="ديالى">ديالى</option>

											</select> 
							            </div>
                                        <div class="form-group">
							                <div  >
							                    <input type='text' class="form-control" name="address" placeholder="عنوان المكتب" />
							                    
							                </div>
							            </div>


							          
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">اضافة </button>
						            </div>  
								</form>
							</div>
					    </div>
					 
							        						
						           
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>

  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  <center>
  <a href="/dashboard"  class="btn btn-primary stretched-link  tm-yellow-gradient-bg " style= "width : 130px ; height :60px ; font-size: 26px ;" >  لوحة التحكم</a>	
</center>
 
	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">العمليات التي تحتاج مراجعة :</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>


			<div class="row">


            @foreach ($pr2 as $pr2)
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 newt" >
					<div class="tm-home-box-2">						
						<img src="img/bg-banner.jpg" alt="image" class="img-responsive">
						<h3> {{ $pr2->officename  }}</h3>
                        <h3>  {{ $pr2->operationname  }}</h3>
                        <h3>  {{ $pr2->operationprice  }} $</h3>
						<p class="tm-date">{{ $pr2->created_at  }} </p>
						<div class="tm-home-box-2-container">
							<a href="addprice/{{$pr2->opid}}" class="tm-home-box-2-link"><span class="tm-home-box-2-description">اضافة التكاليف :</span></a>
										<a href="deleteop/{{$pr2->opid}}" class="newund">حذف  :</a>
						</div>
					</div>
				</div>
			

                @endforeach

                
            
              






			
			</div>
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
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">العمليات : </h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
</br>
</br>
</br>
			
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

               
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 newt" >
					<div class="tm-home-box-2">						
				<a href = "showopad/{{$pr->mainid}}"	>	<img src="img/bg-banner.jpg" alt="image" width="260" height="130" id="{{$pr->mainid}}" >  </a>
				<a href = "editimageop/{{$pr->mainid}}" style="margin-right : 20% ;  font-size : 20px ;	" >  تعديل الصورة الخارجية </a>
</br>
<a href = "editimageopen/{{$pr->mainid}}" style="margin-right : 20% ;  font-size : 20px ;	" >  تعديل الصورة الداخلية </a>








                    <script>






var playersRef990 = firebase.database().ref('operations');


var playersRef9902 = playersRef990.child('{{$pr->mainid}}');

var playersmRef9902 = playersRef9902.child('ex');
//alert(playersRef990);
var posthtml2 = "" ;
playersmRef9902.once("value", function (blogs9) {
   if (blogs9.exists()) {
 

	   blogs9.forEach(function (singleBlog9) {
//alert(singleBlog9.val()) ;
 //posthtml2 +=  "<img src= '"+singleBlog9.val()+"' alt = 'image here' class='img-responsive' >  ";                   

document.getElementById("{{$pr->mainid}}").src = singleBlog9.val() ;


     });
   //  $("#{{$pr->mainid}}").html(posthtml2);
    }
  });

</script>
				


                        <h3>  {{ $pr->opname  }}</h3>
						<h3>  {{ $pr->opexdes  }}</h3>
                        <h3>  {{ $pr->price  }} $</h3>
					
						<div class="tm-home-box-2-container">
							<a href="deleteoperation/{{$pr->mainid}}"class="tm-home-box-2-link" style="margin-right:28px ;"> حذف</a>
							<a href="addbeaf/{{$pr->mainid}}"class="tm-home-box-2-link"> اضافة نماذج </a>
							
						</div>
					</div>
				</div>

			

@endforeach

              
					</div>
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
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">الخدمات  : </h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
				<center>

				
				<a href="/addser"  class="btn btn-primary stretched-link  tm-yellow-gradient-bg " style= "width : 150px ; height :60px ; font-size: 26px ;" > اضافة خدمة </a>	

</center>

                @foreach ($pr3 as $pr3) 

               
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 newt" >
					<div class="tm-home-box-2">						
				<a href = "showserad/{{$pr3->mainid}}"	>	<img src="img/bg-banner.jpg" alt="image" width="260" height="130" id="{{$pr3->mainid}}" >  </a>
				<a href = "editserimage/{{$pr3->mainid}}" style="margin-right : 20% ;  font-size : 20px ;	" >  تعديل الصورة الخارجية </a>
</br>
<a href = "editserimageen/{{$pr3->mainid}}" style="margin-right : 20% ;  font-size : 20px ;	" >  تعديل الصورة الداخلية </a>








                    <script>






var playersRef990 = firebase.database().ref('services');


var playersRef9902 = playersRef990.child('{{$pr3->mainid}}');

var playersmRef9902 = playersRef9902.child('ex');
//alert(playersRef990);
var posthtml2 = "" ;
playersmRef9902.once("value", function (blogs9) {
   if (blogs9.exists()) {
 

	   blogs9.forEach(function (singleBlog9) {
//alert(singleBlog9.val()) ;
 //posthtml2 +=  "<img src= '"+singleBlog9.val()+"' alt = 'image here' class='img-responsive' >  ";                   

document.getElementById("{{$pr3->mainid}}").src = singleBlog9.val() ;


     });
   //  $("#{{$pr->mainid}}").html(posthtml2);
    }
  });

</script>
				


                        <h3>  {{ $pr3->opname  }}</h3>
						<h3>  {{ $pr3->opexdes  }}</h3>
                        
					
						<div class="tm-home-box-2-container">
							<a href="deleteser/{{$pr3->mainid}}"class="tm-home-box-2-link" style="margin-right:28px ;"> حذف</a>
						
							
						</div>
					</div>
				</div>

			

@endforeach

              
					</div>
			   	</div>
			</div>		
		</div>
	</section>
	
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
			<p class="tm-copyright-text">Designed by <a href="https://www.instagram.com/programmer.shosha/"> Shahad ALEdani </a> &copy; for alkubaraa Company 2022</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="{{secure_asset('/js3/jquery-1.11.2.min.js') }}"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="{{secure_asset('/js3/moment.js') }}"></script>							<!-- moment.js -->
	<script type="text/javascript" src="{{secure_asset('/js3/bootstrap.min.js') }}"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="{{secure_asset('/js3/bootstrap-datetimepicker.min.js') }}"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="{{secure_asset('/js3/jquery.flexslider-min.js') }}"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="{{secure_asset('/js3/templatemo-script.js') }}"></script>      		<!-- Templatemo Script -->
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