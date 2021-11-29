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
//        $data = Country::all();
//        $data = Country::query()->limit(5)->get();
//        $data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->offset(1)->limit(2)->get();
//        $data = City::find(5);
//        $data = Country::find('AGO');

//        dd($data);
        /*$post = new Post();
        $post->title = 'Статья 4';
        $post->content = 'Lorem ipsum 4';
        $post->save();*/
//        Post::query()->create(['title' => 'Post 5', 'content' => 'Lorem ipsum 5']);
        /*$post = new Post();
        $post->fill(['title' => 'Post 6', 'content' => 'Lorem ipsum 6']);
        $post->save();*/
        /*$post = Post::query()->find(5);
        $post->content = 'Lorem ipsum 5';
        $post->save();*/

        /*Post::query()
            ->where('id', '>', 3)
            ->update(['updated_at' => NOW()]);*/
        /*$post = Post::query()->find(5);
        $post->delete();*/

//        Post::destroy(6);

//        $post = Post::query()->find(3);
//        c
        /*$posts = Category::query()->find(2)->posts()->select('title')->where('id', '>', '2')->get();
//        $post = Post::query()->find(1);
        dump($posts);*/

       /* $posts = Post::query()->with('category')->where('id', '>', 1)->get();
        foreach ($posts as $post) {
            dump($post['title'], $post->category->title);
        }*/

        $post = Post::query()->find(7);
        dump($post->title);

        foreach ($post->tags as $tag) {
            dump($tag->title);
        }

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
