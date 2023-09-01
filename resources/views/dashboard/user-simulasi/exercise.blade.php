@extends('dashboard.layouts2.main2')

@section('konten')
    

<div class="px-10 mb-5">
  <div class="alert" id="alert">
  </div>
</div>

  @if ($latihans->audio_quest === null)
      
  
<div class="flex justify-center justify-items-centerc px-5 h-[150px]" id="key">
      
  <div data-note="C4" class="key white blck" ><h3 class="flex justify-center relative top-[55px] animate-bounce text-7xl">{{$latihans->c}}</h3></div>    

    <div data-note="C44" class="key black" ><h3 class="tutss"></h3></div>
    <!-- white keys -->
        
    <div data-note="D4" class="key white blck" ><h3 class="flex justify-center relative top-[55px] animate-bounce text-7xl">{{$latihans->d}}</h3></div>
     <!-- white and black keys -->
    <div data-note="D44" class="key black" ><h3 class="tutss"></h3></div>
    <div data-note="E4" class="key white " ><h3 class="flex justify-center relative top-[55px] animate-bounce text-7xl">{{$latihans->e}}</h3></div>
    <div data-note="F4" class="key white blck" ><h3 class="tutss"></h3></div>
    <!-- white keys -->
    <div data-note="F44" class="key black" ><h3 class="tutss"></h3></div>
     <!-- white and black keys -->
    <div data-note="G4" class="key white blck" ><h3 class="flex justify-center relative top-[55px] animate-bounce text-7xl">{{$latihans->g}}</h3></div>
    <div data-note="G44" class="key black" ><h3 class="tutss"></h3></div>
    <!-- white keys -->
    <div data-note="A4" class="key white blck" ><h3 class="flex justify-center relative top-[55px] animate-bounce text-7xl">{{$latihans->a}}</h3></div>
    <div data-note="A44" class="key black" ><h3 class="tutss"></h3></div>
    <div data-note="B4" class="key white" ><h3 class="flex justify-center relative top-[55px] animate-bounce text-7xl">{{$latihans->b}}</h3></div>
    <div data-note="C5" class="key white" ><h3 class="tutss"></h3></div>
    <div data-note="D5" class="key white" ><h3 class="tutss"></h3></div>
   </div>
   
   @else
<div class="d">

</div>

   @endif





   
   @if ($latihans->audio_quest !== null)

   <div class="flex justify-center">
      <audio id="C4" controls >
          <source src="{{Storage::url($latihans->audio_quest)}}" type="audio/mpeg">
        </audio>
      </div>
    
    @else

    <div class="">

    </div>

    @endif

   <div class="flex w-full justify-center px-5 mt-9">
    <div class="message" id="message"></div>
   <h1 class="text-4xl" id="question">{{$latihans->question}}</h1>
   <div class="option">
    
   </div>
  </div>


   <div class="flex justify-center mt-2 " >
    <div class="border-[2px] corect incor m-1 cursor-pointer flex justify-center hover:m-0 border-gray-500 hover:bg-slate-800 hover:text-white text-center w-auto h-auto">
        <button  data-value="{{$latihans->essay}}" class="answer m-5 text-2xl text-center">{{$latihans->essay}}</button>
    </div>
    <div class="border-[2px] corect incor m-1 cursor-pointer flex justify-center hover:m-0 border-gray-500 hover:bg-slate-800 hover:text-white text-center w-auto h-auto">
        <button data-value="{{$latihans->essay2}}" class="answer m-5 text-2xl text-center">{{$latihans->essay2}}</button>
    </div>
    <div class="border-[2px] corect incor m-1 cursor-pointer flex justify-center hover:m-0 border-gray-500 hover:bg-slate-800 hover:text-white text-center w-auto h-auto">
        <button data-value="{{$latihans->essay3}}" class="answer m-5 text-2xl text-center">{{$latihans->essay3}}</button>
    </div>
  </div>

 

   

   @foreach ($audio_path as $instrumentAudio)
        <div class="hidden">   
     <audio id="C4" controls >
        <source src="{{Storage::url($instrumentAudio->c_audio_path_1)}}" type="audio/mpeg">
       </audio>
       @endforeach

       @foreach ($audio_path as $instrumentAudio)
     <audio id="D4" controls >
        <source src="{{Storage::url($instrumentAudio->d_audio_path_2)}}" type="audio/mpeg">
       </audio>
       @endforeach

       <!--Key E-->
       @foreach ($audio_path as $instrumentAudio)
     <audio id="E4" controls >
        <source src="{{Storage::url($instrumentAudio->e_audio_path_3)}}" type="audio/mpeg">
       </audio>
       @endforeach

       <!--Key F-->
       @foreach ($audio_path as $instrumentAudio)
     <audio id="F4" controls >
        <source src="{{Storage::url($instrumentAudio->f_audio_path_4)}}" type="audio/mpeg">
       </audio>
       @endforeach

       <!--Key G-->
       @foreach ($audio_path as $instrumentAudio)
     <audio id="G4" controls >
        <source src="{{Storage::url($instrumentAudio->g_audio_path_5)}}" type="audio/mpeg">
       </audio>
       @endforeach

       <!--Key A-->
       @foreach ($audio_path as $instrumentAudio)
     <audio id="A4" controls >
        <source src="{{Storage::url($instrumentAudio->a_audio_path_6)}}" type="audio/mpeg">
       </audio>
       @endforeach

       <!--Key B-->
       @foreach ($audio_path as $instrumentAudio)
     <audio id="B4" controls >
        <source src="{{Storage::url($instrumentAudio->b_audio_path_7)}}" type="audio/mpeg">
       </audio>
       @endforeach



       <style>
        .incorect{
          /* background-color: red; */
          border-color: red;
          
        }
        .correct{
          border-color: teal;
          
        }
        @keyframes bouncee {
            0%, 100% {
                transform: translateX(-15%);
                animation-timing-function: cubic-bezier(0.8,0,1,1);
            }
            50% {
                transform: none;
                animation-timing-function: cubic-bezier(0,0,0.2,1);
            }
        }
        .animate-bouncee {
            animation: bouncee 0.3s ;
        }
        .tone{
          color:black;
        }
        .piano-key {
          margin: 0 1px;
          height: 100px;
          background: rgb(136, 134, 134);

      }
      .tutss{
        justify-content: center;
        display: flex;
        position: relative;
        top: 120px;
      }
      .white {
          position: relative;
          background: rgb(195, 192, 192);
          /* background: rgb(136, 134, 134); */
          width: 10%;
          margin: 0 1px;
        }
      .down{
        margin-top: 150px;
        transition: all 4s;
      }
      
       .black{
          content: "";
          color: white;
          top: 0;
          background: rgb(17, 11, 11);
          right: -25%;
          width: 10%;
          height: 100%;
       }

        .key:hover {
          background-color: #303030;
          color:aliceblue;
          
        }
        .key.hover{
          background-color: #ccc;
          box-shadow: 0 0 10px #888;
        }
        
      </style>
      
      
      <script>

    $(document).ready(function() {
       $('.answer').click(function(e) {
        e.preventDefault();
        var answer = $(this).data('value');
        var correctAnswer = '{{ $latihans->answer }}';
        $.ajax({
            type: 'POST',
            url: '/check-answer',
            data: {
                answer: answer,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                if (answer === correctAnswer) {
                    // alert("Correct!");
                    $('.corect').addClass('correct');
                    $('.alert').html('<h1 class="text-bold text-4xl">Correct!!</h1>');

            window.location.href = "/latihan";                    
                } else {
                  $('.incor').addClass('incorect');
                  $('.incor').addClass('animate-bouncee')
                    // alert("Incorrect.");
                }
            }
        });
    });
});
// $(document).ready(function(){
//         $('.answer').click(function(){
//             var answer = $(this).data('value');
//             // var correctAnswer = '{{ $latihans->answer }}';
//             var question_id = '{{ $latihans->id }}';
//             $.ajax({
//                 type: "POST",
//                 url: "/check-answer",
//                 data: { 
//                   answer: answer, 
//                   question_id: question_id, 
//                   _token: '{{ csrf_token() }}'
//                   },
//                 success: function(data){
//                   // console.log(data)
//                     if(data.correct) {
//                         alert("Correct!");
//                         $.ajax({
//     type: "POST",
//     url: "/getNextQuestion",
//     data: { question_id: data.next_question_id,
//       _token: '{{ csrf_token() }}'
//     },
//     success: function(next_question){
//         if(next_question.status === 'success'){
//             // Display the next question
//             $('#question-text').text(next_question.question.text);
//             $('#option1').text(next_question.question.option1);
//             $('#option2').text(next_question.question.option2);
//             $('#option3').text(next_question.question.option3);
//             $('#option4').text(next_question.question.option4);
//         } else if (next_question.status === 'end') {
//             // Show a message indicating that the quiz is over
//             alert("Quiz is over");
//             window.location.href = "/latihan";
//         } else {
//             console.log(next_question);
//         }
//     },
//     error: function(error){
//         console.log(error);
//     }
// });

//                     } else {
//                         alert("Incorrect.");
//                     }
//                 },
//             });
//         });
//     });

        // const butto = document.querySelectorAll('.answer');
        //   butto.forEach(function(button){
        //     button.addEventListener('click', 
        //     function(e) {
        //       if (e.target.dataset.value === "{{ $latihans->answer }}"){
        //         alert("Correct!");
                
        //       } else {
        //         alert("Incorrect.");
        //       }
        //     });
        //   });

      // $(document).ready(function() {
      //     $(".start").click(function() {
      //       $(".c").addClass('down');
      //     });
      // });

      
      
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
      
      // jika keyboard di tekan maka kasih hover
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
      
      // this function will play audio
      function playMusic(key){
          
      
      
          const audio=document.getElementById(key.dataset.note);
          audio.currentTime=0;
          audio.play();
      }
      
      
      </script>
@endsection


