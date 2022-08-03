<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style>


body {
  background: #eee !important;
  direction: rtl;
text-align: center;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;

}

.form-signin {
  max-width: 780px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type=text] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type=password] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.basic {
  width : 400px ;
}
.second {
  width : 100px ;

}

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<h2 class="form-signin-heading"> اضافة التكاليف :  </h2>





<h3 class="form-signin-heading"> اسم العملية : {{$pr->operationname}}  </h2> 
<h3 class="form-signin-heading"> المكتب :{{$pr->officename}}  </h2> 
<h3 class="form-signin-heading"> اسم الزبون : {{$pr->patient}}  </h2> 
<h3 class="form-signin-heading">  سعر العملية :{{$pr->operationprice}} $  </h2> 
<h3 class="form-signin-heading"> الزبون دفع الفيزا : {{$pr->visatype}}  </h2> 
<h3 class="form-signin-heading"> سعر الفيزا : {{$pr->visaprice}} $ </h2> 
@if($pr->flytype =='ex') 
<h3 class="form-signin-heading">نوع الطيران  : خارجي </h2>
@else
<h3 class="form-signin-heading">نوع الطيران  : داخلي </h2>
@endif
<h3 class="form-signin-heading">  سعر الطيران  : {{$pr->flyprice}} $  </h2> 
<h3 class="form-signin-heading"> العمولة : {{$pr->commisionprice}} $ </h2> 

</br>

<button id="inc" class="btn btn-lg btn-primary "  >  +  </button>
<div class="wrapper">
    <form class="form-signin"   action="{{url('addprice',$pr->opid  )}}" enctype="multipart/form-data" method="post"  >   
    {{csrf_field()}}   
 


</br>
</br>
<label> التكلفة 1 :  </label>
</br>
<input type="text"  class="basic"  name="info1" />

<input type="number"  value="0"   class="second"  name="infovalue1" />
</br>










<div id="div1" style="display:none ;">

<label> التكلفة 2 :  </label>
</br>
<input type="text"  class="basic"  name="info2" />

<input type="number"  value="0"   class="second"  name="infovalue2" />
</br>
</div>


<div id="div2" style="display:none ;">
<label> التكلفة 3 :  </label>
</br>
<input type="text"  class="basic"  name="info3" />

<input type="number"  value="0"   class="second"  name="infovalue3" />
</br>
</div>



<div id="div3" style="display:none ;">
<label> التكلفة 4 :  </label>
</br>
<input type="text"  class="basic"  name="info4" />

<input type="number"  value="0"   class="second"  name="infovalue4" />
</br>
</div>



<div id="div4" style="display:none ;">
<label> التكلفة 5 :  </label>
</br>
<input type="text"  class="basic"  name="info5" />

<input type="number"  value="0"   class="second"  name="infovalue5" />
</br>
</div>




<div id="div5" style="display:none ;">
<label> التكلفة 6 :  </label>
</br>
<input type="text"  class="basic"  name="info6" />

<input type="number"  value="0"   class="second"  name="infovalue6" />
</br>
</div>




<div id="div6" style="display:none ;">
<label> التكلفة 7 :  </label>
</br>
<input type="text"  class="basic"  name="info7" />

<input type="number"  value="0"   class="second"  name="infovalue7" />
</br>
</div>



<div id="div7" style="display:none ;">
<label> التكلفة 8 :  </label>
</br>
<input type="text"  class="basic"  name="info8" />

<input type="number"  value="0"   class="second"  name="infovalue8" />
</br>
</div>




<div id="div8" style="display:none ;">
<label> التكلفة 9 :  </label>
</br>
<input type="text"  class="basic"  name="info9" />

<input type="number"  value="0"   class="second"  name="infovalue9" />
</br>
</div>



</br>
<div id="div10" >
<label> صافي الربح :  </label>
</br>

<input type="number"  value="0" class="form-control" name="finalmoneyadd" />
</br>

</div>


      <input  class="btn btn-lg btn-primary btn-block" type="submit" value="اضافة "> 
    </form>
  </div>
<!-- partial -->
  <script>
var coun = 0;
document.getElementById("inc").onclick = function () {

  coun ++ ;
document.getElementById("div"+coun).style.display = "block" ;
//alert("hallo ");
};


</script>
</body>
</html>
