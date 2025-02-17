<?php

namespace App\Http\Controllers;

use App\Models\{Sections, Slider, HomePageContent, Contact, Education};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Exception;

class DashboardController extends Controller
{
   public function index()
   {
      return view('dashboard');
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

   public function aboutUs()
   {
      return view('user.views.pages.about-us');
   }

   public function edukacija()
   {
      return view('user.views.pages.edukacija');
   }

   public function storeEducationSignUp(Request $request)
   {
      try {
         $data = $request->validate([
               'name' => 'required|string|max:255',
               'date_of_birth' => 'required|date',
               'address' => 'required|string|max:255',
               'email' => 'required|email|max:255',
               'phone' => 'required|string|max:20',
               'basic_studies' => 'required|string|max:255',
               'name_and_seat_of_institution' => 'required|string|max:255',
               'education_level' => 'required|string|max:255',
               'year_of_graduation' => 'required|integer|min:1900|max:' . date('Y'),
               'occupation' => 'required|string|max:255',
               'field_of_specialization' => 'required|string|max:255',
               'specialization_name_and_seat_of_institution' => 'required|string|max:255',
               'job_position' => 'required|string|max:255',
               'work_experience_with_children' => 'required|string|max:255',
               'most_frequently_addressed_issues' => 'required|string|max:255',
               'institution_or_organization_work_with_children' => 'required|string|max:255',
               'type_of_psychotherapy_modality' => 'required|string|max:255',
               'achieved_level_of_education' => 'required|string|max:255',
               'name_and_seat_of_organization' => 'required|string|max:255',
               'length_of_psychotherapy_experience' => 'required|string|max:255',
               'psychotherapy_work_with_children' => 'required|string|max:255',
               'length_of_psychotherapy_work_with_children' => 'required|string|max:255',
         ]);

         $education = new Education($data);
         $education->save();

         return redirect()->back()->with('success', 'Education record saved successfully!');
      } catch (ValidationException $e) {
         return redirect()->back()->withErrors($e->validator)->withInput();
      } catch (Exception $e) {
         return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
      }
   }

   public function konferencije()
   {
      return view('user.views.pages.konferencije');
   }
}
