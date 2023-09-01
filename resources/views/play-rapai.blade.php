
@extends('layouts.main')

@section('all')

<div class="mt-32">  
        <ul class="sco mb-10 mx-auto justify-center">
                 <li class="">
                     <a href="/chose-instrument" class="clik font-bold xte">Back To Instrument</a>
                 </li>
        </ul> 


        <div class="mb-10 flex justify-center justify-items-center">
          <!-- The button to open modal -->
        <a href="#my-modal-2" class="btn">Petunjuk</a>
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
        <div data-note="E" class="key white blck" ><h3 class="tuts">E</h3></div>
        <div data-note="F" class="key white" ><h3 class="tuts">F</h3></div>
        <!-- white keys -->
        {{-- <div data-note="F44" class="key black" ><h3>E</h3></div> --}}
         <!-- white and black keys -->
        {{-- <div data-note="G" class="key white blck" ><h3>G</h3></div> --}}
        {{-- <div data-note="G44" class="key black" ><h3>D</h3></div> --}}
        <!-- white keys -->
        {{-- <div data-note="A" class="key white" ><h3>A</h3></div> --}}
        {{-- <div data-note="A44" class="key black" ><h3>Y</h3></div> --}}
        {{-- <div data-note="B" class="key white" ><h3>B</h3></div>
        <div data-note="CC" class="key white" ><h3>C</h3></div> --}}
        {{-- <div data-note="D5" class="key white" ><h3>D5</h3></div> --}}
       </div>  
       </div>
        <!-- Audio files -->
       <audio id="C" src="music/rapai/bom-rpa.wav"></audio>
       <audio id="D" src="music/rapai/hihat-rpa.wav"></audio>
       <audio id="E" src="music/rapai/pleuk-rpa.wav"></audio>
       <audio id="F" src="music/rapai/pleung-rpa.wav"></audio>
       {{-- <audio id="G" src="music/geundrang/tom4-gdr.wav"></audio>
       <audio id="A" src="music/geundrang/tom5-gdr.wav"></audio> --}}
       {{-- <audio id="B" src="music/geundrang/b-geundrang.wav"></audio>
       <audio id="CC" src="music/geundrang/cc-srn.wav"></audio> --}}
       {{-- <audio id="G44" src="music/blacktuts/g44.wav"></audio>
       <audio id="A4" src="music/a4.wav"></audio>
       <audio id="A44" src="music/blacktuts/a44.wav"></audio>
       <audio id="B4" src="music/whitetuts/b4.wav"></audio>
       <audio id="C5" src="music/whitetuts/c5.wav"></audio>
       <audio id="D5" src="music/whitetuts/d5.wav"></audio> --}}














    <!-- white and black keys -->
    {{-- <div data-note="C" class="key white black" ><h3>C</h3></div>
    <div data-note="O" class="key white black" ><h3>O</h3></div>
    <!-- white keys -->
    <div data-note="D" class="key white" ><h3>D</h3></div>
     <!-- white and black keys -->
    <div data-note="E" class="key white black" ><h3>E</h3></div>
    <div data-note="S" class="key white black" ><h3>S</h3></div>
    <div data-note="P" class="key white black" ><h3>P</h3></div>
    <!-- white keys -->
    <div data-note="E1" class="key white" ><h3>E</h3></div>
     <!-- white and black keys -->
    <div data-note="E" class="key white black" ><h3>E</h3></div>
    <div data-note="D" class="key white black" ><h3>D</h3></div>
    <!-- white keys -->
    <div data-note="Y" class="key white w-auto" ><h3>Y</h3></div>
   </div>  
   </div>
    <!-- Audio files -->
   <audio id="C" src="music/whitetuts/c4.wav"></audio>
   <audio id="O" src="music/blacktuts/c44.wav"></audio>
   <audio id="D" src="music/keys.mp3"></audio>
   <audio id="E" src="music/keys.mp3"></audio>
   <audio id="S" src="music/keys.mp3"></audio>
   <audio id="P" src="music/keys.mp3"></audio>
   <audio id="E1" src="music/keys.mp3"></audio>
   <audio id="E" src="music/keys.mp3"></audio>
   <audio id="D" src="music/keys.mp3"></audio>
   <audio id="Y" src="music/keys.mp3"></audio> --}}

    
<script>

const WHITE= ['a','s','d','f'];
// const BLACK=['r','t','y','u','i'];

const WHITEE= ['A','S','D','F'];
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
    const audio=document.getElementById(key.dataset.note);
    audio.currentTime=0;
    audio.play();
}


</script>



@endsection