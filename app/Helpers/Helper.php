<?php

namespace App\Helpers;

use App\Models\{Admin, Tracker, Sections, Category, Worker, Slider, HomePageContent, Partners, Conferences};

class Helper
{
    public static function getCurrentUrlWithLocale(string $locale) {

        $segments = request()->segments();
        $segments[0] = $locale;

        return implode('/', $segments);
    }

    public function getPartnerImages() {
        $partners = Partners::all();
        return $partners;
    }

    public function getConferences() {
        $conferences = Conferences::all();
        return $conferences;
    }
}