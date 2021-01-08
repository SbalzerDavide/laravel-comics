<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class comicController extends Controller
{
    public function show($slug){

        $comics = config('dc-database');

        $comic =[];


        //selection with id
        // foreach ($comics as $item){
        //     if ($item['id'] == $id){
        //         $comic = $item;
        //     }
        // };

        foreach ($comics as $item){
            $titleSlug = Str::slug($item['title'], '-');
            if ($titleSlug == $slug){
                $comic = $item;
                break;
            }
        };

        if (empty($comic)){
            abort(404);
        };

        return view('comic', compact('comic'));
    }
}
