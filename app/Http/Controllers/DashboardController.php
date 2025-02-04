<?php

namespace App\Http\Controllers;

use App\Models\Sections;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('user')){
          return view('userdash');
       } 
       else {
          return view('dashboard');
     }
   }

   public function aboutUs()
   {
      return view('user.views.home.about-us');
   }

   public function profile()
   {
      return view('profile');
   }

   public function home()
   {
      $sliderData = Slider::orderBy('order', 'asc')->get();

      return view('user.views.home.home',['sliderData' => $sliderData]);
   }

   private function isMobileDev(){
      if(!empty($_SERVER['HTTP_USER_AGENT'])){
         $user_ag = $_SERVER['HTTP_USER_AGENT'];
         if(preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$user_ag)){
            return true;
         };
      };
      return false;
  }
}
