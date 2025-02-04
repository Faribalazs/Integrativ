<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\{Category};
use Carbon\Carbon;

class DataSeeder extends Seeder
{
  /**
   * Run the database seeders.
   */
  public function run(): void {

    $categories = [
      [
          'category_name' => [
              'sr' => 'Naslovna',
              'hu' => 'Kezdolap',
              'en' => 'Home Page',
          ],
          'slug' => 'naslovna',
          'order' => 1,
      ],
      [
          'category_name' => [
              'sr' => 'O nama',
              'hu' => 'Rolunk',
              'en' => 'About us',
          ],
          'slug' => 'o-nama',
          'order' => 2,
      ],
      [
          'category_name' => [
              'sr' => 'Modaliteti',
              'hu' => '',
              'en' => '',
          ],
          'slug' => 'modaliteti',
          'order' => 3,
      ],
      [
        'category_name' => [
            'sr' => 'Konferencije',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'konferencije',
        'order' => 4,
      ],
      [
        'category_name' => [
            'sr' => 'Edukacija',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'edukacija',
        'order' => 5,
      ],
      [
        'category_name' => [
            'sr' => 'Aktivnosti',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'aktivnosti',
        'order' => 6,
      ],
      [
        'category_name' => [
            'sr' => 'Psihoterapeuti',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'psihoterapeuti',
        'order' => 7,
      ],
      [
        'category_name' => [
            'sr' => 'Kontakt',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'kontakt',
        'order' => 8,
      ],
    ];

    foreach ($categories as $data) {
        Category::create($data);
    }

    //Slider data

    DB::table('slider')->insert([
      [
          'slider_name' => json_encode([
              'en' => 'First Slide',
              'hu' => 'Elso Slide',
              'sr' => 'Prvi Slide'
          ]),

          'slider_text' => json_encode([
              'en' => 'Welcome to Our Store',
              'hu' => 'Üdvözlünk az Oldalunkon',
              'sr' => 'Dobrodošli na našu stranicu'
          ]),
          'vertical' => 'center',
          'horizontal' => 'center',
          'order' => 1,
          'image' => '',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ],
      [
        'slider_name' => json_encode([
            'en' => 'Second Slide',
            'hu' => 'Masodik Slide',
            'sr' => 'Drugi Slide'
        ]),

        'slider_text' => json_encode([
            'en' => 'Welcome to Our Store',
            'hu' => 'Üdvözlünk az Oldalunkon',
            'sr' => 'Dobrodošli na našu stranicu'
        ]),
        'vertical' => 'center',
        'horizontal' => 'center',
        'order' => 2,
        'image' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ], 
  ]);

  }
}
