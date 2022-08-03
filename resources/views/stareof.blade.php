<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'>

<style>
 body {

direction: rtl;
text-align: center;


  }

.container {
	width: 1024px;
	padding: 2em;
}

.bold-blue {
	font-weight: bold;
	color: #0277BD;
}


</style>

</head>
<body>
<?php

$arraym ;   
$counter = -1 ; 
// echo "office id"  ;

?>
<!-- partial:index.partial.html -->
<div class="container">
<h1>عرض الاحصائيات : </h1>
<h2> المبلغ الكلي :  </h2>
<h2 id="tprice">   </h2>
<select class="form-control" id="mounth">
<option value="hide">-- الشهر --</option>
<option value="01"> 1 </option>
    <option value="02">  2 </option>
    <option value="03"> 3 </option>
    <option value="04"> 4  </option>
    <option value="05">  5 </option>
    <option value="06">  6  </option>
    <option value="07"> 7  </option>
    <option value="08">  8 </option>
    <option value="09"> 9 </option>
    <option value="10"> 10 </option>
    <option value="11"> 11 </option>
    <option value="12">  12 </option>
</select>
</br>
<select class="form-control" id="year">
<option value="hide">-- السنة --</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
</select>
</br>
<center>   <button class="btn btn-primary" id="showst">  عرض الاحصائيات   </button> </center>
<?php
$arraym ;    
$arraym2 ;     
$arraym3 ;
?>

@foreach($pr2  as $pr2)
@if($pr2->email !='alaa.ibrahim96k@gmail.com')   
<?php


$arraym [$pr2->mainid ]  = 0 ; 
$arraym2 [$pr2->mainid ]  = $pr2->name ; 
$arraym3 [$pr2->mainid ]  = $pr2->city ; 
//$arraym = array($pr2->mainid  => 0); 
// $arraym2 = array($pr2->mainid  => $pr2->name); 
 //echo $pr2->id  ;

?>


@endif
@endforeach

<?php
$vara = 0 ;
$vara2 = 0 ;
$vara3 = 0 ;
?>





@foreach($pr  as $pr)
 
<?php


 // echo $pr->finalprice  ;
 $vara += $pr->finalmoney  ;





 $arraym[$pr->officemainid] +=  $pr->finalmoney ;



 //echo "</br>";

?>



@endforeach






<?php


//echo "array : ". $arraym  ;

//print implode(", ", $arraym);    //prints 1, 2, 3
/*
foreach ($arraym2 as $key2 => $val2) {
    $arraym4 = implode(", ", $arraym2); 
    $arraym5 = implode(", ", $arraym); 
    foreach ($arraym as $key => $val) {
        
        if ($key == $key2) {
        /* echo $arraym4 ;

 echo $arraym5 ;
 */
/*
        }

    }

}
*/
?>
<div id="toolbar">
		<select class="form-control">
    <option value="">تنزيل </option>
				<option value="all">تنزيل الكل</option>
				<option value="selected">تنزيل المختارة </option>
		</select>
</div>

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar"
       data-escape="false"
       >
	<thead>
 
  <tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="prenom" data-filter-control="input" data-sortable="true">كود المكتب :</th>
			<th data-field="date" data-filter-control="select" data-sortable="true">اسم المكتب :</th>
			<th data-field="examen" data-filter-control="select" data-sortable="true"> المبلغ : </th>
      <th data-field="date2" data-filter-control="select" data-sortable="true">المحافظة  :</th>
          
       
		</tr>
	</thead>
	<tbody id="GridView2">




<?php

foreach ($arraym as $key => $val) {

  $arraym4 = implode(", ", $arraym2); 

 
  foreach ($arraym2 as $key2 => $val2) {
      
      
        $counter ++ ;
   
        foreach ($arraym3 as $key3 => $val3) {
          if ($key == $key2) {
 
            if ($key == $key3) {
 echo "	<tr> ";
 echo "<td class='bs-checkbox '><input data-index= ". $counter ." name='btSelectItem' type='checkbox'></td> " ;
 
 //<td> <a href="/sat/{{$pr->mainid}}">  show sats  </a> </td>
 
 echo " <td> ".$key." </td> " ;

echo "  <td> <a href='/sat/".$key."'>  ".$val2."  </a> </td>";
 //echo "<td>".$val2." </td> " ;



 echo "<td>".$val." $  </td> " ;


 echo "<td>".$val3."  </td> " ;
 //echo "<td>".$val." $  </td> " ;

echo " </tr>" ;
            }
        }


      }

      //echo $arraym2 ;
  }

     // if ($key == $key2) {
       //   $arraym2 = implode(", ", $arraym2); 
          
          
       


         // echo = 
     // }
   
 // }
 //  echo 'KEY IS: ' . $key;




}
// echo $keys  ;
//print json_encode($arraym);




//print_r($arraym);


?>





	</tbody>
</table>
</div>


<script>
     //var myParam  = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
 document.getElementById('showst').onclick = function(){
  var myyear =  document.getElementById('year').value ;
  var mymonth =  document.getElementById('mounth').value ; 
//alert('gg') ;

if ( myyear != "hide" && myyear != "mymonth" ) {
  window.location.href = '/satsof/'  +   myyear + '/' + mymonth ;
}
else {
  alert("اختر الشهر والسنة ") ;
}


 };


    </script>






<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
<script src='https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script>


<script>
var coun = 0 ;



// var htprice = document.getElementById("tprice").innerText ;
    var previous = $("#table").text();
    $check = function() {
        if ($("#table").text() != previous) {
        
            myOwnFunction();
        }
        previous = $("#table").text();        
    }
    setInterval(function() { $check(); }, 1000);


function myOwnFunction() {
    coun = 0 ;
    var tds = document.querySelectorAll("#GridView2 td:nth-child(4)");
for (var i = 0, len = tds.length; i < len; i++) {
    coun +=  parseFloat(tds[i].innerText ) ;

  //alert( tds[i].innerText);
}
// alert(coun);
document.getElementById("tprice").innerText = coun + " $" ;
   // alert("CHANGED");
}



//exporte les données sélectionnées
var $table = $('#table');
    $(function () {
        $('#toolbar').find('select').change(function () {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

		var trBoldBlue = $("table");

	$(trBoldBlue).on("click", "tr", function (){
			$(this).toggleClass("bold-blue");
	});

</script>

</body>
</html>
