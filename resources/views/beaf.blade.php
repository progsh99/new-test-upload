<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>الخبراء</title>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  direction : rtl ;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  height: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
#expandedImg {

  width: 50%;
height: 50%;
margin-right: 23%;
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>عرض نتائج العملية :</h2>

</div>

<!-- The four columns -->
<div class="row" id="maindiv">
  


</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" >
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
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



var playersRef990 = firebase.database().ref('operations');


var playersRef9902 = playersRef990.child('{{$pr}}');

var playersmRef9902 = playersRef9902.child('beaf');
var posthtml = "" ;

playersmRef9902.once("value", function (blogs9) {
   if (blogs9.exists()) {
 

	   blogs9.forEach(function (singleBlog9) {

//alert(singleBlog9.val().image);
posthtml += " <div class='column'> ";
posthtml += "  <img src='"+singleBlog9.val().image+"'  style='width:100%' onclick='myFunction(this);'>";
posthtml += " </div> ";
     });
 $("#maindiv").html(posthtml);
    }
  });





</script>

</body>
</html>
