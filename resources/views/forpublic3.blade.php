<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>الخبراء</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="img4/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
    <!-- Libraries Stylesheet -->
    <link href="lib4/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib4/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css4/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link href="{{ asset('/css3/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://raubaca.neocities.org/codepen/base.css'>

    <!-- Template Stylesheet -->
    <link href="css4/style.css" rel="stylesheet">


    <style>
@import 'https://fonts.googleapis.com/css?family=Roboto:300,400,500';
.botao-wpp {
  text-decoration: none;
  color: #eee;
  display: inline-block;
  background-color: #25d366;
  font-weight: bold;
  padding: 1rem 2rem;
  border-radius: 3px;
}

.botao-wpp:hover {
  background-color: #21bd5c;
}

.botao-wpp:focus {
  background-color: #1a9247;
}



.navbar-nav {
    width: 100%;

}
.color3 {

    background-color: green ;
}
.minr {

width: 100% ;

}

.color1 {

font-size : 22px;


font-size : 22px;
margin-left : 10%;
margin-top : 2%;

color: {{$colors->colorp2}};
}



nav {
height: 90px;

}
#now {
  height: 90px;
background-color: {{$colors->colorp1}};
}


#mainnav {

background-color: {{$colors->colorp3}};
}
.quecolor {
    color: {{$colors->colorp4}};

}
#oftext {

    color: {{$colors->colorp5}};
}
#oftext2 {

color: {{$colors->colorp6}};
}

.ofinfo1 {

    color: {{$colors->colorp8}};
}
.ofinfo2 {

color: {{$colors->colorp9}};
}
.ofinfo3 {

color: {{$colors->colorp10}};
}
.ofinfo4 {

color: {{$colors->colorp11}};
}
#ofbacjground {
  width : 100% ;
    height : 700px ;
    overflow: scroll;
    background-color: {{$colors->colorp12}};
}
#serbackg {
    background-color: {{$colors->colorp13}};

}
#serv1 {
    color: {{$colors->colorp14}};
    
}
#serv2 {
    color: {{$colors->colorp15}};  
}
.infoser1 {
    color: {{$colors->colorp16}}; 

}
.infoser1 {

    color: {{$colors->colorp17}}; 
}
.infoser1 {
    color: {{$colors->colorp18}}; 
    
}
.sersinbac {
    background-color: {{$colors->colorp19}};
    
}
#opback {

    background-color: {{$colors->colorp20}};
}
#opback2 {
    color: {{$colors->colorp21}}; 

}
#opback3 {
    color: {{$colors->colorp22}}; 

}
.infoop1 {
    color: {{$colors->colorp23}}; 


}
.infoop2 {
    color: {{$colors->colorp24}}; 

    
}
.infoop3 {

    color: {{$colors->colorp25}}; 
    
}
.infoop4 {

    color: {{$colors->colorp26}}; 
    
}
.opbackgr {

    background-color: {{$colors->colorp27}};
}
#endfooter{
    background-color: {{$colors->colorp28}};


}
.endfootercolor{

    color: {{$colors->colorp29}};

}
.endfootercolor1 {

    color: {{$colors->colorp30}};
}
.endfootercolor2 {

    color: {{$colors->colorp31}};

}
#arrowcolor  {

    background-color: {{$colors->colorp32}};
}
#lastend {
    background-color: {{$colors->colorp33}};

}
body {
    background-color:  {{$colors->colorp34}} ;
   
}

.col_half { width: 49%; }
.col_third { width: 32%; }
.col_fourth { width: 23.5%; }
.col_fifth { width: 18.4%; }
.col_sixth { width: 15%; }
.col_three_fourth { width: 74.5%;}
.col_twothird{ width: 66%;}
.col_half,
.col_third,
.col_twothird,
.col_fourth,
.col_three_fourth,
.col_fifth{
	position: relative;
	display:inline;
	display: inline-block;
	float: left;
	margin-right: 2%;
	margin-bottom: 20px;
}
.end { margin-right: 0 !important; }

/*-=-=-=-=-=-=-=-=-=-=- */
/* Flip Panel */
/*-=-=-=-=-=-=-=-=-=-=- */

.wrapper{ width: 980px; margin: 0 auto;  background-color: yellow; hoverflow: hidden;}

.panel {
	margin: 0 auto;
	height: 130px;  
	position: relative;
	-webkit-perspective: 600px;
	-moz-perspective: 600px;
}

.panel .front,
.panel .back {
	text-align: center;
}
	
.panel .front {
	height: inherit;
	position: absolute;
	top: 0;

	text-align: center;

	
}

.panel .back {
	height: inherit;
	position: absolute;
	top: 0;
	
	
	
}
.panel.flip .front {

	
}
.panel.flip .back {
	

}

.box2{
	background-color: #ff7e70;
	width: 250px;
	height: 150px;
	margin: 0 auto;
	padding: 20px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
.col_third {

    background-color: black;
}


:root {
  --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);
  --gray: #34495e;
  --darkgray: #2c3e50;
}

select {
direction : rtl ;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 0;
  box-shadow: none;
  
  flex: 1;
  padding: 0 1em;

 
  background-image: none;
  cursor: pointer;
}

select::-ms-expand {
  display: none;
}

.select {
  position: absolute;
  right: 38%;
  display: flex;
  width: 20em;
  height: 3em;
  border-radius: .25em;
  overflow: hidden;
}

.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;

  transition: .25s all ease;
  pointer-events: none;
}

.select:hover::after {
  color: #f39c12;
}










.hidden-but-relevant, .pricing__title {
  position: absolute;
  top: auto;
  left: -99999px;
  width: 1px;
  height: 1px;
  overflow: hidden;
}

.currency.currency--dollar:before {
  content: "$";
}

.button,
.button:visited,
.button:active {
  display: block;
  padding: 1em;
  font-size: 0.875em;
  text-align: center;
  color: #FFF;
  background-color: black;
  border-radius: 0.3em;
}


/**/
.packages-overview {
  margin: 0 auto;
  width: 100%;
    display: inline;
  overflow: hidden;
  padding: 1em;
}

.pricing {
  float: left;
  clear: none;
  width: 300px;
  background-color: {{$colors->colorp38}};
    width: 300px;
    margin: 0 2%;
    display: inline;
    flex-direction: column;
    margin-bottom : 2% ;
    margin-left : 5% ;
  border: 1px solid #E0E0E0;
  border-radius: 0.5em;
}
.pricing ~ .pricing {
  margin-top: 1em;
}

.pricing2 {
  float: left;
  clear: none;
  width: 300px;
  background-color: {{$colors->colorp7}};
    width: 300px;
    margin: 0 2%;
    display: inline;
    flex-direction: column;
    margin-bottom : 2% ;
    margin-left : 5% ;
  border: 1px solid #E0E0E0;
  border-radius: 0.5em;
}
.pricing2 ~ .pricing2 {
  margin-top: 1em;
}


.pricing__data--package {
  padding: 0.7272727273em 1.0909090909em;
  font-size: 1.375em;
  border-bottom: 1px solid #e5e5e5;
}

.pricing__data--price {
  padding: 0.4210526316em 0.6315789474em 0;
  font-size: 2.375em;
  font-weight: 300;
}

.pricing__data--overview {
  padding: 0.7142857143em 1.7142857143em 0;
}

.pricing__data--offer {
  padding: 1.1428571429em 1.7142857143em;
  margin: 1.1428571429em 0 0;
  background-color: #F5F5F5;
}

.pricing__data--action {
  padding: 1.5em;
  border-top: 1px solid #e5e5e5;
}

.pricing__data--overview,
.pricing__data--offer {
  font-size: 0.875em;
}

.pricing__data--package,
.pricing__data--price,
.pricing__data--overview,
.pricing__data--offer,
.pricing__data--action {
  line-height: 1.4em;
}

/**/
@media screen and (min-width: 916px) {
  .packages-overview {
  width: 100%;
  
    display: inline;
    
    flex-direction: row;
  }

  .pricing {
background-color: {{$colors->colorp38}};
    width: 300px;
    margin: 0 2%;
    display: inline;
    flex-direction: column;
    margin-bottom : 2% ;
    margin-left : 5% ;
  }
  .pricing ~ .pricing {
    margin-top: 0;
  }

  .pricing__data--offer {
    flex-grow: 1;
  }
}
#packages-overviewc {

background-color : {{$colors->colorp36}};

}
#ofertext2 {
    color : {{$colors->colorp37}};

}
#myselect {

color: {{$colors->colorp45}};
}
</style>
</head>

<body>
 









 



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

            
           
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0" id="maindiv" style=" width : 100% ;"  >
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style=" width : 100% ;" id="mainnav" >
        
        


 
               
 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0" id="now" >
                    <a class="color1"  > {{$menuitems->item1}}</a>
                    <a  class="color1"  >{{$menuitems->item2}}</a>
                    <a  class="color1" >{{$menuitems->item3}} </a>
                    <a  class="color1" >{{$menuitems->item4}} </a>
                   
                   
          
                    <a href="#contact" class="color1">  {{$menuitems->item5}}   </a>
              
                   
                </div>
         
            </div>
            
        </nav>
    
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" >
            
            <div class="carousel-inner">

        
         



            @foreach ($pubimg as $pubimg2) 

           
      
            @if($pubimg2->act =='true') 
          
            <div class="carousel-item active">
                    <img class="w-100" src="{{$pubimg2->image}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1  mb-md-4 animated zoomIn quecolor"  style=" margin-top : 50%;"  >{{$pubimg2->que}}</h1>
  
                        </div>
                    </div>
                </div>

@else

            <div class="carousel-item">
                    <img class="w-100" src="{{$pubimg2->image}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            
                        <h1 class="display-1  mb-md-4 animated zoomIn quecolor"  style=" margin-top : 50%;" >{{$pubimg2->que}}</h1>

 
                        </div>
                    </div>
                </div>


                @endif
               

                @endforeach


              

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

   
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    @if(!$offer ->isEmpty())

    <div class="packages-overview" id="packages-overviewc" >
    <center>
    <h1 id="ofertext2" > عروضنا   :</h1>
</center>
</br>
@foreach ($offer as $offer2) 
    <dl class="pricing pricing--personal" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package" style="color : {{$colors->colorp39}} ;">{{$offer2->title}}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price"><span class="currency currency--dollar" style="color : {{$colors->colorp40}} ;">{{$offer2->price}}</span> <span class="hidden-but-relevant">dollars</span></dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview" style="color : {{$colors->colorp41}} ;">{{$offer2->offer}}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action"><a href="https://wa.me/+9647716718666"  style="background-color : {{$colors->colorp42}} ;" class="button"><span class="myspan" style="color : {{$colors->colorp43}} ;">   تواصل </span></a></dd>
    </dl>
    @endforeach
   
   
</div>
@endif





<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" id="offices">
        <div class=" py-5 " id="ofbacjground"  >
            <div class=" text-center position-relative pb-3 mb-5 mx-auto" style="width: 100%;">
                <h5 class="fw-bold  text-uppercase"  id="oftext" >المكاتب</h5>
                <h1 class="mb-0" id="oftext2" >تعرف على مكاتبنا في المحافظات :</h1>
                </br>
                <h2 class="mb-0" id="oftext3" style = "color :{{$colors->colorp44}} ;">  اختر المحافظة    </h1>
              
                <div class="select">
             
  <select id="myselect"  style = "  background-color: {{$colors->colorp35}} ;"  onchange="changecity()" >
  <option value = "all">  </option>
  <option value = "Basra">البصرة  </option>

<option value = "Baghdad"> بغداد</option>

<option value = "Missan"> ميسان</option>

<option value = "Thiqar"> ذي قار</option>


<option value = "wasit"> واسط</option>


<option value = "Najaf"> النجف</option>


<option value = "Karbala"> كربلاء</option>


<option value = "Babil"> بابل</option>

<option value = "Muthana"> المثنى</option>

<option value = "Qadisya"> القادسية</option>

<option value = "Diyala"> ديالى</option>
  </select>
  
</div>

</div>

          

</br>
@foreach ($pr2 as $pr21) 


@if($pr21->email !='alaa.ibrahim96k@gmail.com')         
            
            @if($pr21->city =='البصرة')  

            <dl class="pricing2 pricing--personal Basra City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>


            @elseif($pr21->city =='بغداد')  

            <dl class="pricing2 pricing--personal Baghdad City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>

            @elseif($pr21->city =='ميسان')  


            <dl class="pricing2 pricing--personal Missan City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>
            @elseif($pr21->city =='ذي قار') 


            <dl class="pricing2 pricing--personal Thiqar City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>

            @elseif($pr21->city =='واسط')  


            <dl class="pricing2 pricing--personal wasit City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>
            @elseif($pr21->city =='النجف')  


            <dl class="pricing2 pricing--personal Najaf City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>
            @elseif($pr21->city =='كربلاء')  


            <dl class="pricing2 pricing--personal Karbala City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>
            @elseif($pr21->city =='بابل')  



            <dl class="pricing2 pricing--personal Babil City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>
            @elseif($pr21->city =='المثنى') 

            <dl class="pricing2 pricing--personal Muthana City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>

            @elseif($pr21->city =='القادسية') 


            <dl class="pricing2 pricing--personal Qadisya City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>
            @elseif($pr21->city =='ديالى')  


            <dl class="pricing2 pricing--personal Diyala City" >
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package ofinfo1" >{{$pr21->name }}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price ofinfo2"><span class="currency " >{{$pr21->city }}</span> </dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview ofinfo4" >{{$pr21->address }}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action ofinfo3">
          ارقام التواصل
</br>
        {{$pr21->phone }} 
</br> 
          {{$pr21->phone1 }} 
</br>
{{$pr21->phone2 }} 
</br>
{{$pr21->phone3 }} 
</br>
        </dd>
    </dl>


            @endif 
@endif              
           

             

               
           
              
@endforeach
   
   
   </div>
   </div>

 </div>



    
 

  
         


      
    
   
      
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="services">
        <div class="container py-5" id="serbackg" >
            <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" id="serv1" >خدماتنا :</h5>
                <h1 class="mb-0" id="serv2" >تعرف على خدماتنا :</h1>
            </div>


            @foreach ($pr3 as $pr31) 
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid"  id="{{$pr31->mainid}}" alt="">
                        </div>



                        <script>

var playersRef990 = firebase.database().ref('services');


var playersRef9902 = playersRef990.child('{{$pr31->mainid}}');

var playersmRef9902 = playersRef9902.child('ex');
//alert(playersRef990);
var posthtml2 = "" ;
playersmRef9902.once("value", function (blogs9) {
   if (blogs9.exists()) {
 

	   blogs9.forEach(function (singleBlog9) {


document.getElementById("{{$pr31->mainid}}").src = singleBlog9.val() ;


     });
   
    }
  });

</script>





                        <div class="p-4 sersinbac"  >
                           
                            <h4 class="mb-3 infoser1"  >{{$pr31->opname}} </h4>
                            <p  class="infoser2"> {{$pr31->opexdes}} </p>
                            <a class="text-uppercase infoser3" href="/showser/{{$pr31->mainid}}" >التفاصيل  <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                @endforeach 
               
            </div>
        </div>
    </div>
    <!-- Team End -->


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="operations">
        <div class="container py-5" id="opback" >
            <div class="text-center  position-relative pb-3 mb-5 mx-auto" style="max-width: 600px; " >
                <h5 class="fw-bold  text-uppercase"  id="opback2" >العمليات :</h5>
                <h1 class="mb-0"  id="opback3" >تعرف على اهم العمليات لدينا :</h1>
            </div>


            @foreach ($pr as $pr33) 
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid"  id="{{$pr33->mainid}}" alt="">
                        </div>



                        <script>

var playersRef990 = firebase.database().ref('operations');


var playersRef9902 = playersRef990.child('{{$pr33->mainid}}');

var playersmRef9902 = playersRef9902.child('ex');
//alert(playersRef990);
var posthtml2 = "" ;
playersmRef9902.once("value", function (blogs9) {
   if (blogs9.exists()) {
 

	   blogs9.forEach(function (singleBlog9) {


document.getElementById("{{$pr33->mainid}}").src = singleBlog9.val() ;


     });
   
    }
  });

</script>





                        <div class="p-4 opbackgr" >
                           
                            <h4 class="mb-3 infoop1" > {{$pr33->opname}} </h4>
                            <p class="infoop2" >{{$pr33->opexdes}} </p>
                            <p class="infoop3" >{{$pr33->price}} </p>
                            <a class="text-uppercase infoop4" href="/showoppublic/{{$pr33->mainid}}" >التفاصيل  <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                @endforeach 
               
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Vendor Start -->
  
    <!-- Vendor End -->
    <center id="contact">
    <a href="https://wa.me/+9647716718666" class="botao-wpp">
  <!-- ícone -->
  <i class="fa fa-whatsapp"></i>
  استشارة مجانية عبر الواتساب  
</a>
</center>
    <!-- Footer Start -->
    <div class="container-fluid  text-light mt-5 wow fadeInUp" data-wow-delay="0.1s"  id="lastend"  style="width : 100% ;">
        <div class="container"  style="width : 100% ;">
            <div class="row gx-5 ">
                <div class="col-lg-4 col-md-6 footer-about" >
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100  p-4">
                       
                     
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                       
         
        </div>
    </div>
  



    <div class="" id="endfooter"  >
        <div class=" text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center endfootercolor"  style="height: 75px; width : 100% ;">
                        <p class="mb-0">&copy; <a  class=" border-bottom endfootercolor1"  href="#">alkubaraa Company  All Rights Reserved. </a>
						


                        &nbsp;&nbsp;&nbsp;&nbsp;


                       <a class=" border-bottom endfootercolor2"  href="https://www.instagram.com/programmer.shosha/" >  Designed by Shahad ALEdani </a> &copy; 2022</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square rounded back-to-top " id="arrowcolor" ><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib4/wow/wow.min.js"></script>
    <script src="lib4/easing/easing.min.js"></script>
    <script src="lib4/waypoints/waypoints.min.js"></script>
    <script src="lib4/counterup/counterup.min.js"></script>
    <script src="lib4/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js4/main.js"></script>
              

             
<script>
     


    
    function changecity() {




        var colors12 = document.querySelectorAll(".City");
   for (var i = 0; i < colors12.length; i++) {
     colors12[i].style.display = "none" ; 
       //colors12[i].style.visibility = "hidden";  
   }
 var myval = document.getElementById("myselect").value ;

 var colors11 = document.querySelectorAll("."+myval+"");
    for (var i = 0; i < colors11.length; i++) {
      colors11[i].style.display = "inline-flex" ; 
  
    }
   



}   

</script>
<script>




$( document ).ready(function() {
    console.log( "ready!" );
var vc = 0;
    var myvistcoun = firebase.database().ref('visitcounter');
    var myvistcoun1 = myvistcoun.child('counter');
    var myvistcoun2 = firebase.database().ref('visitcounter');
    myvistcoun1.once("value", function (blogsvi) {
   if (blogsvi.exists()) {
    vc = blogsvi.val() + 1 ;
  myvistcoun2.update({counter :vc});

   }
  });

});



</script>
          
           
              
  
</body>

</html>