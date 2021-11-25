<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $query = DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['Статья 5', 'Контент статьи 5']);
//        var_dump($query);
//        DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL", [NOW(), NOW()]);
//        DB::delete("DELETE FROM posts WHERE id = :id", ['id' => 4]);
        DB::beginTransaction();
        try {
            DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]);
            DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
            DB::commit();
        }catch ( \Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }

        $posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id' => 0]);
        return $posts;

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
