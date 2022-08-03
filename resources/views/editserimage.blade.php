<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
<style>
.alert {
  text-align: center;
}
.alert-title {
  padding-bottom: 10px;
  margin-bottom: 10px;
}
.alert-about {
  padding-bottom: 25px;
}

.images-holder {
  padding: 40px 0px 0px 0px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  perspective: 300px;
}
.images-holder__thumbnail {
  position: relative;
  padding-bottom: 40px;
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  animation: AnimIn 500ms ease-in;
  flex-wrap: wrap;
  width: 150px;
}
.images-holder__holder {
  position: relative;
  width: 100px;
  height: 100px;
  overflow: hidden;
  border: solid 5px white;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  display: inline-flex;
  justify-content: center;
  background: white;
}
.images-holder__holder:hover .images-holder__overlay {
  opacity: 1;
}
.images-holder__image {
  object-fit: scale-down;
}
.images-holder__title {
  padding: 10px;
  width: 100%;
  font-weight: bold;
  text-align: center;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.images-holder__overlay {
  position: absolute;
  left: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.5);
  opacity: 0;
  width: 100%;
  height: 100%;
  transition: opacity 500ms ease-in;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.images-holder__overlay span {
  color: white;
  font-size: 22px;
}
.images-holder__remove {
  position: absolute;
  top: -1em;
  width: 25px;
  height: 25px;
  background: black;
  content: "x";
  color: white;
  border-radius: 50%;
  cursor: pointer;
  box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
  border: solid 2px white;
}

@keyframes AnimIn {
  0% {
    opacity: 0;
    transform: rotateX(5deg);
  }
}
#myimg {

    width :70% ;
height : 700px ;
margin-left :15% ;
margin-bottom : 3% ;

}

#myimg2 {

width :70% ;
height : 700px ;
margin-left :15% ;
margin-bottom : 3% ;

}
</style>
</head>
<body>
@foreach ($pr as $pr)
<center>
<h2> صورة الخدمة الخارجية   </h2>
</center> 
    <img  id = "myimg" >
<!-- partial:index.partial.html -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-info" data-image-uploader-app>
        <div class="alert alert-danger" data-image-uploader-error>
          <ul data-image-uploader-error-list></ul>
        </div>
        <h3 class="alert-title">
          <b>تعديل الصورة </b>
        </h3>
    
        <a data-image-uploader-button class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-camera"></span>
       تحميل  
        </a>
        <input data-image-uploader class="hidden" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" capture=camera" />
        <div data-image-uploads class="images-holder"></div>

<progress value="0" max = "100" id="uploader" > 0%</progress>
</br>
        <button id="addfile" class="btn btn-primary stretched-link" > اضافة </button>
      </div>
      
    </div>
    
  </div>

</div>











<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  
  
  <script>
var $btn = $('[data-image-uploader-button]')
var $uploaderApp = $('[data-image-uploader-app]')
var $uploader = $('[data-image-uploader]')
var $uploads = $('[data-image-uploads]')
var $uploaderErrors = $('[data-image-uploader-error]')
var $uploaderErrorList = $('[data-image-uploader-error-list]')

var imageFiles = []
var imageErrors = []

function addThumbnail(file, index) {
  var $thumbnail = $('<div class="images-holder__thumbnail">')
  var $imgHolder = $('<div class="images-holder__holder">')
  var $img = $('<img class="images-holder__image">')
  var $imgOverlay = $('<div class="images-holder__overlay">')
  var $imgOverlayIcon = $('<span class="glyphicon glyphicon-eye-open">')
  var $title = $('<span class="images-holder__title">')
  var $imgRemove = $('<span data-image-upload="' + index + '" class="images-holder__remove">')
  $img.file = file
  $title.text(file.name)
  $imgHolder.append($img)
  $imgOverlay.append($imgOverlayIcon)
  $imgHolder.append($imgOverlay)
  $thumbnail.append($imgHolder)
  $thumbnail.append($title)
  $thumbnail.append($imgRemove)
  $uploads.append($thumbnail)
  
  var reader = new FileReader()
  reader.onload = (e) => $img[0].src = e.target.result
  reader.readAsDataURL(file)
}

function updateThumbnails(files)  {
  
  $uploads.empty()
  
  imageFiles = files
  
  imageFiles.forEach((file, index) => addThumbnail(file, index))  
  
}

function getUniqueFiles(files) {
  return files.reduce((unique, file, i) => {
    var findFile = unique.find((u) => u.name === file.name)
    if (findFile === undefined) {
      return unique.concat([file])
    }
    return unique
  }, [])
}

function addValidationError(messages) {
  var errorMessageList = messages.map((message) => {
    return $('<li>').text(message)
  })
}

function validateImage(file) {
  var valid = /^image\//.test(file.type)
  
  if (!valid) {
    imageErrors.push('Not an image.')
  }
  
  return valid
}

function validateImageSize(file) {
  return true
}

$uploaderErrors.hide()

$btn.click(function() {
  $uploader.trigger('click')
});

$uploader.change(function() {
  var $this = $(this)
  var files = []
    .slice
    .call($this[0].files)
    .filter(validateImage)
    .filter(validateImageSize)
  
  var thumbnailFiles = getUniqueFiles(imageFiles.concat(files))
  
  updateThumbnails(thumbnailFiles)
  
});

$(document).on('click', '[data-image-upload]', function() {
  
  var index = $(this).attr('data-image-upload')
  
  imageFiles.splice(index, 1)
  
  updateThumbnails(imageFiles)
  
})

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
var  uploaderm = document.getElementById('uploader');


var playersRef990 = firebase.database().ref('services');


var playersRef9902 = playersRef990.child('{{$pr->mainid}}');

var playersmRef9902 = playersRef9902.child('ex');
//alert(playersRef990);
var posthtml2 = "" ;
playersmRef9902.once("value", function (blogs9) {
   if (blogs9.exists()) {
 

	   blogs9.forEach(function (singleBlog9) {
//alert(singleBlog9.val()) ;
 //posthtml2 +=  "<img src= '"+singleBlog9.val()+"' alt = 'image here' class='img-responsive' >  ";                   

document.getElementById("myimg").src = singleBlog9.val() ;


     });
   //  $("#{{$pr->mainid}}").html(posthtml2);
    }
  });






  $("#addfile").click(function () {

var filename =  $('#fileToUpload').val();


     var picture = $("#fileToUpload").prop("files")[0];

      var name = picture["name"] ;

  
         var stoargeRef99 = firebase.storage().ref('services/{{$pr->mainid}}/ex/') ; // folder name
      

     
         var stoargeRef991 = stoargeRef99.child(filename) ; // inside folder add this
         var uploadTask = stoargeRef991.put(picture) ; // stoarge this
         uploadTask.on(
             "state_changed" ,
             function  progress (snapshot) {
                var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                uploaderm.value = percentage;
              
               
             } ,
             function error (err) {

             },
             function complete () {
              
                 uploadTask.snapshot.ref.getDownloadURL().then(function (downloadUrl) {
                  

                     var Blogdata = {
                         "image" : downloadUrl ,
                      
                     }
                    
                     playersmRef9902.update(Blogdata , function (err) {
                         if(err) {
                   
                             console.log(err);
                         }
                         else
                         {
                         
                         
                        
                     
                             alert(" تم التعديل بنجاح");
                             window.location.href = '/editserimage/{{$pr->mainid}}' ;
                    
                         }

                     });

                 }) ;
             }
         );
   



});































  
  </script>
@endforeach
</body>
</html>
