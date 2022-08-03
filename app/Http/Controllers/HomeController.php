<?php

namespace App\Http\Controllers;
use App\Models\Operation ;
use App\Models\Officeop ;
use App\Models\Service ;
use App\Models\Offer ;
use App\Models\Country ;
use App\Models\User ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Country
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
              
          
        
        if (Auth::check()) { 
       
          //  return view('denta');
          $operations = Operation::all();
          $operations3 = Service::all();             
          $arrop = Array('pr' =>   $operations , 'pr3' =>   $operations3); 
          
          $ofoperations = Officeop::all();  
          $userm = Auth::user();

          if( $userm->email == 'alaa.ibrahim96k@gmail.com') {
            $arrop2 = Array('pr2' =>   $ofoperations ); 
            return view('denta', $arrop ,$arrop2 ); 
          }
    else {
        $operations = Operation::all();         
        $arrop = Array('pr' =>   $operations);        
        $ofoperations = User::all();         
        $ofoperations2 = Service::all();   
        $offer = Offer::all();
        $country = Country::all();
        $arrop2 = Array('pr2' =>   $ofoperations ,'pr3' =>   $ofoperations2 , 'offer'  =>  $offer , 'con'  => $country  );       
        return view('denta3' , $arrop ,$arrop2  );     

        return view('denta3', $arrop);

    }
    
         }

   
   
    }
}
