<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Latihan;
use Illuminate\Http\Request;
use App\Models\CategoryLatihan;
use App\Models\InstrumentAudio;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreInstrumentAudioRequest;
use App\Http\Requests\UpdateInstrumentAudioRequest;

class InstrumentAudioController extends Controller
{
    public function userSim()
    {
        // return view('dashboard.user-simulasi.user-simulasi', [
        //     "title" => "Instrument Simulation",
        //     "instrumentAudio" => InstrumentAudio::all(),
        //     $audio_path = InstrumentAudio::all(),
        //     'audio_path' => $audio_path
        // ]); 
    }

    public function allSimulasi()
    {
        return view('dashboard.admin-create.admin', [
            "title" => "Admin",
            "instrumentAudios" => InstrumentAudio::select('name', 'slug', 'c_audio_path_1', 'd_audio_path_2', 'e_audio_path_3', 'f_audio_path_4', 'g_audio_path_5', 'a_audio_path_6', 'b_audio_path_7')->latest()->simplePaginate(5),
            "latihans" => Latihan::with(['categoryLatihan' => function($query){
                return $query->select('id', 'name');
            }   
            ])->select('name', 'category_latihan_id', 'question', 'essay', 'answer', 'slug')->latest()->simplePaginate(5),
            "categoryLatihans" => CategoryLatihan::select('name', 'slug')->latest()->simplePaginate(5),
            "songs" => Song::select('slug', 'name', 'image','image2')->get(),
            
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function allSim()
    {
        return view('dashboard.user-simulasi.all-instrument-simulasi', [
            "title" => "All Instrument Simulasi",
            "instrumentAudio" => InstrumentAudio::select('name', 'slug')->latest()->get(),
        ]);
    }

    public function index()
    {
        return view('dashboard.admin-create.audio-sim', [
            "title" => "Create Simulation Audio"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstrumentAudioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'c_audio_path_1' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'd_audio_path_2' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'e_audio_path_3' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'f_audio_path_4' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'g_audio_path_5' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'a_audio_path_6' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'b_audio_path_7' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'cc_audio_path_8' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'dd_audio_path_9' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'ff_audio_path_10' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'gg_audio_path_11' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'aa_audio_path_12' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl'
        ]);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:instrument_audio',
        ]);



        $audio_path = [
            'c_audio_path_1' => null,
            'd_audio_path_2' => null,
            'e_audio_path_3' => null,
            'f_audio_path_4' => null,
            'g_audio_path_5' => null,
            'a_audio_path_6' => null,
            'b_audio_path_7' => null,
            'cc_audio_path_8' => null,
            'dd_audio_path_9' => null,
            'ff_audio_path_10' => null,
            'gg_audio_path_11' => null,
            'aa_audio_path_12' => null
        ];

        foreach ($audio_path as $field => &$path) {
            if ($request->hasFile($field)) {
                $path = $request->file($field)->store('public/audio');
            } else {
                $path = null;
            }
        }

        $instrumentAudio = new InstrumentAudio;
        $instrumentAudio->name = $validatedData['name'];
        $instrumentAudio->slug = $validatedData['slug'];
        $instrumentAudio->c_audio_path_1 = $audio_path['c_audio_path_1'];
        $instrumentAudio->d_audio_path_2 = $audio_path['d_audio_path_2'];
        $instrumentAudio->e_audio_path_3 = $audio_path['e_audio_path_3'];
        $instrumentAudio->f_audio_path_4 = $audio_path['f_audio_path_4'];
        $instrumentAudio->g_audio_path_5 = $audio_path['g_audio_path_5'];
        $instrumentAudio->a_audio_path_6 = $audio_path['a_audio_path_6'];
        $instrumentAudio->b_audio_path_7 = $audio_path['b_audio_path_7'];
        $instrumentAudio->cc_audio_path_8 = $audio_path['cc_audio_path_8'];
        $instrumentAudio->dd_audio_path_9 = $audio_path['dd_audio_path_9'];
        $instrumentAudio->ff_audio_path_10 = $audio_path['ff_audio_path_10'];
        $instrumentAudio->gg_audio_path_11 = $audio_path['gg_audio_path_11'];
        $instrumentAudio->aa_audio_path_12 = $audio_path['aa_audio_path_12'];
        $instrumentAudio->save();

        return redirect('/admin')->with('succes', 'Audio uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstrumentAudio  $instrumentAudio
     * @return \Illuminate\Http\Response
     */
    public function show(InstrumentAudio $audio_path)
    {
        return view('dashboard.user-simulasi.user-simulasi', [
            "title" => "Instrument Simulation",
            // "instrumentAudio" => InstrumentAudio::all(),
            // $audio_path = InstrumentAudio::all(),
            "songs" => Song::all(),
            "audio_path" => $audio_path
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstrumentAudio  $instrumentAudio
     * @return \Illuminate\Http\Response
     */
    public function edit(InstrumentAudio $instrumentAudio)
    {
        return view('dashboard.admin-create.audio-update', [
            "title" => "Edit Audio Simulation",
            // $instrumentAudio = InstrumentAudio::all()
            "instrumentAudio" => $instrumentAudio
            // "instrumentAudio" => InstrumentAudio::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstrumentAudioRequest  $request
     * @param  \App\Models\InstrumentAudio  $instrumentAudio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstrumentAudio $instrumentAudio)
    {   
        $request->validate([
            'c_audio_path_1' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'd_audio_path_2' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'e_audio_path_3' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'f_audio_path_4' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'g_audio_path_5' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'a_audio_path_6' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'b_audio_path_7' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'cc_audio_path_8' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'dd_audio_path_9' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'ff_audio_path_10' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'gg_audio_path_11' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'aa_audio_path_12' => 'nullable|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl'
        ]);
        if ($request->hasFile('c_audio_path_1')) {
            if ($instrumentAudio->c_audio_path_1) {
                Storage::delete($instrumentAudio->c_audio_path_1);
            }

            $audio_path = $request->file('c_audio_path_1')->store('public/audio');
            $instrumentAudio->c_audio_path_1 = $audio_path;
            $instrumentAudio->save();
        }
        if ($request->hasFile('d_audio_path_2')) {
            if ($instrumentAudio->d_audio_path_2) {
                Storage::delete($instrumentAudio->d_audio_path_2);
            }
            $audio_path = $request->file('d_audio_path_2')->store('public/audio');
            $instrumentAudio->d_audio_path_2 = $audio_path;
            $instrumentAudio->save();
        }
        if ($request->hasFile('e_audio_path_3')) {
            if ($instrumentAudio->e_audio_path_3) {
                Storage::delete($instrumentAudio->e_audio_path_3);
            }
            $audio_path = $request->file('e_audio_path_3')->store('public/audio');
            $instrumentAudio->e_audio_path_3 = $audio_path;
            $instrumentAudio->save();
        }
        if ($request->hasFile('f_audio_path_4')) {
            if ($instrumentAudio->f_audio_path_4) {
                Storage::delete($instrumentAudio->f_audio_path_4);
            }
            $audio_path = $request->file('f_audio_path_4')->store('public/audio');
            $instrumentAudio->f_audio_path_4 = $audio_path;
            $instrumentAudio->save();
        }
        if ($request->hasFile('g_audio_path_5')) {
            if ($instrumentAudio->g_audio_path_5) {
                Storage::delete($instrumentAudio->g_audio_path_5);
            }
            $audio_path = $request->file('g_audio_path_5')->store('public/audio');
            $instrumentAudio->g_audio_path_5 = $audio_path;
            $instrumentAudio->save();
        }
        if ($request->hasFile('a_audio_path_6')) {
            if ($instrumentAudio->a_audio_path_6) {
                Storage::delete($instrumentAudio->a_audio_path_6);
            }
            $audio_path = $request->file('a_audio_path_6')->store('public/audio');
            $instrumentAudio->a_audio_path_6 = $audio_path;
            $instrumentAudio->save();
        }
        if ($request->hasFile('b_audio_path_7')) {
            if ($instrumentAudio->b_audio_path_7) {
                Storage::delete($instrumentAudio->b_audio_path_7);
            }
            $audio_path = $request->file('b_audio_path_7')->store('public/audio');
            $instrumentAudio->b_audio_path_7 = $audio_path;
            $instrumentAudio->save();
        }
 
        return redirect('/admin')->with('succes', 'Audio uploaded successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstrumentAudio  $instrumentAudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstrumentAudio $instrumentAudio)
    {
        if ($instrumentAudio->c_audio_path_1) {
            Storage::delete($instrumentAudio->c_audio_path_1);
        }
        if ($instrumentAudio->d_audio_path_2) {
            Storage::delete($instrumentAudio->d_audio_path_2);
        }
        if ($instrumentAudio->e_audio_path_3) {
            Storage::delete($instrumentAudio->e_audio_path_3);
        }
        if ($instrumentAudio->f_audio_path_4) {
            Storage::delete($instrumentAudio->f_audio_path_4);
        }
        if ($instrumentAudio->g_audio_path_5) {
            Storage::delete($instrumentAudio->g_audio_path_5);
        }
        if ($instrumentAudio->a_audio_path_6) {
            Storage::delete($instrumentAudio->a_audio_path_6);
        }
        if ($instrumentAudio->b_audio_path_7) {
            Storage::delete($instrumentAudio->b_audio_path_7);
        }
        InstrumentAudio::destroy($instrumentAudio->id);
        return redirect('/admin')->with('delete', 'Audio Has Been Deleted');
    }
}
