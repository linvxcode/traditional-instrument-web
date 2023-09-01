<?php

namespace App\Http\Controllers;

use App\Models\Instruments;
use App\Models\User;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
   public function index()
   {
    return view('instrument',[
        "title" => "Instrument",
        "instrument" =>Instruments::with(['user' => function($query) {
            return $query->select('id', 'username');
        }, 'category' => function($query) {
            return $query->select('id', 'name');
        }])->select('name', 'user_id', 'category_id', 'img', 'slug')->latest()->simplePaginate(5), 
        // 'user' => User::all(),
        // select('name', 'user_id', 'category_id', 'img', 'slug')->

 
    ]); 
   }

   public function show(Instruments $post)
   {
    return view('post', [
        "title" => $post->name,
        // $instruments = Instruments::all(),
        "post" => $post
    ]);
   }

}
