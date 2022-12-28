<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseHeaderController extends Controller
{
    public function index(){
        return view('pages.course.course');
    }
}
