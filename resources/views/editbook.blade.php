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
      <i class="fas fa-book-open text-primary"></i> <span class="text-primary"> حجز</span>الآن</h1>
      <form id="book-form" method="post" action="{{url('editop',$pr->opid)}}" enctype="multipart/form-data">
        {{csrf_field()}}


        <div class="form-group">
        <label for="title"> اسم الموظف المدخل للبيانات : </label>
          <input type="text" name="employname" value="{{$pr->employname}}"  id="title" class="form-control">
        </div>
        <div class="form-group">
        <label for="author"> اسم الزبون : </label>
          <input type="text" name="patient"  value="{{$pr->patient}}"  id="author" class="form-control">
        </div>
        <div class="form-group">
        <label for="author">العمر</label>
          <input type="text" name="age" value="{{$pr->age}}" id="author" class="form-control">
        </div>
        <div class="form-group">
        اختر الجنس :
          <select name="gender" value="{{$pr->gender}}" class="form-control selectpicker" required >
           
            <option value="female" >انثى</option>
            <option value="male">ذكر</option>
  </select>
          </div>
  
  </br>
        <div class="form-group">
        <label for="author"> رقم الهاتف </label>
          <input type="text" id="author" name="phone" value="{{$pr->phone}}"  class="form-control">
        </div>
        <div class="form-group">
        <label for="author">العنوان</label>
          <input type="text" id="author"  name="address" value="{{$pr->address}}"  class="form-control">
        </div>
        
        <div class="form-group">
     
          <p> هل دفع العميل سعر الفيزا ؟</p>

          <select onchange="toggle(this)" name="visatype" class="form-control selectpicker" required value="{{$pr->visatype}}"  >
          <option value="no"  >لا</option> 
         <option  value="yes" >نعم</option>

</select>


  </div>                    
  </br>
        <div class="form-group">
        <label for="author">سعر الفيزا :</label>
          <input name="visaprice"  value="{{$pr->visaprice}}" id="visaprice" class="form-control"  type="number">
         
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

       



       
    
        
    



        <button type="submit" id="mysubmit" class="btn btn-primary btn-block"style="margin-top:10px ;"> حجز الآن </button>
 

        
       
      </form>
      <p>    </p>


  </div>
<!-- partial -->
 



<script type="text/javascript">


//alert(finalprice);




// alert('changed') ;


  //  var myParam  = window.location.href.substr(window.location.href.lastIndexOf('op=') + 3);

   //document.getElementById('operationprice').value = myParam;
 //maindiv

 

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


//document.getElementById('theForm').submit();
</script>

<script type="text/javascript">



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
