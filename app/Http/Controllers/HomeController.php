<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        $h1 = 'Home page';
        $data1 = range(1, 30);
        $data2 = [
            'title' => 'Title',
            'content' => 'Content',
            'key' => 'Keywords'
        ];

        return view('home', compact('title', 'h1', 'data1', 'data2'));
    }

    public function test()
    {
        return __METHOD__;
    }
}
