<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class AdminController extends Controller
{
    public function index()
    {
        // $submissions = ContactForm::all();
        

        return view('admin.dashboard', compact('submissions'));
    }
}
