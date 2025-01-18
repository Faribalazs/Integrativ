<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\{Category, };

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
      ],
      [
          'category_name' => [
              'sr' => 'O nama',
              'hu' => 'Rolunk',
              'en' => 'About us',
          ],
      ],
      [
          'category_name' => [
              'sr' => 'Modaliteti',
              'hu' => '',
              'en' => '',
          ],
      ],
      [
        'category_name' => [
            'sr' => 'Konferencija',
            'hu' => '',
            'en' => '',
        ],
      ],
      [
        'category_name' => [
            'sr' => 'Edukacija',
            'hu' => '',
            'en' => '',
        ],
      ],
      [
        'category_name' => [
            'sr' => 'Aktivnosti',
            'hu' => '',
            'en' => '',
        ],
      ],
      [
        'category_name' => [
            'sr' => 'Psihoterapeuti',
            'hu' => '',
            'en' => '',
        ],
      ],
      [
        'category_name' => [
            'sr' => 'Kontakt',
            'hu' => '',
            'en' => '',
        ],
      ],
    ];

    foreach ($categories as $data) {
        Category::create($data);
    }

  }
}
