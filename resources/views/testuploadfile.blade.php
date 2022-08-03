<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
<link rel='stylesheet' href='https://bootswatch.com/4/yeti/bootstrap.min.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>

label {

  font-size : 18px ;

}

body {

font-size : 18px ;
direction: rtl;
text-align: center;

}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container mt-4" id="maindiv">
    <h1 class="display-4 text-center">
      <i class="fas fa-book-open text-primary"></i> <span class="text-primary">حجز </span>الآن</h1>
      <form id="book-form" method="post" action="{{url('saveop',$pr  )}}" enctype="multipart/form-data">
        {{csrf_field()}}


        <div class="form-group">
          <label for="title"> اسم الموظف المدخل للبيانات : </label>
          <input type="text" name="employname"   id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="author"> اسم الزبون : </label>
          <input type="text" name="patient"   id="author" class="form-control">
        </div>
        <div class="form-group">
          <label for="author">العمر</label>
          <input type="text" name="age"  id="author" class="form-control">
        </div>
        <div class="form-group">
        اختر الجنس :
          <select name="gender" class="form-control selectpicker" required >
         
            <option  value="female" selected>انثى</option>
            <option value="male">ذكر</option>
  </select>
          </div>
  
  </br>
        <div class="form-group">
          <label for="author"> رقم الهاتف </label>
          <input type="text" id="author" name="phone"  class="form-control">
        </div>
        <div class="form-group">
          <label for="author">العنوان</label>
          <input type="text" id="author"  name="address"  class="form-control">
        </div>
        
        <div class="form-group">
     
          <p> هل دفع العميل سعر الفيزا ؟</p>

          <select onchange="toggle(this)" name="visatype" class="form-control selectpicker" required >
          <option value="no" selected >لا</option> 
         <option  value="yes" >نعم</option>

</select>


  </div>                     
  </br>
        <div class="form-group" id="visaprice" style = "display : none ;" >
          <label for="author">سعر الفيزا :</label>
          <input name="visaprice" value="0" id="visaprice" class="form-control"  type="number">
         
        </div>
        <div class="form-group">
      
        
        <p> نوع الطيران :</p>

<select onchange="toggle2(this)" name="flytype" class="form-control selectpicker" required >
<option  value="en" selected >داخلي</option>
<option value="ex"  >خارجي</option> 

</select>

        </div>
        


<div class="form-group">
          <label>   سعر الطيران الداخلي : </label>
          <input name="internalflyprice" id="internalflyprice" value="0" class="form-control"  type="number">
        </div>

        <div class="form-group" id="exprice" style = "display : none ;"  >
          <label> سعر الطيران الخارجي : </label>
          <input name="externalflyprice" id="externalflyprice" value="0" class="form-control"  type="number">
        </div>



        <div class="form-group" id="addson" style = "display : none ;"  >
          <label> التكاليف الاضافية : </label>
          <input name="addson" id="addsonval" value="0" class="form-control"  type="number">
        </div>



      
    



        <button type="submit" id="mysubmit" class="btn btn-primary btn-block"style="margin-top:10px ;"> حجز الآن </button>
 

        
       
      </form>
 

  </div>
<!-- partial -->

 



<script type="text/javascript">


//alert(finalprice);




// alert('changed') ;


  //  var myParam  = window.location.href.substr(window.location.href.lastIndexOf('op=') + 3);

   //document.getElementById('operationprice').value = myParam;
 //maindiv
/*
 document.getElementById('mysubmit0').onclick = function() {
  $('#book-form').on('submit', function(event){
        event.preventDefault();
        //alert("Form Submission stopped.");
    });
  document.getElementById('mysubmit').style.display = 'block' ;
  //document.getElementById('mysubmit1').style.display = 'block' ;
  document.getElementById('mysubmit0').style.display = 'none' ;
  $("#book-form :input").prop("disabled", true);
  $("#book-form :button").prop("disabled", false);



  var commisionpr0 = document.getElementById('hidd').value ;
var commisionpr = parseFloat(commisionpr0);

var opprice0  = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
var opprice = parseFloat(opprice0);
//alert(gjh) ;


  var internalflyprice0 = document.getElementById('internalflyprice').value ;
  var internalflyprice = parseFloat(internalflyprice0);

  var ticketprice0 = document.getElementById('ticketprice').value ;
  var ticketprice = parseFloat(ticketprice0);

  var visaprice0 = document.getElementById('visaprice').value ;
  var visaprice = parseFloat(visaprice0);

  var internalflyprice0 = document.getElementById('internalflyprice').value ;
  var internalflyprice = parseFloat(internalflyprice0);

//internalflyprice
//ticketprice
//visaprice
var visatype =  document.querySelector('input[name="visatype"]:checked').value ;

var tickettype =  document.querySelector('input[name="tickettype"]:checked').value ;
  var beforefinalprice =  opprice + visaprice + ticketprice + commisionpr ;


  var backprice  = 0 ;

  if (tickettype == "yes" ) {
    var backprice  =  internalflyprice ;
           }



  
           if (visatype == "yes" ) {
           backprice  = backprice +  visaprice  ;
           }

           var finalprice =  beforefinalprice - backprice ;
           document.getElementById('fb').innerHTML = backprice ;
           document.getElementById('fp').innerHTML = finalprice   ;




 } ;


/*
 document.getElementById('mysubmit1').onclick = function() {
  $('#book-form').on('submit', function(event){
        event.preventDefault();
        //alert("Form Submission stopped.");
    });
  document.getElementById('mysubmit').style.display = 'none' ;
  document.getElementById('mysubmit1').style.display = 'none' ;
  document.getElementById('mysubmit0').style.display = 'block' ;
  $("#book-form :input").prop("disabled", false);
  $("#book-form :button").prop("disabled", false);



 } ;
 */
/*
 document.getElementById('mysubmit').onclick = function() {
 document.getElementById('book-form').submit();
 } ;

*/

 //this
//document.getElementById('theForm').submit();
</script>

<script type="text/javascript">



//externalflyprice
function toggle2(el){
    var value = el.options[el.selectedIndex].value,
        div = document.getElementById('exprice');
        div2 = document.getElementById('addson');
    if (value === 'en' ) {
        div.style.display = 'none';
    } else if (value === 'ex') {
        div.style.display = 'block';
        div2.style.display = 'block';
    }
}










function toggle(el){
    var value = el.options[el.selectedIndex].value,
        div = document.getElementById('visaprice');
     

    if (value === 'no' ) {
        div.style.display = 'none';
    } else if (value === 'yes') {
    
        div.style.display = 'block';
   

    }
}





    $(document).ready(function() {

      $(".btn-success").click(function(){ 
//alert('gg');
          var lsthmtl = $(".clone").html();

          $(".increment").after(lsthmtl);

      });
    });
    function remove(e) {
      //  alert('gg');
      
      e.parentNode.remove();
  
}
   

     /* $("body").on("click",".btn-danger",function(){ 
//alert('gg');
          $(this).parents(".hdtuto control-group lst input-group").remove();

      });

    });
*/
</script>


</body>
</html>
