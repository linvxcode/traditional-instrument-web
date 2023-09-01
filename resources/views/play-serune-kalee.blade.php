@extends('layouts.main')

@section('all')

<div class="mt-32">  
        <ul class="sco mb-10 mx-auto justify-center">
                 <li class="">
                     <a href="/chose-instrument" class="clik font-bold xte">Back To Instrument</a>
                 </li>
        </ul> 


        <div class="mb-10 flex justify-center justify-items-center flex-wrap max-sm:">
          <!-- The button to open modal -->
        <a href="#my-modal-2" class="btn">Instruction</a>
        <!-- Put this part before </body> tag -->
        <div class="modal" id="my-modal-2">
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

        <a href="#learn" class="btn mx-2 scroll-smooth">Learn Music</a>

        <a href="#learnins" class="btn scroll-smooth learnins">Learn How To Use</a>
      </div>

        </div>





    {{-- <div class="px-10 mb-10 text-lime-900">Note!! Bisa Menggunakan Keyboard</div> --}}
{{-- <h1r class="container">------------ Serunee Kalee ----------</h1r> --}}
    <div class="flex justify-center justify-items-center px-5 h-auto" id="key">

        <div data-note="C" class="key white blck" ><h3 class="tuts">C</h3></div>
        {{-- <div data-note="C44" class="key black" ><h3>O</h3></div> --}}
        <!-- white keys -->
        <div data-note="D" class="key white blck" ><h3 class="tuts">D</h3></div>
         <!-- white and black keys -->
        {{-- <div data-note="D44" class="key black" ><h3>E4</h3></div> --}}
        <div data-note="E" class="key white " ><h3 class="tuts">E</h3></div>
        <div data-note="F" class="key white blck" ><h3 class="tuts">F</h3></div>
        <!-- white keys -->
        {{-- <div data-note="F44" class="key black" ><h3>E</h3></div> --}}
         <!-- white and black keys -->
        <div data-note="G" class="key white blck" ><h3 class="tuts">G</h3></div>
        {{-- <div data-note="G44" class="key black" ><h3>D</h3></div> --}}
        <!-- white keys -->
        <div data-note="A" class="key white blck" ><h3 class="tuts">A</h3></div>
        {{-- <div data-note="A44" class="key black" ><h3>Y</h3></div> --}}
        <div data-note="B" class="key white" ><h3 class="tuts">B</h3></div>
        <div data-note="CC" class="key white" ><h3 class="tuts">C</h3></div>
        {{-- <div data-note="D5" class="key white" ><h3>D5</h3></div> --}}
       </div>  
       </div>


       <div class="di">



       </div>








        <!-- Audio files -->
       <audio id="C" src="music/srn/c-srn.wav" ></audio>
       <audio id="D" src="music/srn/d-srn.wav" ></audio>
       <audio id="E" src="music/srn/e-srn.wav" ></audio>
       <audio id="F" src="music/srn/f-srn.wav" ></audio>
       <audio id="G" src="music/srn/g-srn.wav" ></audio>
       <audio id="A" src="music/srn/a-srn.wav" ></audio>
       <audio id="B" src="music/srn/b-srn.wav" ></audio>
       <audio id="CC" src="music/srn/cc-srn.wav" ></audio>
       {{-- <audio id="G44" src="music/blacktuts/g44.wav"></audio>
       <audio id="A4" src="music/a4.wav"></audio>
       <audio id="A44" src="music/blacktuts/a44.wav"></audio>
       <audio id="B4" src="music/whitetuts/b4.wav"></audio>
       <audio id="C5" src="music/whitetuts/c5.wav"></audio>
       <audio id="D5" src="music/whitetuts/d5.wav"></audio> --}}


       <div class="le flex justify-center mt-40 w-56 mx-auto h-60" id="learn" onchange="lern()">

        <p>Oke </p>

       </div>

       {{-- <h1 id="learnins" class="mt-20 flex justify-center mb-5 font-sans">Tutorial bermain Serune Kale dibagian akhir ada musik serune rock fersi</h1>
       <div class="flex justify-center " >
        <video src="vid/Tutorial bermain Serune Kale.mp4" width="700"  controls></video>
      </div>
      <p class="flex justify-center relative mt-10 font-sans">Untuk Lebih Lengkap Tentang Channel Bisa Klik Link di samping ini  <a href="https://www.youtube.com/watch?v=oe0gNnm0OKw" class="absolute mt-10 font-normal">https://www.youtube.com/watch?v=oe0gNnm0OKw</a></p> --}}

      <section id="learnins">
        {{-- <a href="javascript:void callPlayer(&quot;videoembed1&quot;,&quot;playVideo&quot;)"><i class="material-icons md-dark md-36">play_arrow</i></a> --}}
        {{-- <a href="javascript:void callPlayer(&quot;videoembed1&quot;,&quot;pauseVideo&quot;)"><i class="material-icons md-dark md-36">pause</i></a> --}}
        {{-- <a href="javascript:void callPlayer(&quot;videoembed1&quot;,&quot;stopVideo&quot;)"><i class="material-icons md-dark md-36">stop</i></a> --}}
       
        <div id="videoembed1" class="embed-container flex justify-center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/oe0gNnm0OKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>
      





{{-- 
      <div class="flex justify-center flex-wrap">
      <div class="video-player">
        <video id="player" src="vid/Tutorial bermain Serune Kale.mp4" autoplay loop></video>
        <div class="controls">
          <button id="play-pause" class="play">Play</button>
          <input id="volume" type="range" min="0" max="1" step="0.1" value="1">
          <button id="mute">Mute</button>
        </div>
      </div>
    </div> --}}




    
<script>





  // JavaScript
// const player = document.getElementById("player");
// const playPause = document.getElementById("play-pause");
// const volume = document.getElementById("volume");
// const mute = document.getElementById("mute");

// playPause.addEventListener("click", () => {
//   if (player.paused) {
//     player.play();
//     playPause.innerHTML = "Pause";
//   } else {
//     player.pause();
//     playPause.innerHTML = "Play";
//   }
// });

// volume.addEventListener("input", () => {
//   player.volume = volume.value;
// });

// mute.addEventListener("click", () => {
//   player.muted = !player.muted;
//   mute.innerHTML = player.muted ? "Unmute" : "Mute";
// });
   






  const audioElements = document.querySelectorAll('.audio');

audioElements.forEach(element => {
  element.addEventListener('click', () => {
    // Pause all audio elements except the one that was clicked
    audioElements.forEach(otherElement => {
      if (otherElement !== element && otherElement instanceof HTMLAudioElement) {
        otherElement.pause();
      }
    });
  });
});

const WHITE= ['a','s','d','f','g','h','j','k'];
// const BLACK=['r','t','y','u','i'];

const WHITEE= ['A','S','D','F','G','H','J','K'];
// const BLACKK=['R','T','Y','U','I'];
let keys=document.querySelectorAll('.key');
// let blackKeys=document.querySelectorAll('.key.black');
let whiteKeys=document.querySelectorAll('.key.white');


// huruf besar-----
let whiteeKeys=document.querySelectorAll('.key.white');
// let blackkKeys=document.querySelectorAll('.key.black');
// end huruf besar

// eventlistener untuk mouse klik
keys.forEach(key =>{
key.addEventListener('click',()=>playMusic(key));
});
//eventlistener untuk pencet keyboard 

document.addEventListener('keydown',e=>{
let key=e.key;

const audioElements = document.querySelectorAll('audio');
  audioElements.forEach(element => element.pause());

let whiteKeyIndex=WHITE.indexOf(key);
// let blackKeyIndex=BLACK.indexOf(key);




// Huruf Besar--
// let blackkKeyIndex=BLACKK.indexOf(key);
let whiteeKeyIndex=WHITEE.indexOf(key);

 //   jika keyboard di tekan menggunakan huruf besar 
if (whiteeKeyIndex >= 0) {
    whiteeKeys[whiteeKeyIndex].classList.add('hover');
  }
// if (blackkKeyIndex >= 0) {
//     blackkKeys[blackkKeyIndex].classList.add('hover');
//   }  

// jika di tekan di huruf kecil
if (whiteKeyIndex >= 0) {
    whiteKeys[whiteKeyIndex].classList.add('hover');
  }

// if (blackKeyIndex >= 0) {
//     blackKeys[blackKeyIndex].classList.add('hover');
//   }

// Huruf Besar---
// if(blackkKeyIndex>-1) playMusic(blackkKeys[blackkKeyIndex]);
if(whiteeKeyIndex>-1) playMusic(whiteeKeys[whiteeKeyIndex]);
// End Huruf Besar---



if(whiteKeyIndex>-1) playMusic(whiteKeys[whiteKeyIndex]);
// whiteKeyIndex.style.backgroundColor ='black';
// if(blackKeyIndex>-1) playMusic(blackKeys[blackKeyIndex]);


});
document.addEventListener('keyup', e => {
    
  let key = e.key;
  let whiteKeyIndex = WHITE.indexOf(key);
//   let blackKeyIndex = BLACK.indexOf(key);

  let whiteeKeyIndex = WHITEE.indexOf(key);
//   let blackkKeyIndex = BLACKK.indexOf(key);

// jika keyboard di tekan maka kasih hover
  if (whiteKeyIndex >= 0) {
    whiteKeys[whiteKeyIndex].classList.remove('hover');
  }

//   if (blackKeyIndex >= 0) {
//     blackKeys[blackKeyIndex].classList.remove('hover');
//   }
  if (whiteeKeyIndex >= 0) {
    whiteeKeys[whiteeKeyIndex].classList.remove('hover');
  }

//   if (blackkKeyIndex >= 0) {
//     blackkKeys[blackkKeyIndex].classList.remove('hover');
//   }


 
});

// this function will play audio
function playMusic(key){
    const audioElements = document.querySelectorAll('audio');
    audioElements.forEach(element => element.pause());

    const audio=document.getElementById(key.dataset.note);
    audio.currentTime=0;
    audio.play();
}


</script>



@endsection