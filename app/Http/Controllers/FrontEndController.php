<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function blog(){
        return view('blog.index');
    }
    public function contact(){
        return view('contact');
    }
    public function quote(){
        return view('quote');
    }
    public function servicesDev(){
        return view('services.dev');
    }
    public function servicesWeb(){
        return view('services.web');
    }
    public function servicesMobile(){
        return view('services.mobile');
    }
    public function servicesQa(){
        return view('services.qa');
    }
}
