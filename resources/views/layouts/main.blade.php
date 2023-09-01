<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <title>Skripsi | {{ $title }} </title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>

  </head>



  <header class="barnav">
    @include('partial.navbar')
    </header>

  
  <body class="">
    <div class="body">
    <div class="fixed loaD transition-all loading inset-0 z-50 flex items-center justify-center text-white bg-indigo-800">
      <h1 class="load text-2xl animate-ping font-semibold">Loading.....</h1>
    </div>
    
    
    
    
    
    <div class="scroll-keun scroll-container "  >
      
      
      
      
      <div class="d" id="main">
        
        @yield('main')



   
    
    
        <div class="ss mt-">
        @yield('all')
        </div>
   
        @yield('login')

    
        @yield('home')

   

    <div class="preview">
        @yield('preview')
    </div>

        @yield('about')


    <div class="sejarah">
        @yield('sejarah')
        
    </div>






</div>
  </div>
<footer>
@include('foot.footer')
</footer>


</div>
<script>


const fade = () => {
  const loaD = 
  document.querySelector('.loaD');
  loaD.classList.add('fade');
};
// window.addEventlistener('loaD', fade);
window.addEventListener('load', fade);

// function myFunction() {
//   var x = document.getElementById("myTopnav");
//   if (x.className === "topnav") {
//     x.className += " responsive";
//   } else {
//     x.className = "topnav";
//   }
// } 

</script>


<script src="{{ asset('js/app.js') }}"></script>









</body>
</html>