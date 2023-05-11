<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JaibhimController extends Controller
{
    public function index()
    {
        return view('en.welcome-en');
    }

    public function jaibhimfoundation_administration()
    {
        return view('en.jaibhimfoundation-administration');
    }

    public function jaibhim_20_purpose()
    {
        return view('en.jaibhim-20-purpose');
    }

    public function jaibhim_20_activities()
    {
        return view('en.jaibhim-20-activities');
    }

    public function international_translation_committee()
    {
        return view('en.international-translation-committee');
    }

    public function jaibhimfoundation_team()
    {
        return view('en.jaibhimfoundation-team');
    }

    public function proof_reading_committee()
    {
        return view('en.proof-reading-committee');
    }

    public function ambedkariyam_50_purchase()
    {
        return view('en.ambedkariyam-50-purchase');
    }

    public function ambedkariyam_volume_details()
    {
        return view('en.ambedkariyam-volume-details');
    }

    public function ambedkariyam_ambassadors()
    {
        return view('en.ambedkariyam-ambassadors');
    }

    public function photos()
    {
        return view('en.photos');
    }

    public function videos()
    {
        return view('en.videos');
    }
}
