<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function blog(){
        return view('front.blog');
    }
    public function blogdetail(){
        return view('front.blogdetail');
    }
    public function contact(){
        return view('front.contact');
    }
    public function servicero(){
        return view('front.servicero');
    }
    public function camservice(){
        return view('front.camservice');
    }
    public function about(){
        return view('front.about');
    }
    public function servicedetail(){
        return view('front.servicedetail');
    }
}
