<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel='stylesheet' href='https://codepen.io/fancyapps/pen/PEqJvL.css'>
<link rel='stylesheet' href='https://codepen.io/fancyapps/pen/YYXBda.css'>


<style>


#success_message{ display: none;}
#fibu {

  display: none;
}
#fibu3 {

display: none;
}
.hdtuto {
  width :50%;
  margin-left :20%;
}
body {
  font-size :12px;
}

.file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">

    <form class="well form-horizontal"   id="contact_form"   method="post" action="{{url('saveopp')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<fieldset>

<!-- Form Name -->
<legend>Book Now!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">employ name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"></span>
  <input  name="employname" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >patient Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></span>
  <input name="patient" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">age</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
  <input name="age" placeholder="age" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
  <input name="phone" placeholder="07707777777" class="form-control" type="number">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->


<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">gender</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
    <select name="gender" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option value="female">Female</option>
      <option value="male">Male</option>
 
    
    </select>
  </div>
</div>
</div>

<!-- Text input-->





<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">paintent has already visa ?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="visatype" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="visatype" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
  <label class="col-md-4 control-label">visaprice</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
  <input name="visaprice" placeholder="visaprice" class="form-control"  type="number">
    </div>
</div>
</div>





                    <div class="form-group">
                        <label class="col-md-4 control-label">paintent paid ticket internal fly ?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tickettype" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tickettype" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
  <label class="col-md-4 control-label">ticketprice</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
  <input name="ticketprice" placeholder="ticketprice" class="form-control"  type="number">
    </div>
</div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label">operationprice</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
  <input name="operationprice" placeholder="operationprice" class="form-control"  type="text"  disabled id="operationprice">
    </div>
</div>
</div>


<p> Passport Image </p>
<div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Choose File</div>
    <div class="file-select-name" id="noFile">No file chosen...</div> 
    <input type="file" name="chooseFile" id="chooseFile">
  </div>
</div>
</br>
<p> Other Files  </p>
<!-- Text area -->

<div class="input-group hdtuto control-group lst increment" >

<input type="file" name="filenames[]" class="myfrm form-control">

<div class="input-group-btn"> 

  <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>

</div>

</div>

<div class="clone hide">

<div class="hdtuto control-group lst input-group" style="margin-top:10px">

  <input type="file" name="filenames[]" class="myfrm form-control">

  

</div>

</div>








<button type="button" id="submit" class="btn btn-primary btn-lg text-center waves-effect waves-light">book</button>
 





</fieldset>
</form>




<div class="form-group" id="fibu2">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button class="btn btn-warning" >Send Information <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</div>



<div class="form-group" id="fibu3">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Edit Information <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
    </div><!-- /.container -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>



<script>
 jQuery(document).ready(function(){
        jQuery('#submit').click(function(e){
            e.preventDefault();
//alert('gj');
document.getElementById('theForm').submit();

        });
 });
   




document.getElementById("fibu2").onclick = function (){
  document.getElementById("fibu2").style.display = "none" ;
  $("#contact_form :input").prop("disabled", true);
  $("#contact_form :button").prop("disabled", false);
  document.getElementById("fibu").style.display = "block" ;
  document.getElementById("fibu3").style.display = "block" ;
//alert('gh');

}


document.getElementById("fibu3").onclick = function (){
  document.getElementById("fibu2").style.display = "block" ;
  $("#contact_form :input").prop("disabled", false);
  document.getElementById("fibu3").style.display = "none" ;
  document.getElementById("fibu").style.display = "none" ;
//alert('gh');

}





</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://codepen.io/fancyapps/pen/PEqJvL.js'></script>
<script>


$(document).ready(function() {

$(".btn-success").click(function(){ 

    var lsthmtl = $(".clone").html();

    $(".increment").after(lsthmtl);

});


});

</script>
</body>
</html>
