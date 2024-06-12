<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHomePage() {
        $title = "Home";
        return view('home', compact('title'));
    }

    public function showOverOnsPage() {
        $title = "Over ons";
        return view('overOns', compact('title'));
    }

    public function showServicePage() {
        $title = "Service";
        return view('service', compact('title'));
    }

    public function showZakelijkPage() {
        $title = "Zakelijk";
        return view('zakelijk', compact('title'));
    }

    public function showFaqPage() {
        $title = "FAQ";
        return view('faq', compact('title'));
    }

    public function showBezorgdienstenPage() {
        $title = "Bezorgdiensten";
        return view('bezorgdiensten', compact('title'));
    }
}