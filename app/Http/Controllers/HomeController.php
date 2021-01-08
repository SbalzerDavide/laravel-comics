<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){

        $comics = config('dc-database');

        foreach ($comics as $key => $item){
            $slug = Str::slug($item['title'], '-');
            $comics[$key]['slug'] = $slug;
        };





        return view('home', compact('comics'));
    }

};
