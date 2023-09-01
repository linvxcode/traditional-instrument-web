@extends('dashboard.layouts2.main2')

@section('konten')


        <div class="mb-10 gap-5 flex flex-wrap justify-center justify-items-center">
        <a href="#instruction" class="btn mb-2">Instruction</a>
        <div class="modal" id="instruction">
          <div class="modal-box">
            <h3 class="font-bold text-lg mt-0">Petunjuk Memainkan Key</h3>
            <p class="py-4">Anda Bisa Tekan Di Key nya dan Anda Juga Bisa Menekan Keyboard untuk membunyikan Key nya </p>
            <p>Untuk Membunyikan White Key Di Keyboard Tekan Huruf "A" "S" "D" "F" "G" "H" "J" "K" "L"</p>
            <p>Untuk Menekan Black Key Anda Bisa Menggunakan Keyboard "R" "T" "Y" "U" "I"</p>
            <div class="modal-action">
            <a href="#" class="btn">Close</a>
            </div>
          </div>
        </div>

        {{-- <a href="#learn" class="btn mx-5 scroll-smooth">Learn Music</a> --}}
        <button class="songs btn">Start Songs</button>
       {{-- @foreach ($songs as $song)
      <select name="" id="" class="input-bordered rounded-md">
      <option value="">--Select--</option>  
      <option class="song" value="{{$song->name}}">{{$song->name}}</option>  
      </select>
      @endforeach   --}}
      
      </div>
    {{-- <div class="px-10 mb-10 text-lime-900">Note!! Bisa Menggunakan Keyboard</div> --}}
{{-- <h1r class="container">------------ Serunee Kalee ----------</h1r> --}}



<div class="px-5 mb-3 mt-3 img hidden">
  <div class="flex gap-3">
    {{-- <button class="btn stop mb-3 ">S</button> --}}
  <button class="btn stop mb-3 justify-start">Stop</button>
  @foreach ($songs as $song)
  <audio controls id="songaudio" class="justify-end">
    <source src="{{Storage::url($song->songaudio)}}" type="audio/mpeg">
    </audio>
  </div>
  <img src="{{Storage::url($song->image)}}" alt="" >
  @endforeach
</div>

    <div class="flex justify-center justify-items-centerc px-5 h-[150px]" id="key">

        <div data-note="C4" class="key white blck" ><h3 class="tuts top-[120px] relative">C</h3></div>
        <div data-note="C44" class="key black" ><h3 class="tuts top-[120px] relative">C#</h3></div>
        <!-- white keys -->
        <div data-note="D4" class="key white blck" ><h3 class="tuts top-[120px] relative">D</h3></div>
         <!-- white and black keys -->
        <div data-note="D44" class="key black" ><h3 class="tuts top-[120px] relative">D#</h3></div>
        <div data-note="E4" class="key white " ><h3 class="tuts top-[120px] relative">E</h3></div>
        <div data-note="F4" class="key white blck" ><h3 class="tuts top-[120px] relative">F</h3></div>
        <!-- white keys -->
        <div data-note="F44" class="key black" ><h3 class="tuts top-[120px] relative">F#</h3></div>
         <!-- white and black keys -->
        <div data-note="G4" class="key white blck" ><h3 class="tuts top-[120px] relative">G</h3></div>
        <div data-note="G44" class="key black" ><h3 class="tuts top-[120px] relative">G#</h3></div>
        <!-- white keys -->
        <div data-note="A4" class="key white blck" ><h3 class="tuts top-[120px] relative">A</h3></div>
        <div data-note="A44" class="key black" ><h3 class="tuts top-[120px] relative">A#</h3></div>
        <div data-note="B4" class="key white" ><h3 class="tuts top-[120px] relative">B</h3></div>
        <div data-note="C5" class="key white" ><h3 class="tuts top-[120px] relative">C</h3></div>
        <div data-note="D5" class="key white" ><h3 class="tuts top-[120px] relative">D</h3></div>
       </div>  

       {{-- <div class="mt-20 px-5">
        <h1 class="w-full text-xl">Latihan Instrument</h1>
        <p class="text-sm mt-2">Cobalah latihan instrument dan pelajari cara mengidentifikasi, menulis, dan memainkan instrument</p>
        <a href="latihan" class=""><button class="btn btn-sm mt-3">Coba</button> </a>
       </div> --}}

       <div class="le flex justify-center mt-40 w-56 mx-auto h-60" id="learn" onchange="lern()">

        {{-- <p>Oke </p> --}}

       </div>
       {{-- foreach ($audio_path->where('id', 2) as $instrumentAudio) --}}

              {{-- @foreach ($audio_path as $instrumentAudio) --}}
        <div class="hidden">   
     <audio id="C4" controls >
        {{-- <source src="{{Storage::url($aud->path)}}" type="audio/mpeg"> --}}
        <source src="{{Storage::url($audio_path->c_audio_path_1)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}

       {{-- @foreach ($audio_path as $instrumentAudio) --}}
     <audio id="D4" controls >
        <source src="{{Storage::url($audio_path->d_audio_path_2)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}

       <!--Key E-->
       {{-- @foreach ($audio_path as $instrumentAudio) --}}
     <audio id="E4" controls >
        <source src="{{Storage::url($audio_path->e_audio_path_3)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}

       <!--Key F-->
       {{-- @foreach ($audio_path as $audio_path) --}}
     <audio id="F4" controls >
        <source src="{{Storage::url($audio_path->f_audio_path_4)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}

       <!--Key G-->
       {{-- @foreach ($audio_path as $audio_path) --}}
     <audio id="G4" controls >
        <source src="{{Storage::url($audio_path->g_audio_path_5)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}

       <!--Key A-->
       {{-- @foreach ($audio_path as $audio_path) --}}
     <audio id="A4" controls >
        <source src="{{Storage::url($audio_path->a_audio_path_6)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}

       <!--Key B-->
       {{-- @foreach ($audio_path as $audio_path) --}}
     <audio id="B4" controls >
        <source src="{{Storage::url($audio_path->b_audio_path_7)}}" type="audio/mpeg">
       </audio>
       {{-- @endforeach --}}


       {{-- <audio id="C4" src="{{Storage::url($aud->piano_key)}}"></audio> --}}
       {{-- <audio id="D4" src="music/whitetuts/d4.wav"></audio> --}}
       {{-- <audio id="D44" src="music/blacktuts/d44.wav"></audio> --}}
       {{-- <audio id="E4" src="music/whitetuts/e4.wav"></audio> --}}
       {{-- <audio id="F4" src="music/whitetuts/f4.wav"></audio> --}}
       {{-- <audio id="F44" src="music/blacktuts/f44.wav"></audio> --}}
       {{-- <audio id="G4" src="music/whitetuts/g4.wav"></audio> --}}
       {{-- <audio id="G44" src="music/blacktuts/g44.wav"></audio> --}}
       {{-- <audio id="A4" src="music/a4.wav"></audio> --}}
       {{-- <audio id="A44" src="music/blacktuts/a44.wav"></audio> --}}
       {{-- <audio id="B4" src="music/whitetuts/b4.wav"></audio> --}}
       {{-- <audio id="C5" src="music/whitetuts/c5.wav"></audio> --}}
       {{-- <audio id="D5" src="music/whitetuts/d5.wav"></audio> --}}
      {{-- </div> --}}

        <!-- Audio files -->
       {{-- <audio id="C4" src="music/whitetuts/c4.wav"></audio>
       <audio id="C44" src="music/blacktuts/c44.wav"></audio>
       <audio id="D4" src="music/whitetuts/d4.wav"></audio>
       <audio id="D44" src="music/blacktuts/d44.wav"></audio>
       <audio id="E4" src="music/whitetuts/e4.wav"></audio>
       <audio id="F4" src="music/whitetuts/f4.wav"></audio>
       <audio id="F44" src="music/blacktuts/f44.wav"></audio>
       <audio id="G4" src="music/whitetuts/g4.wav"></audio>
       <audio id="G44" src="music/blacktuts/g44.wav"></audio>
       <audio id="A4" src="music/a4.wav"></audio>
       <audio id="A44" src="music/blacktuts/a44.wav"></audio>
       <audio id="B4" src="music/whitetuts/b4.wav"></audio>
       <audio id="C5" src="music/whitetuts/c5.wav"></audio>
       <audio id="D5" src="music/whitetuts/d5.wav"></audio> --}}   
       




<style>
  .piano-key {
    margin: 0 1px;
    /* width: 8%; */
    height: 100px;
    background: rgb(195, 192, 192);
    /* background-color: #your-color-here; */
    /* position: relative; */
}
.white {
    position: relative;
    /* background: rgb(136, 134, 134); */
    background: rgb(195, 192, 192);

    width: 10%;
	/* width:200px; */
	/* width:100px; */
    /* height: 400px; */
    margin: 0 1px;
  }
.down{
  margin-top: 150px;
  transition: all 4s;
}

 .black{
    content: "";
    /* position: absolute; */
    color: white;
    top: 0;
    background: rgb(17, 11, 11);
    right: -25%;
    width: 10%;
    height: 100%;
    /* z-index: 1; */
 }
  /* .white.blck:after {
    content: "";
    position: absolute;
    top: 0;
    background: rgb(17, 11, 11);
    right: -25%;
    width: 50%;
    height: 50%;
    z-index: 1;
  } */
  .key:hover {
	background-color: #303030;
  }
  .key.hover{
	background-color: #ccc;
	box-shadow: 0 0 10px #888;
  }
  
</style>


<script>
$(document).ready(function() {
    $(".start").click(function() {
      $(".c").addClass('down');
    });
    $(".songs").click(function () { 
      const audio = document.getElementById("songaudio");
      setTimeout(() => {
        audio.play();  
      }, 1000);
     $(".img").show(".showimg");      
    });
    $(".stop").click(function () { 
      $(".img").hide(".showimg");
      const audio = document.getElementById("songaudio");
      audio.pause();
    });
});








function Lern(){
document.getElementById("learn").style.transition = "all 0.5s"

}


const WHITE= ['a','s','d','f','g','h','j','k','l'];
const BLACK=['r','t','y','u','i'];

const change=['x'];
const CHANGE=['X'];

const WHITEE= ['A','S','D','F','G','H','J','K','L'];
const BLACKK=['R','T','Y','U','I'];


let keys=document.querySelectorAll('.key');
let blackKeys=document.querySelectorAll('.key.black');
let whiteKeys=document.querySelectorAll('.key.white');


// huruf besar-----
let whiteeKeys=document.querySelectorAll('.key.white');
let blackkKeys=document.querySelectorAll('.key.black');
// end huruf besar

// eventlistener untuk mouse klik
keys.forEach(key =>{
key.addEventListener('click',()=>playMusic(key));
});
//eventlistener untuk pencet keyboard 

document.addEventListener('keydown',e=>{
let key=e.key;

let whiteKeyIndex=WHITE.indexOf(key);
let blackKeyIndex=BLACK.indexOf(key);




// Huruf Besar--
let blackkKeyIndex=BLACKK.indexOf(key);
let whiteeKeyIndex=WHITEE.indexOf(key);

 //   jika keyboard di tekan menggunakan huruf besar 
if (whiteeKeyIndex >= 0) {
    whiteeKeys[whiteeKeyIndex].classList.add('hover');
  }
if (blackkKeyIndex >= 0) {
    blackkKeys[blackkKeyIndex].classList.add('hover');
  }  

// jika di tekan di huruf kecil
if (whiteKeyIndex >= 0) {
    whiteKeys[whiteKeyIndex].classList.add('hover');
  }

if (blackKeyIndex >= 0) {
    blackKeys[blackKeyIndex].classList.add('hover');
  }

// Huruf Besar---
if(blackkKeyIndex>-1) playMusic(blackkKeys[blackkKeyIndex]);
if(whiteeKeyIndex>-1) playMusic(whiteeKeys[whiteeKeyIndex]);
// End Huruf Besar---



if(whiteKeyIndex>-1) playMusic(whiteKeys[whiteKeyIndex]);
// whiteKeyIndex.style.backgroundColor ='black';
if(blackKeyIndex>-1) playMusic(blackKeys[blackKeyIndex]);


});
document.addEventListener('keyup', e => {
    
  let key = e.key;
  let whiteKeyIndex = WHITE.indexOf(key);
  let blackKeyIndex = BLACK.indexOf(key);

  let whiteeKeyIndex = WHITEE.indexOf(key);
  let blackkKeyIndex = BLACKK.indexOf(key);

// jika keyboard di tekan maka hilangkan hover
  if (whiteKeyIndex >= 0) {
    whiteKeys[whiteKeyIndex].classList.remove('hover');
  }

  if (blackKeyIndex >= 0) {
    blackKeys[blackKeyIndex].classList.remove('hover');
  }
  if (whiteeKeyIndex >= 0) {
    whiteeKeys[whiteeKeyIndex].classList.remove('hover');
  }

  if (blackkKeyIndex >= 0) {
    blackkKeys[blackkKeyIndex].classList.remove('hover');
  }


 
});

//  play audio
function playMusic(key){
    


    const audio=document.getElementById(key.dataset.note);
    audio.currentTime=0;
    audio.play();
}


</script>



@endsection