<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function contactus()
    {
        $details = getSettingByType('contact');
        return view('contact-us', compact('details'));
    }
    public function faq()
    {
        $faqs = getSettingByType('faq');
        return view('faq', compact('faqs'));
    }
}
