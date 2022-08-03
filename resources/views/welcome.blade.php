<?php
if (Auth::check()) { 
$userm = Auth::user();

echo $userm->name ;



}
?>