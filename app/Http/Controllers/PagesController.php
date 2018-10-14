<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to laravel';
        return view('index')->with('title', $title);
    }

    public function mail() {
        return view('mail');
    }

    public function about() {
        $title = 'About Us';
        return view('about')->with('title', $title);
    }

    public function services() {
        return view('services');
    }
}
