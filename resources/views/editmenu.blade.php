<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  
  <style>


body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
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
    <form class="form-signin" action="{{url('updatemenu')}}"  method="post" >
    {{ csrf_field() }}      
      <h2 class="form-signin-heading">
          <center>
      تعديل عناصرالقائمة </h2>
</center>
      <input type="text" class="form-control" style="text-align : center ;" name="item1" value="{{$menuitems->item1}}" required="" autofocus="" />
      
</br>
      <input type="text" class="form-control" style="text-align : center ;" name="item2" value="{{$menuitems->item2}}"required="" autofocus="" />
      </br>
      <input type="text" class="form-control" style="text-align : center ;" name="item3" value="{{$menuitems->item3}}" required="" autofocus="" />
      </br>
      <input type="text" class="form-control" style="text-align : center ;"  name="item4" value="{{$menuitems->item4}}" required="" autofocus="" />
      </br>
      <input type="text" class="form-control"  style="text-align : center ;" name="item5" value="{{$menuitems->item5}}" required="" autofocus="" />
      </br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">تحديث</button>   
    </form>
  </div>
<!-- partial -->
  
</body>
</html>
