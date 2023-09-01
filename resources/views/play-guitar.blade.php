@extends ('layouts.main')

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
    <div class="flex justify-center justify-items-centerc px-5 h-auto">
        
        <div data-note="C4" class="key white blck"><h3 class="tuts">C4</h3></div>
        <div data-note="C44" class="key black" ><h3 class="tuts">O</h3></div>
        <!-- white keys -->
        <div data-note="D4" class="key white blck" ><h3 class="tuts">D4</h3></div>
         <!-- white and black keys -->
        <div data-note="D44" class="key black" ><h3 class="tuts">E4</h3></div>
        <div data-note="E4" class="key white " ><h3 class="tuts">E4</h3></div>
        <div data-note="F4" class="key white blck" ><h3 class="tuts">F4</h3></div>
        <!-- white keys -->
        <div data-note="F44" class="key black" ><h3 class="tuts">E</h3></div>
         <!-- white and black keys -->
        <div data-note="G4" class="key white blck" ><h3 class="tuts">G4</h3></div>
        <div data-note="G44" class="key black" ><h3>D</h3 class="tuts"></div>
        <!-- white keys -->
        <div data-note="A4" class="key white blck" ><h3 class="tuts">A4</h3></div>
        <div data-note="A44" class="key black" ><h3 class="tuts">Y</h3 ></div>
        <div data-note="B4" class="key white" ><h3 class="tuts">B4</h3></div>
        <div data-note="C5" class="key white" ><h3 class="tuts">C5</h3></div>
        <div data-note="D5" class="key white" ><h3 class="tuts">D5</h3></div>
       </div>  
       </div>


        <!-- Audio files -->
       <audio id="C4" src="music/guitar/guitardown/whitetuts/c.wav"></audio>
       <audio id="C44" src="music/guitar/guitardown/blacktuts/cc.wav"></audio>
       <audio id="D4" src="music/guitar/guitardown/whitetuts/d.wav"></audio>
       <audio id="D44" src="music/guitar/guitardown/blacktuts/dd.wav"></audio>
       <audio id="E4" src="music/guitar/guitardown/whitetuts/e.wav"></audio>
       <audio id="F4" src="music/guitar/guitardown/whitetuts/f.wav"></audio>
       <audio id="F44" src="music/guitar/guitardown/blacktuts/ff.wav"></audio>
       <audio id="G4" src="music/guitar/guitardown/whitetuts/g.wav"></audio>
       <audio id="G44" src="music/guitar/guitardown/blacktuts/gg.wav"></audio>
       <audio id="A4" src="music/guitar/guitardown/whitetuts/a.wav"></audio>
       <audio id="A44" src="music/guitar/guitardown/blacktuts/aa.wav"></audio>
       <audio id="B4" src="music/guitar/guitardown/whitetuts/b.wav"></audio>
       <audio id="C5" src="music/guitar/guitardown/whitetuts/cu.wav"></audio>
       <audio id="D5" src="music/guitar/guitardown/whitetuts/du.wav"></audio>




    
 <script>
const WHITE= ['a','s','d','f','g','h','j','k','l'];
const BLACK=['r','t','y','u','i'];

// untuk keyboard huruf besar
const WHITEE= ['A','S','D','F','G','H','J','K','L'];
const BLACKK=['R','T','Y','U','I'];


// untuk dapetin keyboard
let keys = document.querySelectorAll('.key');
let blackKeys = document.querySelectorAll('.key.black');
let whiteKeys = document.querySelectorAll('.key.white');

let blackkKeys = document.querySelectorAll('.key.black');
let whiteeKeys = document.querySelectorAll('.key.white');

// ketika di klik
keys.forEach(key => {
  key.addEventListener('click', () => playMusic(key));
});

document.addEventListener('keydown', e => {

  // dapetin keyboarc yang di tekan
  let key = e.key;

  // check jika key di pencet di tuts
  let whiteKeyIndex = WHITE.indexOf(key);
  let blackKeyIndex = BLACK.indexOf(key);

//   check untuk huruf besar
  let blackkKeyIndex = BLACKK.indexOf(key);
  let whiteeKeyIndex = WHITEE.indexOf(key);



if(blackKeyIndex>-1) playMusic(blackKeys[blackKeyIndex]);
if(whiteKeyIndex>-1) playMusic(whiteKeys[whiteKeyIndex]);


  // // Huruf Besar---
if(blackkKeyIndex>-1) playMusic(blackkKeys[blackkKeyIndex]);
if(whiteeKeyIndex>-1) playMusic(whiteeKeys[whiteeKeyIndex]);
// // End Huruf Besar---

  // jika keyboard di tekan di white tuts maka kasih hover
  if (whiteKeyIndex >= 0) {
    whiteKeys[whiteKeyIndex].classList.add('hover');
  }

  // jika keyboard di tekan di black tuts maka kasih hover
  if (blackKeyIndex >= 0) {
    blackKeys[blackKeyIndex].classList.add('hover');
  }
//   jika keyboard di tekan menggunakan huruf besar 
  if (whiteeKeyIndex >= 0) {
    whiteeKeys[whiteeKeyIndex].classList.add('hover');
  }
  if (blackkKeyIndex >= 0) {
    blackkKeys[blackkKeyIndex].classList.add('hover');
  }

//   keyboard di tekan end
});

 
document.addEventListener('keyup', e => {
  
  let key = e.key;
  let whiteKeyIndex = WHITE.indexOf(key);
  let blackKeyIndex = BLACK.indexOf(key);
  let whiteeKeyIndex = WHITEE.indexOf(key);
  let blackkKeyIndex = BLACKK.indexOf(key);

// jika keyboard tidak ditekan maka hapus hover
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

// eksekusi
function playMusic(key) {
  const audio = document.getElementById(key.dataset.note);
  audio.currentTime = 0;
  audio.play();
}



</script>


@endsection