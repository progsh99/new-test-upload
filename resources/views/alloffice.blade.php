<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
<style>
/* Start Global Rules */
    
* {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        margin: 0 auto;
        padding: 0
    }
    
    body {
        width: 100%
    }
    /* End Global Rules */
    /* Start Side Menu Bar */
    
    aside {
        box-shadow: 0 0 10px #999;
        width: 20%
    }
    
    aside header {
        background-color: #D6D6D6;
        padding: 5% 10%;
    }
    
    aside header h2 {
        color: #333;
        font-family: "Zrnic";
        font-size: 2vw;
        letter-spacing: 2px;
        margin-bottom: 12%;
        text-transform: uppercase
    }
    
    aside header h2 span {
        color: #1777D3;
        letter-spacing: 3px;
        margin-left: 0.5%
    }
    
    aside header p img {
        border-radius: 6px;
        cursor: pointer;
        width: 10%
    }
    
    aside header p:after {
        content: "\f0d7";
        color: #5B5A5B;
        cursor: pointer;
        font-family: fontawesome;
        margin-left: 5%;
        vertical-align: top
    }
    
    aside header p:hover:after {
        color: #1777D3;
    }
    
    aside ul {
        font-family: Arial, Helvetica, sans-serif;
        list-style: none;
        padding: 5% 10%
    }
    
    aside ul li {
        color: #333;
        cursor: pointer;
        font-size: 1vw;
        margin: 10% auto
    }
    
    aside ul .menuarrow::after {
        content: "\f107";
        font-family: FontAwesome;
        float: right
    }
    
    aside ul .active {
        color: #1777D3
    }
    
    aside ul li:hover {
        color: #1777D3
    }
    /* End Side Menu Bar */
    /* Start The Content Area */
    
    article {
        background-color: #EEEEEE;
        width: 80%;
        margin: auto;
        overflow: hidden;
    }
    /* Start Header of The Content Area */
    
    article header {
        background-color: #1777D3;
        overflow: hidden;
    }
    
    article header .left,
    article header .right {
        padding: 1% 1.5%
    }
    
    article header .left {
        width: 60%
    }
    
    article header .right {
        width: 40%
    }
    
    article header .left ul,
    article header .right ul {
        list-style: none
    }
    
    article header .right ul {
        display: flex;
    }
    
    article header .left ul li,
    article header .right ul li {
        color: #FFF;
        cursor: pointer;
        display: inline-block;
        font-size: 20px;
        margin-left: 5%;
        vertical-align: middle;
        -webkit-transition: all .2s ease;
        -moz-transition: all .2s ease;
        transition: all .2s ease
    }
    
    article header .left ul li i,
    article header .right ul li i {
        vertical-align: middle;
    }
    
    article header .left ul li:hover,
    article header .right ul li:hover {
        color: #333;
        -webkit-transition: all .2s ease;
        -moz-transition: all .2s ease;
        transition: all .2s ease
    }
    
    article header .right ul li img {
        border-radius: 50%
    }
    /* End Header of The Content Area */
    /* Start First Row In The Content Area */
    
    article .rowN1 .visitors,
    article .rowN1 .sales,
    article .rowN1 .orders {
        background-color: #FFF;
        box-shadow: 0 0 10px #CECECE;
        font-family: Arial, Helvetica, sans-serif;
        margin: 2.5%;
        padding: 2%;
        width: 20%
    }
    
    article .rowN1 .visitors .data,
    article .rowN1 .sales .data,
    article .rowN1 .orders .data {
        width: 55%
    }
    
    article .rowN1 .visitors .data p,
    article .rowN1 .sales .data p,
    article .rowN1 .orders .data p {
        color: #333;
        font-size: 0.8vw;
        margin-bottom: 5%
    }
    
    article .rowN1 .visitors .data h2,
    article .rowN1 .sales .data h2,
    article .rowN1 .orders .data h2 {
        color: #333;
        font-size: 1.5vw;
    }
    
    article .rowN1 .visitors .diagram,
    article .rowN1 .sales .diagram {
        width: 45%
    }
    
    article .rowN1 .visitors .diagram ul,
    article .rowN1 .sales .diagram ul {
        list-style: none;
        text-align: center
    }
    
    article .rowN1 .visitors .diagram ul li,
    article .rowN1 .sales .diagram ul li {
        background-color: #1777D3;
        display: inline-block;
        vertical-align: bottom;
        width: 7%;
    }
    
    article .rowN1 .visitors .diagram ul .bar1,
    article .rowN1 .sales .diagram ul .bar1 {
        padding-top: 40%
    }
    
    article .rowN1 .visitors .diagram ul .bar2,
    article .rowN1 .sales .diagram ul .bar2 {
        padding-top: 30%
    }
    
    article .rowN1 .visitors .diagram ul .bar3,
    article .rowN1 .sales .diagram ul .bar3 {
        padding-top: 60%
    }
    
    article .rowN1 .visitors .diagram ul .bar4,
    article .rowN1 .sales .diagram ul .bar4 {
        padding-top: 45%
    }
    
    article .rowN1 .visitors .diagram ul .bar5,
    article .rowN1 .sales .diagram ul .bar5 {
        padding-top: 35%
    }
    
    article .rowN1 .visitors .diagram ul .bar6,
    article .rowN1 .sales .diagram ul .bar6 {
        padding-top: 30%
    }
    
    article .rowN1 .visitors .diagram ul .bar7,
    article .rowN1 .sales .diagram ul .bar7 {
        padding-top: 40%
    }
    
    article .rowN1 .orders .circle {
        border: 8px solid #e0dee0;
        border-radius: 50%;
        padding: 8%;
        border-color: #1777D3;
        border-left-color: #e0dee0
    }
    /* End First Row In The Content Area */
    /* Start Second Row In The Content Area */
    
    article .row2 .messages {
        background-color: #FFF;
        box-shadow: 0 0 10px #CECECE;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0 2.5%;
        width: 15%
    }
    
    article .row2 .messages .circle {
        border: 4px solid #e0dee0;
        border-color: #1777D3;
        border-left-color: #e0dee0;
        border-radius: 50%;
        margin: 10% 20%;
        text-align: center;
    }
    
    article .row2 .messages .circle i {
        color: #757575;
        font-size: 2vw;
        padding: 33%
    }
    
    article .row2 .messages ul {
        border-top: 1px solid #DDDDDD;
        cursor: pointer;
        list-style: none
    }
    
    article .row2 .messages ul li {
        color: #767676;
        display: inline-block;
        font-size: 0.8vw;
        font-weight: bold;
        margin: 10% 0;
        text-align: center
    }
    
    article .row2 .messages ul li:first-of-type {
        padding-left: 5%;
        text-align: left;
        width: 75%
    }
    
    article .row2 .messages ul li:last-of-type {
        font-size: 0.8vw;
        font-weight: bold;
        padding-right: 5%;
        width: 20%
    }
    
    article .row2 .messages ul li i {
        text-align: right;
        vertical-align: middle
    }
    
    article .row2 .conversions {
        background-color: #FFF;
        box-shadow: 0 0 10px #CECECE;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0 2.5%;
        width: 15%
    }
    
    article .row2 .conversions .diagram {
        margin: 10% 20%;
    }
    
    article .row2 .conversions .diagram .bars {
        list-style: none;
        margin: 36% 0;
        text-align: center
    }
    
    article .row2 .conversions .diagram .bars li {
        display: inline-block;
        background-color: #1777D3;
        vertical-align: bottom
    }
    
    article .row2 .conversions .diagram .bar1 {
        padding-top: 40%;
        width: 8%
    }
    
    article .row2 .conversions .diagram .bar2 {
        padding-top: 20%;
        width: 8%
    }
    
    article .row2 .conversions .diagram .bar3 {
        padding-top: 60%;
        width: 8%
    }
    
    article .row2 .conversions .diagram .bar4 {
        padding-top: 40%;
        width: 8%
    }
    
    article .row2 .conversions .diagram .bar5 {
        padding-top: 30%;
        width: 8%
    }
    
    article .row2 .conversions .diagram .bar6 {
        padding-top: 60%;
        width: 8%
    }
    
    article .row2 .conversions .diagram .bar7 {
        padding-top: 50%;
        width: 8%
    }
    
    article .row2 .conversions .data {
        list-style: none;
        border-top: 1px solid #DDDDDD;
        cursor: pointer;
        list-style: none
    }
    
    article .row2 .conversions .data li {
        color: #767676;
        display: inline-block;
        font-size: 0.8vw;
        font-weight: bold;
        margin: 10% 0;
        text-align: center
    }
    
    article .row2 .conversions .data li:first-of-type {
        padding-left: 5%;
        text-align: left;
        width: 75%
    }
    
    article .row2 .conversions .data li:last-of-type {
        font-size: 0.8vw;
        font-weight: bold;
        padding-right: 5%;
        width: 20%
    }
    
    article .row2 .conversions .data li i {
        text-align: right;
        vertical-align: middle;
    }
    /* End Second Row In The Content Area */
    /* Start Third Row In The Content Area */
    
    article .row3 .tasks {
        background-color: #FFF;
        border-collapse: collapse;
        box-shadow: 0 0 10px #CECECE;
        font-family: Arial, Helvetica, sans-serif;
        margin: 2.5% 2.5% 6.5% 2.5%;
        text-align: left;
        width: 45%
    }
    
    article .row3 .tasks thead {
        color: #767676
    }
    
    article .row3 .tasks thead tr th {
        border-bottom: 1px solid #CECECE;
        font-size: 1vw;
        font-weight: normal;
        padding: 5% 2% 2% 2%
    }
    
    article .row3 .tasks tbody tr td {
        padding: 2%;
        border-bottom: 1px solid #CECECE;
    }
    
    article .row3 .tasks tbody tr td a {
        color: #1777D3;
        text-decoration: none;
        font-size: 1vw;
        text-transform: uppercase
    }
    
    article .row3 .tasks tbody .row-1 td:nth-of-type(2),
    article .row3 .tasks tbody .row-2 td:nth-of-type(2),
    article .row3 .tasks tbody .row-3 td:nth-of-type(2),
    article .row3 .tasks tbody .row-4 td:nth-of-type(2),
    article .row3 .tasks tbody .row-5 td:nth-of-type(2),
    article .row3 .tasks tbody .row-6 td:nth-of-type(2) {
        width: 20%
    }
    
    article .row3 .tasks tbody tr td button {
        color: #FFF;
    }
    
    article .row3 .tasks tbody .row-1 td button {
        background-color: #fd800a;
        border: none;
        font-size: 1vw;
        padding: 0 6%
    }
    
    article .row3 .tasks tbody .row-2 td button {
        background-color: #7faf35;
        border: none;
        font-size: 1vw;
        padding: 0 6%
    }
    
    article .row3 .tasks tbody .row-3 td button {
        background-color: #0e9cff;
        border: none;
        font-size: 1vw;
        padding: 0 6%
    }
    
    article .row3 .tasks tbody .row-4 td button {
        background-color: #078d86;
        border: none;
        font-size: 1vw;
        padding: 0 6%
    }
    
    article .row3 .tasks tbody .row-5 td button {
        background-color: #f82f35;
        border: none;
        font-size: 1vw;
        padding: 0 6%
    }
    
    article .row3 .tasks tbody .row-6 td button {
        background-color: #078d86;
        border: none;
        font-size: 1vw;
        padding: 0 6%
    }
    
    article .row3 .tasks tbody tr td progress {
        -webkit-appearance: none;
    }
    
    article .row3 .tasks tbody tr td progress::-webkit-progress-bar {
        background-color: #f3f3f3;
        border-radius: 10px;
        height: 40%;
        margin-top: 3%
    }
    
    article .row3 .tasks tbody .row-1 td progress::-webkit-progress-value {
        background-color: #fd800a;
        border-radius: 10px;
    }
    
    article .row3 .tasks tbody .row-2 td progress::-webkit-progress-value {
        background-color: #7faf35;
        border-radius: 10px;
    }
    
    article .row3 .tasks tbody .row-3 td progress::-webkit-progress-value {
        background-color: #fd800a;
        border-radius: 10px;
    }
    
    article .row3 .tasks tbody .row-4 td progress::-webkit-progress-value,
    article .row3 .tasks tbody .row-6 td progress::-webkit-progress-value {
        background-color: #078d86;
        border-radius: 10px;
    }
    
    article .row3 .tasks tbody .row-5 td progress::-webkit-progress-value {
        background-color: #f82f35;
        border-radius: 10px;
    }
    
    article .row3 .tasks tbody .row-1 td:nth-of-type(4),
    article .row3 .tasks tbody .row-2 td:nth-of-type(4),
    article .row3 .tasks tbody .row-3 td:nth-of-type(4),
    article .row3 .tasks tbody .row-4 td:nth-of-type(4),
    article .row3 .tasks tbody .row-5 td:nth-of-type(4),
    article .row3 .tasks tbody .row-6 td:nth-of-type(4) {
        color: #767676;
        font-size: 12px
    }
    
    article .row3 .statistics {
        background-color: #FFF;
        border-collapse: collapse;
        box-shadow: 0 0 10px #CECECE;
        font-family: Arial, Helvetica, sans-serif;
        margin: 2.5%;
        width: 45%
    }
    
    article .row3 .statistics tr th {
        color: #767676;
        font-size: 12px;
        font-weight: normal;
        padding: 0.5%;
        text-align: right;
        width: 15%
    }
    
    article .row3 .statistics .head1 th {
        font-size: 16px;
        padding: 4%;
        text-align: left
    }
    
    article .row3 .statistics tr td {
        border-right: 1px solid #f3f3f3;
        border-left: 1px solid #f3f3f3;
        font-size: 16px
    }
    
    article .row3 .statistics .row1 td {
        border: none
    }
    
    article .row3 .statistics .row2 td {
        border-top: 1px solid #f3f3f3
    }
    
    article .row3 .statistics .row10 td {
        border-bottom: 1px solid #f3f3f3
    }
    
    article .row3 .statistics tr td ul {
        list-style: none;
        text-align: center
    }
    
    article .row3 .statistics tr td ul li {
        display: inline-block;
        width: 10%
    }
    
    article .row3 .statistics tr td .quarter1 li:first-of-type,
    article .row3 .statistics tr td .quarter2 li:first-of-type,
    article .row3 .statistics tr td .quarter3 li:first-of-type,
    article .row3 .statistics tr td .quarter4 li:first-of-type {
        background-color: #0e9cff;
        color: #0e9cff
    }
    
    article .row3 .statistics tr td .quarter1 li:nth-of-type(2),
    article .row3 .statistics tr td .quarter2 li:nth-of-type(2),
    article .row3 .statistics tr td .quarter3 li:nth-of-type(2),
    article .row3 .statistics tr td .quarter4 li:nth-of-type(2) {
        background-color: #fd800a;
        color: #fd800a
    }
    
    article .row3 .statistics tr td .quarter1 li:nth-of-type(3),
    article .row3 .statistics tr td .quarter2 li:nth-of-type(3),
    article .row3 .statistics tr td .quarter3 li:nth-of-type(3),
    article .row3 .statistics tr td .quarter4 li:nth-of-type(3) {
        background-color: #239825;
        color: #239825
    }
    
    article .row3 .statistics tr td .quarter1 li:nth-of-type(4),
    article .row3 .statistics tr td .quarter2 li:nth-of-type(4),
    article .row3 .statistics tr td .quarter3 li:nth-of-type(4),
    article .row3 .statistics tr td .quarter4 li:nth-of-type(4) {
        background-color: #f82f35;
        color: #f82f35
    }
    
    article .row3 .statistics tr td .quarter1 li:last-of-type,
    article .row3 .statistics tr td .quarter2 li:last-of-type,
    article .row3 .statistics tr td .quarter3 li:last-of-type,
    article .row3 .statistics tr td .quarter4 li:last-of-type {
        background-color: #8961a8;
        color: #8961a8
    }
    
    article .row3 .statistics tfoot tr td {
        border: none;
        color: #767676;
        padding: 2%;
        text-align: center
    }
    /* End Third Row In The Content Area */
    /* End The Content Area */
    /* My Framework */
    
    .clearfix {
        clear: both
    }
    
    .fl-left {
        float: left
    }
    
    .fl-right {
        float: right
    }

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div id="datesh">
<select class="form-control" id="month">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
</select>



<select class="form-control" id="year">
<option>2021</option>
  <option>2022</option>
  <option>2023</option>
  <option>2024</option>
  <option>2025</option>
  <option>2026</option>
  <option>2027</option>
  <option>2028</option>
  <option>2029</option>

</select>



<button id="click"> show satisfaciation </button>

</div>
  <!-- Start Side Menu Bar -->

  <?php

$arraym = array();    
// echo "office id"  ;

?>
@foreach($pr2  as $pr2)
<?php

$arraym = array($pr2->id  => 0); ;
 //echo $pr2->id  ;

?>



@endforeach

















</br>



<?php
$vara = 0 ;
$vara2 = 0 ;
?>
@foreach($pr  as $pr)
<?php


 echo $pr->finalprice  ;
 $vara += $pr->finalprice  ;





 $arraym[$pr->officeid] +=  $pr->finalprice ;



 echo "</br>";

?>



@endforeach

    <!-- End Side Menu Bar -->

    <!-- Start The Content Area -->

    <article class="fl-right">

        <!-- Start Header of The Content Area -->
   
        <!-- End Header of The Content Area -->

        <!-- Start First Row In The Content Area -->
        <?php
echo "for all : ". $vara  ;


?>




        <section class="rowN1">
   
            <div class="fl-left sales">
                <div class="fl-left data">
                    <p>Sales</p>
                    <h2>&dollar;142,384</h2>
                </div>
                <div class="fl-left diagram">
                    <ul>
                        <li class="bar1"></li>
                        <li class="bar2"></li>
                        <li class="bar3"></li>
                        <li class="bar4"></li>
                        <li class="bar5"></li>
                        <li class="bar6"></li>
                    </ul>
                </div>
            
       
                








        </section>

        <section class="rowN1">
   
            <div class="fl-left sales">
                <div class="fl-left data">
                    <p>Sales</p>
                    <h2>&dollar;




                    <?php
//echo "for all : ". $vara  ;






//echo "array : ". $arraym  ;

//print implode(", ", $arraym);    //prints 1, 2, 3
print json_encode($arraym);
//print_r($arraym);

?>











                    </h2>
                </div>
                <div class="fl-left diagram">
                    <ul>
                        <li class="bar1"></li>
                        <li class="bar2"></li>
                        <li class="bar3"></li>
                        <li class="bar4"></li>
                        <li class="bar5"></li>
                        <li class="bar6"></li>
                    </ul>
                </div>
            
                
        </section>

        <!-- End Third Row In The Content Area -->
    </article>
    <script>
 document.getElementById('click').onclick = function(){
  var myyear =  document.getElementById('month').value ;
  var mymonth =  document.getElementById('year').value ; 
//alert('gg') ;
window.location.href = '/sats/' + myyear + '/' +mymonth

 };


    </script>
    <!-- End The Content Area -->
<!-- partial -->
  
</body>
</html>
