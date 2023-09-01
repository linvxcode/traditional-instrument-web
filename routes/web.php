<?php

use App\Models\Song;
// use App\Models\Sejarahg;
// use App\Models\Sejarahr;
// use App\Models\Sejarahs;
// use App\Models\Insserune;
use App\Models\User;
use App\Models\Audio;
// use App\Http\Controllers\SejarahController;
// use App\Http\Controllers\SejarahgController;
// use App\Http\Controllers\SejarahrController;
use App\Models\Abouta;
use App\Models\Category;
use App\Models\Instruments;
use App\Models\InstrumentAudio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\CategoryLatihanController;
use App\Http\Controllers\InstrumentAudioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/category', function(){
    return view('category.category', [
        "title"=> "category",
        "category" => Category::all(),
    ]);
});

Route::get('/play', function () {
    return view('play',[
        "title" => "Piano",
        "audio" => Audio::all(),
        $audioFiles = Audio::all(),
        'audioFiles' => $audioFiles

    ]);
});



Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
    ]);
});



Route::get('/categories/{category:slug}', function(Category $category){
    return view('categories', [
        "title" => $category->name,
        "instrument" => $category->instrument()->simplePaginate(5),
        "category" => $category->name
    ]);
});
Route::get('/authors/{user:username}', function(User $user){
    return view('author', [
        "title" => $user->name,'Post',
        "instrument" => $user->instrument()->with(['category' => function($query) {
            return $query->select('id', 'slug', 'name');
        }, 'user' => function($query) {
            return $query->select('id', 'username');
        }])->paginate(5),
        
    ]);
});


Route::delete('/song-delete/{song:slug}', [SongController::class, 'deleteSong'])->middleware('auth');
Route::put('/song-update/{song:slug}', [SongController::class, 'updateSong'])->middleware('auth');
Route::get('/song-edit/{song:slug}', [SongController::class, 'editSong'])->middleware('auth');
Route::post('/song-store', [SongController::class, 'SongStore'])->middleware('auth');
Route::get('/create-song', [SongController::class, 'createSong'])->middleware('auth');
Route::get('/dashboard-all-post', [DashboardAdminController::class, 'index'])->middleware('auth');
Route::get('/post-show/{instrument:slug}', [DashboardAdminController::class, 'show'])->middleware('auth');

// Route::get('/exercise', [LatihanController::class, 'next'])->middleware('auth');
Route::delete('/latihan-delete/{latihan:slug}', [LatihanController::class, 'destroyLatihan'])->middleware('admin');
Route::put('/latihan-update/{latihan:slug}', [LatihanController::class, 'updateLatihan'])->middleware('admin');
Route::get('/latihan-update/{latihan:slug}', [LatihanController::class, 'editLatihan'])->middleware('admin');
Route::get('/latihan-create', [LatihanController::class, 'createLatihan'])->middleware('admin');
Route::post('/latihan-create', [LatihanController::class, 'storeLatihan'])->middleware('admin');
Route::post('/check-answer', [LatihanController::class, 'checkAnswer'])->middleware('auth');
Route::get('/exercise/{latihans:slug}', [LatihanController::class, 'show'])->middleware('auth');
Route::get('/latihan', [LatihanController::class,'index'])->middleware('auth');

Route::delete('/category-delete/{categorylatihan:slug}', [CategoryLatihanController::class, 'destroy'])->middleware('admin');
Route::get('/category-edit/{categorylatihan:slug}', [CategoryLatihanController::class, 'edit'])->middleware('admin');
Route::put('/category-edit/{categorylatihan:slug}', [CategoryLatihanController::class, 'update'])->middleware('admin');

Route::post('/category-latihan-store', [CategoryLatihanController::class, 'store'])->middleware('admin');
Route::get('/category-latihan-create', [CategoryLatihanController::class, 'create'])->middleware('admin');
Route::put('/edit-audio/{instrumentAudio:slug}', [InstrumentAudioController::class, 'update'])->middleware('admin');
Route::get('/edit-audio/{instrumentAudio:slug}', [InstrumentAudioController::class, 'edit'])->middleware('admin');
Route::delete('/delete-audio/{instrumentAudio:slug}', [InstrumentAudioController::class, 'destroy'])->middleware('admin');

Route::get('/admin', [InstrumentAudioController::class, 'allSimulasi'])->middleware('auth');
Route::get('/ins-simulasi/{audio_path:slug}', [InstrumentAudioController::class, 'show'])->middleware('auth');
Route::get('all-instrument-simulasi', [InstrumentAudioController::class, 'allSim'])->middleware('auth');
Route::get('/instrument-simulasi', [InstrumentAudioController::class, 'userSim'])->middleware('auth');
Route::post('/audio-create', [InstrumentAudioController::class, 'store'])->middleware('admin');
Route::get('/audio-sim', [InstrumentAudioController::class, 'index'])->middleware('admin');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/instrument/{post:slug}', [InstrumentController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/create-materi', [DashboardController::class, 'create'])->middleware('admin');
Route::post('/create-materi', [DashboardController::class, 'store'])->middleware('admin');
Route::delete('/delete-materi/{instrument:slug}', [DashboardController::class, 'destroy'])->middleware('admin');
Route::get('/edit-materi/{instrument:slug}', [DashboardController::class, 'edit'])->middleware('admin');
Route::put('/edit-materi/{instrument:slug}', [DashboardController::class, 'update'])->middleware('admin');
Route::get('/about',[AboutController::class, 'index'] );

Route::get('/instrument', [InstrumentController::class, 'index']);















