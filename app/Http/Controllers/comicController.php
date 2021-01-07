<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comicController extends Controller
{
    public function show($id){

        $comics = config('dc-database');

        $comic =[];

        foreach ($comics as $item){
            if ($item['id'] == $id){
                $comic = $item;
            }
        };



            


        


        return view('comic', compact('comic'));
    }
}
