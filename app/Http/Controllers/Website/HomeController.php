<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }
    public function about()
    {
        return view('website.about.about');
    }
    public function course()
    {
        return view('website.course.course');
    }
    public function contact()
    {
        return view('website.contact.contact');
    }
    public function login()
    {
        return view('website.login.login');
    }
}
