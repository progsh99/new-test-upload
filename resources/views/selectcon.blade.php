
    <form class="form-signin" action="{{url('addconop')}}"  method="post" >
    {{ csrf_field() }} 
<label for="cars">Choose a car:</label>

<select name="cars[]" id="cars" multiple>

@foreach($pr2  as $pr2)
  <option value="{{$pr2->mainid}}" >{{$pr2->opname}} </option>
@endforeach
</select>
<button class="btn btn-lg btn-primary btn-block" type="submit">اضافة</button>  
</form>



<?php

/*
$json = json_decode($pr->operationids, true);

    foreach ($json as $key => $value){
        echo "<a href='$value'> $value </a>" ;
        echo " $value\n";
    };
    */
?>



