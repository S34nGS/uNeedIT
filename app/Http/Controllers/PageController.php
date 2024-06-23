<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHomePage() {
        return view('home');
    }

    public function showOverOnsPage() {
        return view('overOns');
    }

    public function showServicePage() {
        return view('service');
    }

    public function showAanvraagPage() {
        return view('aanvraag');
    }

    public function showFaqPage() {
        return view('faq');
    }

    public function showBezorgdienstenPage() {
        return view('bezorgdiensten');
    }
}