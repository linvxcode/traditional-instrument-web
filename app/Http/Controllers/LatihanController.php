<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use Illuminate\Http\Request;
use App\Models\CategoryLatihan;
use App\Models\InstrumentAudio;
use Illuminate\Support\Facades\Storage;

class LatihanController extends Controller
{
    public function index()
    {
        return view('dashboard.user-simulasi.latihan', [
            "title" => "Latihan",
            // $audio_path = InstrumentAudio::all(),
            // 'audio_path' => $audio_path,
            // 'categoryLatihan' => CategoryLatihan::select('name')->with('latihan')->get(),
            'latihans' => Latihan::with('categoryLatihan')->latest()->get()
            // 'latihan' => $latihan
        ]);
    }



    public function show(Latihan $latihans)
    {
        // $latihans = Latihan::findOrfail($latihans);
        return view('dashboard.user-simulasi.exercise', [
            "title" => "Latihan",
            "latihans" => $latihans,
            // $singlelatihan = Latihan::all(),
            // "singlelatihan" => Latihan::all(),
            $audio_path = InstrumentAudio::all(),
            'audio_path' => $audio_path,
        ]);
    }


   
    public function checkAnswer(Request $request)
    {

    }

 

    public function createLatihan()
    {
        return view('dashboard.admin-create.latihan-create',[
            "title" => "Buat Latihan Baru",
            "category_latihans" => CategoryLatihan::get()
        ]);
    }
    public function storeLatihan(Request $request)
    {
        // return $request; 
        // $latihans = Latihan::get();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:Latihans',
            'audio_quest' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'category_latihan_id' => 'required',
            'question' => 'required|max:255',
            'answer' => 'required|max:255',
            'essay' => 'required',
            'essay2' => 'required',
            'essay3' => 'required',
            'serune_kalee' => 'nullable',
            'geundrang' => 'nullable',
            'rapai' => 'nullable',
            'c' => 'nullable',
            'd' => 'nullable',
            'e' => 'nullable',
            'f' => 'nullable',
            'g' => 'nullable',
            'a' => 'nullable',
            'b' => 'nullable',
        ]);

        if ($request->hasFile('audio_quest')) {
            $audio_quest = $request->file('audio_quest')->store('public/audio');
            $validatedData['audio_quest'] = $audio_quest;
        
        }

        Latihan::create($validatedData); 

        return redirect('/admin')->with('succes', 'New Materi Has Been Uplouded');

    }

    public function editLatihan(Latihan $latihan)
    {
        return view('dashboard.admin-create.latihan-update',[
            "title" => "Edit Latihan",
            "category_latihans" => CategoryLatihan::select('name', 'slug', 'id')->get(),
            // 'latihans' => Latihan::with('categoryLatihan')->get(),
            'latihan' => $latihan
        ]);
    }

    public function destroyLatihan(Latihan $latihan)
    {
        if($latihan->audio_quest){
            Storage::delete($latihan->audio_quest);
        }
        Latihan::destroy($latihan->id);
        return redirect('/admin')->with('delete', 'Latihan Has Been Deleted');

    }

    public function updateLatihan(Request $request, Latihan $latihan)
    {
        
        $data = [
            'name' => $request->name,
            'category_latihan_id' => $request->category_latihan_id,
            'audio_quest' => $request->audio_quest,
            'question' => $request->question,
            'answer' => $request->answer,
            'essay' => $request->essay,
            'essay2' => $request->essay2,
            'essay3' => $request->essay3,
            'serune_kalee' => $request->has('serune_kalee') ? $request->serune_kalee : null,
            'geundrang' => $request->has('gaundrang') ? $request->geundrang : null,
            'rapai' => $request->has('rapai') ? $request->geundrang : null,
            'c' => $request->has('c') ? $request->c : null,
            'd' => $request->has('d') ? $request->d : null,
            'e' => $request->has('e') ? $request->e : null,
            'f' => $request->has('f') ? $request->f : null,
            'g' => $request->has('g') ? $request->g : null,
            'a' => $request->has('a') ? $request->a : null,
            'b' => $request->has('b') ? $request->b : null,
        ];



        if ($request->file('audio_quest')) {
            if($latihan->audio_quest){
                Storage::delete($latihan->audio_quest);
            }

            // $latihan = $request->file('audio_quest')->store('public/audio');
            // $validatedData['audio_quest'] = $audio_quest;
            $data['audio_quest'] = $request->file('audio_quest')->store('public/audio');
        
        }

        if ($request->slug != $latihan->slug) {
            $data['slug'] = $request->slug;
        }
        latihan::where('id', $latihan->id)
                   ->update($data);

        return  redirect('/admin')->with('succes', 'Latihan Has Been Updated');


    }
    
}
