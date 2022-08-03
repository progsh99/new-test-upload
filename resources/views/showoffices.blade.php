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
<h1>عرض المكاتب  : </h1>



</br>


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
			 data-escape="false">
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
            <th data-field="created_at" data-filter-control="select" data-sortable="true">كود المكتب : </th>

			<th data-field="date" data-filter-control="select" data-sortable="true">اسم المكتب : </th>

  

			<th data-field="note6" data-sortable="true">ايميل المكتب : </th>







            <th data-field="note5" data-sortable="true" data-sortable="true">رقم المكتب :</th>




  
            <th data-field="note2" data-filter-control="select" data-sortable="true">المحافظة  :</th>
        
            <th >حذف : </th>
            <th > الاحصائيات : </th>
		</tr>
	</thead>
	<tbody id="GridView2">

    @foreach($pr  as $pr)
<?php
$counter ++ ;
?>
		<tr>
			<td class="bs-checkbox "><input data-index=<?php echo $counter ;?> name="btSelectItem" type="checkbox"></td>
			<td>{{$pr->mainid }}</td>
			<td>{{$pr->name }} </td>
			<td>{{$pr->email }}</td>
			<td>{{$pr->phone}}</td>
       
            <td>{{$pr->city}}</td>
           
        
           <!-- <td>  Name : {{$pr->patient }}  ,,, Age :{{$pr->age }} ,,, Adress : {{$pr->address }},,, Phone : {{$pr->phone }}   </td>-->


            <td> <a href="/deleteof/{{$pr->mainid}}">  حذف  </a> </td>
            <td> <a href="/sat/{{$pr->mainid}}">  عرض  </a> </td>
            
		</tr>
		
		@endforeach

	</tbody>
</table>
</div>
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
    var tds = document.querySelectorAll("#GridView2 td:nth-child(5)");
for (var i = 0, len = tds.length; i < len; i++) {
    coun +=  parseFloat(tds[i].innerText ) ;

  //alert( tds[i].innerText);
}
// alert(coun);
document.getElementById("tprice").innerText = coun ;
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
