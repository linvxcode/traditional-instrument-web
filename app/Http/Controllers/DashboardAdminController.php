<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\InstrumentAudio;
use App\Models\Instruments;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {   
        // $this->authorize('admin');
        // if (auth()->user()->username == 'Admin') {
            return view('dashboard.dashboard-all-post.dashboard-all-post',[
                "title" => "Dashboard All Post",
                // "instrument_audios" => InstrumentAudio::select('name')->get(),
                // "category" => Category::where('name')->get(),
                "dashboard" => Instruments::select('name', 'slug', 'category_id')->with(['category' => function($query){
                    return $query->select('name', 'slug', 'id');
                }])->latest()->simplePaginate(5), 
            ]);
        // } 
    }

    public function show(Instruments $instrument)
    {
        return view('dashboard.dashboard-all-post.post-show',[
            "title" => $instrument->name,
            "instrument" => $instrument
        ]);
    }

}
