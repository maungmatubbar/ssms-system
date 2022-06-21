<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index($id)
    {
        return view('website.enroll.enroll',['id'=>$id]);
    }
    public function createEnroll(Request $request,$id)
    {

    }
}
