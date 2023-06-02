<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function contactus()
    {
        $settings = Setting::where('type','contactus')->first();
        $details = json_decode($settings->value);
        return view('contact-us',compact('details'));
    }
}
