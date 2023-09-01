<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    public function createSong()
    {
        return view('dashboard.dashboard-song.index',[
            "title" => "Add Song",
            // "songs" => Song::all()
        ]);
    }

    public function SongStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:songs',
            'songaudio' => 'required|file|mimetypes:audio/mpeg,audio/x-wav,audio/x-aiff,audio/x-mpegurl',
            'image' => 'required|file|image',
            'image2' => 'required|file|image',
            'image3' => 'required|file|image',
            'image4' => 'required|file|image',
        ]);
        if($request->file('songaudio')){
            $validatedData['songaudio'] = $request->file('songaudio')->store('public/audio');
        }

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('public/image');
        };
        if($request->file('image2')){
            $validatedData['image2'] = $request->file('image2')->store('public/image');
        };
        if($request->file('image3')){
            $validatedData['image3'] = $request->file('image3')->store('public/image');
        };
        if($request->file('image4')){
            $validatedData['image4'] = $request->file('image4')->store('public/image');
        };

        Song::create($validatedData);

        return redirect('/admin')->with('succes', 'New Song Has Been Added');
    }

    public function editSong(Song $song)
    {
        return view('dashboard.dashboard-song.song-edit',[
            "title" => "Edit Song",
            "song" => $song
        ]);
    }

    public function updateSong(Request $request, Song $song)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'slug' => 'required|unique:songs',
            'image' => 'required|file|image',
            'image2' => 'required|file|image',
        ]);

        if($request->file('image')){
          if($request->oldImage) {
            Storage::delete($request->oldImage);
          }
            $validatedData['image'] = $request->file('image')->store('public/image');
        }

        if($request->file('image2')){
            if($request->oldImagee) {
                Storage::delete($request->oldImagee);
            }
            $validatedData['image2'] = $request->file('image2')->store('public/image');
        }

        
        if($request->slug != $song->slug) {
            $validatedData['slug'] = 'required|unique:songs';
        }

        Song::where('id', $song->id)
            ->update($validatedData);

        return redirect('/admin')->with('succes', 'New Song Has Been Added');
    
    } 

    public function deleteSong(Song $song)
    {
       
            if($song->image) {
                Storage::delete($song->image);
            }
            if($song->image2) {
                Storage::delete($song->image2);
            }
        Song::destroy($song->id);
        return redirect('/admin')->with('delete', 'Song Has Been Deleted');

        
    }
}
