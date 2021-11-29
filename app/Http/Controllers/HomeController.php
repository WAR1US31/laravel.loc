<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        $posts = Post::query()->orderBy('id', 'desc')->get();

        return view('home', compact('title', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $categories = Category::query()->pluck('title', 'id')->all();

        return view('create', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        /*dump($request->input('title'));
        dump($request->input('content'));
        dd($request->input('category_id'));*/

//        dd($request->all())
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'category_id' => 'integer',
        ]);

        /*$rules = [
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'category_id' => 'integer',
        ];
        $messages = [
            'title.required' => 'Заполните поле заголовок',
            'title.min' => 'Минимум 5 символов в заголовке',
            'category_id.integer' => 'Выберите категорию из списка',
        ];*/

//        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        Post::query()->create($request->all());
        return redirect()->route('home');
    }
}
