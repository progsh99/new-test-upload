<?php

use Illuminate\Support\Facades\Route;
use App\Models\User ;
use App\Models\Teststorage ;
use App\Models\Officeop ;
use App\Models\Finalmoney ;
use App\Models\Publicimg ;
use App\Models\Officeoptest ;
use App\Models\Operation ;
use App\Models\Service ;
use App\Models\Color ;
use App\Models\Menu ;
use App\Models\Offer ;
use App\Models\Country ;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\BookEmail ;

use Illuminate\Support\Facades\Mail ;

Route::get('/', function () {
    if (Auth::check()) { 
        $useremail = Auth::user();
//echo $useremail->email ;





        if ($useremail->email == 'alaa.ibrahim96k@gmail.com') {
            $operations = Operation::all(); 
            $operations3 = Service::all();          
            $arrop = Array('pr' =>   $operations , 'pr3' =>   $operations3); 
            
            $ofoperations = Officeop::all();         
            
            
                  
            $arrop2 = Array('pr2' =>   $ofoperations ); 
            
            return view('denta', $arrop ,$arrop2 ); 
        }

        else  {
            $operations = Operation::all();         
            $arrop = Array('pr' =>   $operations);        
            $ofoperations = User::all();         
            $ofoperations2 = Service::all();   
            $offer = Offer::all();
            $country = Country::all();
            $arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country  );       
            return view('denta3' , $arrop ,$arrop2  );
          //  return view('denta3', $arrop); 

        }
      

     



     }
     else {
        return redirect('/mynewlogin');
     }


});
















Route::get('/public2', function () {
   
        $useremail = Auth::user();
//echo $useremail->email ;
$operations = Operation::all();         
$arrop = Array('pr' =>   $operations); 

$ofoperations = User::all();         


$ofoperations2 = Service::all();   

$colors = Color::all(); 
//first 

//$users = User::all()->except(Auth::id());      
$pubimg = Publicimg::all();
$offer = Offer::all();
$menuitems = Menu::find(1);
//->get();
//Publicimg
$arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'colors'  =>  $colors , 'pubimg'  =>  $pubimg  , 'menuitems'  =>  $menuitems , 'offer'  =>  $offer   );       
//$arrop3 = Array('pr3' =>   $ofoperations2); 

   return view('forpublic2', $arrop ,$arrop2  ); 

});


Route::get('/public3', function () { 
    $useremail = Auth::user();
$operations = Operation::all();         
$arrop = Array('pr' =>   $operations); 
$ofoperations = User::all();         
$ofoperations2 = Service::all();   
$colors = Color::find(1); 
$menuitems = Menu::find(1);    
$pubimg = Publicimg::all();
$offer = Offer::all();
$arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'colors'  =>  $colors , 'pubimg'  =>  $pubimg , 'menuitems'  =>  $menuitems , 'offer'  =>  $offer );       
return view('forpublic3', $arrop ,$arrop2  ); 
});


Route::get('/editmenu', function () {
$menuitems = Menu::find(1);
$arrop2 = Array( 'menuitems'  =>  $menuitems );       
return view('editmenu', $arrop2  ); 
});

Route::post('/updatemenu', function (Request $request) {
    $menuitems = Menu::find(1);
    $menuitems->item1 = $request->item1 ;
    $menuitems->item2 = $request->item2 ;
    $menuitems->item3 = $request->item3 ;
    $menuitems->item4 = $request->item4 ;
    $menuitems->item5 = $request->item5 ;
    $menuitems->update();
    return redirect('/dashboard');
    });






Route::get('/addprice/{id}', function () {
    $par = request()->route()->parameter('id');
    $of = DB::table('officeops')->where('opid', $par)->first();
$arrop = Array('pr' =>   $of); 
    return view('addprice',$arrop );
});


Route::get('/addimagepublic', function () {
   
    return view('addimagepublic' );
});
Route::get('/addoffer', function () {
    return view('addoffer' );
});
Route::get('/showopcon/{id}', function () {
   $par = request()->route()->parameter('id');
    $ids2  = DB::table('countries')->where('id', $par )->first();
    $ids1 = json_decode($ids2->operationids, true)  ;
   $model = Operation::query()->find($ids1);
 $arrop = Array('pr' =>   $model); 
 $conname = $ids2->name  ;
    $ofoperations = User::all();         
    $ofoperations2 = Service::all();   
    $offer = Offer::all();
    $country = Country::all();
    $arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country ,  'conname'  => $conname );       
return view('showopcon' , $arrop ,  $arrop2);  
});

Route::get('/showopconman/{id}', function () {
    $par = request()->route()->parameter('id');
     $ids2  = DB::table('countries')->where('id', $par )->first();
     $ids1 = json_decode($ids2->operationids, true)  ;
    $result = Operation::whereIn('mainid', $ids1 )->get();
  $arrop = Array('pr' =>    $result); 
  $conname = $ids2->name  ;
  $conname2 = $ids2->id  ; 
     $country = Country::all();
     $arrop2 = Array( 'con'  => $country ,  'conname'  => $conname ,  'conname2'  => $conname2 );       
return view('showopconman' , $arrop ,  $arrop2); 
 });



Route::get('/lifecare', function () {
    $operations = Operation::all();         
    $arrop = Array('pr' =>   $operations); 
    $ofoperations = User::all();         
    $ofoperations2 = Service::all();   
    $offer = Offer::all();
    $country = Country::all();
    $arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country  );       
    return view('lifecare' , $arrop ,$arrop2  );
});
Route::get('/con', function () {
    $country = Country::all();
    $arrop2 = Array( 'con'  => $country  );  
    return view('country' ,  $arrop2);
});

Route::post('/addoffer', function (Request $request) {
    $offer = new Offer();
    $offer->title = $request->title ;
    $offer->offer = $request->offer ;
    $offer->price = $request->price ;
    $offer->save();
    $arrm = Array('prm' =>   $offer); 
    return view('/addofferfiles' , $arrm );
});










Route::post('/addimagepublic', function (Request $request) {
    $orders = Publicimg::all();
    if($orders->isEmpty())
    {
        $newbo = new Publicimg();
        $newbo->que = $request->quetext ;
       $newbo->image = "no" ;
       $newbo->act = "true" ;
     $newbo->save();
       $data = Array('pr' =>   $newbo); 
       return view('addimagepublicview' , $data);
     }
     else{
        $newbo = new Publicimg();
        $newbo->que = $request->quetext ;
       $newbo->image = "no" ;
       $newbo->act = "false" ;
     $newbo->save();
       $data = Array('pr' =>   $newbo); 
       return view('addimagepublicview' , $data);
     }
});

Route::get('/addimagepublicview', function () {
   
    return view('addimagepublicview' );
});

Route::get('/showimagepublicview', function () {
    $operations = Publicimg::all();         
    $arrop = Array('pr' =>   $operations); 
    $operations2 = Publicimg::all();         
    $arrop2 = Array('pr2' =>   $operations2); 
    return view('showimagepublicview', $arrop ,  $arrop2 ); 
});


Route::get('/showoffers', function () {
    $operations = Offer::all();         
    $arrop = Array('pr' =>   $operations); 
    return view('showoffers', $arrop ); 
});

Route::get('/deletecoun/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $pr  = Country::find($vrm);
   $pr->delete();
    return redirect('/con');
});

Route::get('/deleteoffer/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $pr  = Offer::find($vrm);

   $pr->delete();


    return redirect('/showoffers');


});







Route::get('/editpubimagepr/{id}/{id2}', function () {
    $vrm = request()->route()->parameter('id');
    $pr = $post = Publicimg::find($vrm);
  $pr->act = 'false' ;
 
   $pr->update();


   $vrm2 = request()->route()->parameter('id2');
   $pr2 = $post = Publicimg::find($vrm2);
 $pr2->act = 'true' ;

  $pr2->update();

    return redirect('/showimagepublicview');


});



Route::get('/deletepubimg1/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('publicimgs')->where('id', $vrm);

   $of->delete();

    $ofoperations = Publicimg::all()->first();

    $ofoperations->act = 'true' ;
    $ofoperations->update();
    return redirect('/showimagepublicview');


});


Route::get('/createcon', function () {
  
    

 $operations2 = Operation::all();         
   $arrop2 = Array('pr2' =>   $operations2); 
  //  $operations = Country::find(6);         
    //$arrop = Array('pr' =>   $operations); 
    

 //  $operations = Country::find(6);         
    //$arrop = Array('pr' =>   $operations); 

    return view('createcon' , $arrop2); 
   


});

Route::post('/addconop', function (Request $request) {
    //$par = $request->id ;
       // $pr = $post = Publicimg::find($par);
     // $op->files=json_encode($data1);
   $coun = new Country();
     $coun->operationids = json_encode($request->cars )  ;
     $coun->conid = Str::random(9); 
     $coun->name = $request->name ;
     $coun->image = "" ;
      $coun->save();

    $arrm = Array('prm' =>    $coun); 
   return view('/addconfiles' , $arrm );
      // dd($request->cars) ;
       //dd("created succefully") ;
        // return redirect('/showimagepublicview');
    });

Route::get('/selectcon/{id}', function () {
    $par = request()->route()->parameter('id');
  $operations = Country::find($par );         
    $arrop = Array('pr' =>   $operations); 
    

 $operations2 = Operation::all();         
   $arrop2 = Array('pr2' =>   $operations2); 
  //  $operations = Country::find(6);         
    //$arrop = Array('pr' =>   $operations); 
    

 //  $operations = Country::find(6);         
    //$arrop = Array('pr' =>   $operations); 

    return view('selectcon' , $arrop , $arrop2); 
   


});

Route::get('/showbyid/{id}', function () {
    $par = request()->route()->parameter('id');
    $ids2  = DB::table('countries')->where('id', $par )->first();
    $ids1 = json_decode($ids2->operationids, true)  ;
   // $ids =  ["6","7"] ;
   $model = Offer::query()->find($ids1);
   $arrop = Array('pr2' =>   $model); 
    return view('selectcon' , $arrop ); 
    //dd($model );
});

Route::get('/showopman/{id}', function () {
    $par = request()->route()->parameter('id');
    $ids2  = DB::table('countries')->where('id', $par )->first();

    $ids1 = json_decode($ids2->operationids, true)  ;
   // $ids =  ["6","7"] ;
   $model = Offer::query()->find($ids1);
$users = Operation::where('mainid', '!=', $ids1)->get();

   $arrop = Array('pr' =>   $users);
   
$conname = $ids2->name  ;
$conname2 = $ids2->id  ;
   $ofoperations = User::all();         
   $ofoperations2 = Service::all();   
   

   $offer = Offer::all();
   $country = Country::all();
   $arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country ,  'conname'  => $conname  , 'conname2'  => $conname2  );  
   //dd($users );
   return view('showbyid2' , $arrop2 , $arrop  ); 
    //dd($model );
});



 
    Route::get('/deleteopitem/{id}/{id2}', function () {
   
        $par = request()->route()->parameter('id');
        $par2 = request()->route()->parameter('id2');
        $of = DB::table('countries')->where('id', $par )->first();
        $of2 =  Country::find($par) ;
    $json2 = $of->operationids ;
//dd($json2);
$las = json_decode($json2, true) ;

if ( $par2 == end($las) ) {
    $nyjf = ',"'.$par2.'"]' ;
    $var2 = str_replace($nyjf, "]", $json2);
$of2->operationids = $var2 ;
$of2->update();
//dd($var2);
}
else if ( $par2 ==  $las[0]) {
    $nyjf = '"'.$par2.'",' ;
    $var2 = str_replace($nyjf, "", $json2);
$of2->operationids = $var2 ;
$of2->update();
//dd($var2);
   // dd("first item") ;
}
else {
  //  dd("middle item") ;
  $nyjf = ',"'.$par2.'",' ;
  $var2 = str_replace($nyjf, "", $json2);
$of2->operationids = $var2 ;
$of2->update();
//dd($var2);
}
/*
$var2 = str_replace($nyjf, ",", $json2);
$of2->operationids = $var2 ;
dd($var2);
*/
//dd( end($las)  );
//dd($las[0]) ;
       // $of2->update();

    
    });
    Route::get('/additemarr/{id}/{id2}', function () {
        $conid = request()->route()->parameter('id');
      $par = request()->route()->parameter('id2');
       // $par2 = request()->route()->parameter('id2');
       $nyjf = ',"'.$par.'"]' ;
        $of = DB::table('countries')->where('id', $conid )->first();
    
        $of2 =  Country::find( $conid) ;
    $json2 = $of->operationids ;

    $var2 = str_replace(']',  $nyjf , $json2);
  // dd($var2 );
   $of2->operationids =   $var2  ;
   $of2->update();

    
    });

   



Route::get('/deletepubimg/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('publicimgs')->where('id', $vrm);

    $of->delete();

    return redirect('/showimagepublicview');


});







Route::post('/addimagepublicid', function (Request $request) {
   

$par = $request->id ;

    $pr =  Publicimg::find($par);

 //$newbo = new Publicimg();
 $par2 = $request->image  ;
   $pr->image =  $par2  ;
   $pr->update();
     return redirect('/showimagepublicview');
});






Route::post('/addprice/{id}', function (Request $request) {
    $infovalue1 = 0;
$infovalue2 = 0;
$infovalue3 = 0;
$infovalue4 = 0;
$infovalue5 = 0;
$infovalue6 = 0;
$infovalue7 = 0;
$infovalue8 = 0;
$infovalue9 = 0;


$info1 = "info" ;
$info2 = "info" ;
$info3 = "info" ;
$info4 = "info" ;
$info5 = "info" ;
$info6 = "info" ;
$info7 = "info" ;
$info8 = "info" ;
$info9 = "info" ;

$addmoney = 0;
$finalmoney = 0 ;


    $par = request()->route()->parameter('id');
    $pr = DB::table('officeops')->where('opid', $par)->first();

   // $pr = Officeoptest::find($vr);

    $newbo = new Finalmoney();
   $newbo->officeid = $pr->officeid ;
   $newbo->opcode =  $par ;
   $newbo->mainid = $pr->mainid ;
   $newbo->opid = $pr->opid ;
   $newbo->officename = $pr->officename ;
   $newbo->city = $pr->city ;
   $newbo->id = $pr->id ;
   $newbo->age = $pr->age;
   $newbo->employname = $pr->employname ;
   $newbo->patient = $pr->patient ;
   $newbo->patient = $pr->patient ;
   $newbo->gender = $pr->gender ;
   $newbo->phone = $pr->phone ;
   $newbo->address = $pr->address ;
   $newbo->operationprice = $pr->operationprice ;
   $newbo->visatype =  $pr->visatype ;
   $newbo->visaprice = $pr->visaprice ;
   $newbo->flytype = $pr->flytype ;
   $newbo->flyprice = $pr->flyprice ;

   $newbo->commisionprice = $pr->commisionprice ;
   $newbo->passport = $pr->passport ;
   $newbo->files = $pr->files ;
  // $newbo->beforefinalprice = $pr->beforefinalprice ;
 //  $newbo->backprice = $pr->backprice ;
  
   $newbo->opcode = $pr->opcode ;
   $newbo->operationname = $pr->operationname ;
   $newbo->officemainid = $pr->officemainid ;


if ($request->info1) {
    $info1 = $request->info1 ;
}
if ($request->info2) {
    $info2 = $request->info2 ;
}
if ($request->info3) {
    $info3 = $request->info3 ;
}
if ($request->info4) {
    $info4 = $request->info4 ;
}
if ($request->info5) {
    $info5 = $request->info5 ;
}
if ($request->info6) {
    $info6 = $request->info6 ;
}
if ($request->info7) {
    $info7 = $request->info7 ;
}
if ($request->info8) {
    $info8 = $request->info8 ;
}
if ($request->info9) {
    $info9 = $request->info9 ;
}




if ($request->infovalue1) {
    $infovalue1 = $request->infovalue1 ;
}
if ($request->infovalue2) {
    $infovalue2 = $request->infovalue2 ;
}
if ($request->infovalue3) {
    $infovalue3 = $request->infovalue3 ;
}
if ($request->infovalue4) {
    $infovalue4 = $request->infovalue4 ;
}
if ($request->info5) {
    $infovalue5 = $request->infovalue5 ;
}
if ($request->infovalue6) {
    $infovalue6 = $request->infovalue6 ;
}
if ($request->infovalue7) {
    $infovalue7 = $request->infovalue7 ;
}
if ($request->infovalue8) {
    $infovalue8 = $request->infovalue8 ;
}
if ($request->infovalue9) {
    $infovalue9 = $request->infovalue9 ;
}




$addmoney = $infovalue1 +$infovalue2 + $infovalue3 + $infovalue4 + $infovalue5 + $infovalue6 + $infovalue7 + $infovalue8 + $infovalue9 ; 


$newbo->addmoney = $addmoney ;

   $newbo->finalmoney = $request->finalmoneyadd ;



   // $request
   //  $op->officemainid = $user->mainid ;
   
   
   //   $op->operationprice = $operations->price ;
   //$op->operationnaem = $operations->opname ;
   
   $newbo->save();

   DB::table('officeops')->where('opid', $par)->delete();
   return redirect('/');
     
});



Route::get('/addnew', function () {
    return view('addnew');
});
Route::get('/testte', function () {
    return view('testte');
});



Route::get('/deleteof/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('users')->where('mainid', $vrm);

    $of->delete();

    return redirect('/');


});








Route::get('/showoppublic/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('operations')->where('mainid', $vrm)->first();
$arrop = Array('pr' =>   $of); 


$ofoperations = User::all();         


$ofoperations2 = Service::all();   

//$colors = Color::find(1); 
//first 
//  $menuitems = Menu::find(1);
//$users = User::all()->except(Auth::id());      
//  $pubimg = Publicimg::all();
$offer = Offer::all();
$country = Country::all();
//->get();
//Publicimg
$arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country  );       
//$arrop3 = Array('pr3' =>   $ofoperations2); 

// return view('forpublic3', $arrop ,$arrop2  );



return view('showoppublic',$arrop2 ,$arrop ); 
});


Route::get('/showoservicepub/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('operations')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('showoservicepub',$arrop2 ); 
});


Route::get('/showop/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('operations')->where('mainid', $vrm)->first();
$arrop2 = Array('pr' =>   $of); 
return view('showop',$arrop2 ); 
});




Route::get('/showopad/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('operations')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('showopad',$arrop2 ); 
});


Route::get('/showserpriv/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('services')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('showserpriv',$arrop2 ); 
});



Route::get('/showser/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('services')->where('mainid', $vrm)->first();
$arrop2 = Array('pr' =>   $of); 
return view('showservicepub',$arrop2 ); 
});

Route::get('/showserad/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('services')->where('mainid', $vrm)->first();
$arrop2 = Array('pr' =>   $of); 
return view('showservicepub',$arrop2 ); 
});
Route::get('/editimageop/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('operations')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('editimageop',$arrop2 ); 
});

Route::get('/editimageopen/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('operations')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('editimageopen',$arrop2 ); 
});

Route::get('/editserimage/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('services')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('editserimage',$arrop2 ); 
});

Route::get('/editserimageen/{id}', function () {
    $vrm = request()->route()->parameter('id');
    $of = DB::table('services')->where('mainid', $vrm)->get();
$arrop2 = Array('pr' =>   $of); 
return view('editserimageen',$arrop2 ); 
});
Route::get('/public', function () {
    $operations = Operation::all();         
    $arrop = Array('pr' =>   $operations); 
    
    $ofoperations = User::all();   
    $colors = Color::all();         
    $arrop2 = Array('pr2' =>   $ofoperations , 'colors'  =>  $colors ); 

         
   

    return view('forbublic', $arrop ,$arrop2 ); 
});

Route::get('/justtest', function () {

    return view('justtest'); 
});
Route::get('/dashboard', function () {
   
   
    $operations = Operation::all()->count();  
    $ofoperations = User::all()->count(); 
    $offers = Offer::all()->count();   
    $services = Service::all()->count();   
    $arrop = Array('pr' =>   $operations ,'pr2' =>   $ofoperations ,'pr3' =>   $offers ,'pr4' =>   $services  ); 
    
          
   // $arrop2 = Array('pr2' =>   $ofoperations); 



    return view('dashboard', $arrop ); 
});



Route::get('/denta', function () {
    $operations = Operation::all();    
    $operations3 = Service::all();        
    $arrop = Array('pr' =>   $operations , 'pr3' =>   $operations3); 
         

    $ofoperations = Officeop::all();         
    $arrop2 = Array('pr2' =>   $ofoperations); 
    return view('denta', $arrop ,$arrop2 ); 
});



Route::get('mlogo', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('lgoin', '\App\Http\Controllers\Auth\LoginController@login')->name('login');



Route::get('/mynewlogin', function () {
    return view('mynewlogin');
 });


Route::get('/mlog', function () {
   return view('justtest');
});

Route::get('/lgoin', function () {
    return view('justtest');
});


Route::get('/alloffice', function () {

    $filterData = DB::table('finalmoneys')->get();


    $ofiices = User::all();
    
        
    
        $arr = Array('pr' =>   $filterData); 
        $arr2 = Array('pr2' =>   $ofiices); 
        //$arr = Array('pr' =>   $filterData); 
             return view('alloffice2',$arr ,$arr2  );

  
});



Route::get('/showoffice', function () {
    $ofiices = User::all();
        $arr = Array('pr' =>   $ofiices); 
             return view('showoffices',$arr) ;
});





Route::get('/sats/{id}/{id2}/{id3}', function () {
    $vr = request()->route()->parameter('id');
    $vr2 = request()->route()->parameter('id2');
    $vr3 = request()->route()->parameter('id3');
    $filterData = DB::table('finalmoneys')->where('officemainid', $vr)->where('created_at','LIKE','%'.$vr2.'-%')->where('created_at','LIKE','%-'.$vr3.'-%')->get();

  //$filterData = DB::table('officeops')->where('officemainid', $vr)->where('created_at','LIKE','%'.$vr2.'-%')->get();



  $staffinfo2 = DB::table('users')->where('mainid', $vr);



$staffinfo2 = $staffinfo2->get();

  

    $arr = Array('pr' =>   $filterData);
    $arr2 = Array('pr2' =>   $staffinfo2); 
    

       return view('stare',$arr , $arr2);


    });

    Route::get('/satsoffice/{id}/{id2}/{id3}', function () {
        $vr = request()->route()->parameter('id');
        $vr2 = request()->route()->parameter('id2');
        $vr3 = request()->route()->parameter('id3');
        $filterData = DB::table('finalmoneys')->where('officemainid', $vr)->where('created_at','LIKE','%'.$vr2.'-%')->where('created_at','LIKE','%-'.$vr3.'-%')->get();
    
      //$filterData = DB::table('officeops')->where('officemainid', $vr)->where('created_at','LIKE','%'.$vr2.'-%')->get();
    
    

      $staffinfo2 = DB::table('users')->where('mainid', $vr);



      $staffinfo2 = $staffinfo2->get();
      
        
      
          $arr = Array('pr' =>   $filterData);
          $arr2 = Array('pr2' =>   $staffinfo2); 


           return view('stareoffice',$arr , $arr2);
    
    
        });



    Route::get('/satsof/{id}/{id2}', function () {
        $vr = request()->route()->parameter('id');
        $vr2 = request()->route()->parameter('id2');
        //$vr3 = request()->route()->parameter('id3');
        $filterData = DB::table('finalmoneys')->where('created_at','LIKE','%'.$vr.'-%')->where('created_at','LIKE','%-'.$vr2.'-%')->get();
        $ofiices = User::all();
    
        $arr = Array('pr' =>   $filterData); 
        $arr2 = Array('pr2' =>   $ofiices); 
        //$arr = Array('pr' =>   $filterData); 
             return view('stareof',$arr ,$arr2  );
        });






    Route::get('/sat/{id}', function () {

        $vr = request()->route()->parameter('id');
        $staffinfo = DB::table('finalmoneys')->where('officemainid', $vr);
    
       
        $staffinfo2 = DB::table('users')->where('mainid', $vr);


        // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));
     
        //$staffinfo =  Officeop::where('officeid',$vr) ;
    
     $staffinfo = $staffinfo->get()->reverse()->values();
     $staffinfo2 = $staffinfo2->get();
    
        $arr = Array('pr' =>   $staffinfo); 
        $arr2 = Array('pr2' =>   $staffinfo2); 
        return view('satfirst'  ,$arr , $arr2 );

    });



    Route::get('/satof/{id}', function () {

        $vr = request()->route()->parameter('id');
        $staffinfo = DB::table('finalmoneys')->where('officemainid', $vr);
    
       
        $staffinfo2 = DB::table('users')->where('mainid', $vr);


        // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));
     
        //$staffinfo =  Officeop::where('officeid',$vr) ;
    
     $staffinfo = $staffinfo->get()->reverse()->values();
     $staffinfo2 = $staffinfo2->get();
    
        $arr = Array('pr' =>   $staffinfo); 
        $arr2 = Array('pr2' =>   $staffinfo2); 
        return view('satof'  ,$arr , $arr2 );

    });



Route::get('/office/{id}', function () {
    $vr = request()->route()->parameter('id');
    $staffinfo = DB::table('officeops')->where('officeid', $vr);

    // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));
 
    //$staffinfo =  Officeop::where('officeid',$vr) ;

 $staffinfo = $staffinfo->get();

    $arr = Array('staffinfo' =>   $staffinfo); 




    return view('officeop',$arr);



    // $staffinfo =  Officeop::where('officeid',$vr) ;
   /* foreach ($staffinfo as $staffinfo) {
        echo $staffinfo->officename;
    }
    */


 //   return view('officeop', ['vr' => $ $vr ], compact('vr'));


 });




Route::get('/op/{id}', function () {

   $vr = request()->route()->parameter('id');


   $products = DB::table('finalmoneys')->where('opid', $vr);


   // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));

   //$staffinfo =  Officeop::where('officeid',$vr) ;

$products = $products->get();

    $arr = Array('pr' =>  $products); 

    return view('op',$arr);
  //  return view('op', ['pr' => $products], compact('products'));

   // return view('op');
});



Route::get('/opof/{id}', function () {

    $vr = request()->route()->parameter('id');
 
 
    $products = DB::table('finalmoneys')->where('opid', $vr);
 
 
    // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));
 
    //$staffinfo =  Officeop::where('officeid',$vr) ;
 
 $products = $products->get();
 
     $arr = Array('pr' =>  $products); 
 
     return view('opof',$arr);
   //  return view('op', ['pr' => $products], compact('products'));
 
    // return view('op');
 });



Route::get('/op3/{id}', function () {

    $vr = request()->route()->parameter('id');
 
 
    $products = DB::table('finalmoneys')->where('opid', $vr);
 
 
    // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));
 
    //$staffinfo =  Officeop::where('officeid',$vr) ;
 
 $products = $products->get();
 
     $arr = Array('pr' =>  $products); 
 
     return view('op3',$arr);
   //  return view('op', ['pr' => $products], compact('products'));
 
    // return view('op');
 });






Route::get('/addop', function () {




    return view('addop');
 });

 Route::get('/addser', function () {

    return view('addser');
 });

 Route::get('/showop', function () {

   $operations = Operation::all();        
        $arrop = Array('pr' =>   $operations); 
    return view('showup', $arrop);
 });

Route::get('/deletebook/{id}', function () {
    $vr = request()->route()->parameter('id');
    $prd = Officeoptest::find($vr);
    $prd->delete();


    return redirect('/');

});

Route::get('/deleteop/{id}', function () {
    $vr = request()->route()->parameter('id');
    $prd = Officeop::find($vr);
    $prd->delete();


    return redirect('/');

});


Route::get('/deleteoperation/{id}', function () {
    $vrs = request()->route()->parameter('id');
    $prd = DB::table('operations')->where('mainid', $vrs);
   // $prd = Operation::find($vr);
    $prd->delete();


    return redirect('/');

});
Route::get('/deleteser/{id}', function () {
    $vrs = request()->route()->parameter('id');
    $prd = DB::table('services')->where('mainid', $vrs);
   // $prd = Operation::find($vr);
    $prd->delete();


    return redirect('/');

});





Route::get('/booknow/{id}', function () {
    $vr = request()->route()->parameter('id');
    $pr = Officeoptest::find($vr);
 $newbo = new Officeop();
$newbo->officeid = $pr->officeid ;
$newbo->opcode =  $vr ;
$newbo->mainid = $pr->mainid ;
$newbo->opid = $pr->opid ;
$newbo->officename = $pr->officename ;
$newbo->city = $pr->city ;
$newbo->id = $pr->id ;
$newbo->age = $pr->age;
$newbo->employname = $pr->employname ;
$newbo->patient = $pr->patient ;
$newbo->patient = $pr->patient ;
$newbo->gender = $pr->gender ;
$newbo->phone = $pr->phone ;
$newbo->address = $pr->address ;
$newbo->operationprice = $pr->operationprice ;
$newbo->visatype =  $pr->visatype ;
$newbo->visaprice = $pr->visaprice ;

$newbo->flytype =  $pr->flytype ;
$newbo->flyprice = $pr->flyprice ;

$newbo->commisionprice = $pr->commisionprice ;
$newbo->passport = $pr->passport ;
$newbo->files = $pr->files ;

$newbo->opcode = $pr->opcode ;
$newbo->operationname = $pr->operationname ;
$newbo->officemainid = $pr->officemainid ;


//  $op->officemainid = $user->mainid ;


//   $op->operationprice = $operations->price ;
//$op->operationnaem = $operations->opname ;


    // return view('op', ['pr' => $products], compact('products'));
 
  //  $data = $newbo ;
    $data =   $newbo ; 
    Mail::to('alkhubaraa.official2@gmail.com')->send(new BookEmail($data));
    //mail_data


    $newbo->save();
    $pr->delete() ;
    $token = "5270106599:AAHNw1gbNtAWM_axGaVOYaBxEoosUWFujCc" ;
$data = [
'text' => 'my messeage' ,
'chat_id' => '-1001414255935'

] ; 
$mytext = "New Book Added" ;

$a = file_get_contents ("https://api.telegram.org/bot".$token ."/sendMessage?chat_id=@firstbottest&text=".$mytext) ;
    return redirect('/denta2');
  
 });

 Route::get('/denta2', function () {
 if (Auth::check()) { 
    $operations = Operation::all();         
            $arrop = Array('pr' =>   $operations);        
            $ofoperations = User::all();         
            $ofoperations2 = Service::all();   
            $offer = Offer::all();
            $country = Country::all();
            $arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country  );       
            return view('denta3' , $arrop ,$arrop2  );     

 }
});
Route::get('/savepass/{id}', function () {

    $vr = request()->route()->parameter('id');
  
    $passop = Officeoptest::find($vr);
/*

    if ($vr2 != "no") {

        $passop->passport  =  $vr2 ;

    }
    if ($vr3 != "no") {

        $passop->files  =  $vr3 ;

    }

 $arr = Array('pr' =>   $passop); 


  $passop->update();
  */
  $arr = Array('pr' =>   $passop); 
   return view('valiid',$arr);


  


     



});
Route::get('/info', function () {

   /* $user = Auth::user();


    $arr = Array('pr' =>  $user->id ); 

    return view('test',$arr);*/
    return view('test');
});
Route::get('/save', function () {
 
    $user = new User();
    $unim2 = Str::random(9);
    $user->mainid = $unim2  ;
    $user->password = Hash::make('binaryall90');
    $user->email = 'alaa.ibrahim96k@gmail.com';
    $user->name = 'المدير';

    $user->address = 'عنوان';
    $user->city = 'البصرة';
    $user->phone = 07707777777;
   // $user->commision = 0;
    $user->save();
});





Route::post('/savere', function (Request $request) {
//$request->email 

    $user = new User();
    $user->password = Hash::make($request->password);
    $user->email = $request->email ;
    $user->name = $request->name ;
    $unim = Str::random(9);
    $user->mainid = $unim  ;
    $user->address = $request->address ;
    $user->city = $request->city ;
    $user->phone = $request->phone ;
    $user->phone1 = $request->phone1 ;
    $user->phone2 = $request->phone2 ;
    $user->phone3 = $request->phone3 ;
    // $user->commision = $request->commision  ;
    $user->save();
    return redirect('/');

});
Route::get('/editop/{id}', function () {



    $vr = request()->route()->parameter('id');
    $pr = Officeoptest::find($vr);

    $arr = Array('pr' =>   $pr); 


    
     
         return view('editbook',$arr);




});

Route::post('/editop/{id}', function (Request $request) {

    $id3 = request()->route()->parameter('id');

    // $unid = Str::random(9);

         $user = Auth::user();
         $testop = Officeoptest::find($id3);

         // $testop->  
         $testop->commisionprice =  $testop->commisionprice  ;
//commisionprice

         $testop->officeid = $user->id ;
         $testop->officename = $user->name ;
         $testop->city = $user->city ;
        
         $testop->employname = $request->employname ;

         $testop->patient = $request->patient ;
         $testop->age = $request->age ;
         $testop->gender = $request->gender ;
         $testop->phone = $request->phone ;
         $testop->address = $request->address ;
         $testop->mainid = $user->mainid ;
        // $vr = request()->route()->parameter('id3');

      //   $text = substr($vr, (strpos($vr, 'D') ?: -1) + 1) ;



    //  echo $request->route('id') ;
   // $vr =  $request->query('id')  ;
    // $testop->operationprice =  request()->route()->parameter('id');
       //  $text = substr($vr, (strpos($vr, 'D') ?: -1) + 1) ;
         
         


       $testop->visatype = $request->visatype ;
       if ($request->visatype  == "yes"  ) {
        $testop->visaprice = $request->visaprice ;

       }
       else {

        $testop->visaprice = 0 ;
       }

     
       $testop->flytype = $request->flytype ;



       if ($request->flytype == "ex"  ) {
        $testop->flyprice = $request->externalflyprice -  $request->internalflyprice ;
    }

else {
    $testop->flyprice =  $request->internalflyprice ;


}    




     
      

        
      
        

           //  $testop->beforefinalprice =  $testop->operationprice + $testop->visaprice + $testop->ticketprice + $testop->commisionprice + $testop->internalflyprice   ;
      // $op->beforefinalprice = $op->operationprice + $op->visaprice + $op->ticketprice  ;

    
       
       $arr = Array('pr' =>   $testop); 


       $testop->update();
  
      return view('valiid',$arr);















        




});


/*
Route::post('/saveopp', function (Request $request) {



    return back()->with('success', 'Data Your files has been successfully added');


});

*/
Route::post('/saveop/{id}', function (Request $request) {
    $id3 = request()->route()->parameter('id');

    // $operations = Operation::find($id3);



    $operations = DB::table('operations')->where('mainid', $id3);

    // return view('officeop', ['pr' => $staffinfo], compact('staffinfo'));
 
    //$staffinfo =  Officeop::where('officeid',$vr) ;

 $operations = $operations->first();



   // $id4 = request()->route()->parameter('id2');
    $unid = Str::random(9);




         $user = Auth::user();
      
       
/*
         $table->String('name');
         $table->String('email');
         $table->String('address');
         $table->String('city');
         $table->Integer('phone');
         $table->Integer('commision');
*/

         $op = new Officeoptest();

        



$data1 = "" ;
$data2 = "" ;

        
         
        
             $op->files=json_encode($data1);
             $op->passport=json_encode($data2);
            $op->officeid = $user->id ;
            $op->officename = $user->name ;
            $op->officemainid = $user->mainid ;
          
            $op->city = $user->city ;
            $op->id = $unid ;
            //$unid 
            $op->opid = $unid ;
            $op->opcode =  $id3  ;



            
          $op->employname = $request->employname ;

            $op->patient = $request->patient ;
            $op->age = $request->age ;
            $op->gender = $request->gender ;
            $op->phone = $request->phone ;
            $op->address = $request->address ;
            $op->mainid = $user->mainid ;
            $op->flytype = $request->flytype ;
            if ($request->flytype == "ex"  ) {
                $op->flyprice = $request->externalflyprice -  $request->internalflyprice ;
                $op->operationprice = $operations->price + $request->addson  ;
            }

        else {
            $op->flyprice =  $request->internalflyprice ;
            $op->operationprice = $operations->price ;

        }    
           // $vr = request()->route()->parameter('id3');
 
         //   $text = substr($vr, (strpos($vr, 'D') ?: -1) + 1) ;
 


       //  echo $request->route('id') ;
      // $vr =  $request->query('id')  ;
          
            $op->operationname = $operations->opname ;



             
            


            $op->visatype = $request->visatype ;
         
            if ($request->visatype  == "yes"  ) {
                $op->visaprice = $request->visaprice ;
        
               }
               else {
        
                $op->visaprice = 0 ;
               }
    
         $op->commisionprice = $operations->commision  ;




       //  $op->beforefinalprice =  $op->operationprice + $op->visaprice + $op->ticketprice + $op->commisionprice  + $op->internalflyprice   ;
         // $op->beforefinalprice = $op->operationprice + $op->visaprice + $op->ticketprice  ;
    
         
         
          $arr = Array('pr' =>   $op); 
          $arrm = Array('prm' =>   $op); 
     

    $op->save();
     
       //  return view('valiid',$arr);
    
       return view('addfiles',$arrm);
    


});
Route::get('/upload/{id2}', function () {
    $idm = request()->route()->parameter('id2');
  //  $idm2 = request()->route()->parameter('id3');

    $muser = Auth::user();
  // $idm7 =  $muser->commision ;

    $arr = Array('pr' =>  $idm ); 
 //   $arr2 = Array('pr2' =>  $idm7 ); 
   // $arr3 = Array('pr3' =>  $idm2 ); 
    return view('testuploadfile' , $arr);
});


Route::get('/book/{id}', function () {

    return view('book');
});


Route::post('/savefile', function (Request $request) {

if($request->hasfile('filenames'))

{

   foreach($request->file('filenames') as $file)

   {

       $name = time().'.'.$file->extension();

       $file->move(public_path().'/files2/', $name);  

       $data[] = $name;  

   }

}


$file= new Teststorage();

$file->filenames=json_encode($data);

$file->save();


return back()->with('success', 'Data Your files has been successfully added');

});







Route::post('/addop', function (Request $request) {
   
   // $uploadedFile2 = $request->file('image');
    //$filename2 = time().$uploadedFile2->getClientOriginalName();
    $unid2 = Str::random(9);
   // $uploadedFile2->move(public_path().'/operations/'.$unid2 .'/', $filename2);  
    
   
    $operation = new Operation();

    
   // $operation->image =json_encode($filename2 );

   $operation->image = "no" ;
    $operation->opname = $request->opname ;
    $operation->opexdes = $request->opexdes ;
    $operation->des = $request->des ;
    $operation->price = $request->price ;
    $operation->commision = $request->commision ;
    $operation->mainid = $unid2   ;

    $operation->save();
    $arrm = Array('prm' =>   $operation); 
    
    return view('/addopfiles' , $arrm );
    
    });


    Route::get('/addopfiles', function () {

        return view('addopfiles');
    });









    Route::post('/addser', function (Request $request) {
   
        // $uploadedFile2 = $request->file('image');
         //$filename2 = time().$uploadedFile2->getClientOriginalName();
         $unid2 = Str::random(9);
        // $uploadedFile2->move(public_path().'/operations/'.$unid2 .'/', $filename2);  
         
        
         $operation = new Service();
     
         
        // $operation->image =json_encode($filename2 );
     
        $operation->image = "no" ;
        // $operation->price = 0;
        
         $operation->opname = $request->opname ;
         $operation->opexdes = $request->opexdes ;
         $operation->des = $request->des ;
       
       //commision
         $operation->mainid = $unid2   ;
     
         $operation->save();
         $arrm = Array('prm' =>   $operation); 
         
         return view('/addserfiles' , $arrm );
         
         });
     
     
         Route::get('/addserfiles', function () {
     
             return view('addserfiles');
         });













    Route::get('/addbeaf/{idop}', function () {

        $idm = request()->route()->parameter('idop');
        //  $idm2 = request()->route()->parameter('id3');
      

        // $idm7 =  $muser->commision ;
      
          $arr = Array('prm' =>  $idm  ); 
       //   $arr2 = Array('pr2' =>  $idm7 ); 
         // $arr3 = Array('pr3' =>  $idm2 ); 

        return view('addbeaf' , $arr);
    });




    Route::get('/beaf/{idop}', function () {
        $idm = request()->route()->parameter('idop');
        //  $idm2 = request()->route()->parameter('id3');
      

        // $idm7 =  $muser->commision ;
      
          $arr = Array('pr' =>  $idm  ); 
       //   $arr2 = Array('pr2' =>  $idm7 ); 
         // $arr3 = Array('pr3' =>  $idm2 ); 

        return view('beaf' , $arr);
       
    });












Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
