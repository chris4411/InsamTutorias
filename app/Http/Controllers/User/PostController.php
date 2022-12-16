<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('master');
    }
    public function courses()
    {
        return view('layout-frontend.pages.courses');
    }
    public function about()
    {
        return view('layout-frontend.pages.about');
    }
    public function contact()
    {
        return view('layout-frontend.pages.contact');
    }




}
