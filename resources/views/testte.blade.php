<?php

$token = "5270106599:AAHNw1gbNtAWM_axGaVOYaBxEoosUWFujCc" ;
$data = [
'text' => 'my messeage' ,
'chat_id' => '-1001414255935'

] ; 
$mytext = "my messeage" ;

$a = file_get_contents ("https://api.telegram.org/bot".$token ."/sendMessage?chat_id=@firstbottest&text=".$mytext) ;

?>