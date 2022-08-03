<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>

<style>

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Roboto");
html, body, * {
  box-sizing: border-box;
  font-size: 16px;
}

html, body {
  height: 100%;
  text-align: center;
}

body {
  padding: 2rem;
  background: #f8f8f8;
}

h2 {
  font-family: "Roboto", sans-serif;
  font-size: 26px;
  line-height: 1;
  color: rgb(5, 67, 99);
  margin-bottom: 0;
}

p {
  font-family: "Roboto", sans-serif;
  font-size: 18px;
  color: #5f6982;
}

.uploader {
  display: block;
  clear: both;
  margin: 0 auto;
  width: 100%;
  max-width: 600px;
}
.uploader label {
  float: left;
  clear: both;
  width: 100%;
  padding: 2rem 1.5rem;
  text-align: center;
  background: #fff;
  border-radius: 7px;
  border: 3px solid #eee;
  transition: all 0.2s ease;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.uploader label:hover {
  border-color: rgb(5, 67, 99);
}
.uploader label.hover {
  border: 3px solid rgb(5, 67, 99) 
  box-shadow: inset 0 0 0 6px #eee;
}
.uploader label.hover #start i.fa {
  transform: scale(0.8);
  opacity: 0.3;
}
.uploader #start {
  float: left;
  clear: both;
  width: 100%;
}
.uploader #start.hidden {
  display: none;
}
.uploader #start i.fa {
  font-size: 50px;
  margin-bottom: 1rem;
  transition: all 0.2s ease-in-out;
}
.uploader #response {
  float: left;
  clear: both;
  width: 100%;
}
.uploader #response.hidden {
  display: none;
}
.uploader #response #messages {
  margin-bottom: 0.5rem;
}
.uploader #file-image {
  display: inline;
  margin: 0 auto 0.5rem auto;
  width: auto;
  height: auto;
  max-width: 180px;
}
.uploader #file-image.hidden {
  display: none;
}
.uploader #notimage {
  display: block;
  float: left;
  clear: both;
  width: 100%;
}
.uploader #notimage.hidden {
  display: none;
}
.uploader progress,
.uploader .progress {
  display: inline;
  clear: both;
  margin: 0 auto;
  width: 100%;
  max-width: 180px;
  height: 8px;
  border: 0;
  border-radius: 4px;
  background-color: #eee;
  overflow: hidden;
}
.uploader .progress[value]::-webkit-progress-bar {
  border-radius: 4px;
  background-color: #eee;
}
.uploader .progress[value]::-webkit-progress-value {
  background: linear-gradient(to right, #393f90 0%, rgb(5, 67, 99) 50%);
  border-radius: 4px;
}
.uploader .progress[value]::-moz-progress-bar {
  background: linear-gradient(to right, #393f90 0%, rgb(5, 67, 99) 50%);
  border-radius: 4px;
}
.uploader input[type=file] {
  display: none;
}
.uploader div {
  margin: 0 0 0.5rem 0;
  color: #5f6982;
}
.uploader .btn {
  display: inline-block;
  margin: 0.5rem 0.5rem 1rem 0.5rem;
  clear: both;
  font-family: inherit;
  font-weight: 700;
  font-size: 14px;
  text-decoration: none;
  text-transform: initial;
  border: none;
  border-radius: 0.2rem;
  outline: none;
  padding: 0 1rem;
  height: 36px;
  line-height: 36px;
  color: #fff;
  transition: all 0.2s ease-in-out;
  box-sizing: border-box;
  background: rgb(5, 67, 99);
  border-color: rgb(5, 67, 99);
  cursor: pointer;
}

#addfile {


    text-align : center ;
    margin-top : 5% ;
}
</style>

</head>
<body>
<!-- partial:index.partial.html -->




<h2>   اضافة الصورة </h2>
</br>
<!-- Upload  -->
<form id="file-upload-form" class="uploader"  action="{{url('addimagepublicid')}}"  method="post"  >
{{ csrf_field() }}
  <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

  <label for="file-upload" id="file-drag">
    <img id="file-image" src="#" alt="Preview" class="hidden">
    <div id="start">
      <i class="fa fa-download" aria-hidden="true"></i>
      <div>اختر ملف او اسحب وافلت</div>
      <div id="notimage" class="hidden">اختر صورة</div>
      <span id="file-upload-btn" class="btn btn-primary"> اختر ملف</span>
    </div>
    <div id="response" class="hidden">
      <div id="messages"></div>
      <progress id="file-progress" value="0">
        
      </progress>
      <input type="text" name="image" id="imageinput" hidden> 
      <input type="text" name="id" id="idinput" value="{{$pr->id}}"  hidden> 
    </div>
  </label>
  <input  class="btn btn-lg btn-primary btn-block" id="addfile"  value="اضافة "> 
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script>

// File Upload
// 
function ekUpload(){
  function Init() {

    console.log("Upload Initialised");

    var fileSelect    = document.getElementById('file-upload'),
        fileDrag      = document.getElementById('file-drag'),
        submitButton  = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();

    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  // Output
  function output(msg) {
    // Response
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {

    console.log(file.name);
    output(
      '<strong>' + encodeURI(file.name) + '</strong>'
    );
    
    // var fileType = file.type;
    // console.log(fileType);
    var imageName = file.name;

    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
    if (isGood) {
      document.getElementById('start').classList.add("hidden");
      document.getElementById('response').classList.remove("hidden");
      document.getElementById('notimage').classList.add("hidden");
      // Thumbnail Preview
      document.getElementById('file-image').classList.remove("hidden");
      document.getElementById('file-image').src = URL.createObjectURL(file);
    }
    else {
      document.getElementById('file-image').classList.add("hidden");
      document.getElementById('notimage').classList.remove("hidden");
      document.getElementById('start').classList.remove("hidden");
      document.getElementById('response').classList.add("hidden");
      document.getElementById("file-upload-form").reset();
    }
  }



  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        // pBar.style.display = 'inline';
   

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!

            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
}
ekUpload();


  </script>
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

var  uploader = document.getElementById('file-progress');

//addfile
$("#addfile").click(function () {

//file-upload



var filename =  $('#file-upload').val();


     var picture = $("#file-upload").prop("files")[0];

     var databaseref9900 = firebase.database().ref().child('publicimgs/{{$pr->id}}');



         var name = picture["name"] ;


         var stoargeRef99 = firebase.storage().ref('publicimgs/{{$pr->id}}') ; // folder name
      
     
         var stoargeRef991 = stoargeRef99.child(filename) ; // inside folder add this
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

                console.log(err);
              //  alert("error instorage") ;
             },
             function complete () {
              
                 uploadTask.snapshot.ref.getDownloadURL().then(function (downloadUrl) {
                   // alert("here") ;

                     var Blogdata = {
                         "image" : downloadUrl ,
                      
                     }
                    
                     databaseref9900.set(Blogdata , function (err) {
                         if(err) {
                          //  alert("eror") ;
                             console.log(err);
                         }
                         else
                         {
                         
                         
                        
                     
                             alert(" تم التحميل بنجاح");
document.getElementById("imageinput").value = downloadUrl ;
document.getElementById('file-upload-form').submit();
                    //   window.location.href = '/addimagepublicid/{{$pr->id}}/' + downloadUrl;
                         }

                     });

                 }) ;
             }
         );
   

    
//alert('hh')
});
</script>
</body>
</html>
