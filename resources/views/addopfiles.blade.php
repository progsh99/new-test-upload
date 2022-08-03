

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
<link rel='stylesheet' href='https://bootswatch.com/4/yeti/bootstrap.min.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
<style>

.input-file-container {
  position: relative;
  width: 225px;
} 
.js .input-file-trigger {
  display: block;
  padding: 14px 45px;
  background:#0069d9;;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
  background: #34495E;
  color: #39D2B4;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}






/* Useless styles, just for demo styles */

body {
  font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif;
  color: #7F8C9A;
  background: #FCFDFD;
}
h1, h2 {
  margin-bottom: 5px;
  font-weight: normal;
  text-align: center;
  color:#aaa;
}
h2 {
  margin: 5px 0 2em;
  color: #1ABC9C;
}
form {
  width: 225px;
  margin: 0 auto;
  text-align:center;
}
h2 + P {
  text-align: center;
}
.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
  margin-top: 2em;
}
.copy a {
  text-decoration: none;
  color: #1ABC9C;
}
}
#maince {
    margin-top : 4%;
}
</style>
</head>
<body>

<center id="maince">
</br>
</br>
</br>

{{$prm->opname}}
</br>
{{$prm->opexdes}}
</br>
{{$prm->price}}
</br>
</br>
</center>
<form action="#">
  <div class="input-file-container">  
    <input class="input-file" id="my-file" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger">اختر ملف </label>
  </div>
  <p class="file-return"></p>
</form>
</br>
<center>
<progress value="0" max = "100" id="uploader" > 0%</progress>
</center>
<center>
<button  id="addfile" class="btn btn-primary"style="margin-top:10px ;"> اضافة صورة العملية الخارجية  </button>
</center>


</br>
</br>


<form action="#">
  <div class="input-file-container">  
    <input class="input-file" id="my-file2" type="file">
    <label tabindex="0" for="my-file2" class="input-file-trigger">اختر ملف </label>
  </div>
  <p class="file-return"></p>
</form>
</br>
<center>
<progress value="0" max = "100" id="uploader2" > 0%</progress>
</center>
<center>
<button  id="addfile2" class="btn btn-primary"style="margin-top:10px ;"> اضافة صورة العملية الداخلية  </button>
</center>





<script type="text/javascript">


document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});



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

var  uploader = document.getElementById('uploader');
var  uploader2 = document.getElementById('uploader2');


$("#addfile").click(function () {

var filename =  $('#my-file').val();


     var picture = $("#my-file").prop("files")[0];

     var databaseref9900 = firebase.database().ref().child('operations/{{$prm->mainid}}/');
     var databaseref99 = databaseref9900.child('ex/');


         var name = picture["name"] ;

  
         var stoargeRef99 = firebase.storage().ref('operations/{{$prm->mainid}}/') ; // folder name
      
         var stoargeRefex = stoargeRef99.child('ex/') ;
     
         var stoargeRef991 = stoargeRefex.child(filename) ; // inside folder add this
         var uploadTask = stoargeRef991.put(picture) ; // stoarge this
         uploadTask.on(
             "state_changed" ,
             function  progress (snapshot) {
                var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
    uploader.value = percentage;
               /*  var precentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100 ;
                 $("#upload-progress").html(Math.round(precentage) + "%") ;
                 $("#upload-progress").attr("style","width" + precentage + "%") ;*/
               
             } ,
             function error (err) {

             },
             function complete () {
              
                 uploadTask.snapshot.ref.getDownloadURL().then(function (downloadUrl) {
                  

                     var Blogdata = {
                         "image" : downloadUrl ,
                      
                     }
                    
                     databaseref99.set(Blogdata , function (err) {
                         if(err) {
                   
                             console.log(err);
                         }
                         else
                         {
                         
                         
                        
                     
                             alert(" تم التحميل بنجاح");
                        //  window.location.href = '/';
                         }

                     });

                 }) ;
             }
         );
   



});
   

  








$("#addfile2").click(function () {

var filename =  $('#my-file2').val();


     var picture = $("#my-file2").prop("files")[0];
     var databaseref9900 = firebase.database().ref().child('operations/{{$prm->mainid}}/');
     var databaseref99 = databaseref9900.child('en/');


         var name = picture["name"] ;

  
         var stoargeRef99 = firebase.storage().ref('operations/{{$prm->mainid}}/') ; // folder name
      
         var stoargeRefex = stoargeRef99.child('en/') ;
     
         var stoargeRef991 = stoargeRefex.child(filename) ; // inside folder add this
         var uploadTask = stoargeRef991.put(picture) ; // stoarge this
         uploadTask.on(
             "state_changed" ,
             function  progress (snapshot) {
                var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
    uploader2.value = percentage;
               /*  var precentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100 ;
                 $("#upload-progress").html(Math.round(precentage) + "%") ;
                 $("#upload-progress").attr("style","width" + precentage + "%") ;*/
               
             } ,
             function error (err) {

             },
             function complete () {
              
                 uploadTask.snapshot.ref.getDownloadURL().then(function (downloadUrl) {
                  

                     var Blogdata = {
                         "image" : downloadUrl ,
                      
                     }
                    
                     databaseref99.set(Blogdata , function (err) {
                         if(err) {
                   
                             console.log(err);
                         }
                         else
                         {
                         
                         
                        
                     
                             alert(" تم التحميل بنجاح");
                          window.location.href = '/addbeaf/{{$prm->mainid}}';
                         }

                     });

                 }) ;
             }
         );
   



});
                   
   


</script>


</body>
</html>