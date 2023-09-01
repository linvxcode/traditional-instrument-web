<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Audio;
use App\Models\Category;
use App\Models\Instruments;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard',[
            "title" => "Dashboard",
            // "song" => Song::where('name'),
            // "instrumentss" => Instruments::with(['user', 'category'])->where('user_id', auth()->user()->id)->paginate(5),
            // "user" => User::where('username')->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.create-materi',[
            "title" => "Buat Materi Baru",
            "category"=> Category::select('name', 'slug', 'id')->get()
        ]);
    }

    public function store(Request $request)
    {
    //   return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:instruments',
            'category_id' => 'required',
            // 'user_id' => 'required',
            'body' => 'required', 
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        
        Instruments::create($validatedData);

        return redirect('/dashboard-all-post')->with('succes', 'New Materi Has Been Uplouded');
    
    }
    public function destroy(Instruments $instrument)
    {
        Instruments::destroy($instrument->id);
        return redirect('/dashboard-all-post')->with('delete', 'Materi Has Been Deleted');
    }

    public function edit(Instruments $instrument)
    {
        return view('dashboard.edit',[
            "title" => "Edit Materi",
            "category" => Category::select('name', 'slug', 'id')->get(),
            'instrument' => $instrument
        ]);
    }
    public function update(Request $request, Instruments $instrument)
    {
        $rules = [
            'name' => 'required|max:255',
            
            'category_id' => 'required',
            // 'user_id' => 'required',
            'body' => 'required',
        ]; 

        if($request->slug != $instrument->slug) {
            $rules['slug'] = 'required|unique:instruments';
        }
        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        
        Instruments::where('id', $instrument->id)
                   ->update($validatedData);

        return redirect('/dashboard-all-post')->with('succes', 'Materi Has Been Updated');
    
    }


}
