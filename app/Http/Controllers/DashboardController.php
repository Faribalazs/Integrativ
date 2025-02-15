<?php

namespace App\Http\Controllers;

use App\Models\{Sections, Slider, HomePageContent, Contact};
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
      $homePageContent = HomePageContent::orderBy('order', 'asc')->get();

      return view('user.views.home.home',['sliderData' => $sliderData, 'homePageContent' => $homePageContent]);
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

  public function saveContact(Request $request) {
   try {
      // Validate the incoming request
      $data = $request->validate([
         'name' => 'nullable|string',
         'email' => 'email|required',
         'phone' => 'nullable',
         'message' => 'required',
     ]);

      // Create the contact
      $contact = Contact::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'phone' => $data['phone'],
         'message' => $data['message'],
      ]);

      return redirect()
          ->route('home')
          ->with('success', 'Poruka je poslata!');
      } catch (\Illuminate\Validation\ValidationException $e) {
          return back()->withErrors($e->validator)->withInput();
      } catch (\Exception $e) {
          return back()->with('error', $e->getMessage());
    }

  }
}
