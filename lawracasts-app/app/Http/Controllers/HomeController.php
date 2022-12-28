<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ViewErrorBag;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home.home');
    }
}
