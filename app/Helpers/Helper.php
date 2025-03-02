<?php

namespace App\Helpers;

use App\Models\{Admin, Tracker, Sections, Category, Worker, Slider, HomePageContent, Partners, Conferences, Contact, Psychotherapists, Page, PageContent, Activities};

class Helper
{
    public static function getCurrentUrlWithLocale(string $locale) {

        $segments = request()->segments();
        $segments[0] = $locale;

        return implode('/', $segments);
    }

    public function getPartnerImages() {

        $partners = Partners::orderBy('order', 'asc')->get();

        return $partners;
    }

    public function getConferences() {

        $conferences = Conferences::orderBy('order', 'asc')->get();

        return $conferences;
    }

    public function getTheFooter() {

        $footer = HomePageContent::where('id', 5)->first();

        return $footer;
    }

    public function getCategoryFromSlug($slug) {

        $category = Category::where('slug', $slug)->first();

        return $category;
    }

    public function getPageContent($slug) {

        $page = Page::where('slug', $slug)->first();
        $content = PageContent::where('page_id', $page->id)->get();

        return $content;
    }

    public function getLetestConferences() {

        $lastConference = Conferences::orderBy('order', 'desc')->first();

        return $lastConference;
    }

    public function getCustomDesignPageContent($slug) {

        $page = Page::where('slug', $slug)->first();
        $content = PageContent::where('page_id', $page->id)->where('custom_design', 1)->orderBy('order', 'asc')->get();

        return $content;
    }

    public function getPsychotherapists() {

        $psychotherapists = Psychotherapists::where('lead', 0)->take(10)->get();

        return $psychotherapists;
    }

    public function getLeadPsychotherapists() {

        $psychotherapists = Psychotherapists::where('lead', 1)->take(10)->get();

        return $psychotherapists;
    }

    public function getLastActivity() {

        $lastActivity = Activities::orderBy('order', 'desc')->first();

        return $lastActivity;
    }

    public function getActivities() {

        $activities = Activities::orderBy('order', 'asc')->get();

        return $activities;
    }
}