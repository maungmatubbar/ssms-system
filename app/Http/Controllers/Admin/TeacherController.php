<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    public function add()
    {
        return view('admin.teacher.add');
    }
    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect()->back()->with('message','Teacher Info Saved Successfully.');
    }
    public function manage()
    {
        return view('admin.teacher.manage');
    }
}
