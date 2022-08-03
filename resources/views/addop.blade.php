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


</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <form class="form-signin"  action="{{url('addop')}}" enctype="multipart/form-data" method="post"  >   
    {{csrf_field()}}   
      <h2 class="form-signin-heading"> اضافة عملية  </h2>
     
      <input type="text" class="form-control" name="opname" placeholder="اسم العملية " required="" autofocus="" />
      </br>
      <label for="texta">  وصف العملية المختصر  : </label>
      <textarea  id="texta" class="form-control" name="opexdes" required="" cols="50" rows="10" > </textarea>


</br>
<label for="texta2">  وصف العملية   : </label>
      <textarea  id="texta2" class="form-control" name="des" required="" cols="50" rows="10" > </textarea>


</br>
<label for="texta">  السعر (بالدولار) اكتب رقما فقط </label>
</br>

<input type="number" value="0" class="form-control" name="price" />

</br>
<label for="texta">  العمولة  (بالدولار) اكتب رقما فقط </label>
</br>




<input type="number" value="0" class="form-control" name="commision" />
</br>


      <input  class="btn btn-lg btn-primary btn-block" type="submit" value="اضافة "> 
    </form>
  </div>
<!-- partial -->
  
</body>
</html>
