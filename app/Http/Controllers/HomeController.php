<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
//        Cookie::queue('test', 'Test cookie', 5);
//        Cookie::queue(Cookie::forget('test'));
//        dump(Cookie::get('test'));
//        dump($request->cookie('test'));
//        Cache::put('key', 'Value', 60);
//        dump(Cache::pull('key'));
//        dump(Cache::get('key'));

//        Cache::put('key', 'Value', 300);
//        Cache::flush();
        if(Cache::has('posts')){
            $posts = Cache::get('posts');
        } else {
            $posts = Post::query()->orderBy('id', 'desc')->get();
            Cache::put('posts', $posts);
        }
        $title = 'Home Page';


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
        $request->session()->flash('success', 'Данные сохранены!');
        return redirect()->route('home');
    }
}
