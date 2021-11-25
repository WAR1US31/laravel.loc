<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $data = DB::table('country')->get();
//        $data = DB::table('country')->limit(5)->get();
//        $data = DB::table('country')->select('Code', 'Name')->limit(5)->get();
//        $data = DB::table('country')->select('Code', 'Name')->orderBy('Code', 'desc')->first();
//        $data = DB::table('city')->select('ID', 'Name')->find(2);
        /*$data = DB::table('city')->select('ID', 'Name')->where([
            ['id', '>', 1],
            ['id', '<', 5]
        ])->get();*/
//        $data = DB::table('city')->where('id', '<', 5)->value('Name');
//        $data = DB::table('country')->limit(10)->pluck('Name', 'Code');
//        $data = DB::table('country')->count();
//        $data = DB::table('country')->max('population');
//        $data = DB::table('country')->avg('population');
//        $data = DB::table('city')->select('CountryCode')->distinct()->get();
        $data = DB::table('city')
            ->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')
            ->limit(10)
            ->join('country', 'city.CountryCode', '=', 'country.Code')
            ->orderBy('city.ID')
            ->get();
        dd($data);

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
