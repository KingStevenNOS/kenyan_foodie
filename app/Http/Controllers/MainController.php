<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view ('frontend.home');
    }
    public function about()
    {
        return view ('frontend.about');
    }
    public function contact()
    {
        return view ('frontend.contact');
    }
    public function foods()
    {
        return view ('frontend.foods.index');
    }
    public function lifestyle()
    {
        return view ('frontend.lifestyle.index');
    }
    public function show_lifestyle($id)
    {
        return view('frontend.lifestyle.blog');
    }
    public function show_foods($id)
    {
        return view('frontend.foods.blog');
    }


}
