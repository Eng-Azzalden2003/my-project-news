<?php

namespace App\Http\Controllers\news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newsController extends Controller
{
    //
     function index() {
        return view('news.index');
    }
        function Sport() {
        return view('news.sport');
    }
        function Technology() {
        return view('news.technolgy');
    }
        function LifeStyle() {
        return view('news.LifeStyle');
    }
    
}
