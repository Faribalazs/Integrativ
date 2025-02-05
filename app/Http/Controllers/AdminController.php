<?php

namespace App\Http\Controllers;

use App\Models\{Admin, Tracker, Sections, Category, Worker, Slider};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
  public function dashboard()
  {
    $active = Tracker::where('visit_date', date('Y-m-d'))->where('visit_time', '>=', now()->subMinutes(5)->toTimeString())->distinct('worker_id')->count();
    $workers = Tracker::where('visit_date', date('Y-m-d'))->distinct('worker_id')->count();
    $workers_last_30_days = Tracker::where('visit_date', '>', now()->subDays(30)->endOfDay())->distinct('worker_id')->count();
    $max_visit = Tracker::where('visit_date', date('Y-m-d'))->orderByDesc('hits')->first();
    $overall_visit_today = Tracker::where('visit_date', date('Y-m-d'))->sum('hits');
    $overall_visit_last_30_days = Tracker::where('visit_date', '>', now()->subDays(30)->endOfDay())->sum('hits');
    $diff_ip = Tracker::where('visit_date', date('Y-m-d'))->distinct('ip')->count();
    $diff_ip_last_30_days = Tracker::where('visit_date', '>', now()->subDays(30)->endOfDay())->distinct('ip')->count();

    $browserType = Tracker::select('browser')->where('visit_date', date('Y-m-d'))->count();
    $deviceType = Tracker::select('device')->where('visit_date', date('Y-m-d'))->count();

    $unknown_browser = $this->browser('unknown');
    $chrome = $this->browser('chrome');
    $firefox = $this->browser('firefox');
    $opera = $this->browser('opera');
    $safari = $this->browser('safari');
    $ie = $this->browser('ie');
    $edge = $this->browser('edge');

    $unknown_device = $this->device('unknown');
    $desktop = $this->device('desktop');
    $mobile = $this->device('mobile');
    $tablet = $this->device('tablet');
    $bot = $this->device('bot');

    return view('admin.views.admin-dash',compact(['active','workers','workers_last_30_days','max_visit',
          'overall_visit_today','overall_visit_last_30_days',
          'diff_ip','diff_ip_last_30_days',
          'browserType','deviceType',
          'unknown_browser', 'chrome', 'firefox', 'opera', 'safari', 'ie', 'edge',
          'unknown_device', 'desktop', 'mobile', 'tablet', 'bot'
        ]));
  }

  private function browser($browser)
  {
    return Tracker::where('browser', $browser)->where('visit_date', date('Y-m-d'))->count();
  }

  private function device($device)
  {
    return Tracker::where('device', $device)->where('visit_date', date('Y-m-d'))->count();
  }

  public function insertAdmin()
  {
    $user = Worker::create([
      'first_name' => 'Pista',
      'last_name' => 'Kovacs',
      'email' => 'test@test.com',
      'password' => Hash::make('testpass'),
      'email_verified_at' => '2023-05-03',
    ]);

    $user->attachRole('super_worker'); 
    event(new Registered($user));

    $user = Worker::create([
      'first_name' => 'Pista',
      'last_name' => 'Kovacs',
      'email' => 'worker@worker.com',
      'password' => Hash::make('worker'),
      'email_verified_at' => '2023-05-03',
    ]);

    $user->attachRole('worker'); 
    event(new Registered($user));

    $user = Admin::create([
      'name' => 'Admin',
      'email' => 'admin@admin.com',
      'password' => Hash::make('admin123'),
      'email_verified_at' => '2023-05-03',
    ]);
    $user->attachRole('admin');
    event(new Registered($user));
  }

  public function create()
  {
      return view('admin.views.admin-profile');
  }

  public function categoryCreate()
  {
    $categories = Category::paginate(15);

    return view('admin.views.category.show-category', ['categories' => $categories]);
  }

  public function categoryAddNew()
  {
    return view('admin.views.category.create-category');
  }

  public function categoryAddNewDone(Request $request)
  {
    try {

      // Validate the incoming request
      $data = $request->validate([
          'category_name' => 'required|string|max:255',
          'order' => 'nullable|integer',
          'slug' => 'required|string|max:255',
          'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $path = null;

      // Handle image upload
      if ($request->hasFile('image')) {
          $image = Image::make($request->file('image'))->encode('webp', 90)->resize(360, 270);
          $name = uniqid() . '.webp';
          $path = 'category/temp/' . $name;

          // Store the image temporarily
          Storage::disk('public')->put($path, (string) $image->stream());
      }

      // Create the category
      $category = Category::create([
          'category_name' => $data['category_name'],
          'order' => $data['order'],
          'slug' => $data['slug'],
          'image' => $path, // Temporary path
      ]);

      // Move the image to the final path after category creation
      if ($path) {
          $newPath = 'category/' . $category->id . '/image/' . $name;
          Storage::disk('public')->move($path, $newPath);
          $category->update(['image' => $newPath]);
      }

      // Success message
      return redirect()
          ->route('admin.category.create')
          ->with('success', 'Category created successfully!');
      } catch (\Illuminate\Validation\ValidationException $e) {
          return back()->withErrors($e->validator)->withInput();
      } catch (\Exception $e) {
          return back()->with('error', $e->getMessage());
    }
  }

  public function categoryEdit($id)
  {
    $category = Category::where('id', $id)->first();

    return view('admin.views.category.edit-category', ['category' => $category]);
  }

  public function categoryEditDone($id, Request $request)
  {
    try {

        $category = Category::findOrFail($id);
        
        // Validate the incoming request
        $data = $request->validate([
            'category_name' => 'required|string|max:255',
            'order' => 'nullable|integer',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $path = $category->image; // Keep existing image path
        if ($request->hasFile('image')) {
            // Remove previously added image if it exists
            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            // Process and save the new image
            $image = Image::make($request->file('image'))->encode('webp', 90)->resize(360, 270);
            $name = uniqid() . '.webp';
            $path = 'category/' . $id . '/image/' . $name;
            Storage::disk('public')->put($path, $image);
        }

        $finalData = [
            'category_name' => $data['category_name'],
            'order' => $data['order'],
            'image' => $path ?? null,
        ];

        // Update the category
        $category->update($finalData);

        $category->save();

        // Success message
        return redirect()
            ->route('admin.category.create')
            ->with('success', 'Category updated successfully!');
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handle validation errors
        return back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        // Generic error handling
        alert()->error($e)->showCloseButton()->showConfirmButton(__('app.basic.close'));
    }
  }

  public function categoryDelete(Request $request){
    Category::where('id', $request->input('id'))->delete();
    return redirect()->back();
  }

  public function SliderCreate()
  {
    $sliders = Slider::paginate(15);

    return view('admin.views.slider.show-slider', ['sliders' => $sliders]);
  }

  public function sliderAddNew()
  {
    return view('admin.views.slider.create-slider');
  }

  public function sliderAddNewDone(Request $request)
  {
      try {
          // Validate the incoming request
          $data = $request->validate([
              'slider_name' => 'required|string|max:255',
              'text' => 'required|string|max:255',
              'vertical' => 'required|string|max:255',
              'horizontal' => 'required|string|max:255',
              'order' => 'nullable|integer',
              'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
  
          // Default path for image
          $path = null;
  
          // Handle image upload
          if ($request->hasFile('image')) {
              $image = Image::make($request->file('image'))->encode('webp', 90)->resize(360, 270);
              $name = uniqid() . '.webp';
  
              // Store the image temporarily
              $tempPath = 'slider/temp/' . $name;
              Storage::disk('public')->put($tempPath, (string) $image->stream());
  
              // Set path (will be updated after slider creation)
              $path = $tempPath;
          }
  
          // Create the slider
          $slider = Slider::create([
              'slider_name' => $data['slider_name'],
              'slider_text' => $data['text'],
              'vertical' => $data['vertical'],
              'horizontal' => $data['horizontal'],
              'order' => $data['order'],
              'image' => $path, // Temporary path
          ]);
  
          // Move the image to final path after slider is created
          if ($path) {
              $newPath = 'slider/' . $slider->id . '/image/' . $name;
              Storage::disk('public')->move($path, $newPath);
              $slider->update(['image' => $newPath]);
          }
  
          // Success message
          return redirect()
              ->route('admin.slider.create')
              ->with('success', 'Slider created successfully!');
      } catch (\Illuminate\Validation\ValidationException $e) {
          return back()->withErrors($e->validator)->withInput();
      } catch (\Exception $e) {
          return back()->with('error', $e->getMessage());
      }
  }
  
  public function sliderEdit($id)
  {
    $slider = Slider::where('id', $id)->first();

    return view('admin.views.slider.edit-slider', ['slider' => $slider]);
  }

  public function sliderEditDone($id, Request $request)
  {
    try {

        $slider = Slider::findOrFail($id);
        
        // Validate the incoming request
        $data = $request->validate([
            'slider_name' => 'required|string|max:255',
            'text' => 'required|string|max:255',
            'vertical' => 'required|string|max:255',
            'horizontal' => 'required|string|max:255',
            'order' => 'nullable|integer',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $path = $slider->image; // Keep existing image path
        if ($request->hasFile('image')) {
            // Remove previously added image if it exists
            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            // Process and save the new image
            $image = Image::make($request->file('image'))->encode('webp', 90)->resize(360, 270);
            $name = uniqid() . '.webp';
            $path = 'slider/' . $id . '/image/' . $name;
            Storage::disk('public')->put($path, $image);
        }

        $finalData = [
            'slider_name' => $data['slider_name'],
            'slider_text' => $data['text'],
            'vertical' => $data['vertical'],
            'horizontal' => $data['horizontal'],
            'order' => $data['order'],
            'image' => $path ?? null,
        ];

        // Update the category
        $slider->update($finalData);

        $slider->save();

        // Success message
        return redirect()
            ->route('admin.slider.create')
            ->with('success', 'Slider updated successfully!');
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handle validation errors
        alert()->error($e->validator)->showCloseButton()->showConfirmButton(__('app.basic.close'));
        return back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        // Generic error handling
        alert()->error($e)->showCloseButton()->showConfirmButton(__('app.basic.close'));
    }

  }

  public function sliderDelete(Request $request){
    Slider::where('id', $request->input('id'))->delete();
    return redirect()->back();
  }

  public function sectionCreate()
  {
    $sections = Sections::paginate(15);

    return view('admin.views.section.show-section', ['sections' => $sections]);
  }

  public function sectionAddNew()
  {
    return view('admin.views.section.create-section');
  }

  public function sectionAddNewDone(Request $request)
  {
    try {

      // Validate the incoming request
      $data = $request->validate([
          'section_name' => 'required|string|max:255',
          'title' => 'required|string|max:255',
          'content' => 'nullable|string',
          'btn_link' => 'nullable|string',
          'btn_text' => 'nullable|string',
          'order' => 'nullable|integer',
          'status' => 'required|string',
          'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $path = null;

      // Handle image upload
      if ($request->hasFile('image')) {
          $image = Image::make($request->file('image'))->encode('webp', 90)->resize(360, 270);
          $name = uniqid() . '.webp';
          $path = 'category/temp/' . $name;

          // Store the image temporarily
          Storage::disk('public')->put($path, (string) $image->stream());
      }

      // Create the secetion
      $section = Category::create([
          'section_name' => $data['section_name'],
          'title' => $data['title'],
          'content' => $data['content'],
          'btn_link' => $data['btn_link'],
          'btn_text' => $data['btn_text'],
          'status' => $data['status'],
          'order' => $data['order'],
          'image' => $path, // Temporary path
      ]);

      // Move the image to the final path after section creation
      if ($path) {
          $newPath = 'section/' . $section->id . '/image/' . $name;
          Storage::disk('public')->move($path, $newPath);
          $section->update(['image' => $newPath]);
      }

      // Success message
      return redirect()
          ->route('admin.section.create')
          ->with('success', 'Section created successfully!');
      } catch (\Illuminate\Validation\ValidationException $e) {
          return back()->withErrors($e->validator)->withInput();
      } catch (\Exception $e) {
          return back()->with('error', $e->getMessage());
    }
  }

  public function sectionEdit($id)
  {
    $section = Sections::where('id', $id)->get();

    return view('admin.views.section.edit-section', ['section' => $section]);
  }

  public function sectionEditDone($id, Request $request)
  {
    $sections = Sections::where('id', $id)->first();
    $sections->update([
      'page' => $request->page,
      'section_name' => $request->section_name,
      'order' => $request->order,
      'section_number' => $request->section_number,
    ]);

    $locale = app()->getLocale();

    $sections->setTranslations('title', [$locale => $request->input('title')]);
    $sections->setTranslations('content', [$locale => $request->input('content')]);
    $sections->setTranslations('btn_text', [$locale => $request->input('btn_text')]);
    $sections->setTranslations('btn_link', [$locale => $request->input('btn_link')]);

    $sections->save();

    return view('admin.views.section.edit-section', ['section' => Sections::where('id', $id)->get()]);
  }

  public function sectionDelete(Request $request){
    Sections::where('id', $request->input('id'))->delete();
    return redirect()->back();
  }
}