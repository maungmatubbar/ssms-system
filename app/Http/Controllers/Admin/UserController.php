<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.user.add');
    }
    public function manage()
    {
        return view('admin.user.manage');
    }
}
