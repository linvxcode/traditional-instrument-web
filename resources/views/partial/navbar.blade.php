
<div id="navbar" class=" navbar main-tool-bar blurr mx-auto rounded-md fixed z-20 top-0 left-0 right-0 bottom-0 px-10 max-md:px-2 h-[80px]  max-md:w-auto">
  
    <div class="navbar-start ">
      <span id="myClickthis" class="text-base-200 openNav" style="font-size:50px;cursor:pointer" onclick="">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M1.75 6.75h16.5M3.75 12h16.5m-26.5 5.25H12" />
          {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" /> --}}
        </svg>
        
      </span>



    </div>
    <div class="navbar-center">
      <a href="/" class="btn text-base-100 btn-ghost normal-case text-xl font-bold max-md:overflow-clip hidde" onscroll="myScroll()" id="scroll">Tradisional Instrument</a>
    </div>
    <div class="navbar-end">


    <div class="dropdown dropdown-end justify-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full bg-base-200">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          

        </div>
      </label>
      
      <ul tabindex="0" class="menu menu-compact text-slate-800 dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">

        {{-- <li><a>Settings</a></li> --}}
        @auth
        <li>
          <a href="/dashboard" class="justify-between text-black">
            Dashboard
            <span class="badge">New</span>
          </a>
        </li>
        
        <form action="/logout" method="post">
          @csrf
          <button class="btn btn-sm w-full text-start mt-2">Logout</button>
          {{-- <li  class="text-slate-800"><a href="login" class="text-slate-800">Logout</a></li> --}}
      </form>

        @else
        <div class="text-slate-800">
          <li class="text-slate-800"><a href="/login" class="text-slate-800">Login</a></li>
        </div>
        @endauth

      </ul>
    </div>
    <div class="scrollable-area"></div>
    

    
  </div>
  </div>


  <div id="mySidenav" class="sidenav text-base-100">
    <div class="sidenavwidth w-[500px] max-md:w-[300px] transition-all">

    </div>
    <div class="label closee ml-[250px] md:ml-[450px] transition-all">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 closebtn">
        <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
      </svg>    
    </div>
    {{-- <a href="javascript:void(0)" onclick="closeNav()" class="closeNav">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 right-[120px] relative closebtn">
        <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
      </svg>      
    </a> --}}
   {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
    </a> --}}
   {{-- <a href="javascript:void(0)" class="closebtn text-2xl" onclick="closeNav()">&times;</a> --}}
   <span class="menuu">
   
   <a class="text-center overflow-clip font-bold w-[50%] mx-auto" href="/">Home</a>
   {{-- <a class="text-center overflow-clip font-bold" href="about">About</a> --}}
   <a class="text-center overflow-clip font-bold w-[50%] mx-auto" href="/instrument">Instruments</a>
       
   {{-- <a class="text-center font-bold" href="chose-instrument">Play</a> --}}
   {{-- <a class="text-center font-bold" href="post_ins">Post</a> --}}
  </span>

{{-- </div> --}}
  <script>
 $(document).ready(function () {
  $('.openNav').click(function (e) { 
    e.preventDefault();
    // $('.close').animate({left: '0px'}, 500);
    // $('.closee').animate({left: '0px'}, 500);
  });

  $('.openNav').click(function (e) { 
    e.preventDefault();
    $('.sidenav').show('.sidenav')
    $('.body').on('click',   function () {
      $('.sidenav').hide('sidenav')
    });
    $('.closee').on('click',   function () {
      $('.sidenav').hide('sidenav')
    });


  });
  $('.closeNav').click(function (e) { 
    e.preventDefault();
    $('.sidenav').hide('.sidenav');
  });

 });


    function openNav() {
      if (window.matchMedia("(max-width: 767px)").matches) {
        document.getElementById("mySidenav").style.width = "100%";
      } else {
        document.getElementById("mySidenav").style.width = "60%";
      }
      // document.getElementById("mySidenav").style.width = "100%";
      // document.getElementById("main").style.marginLeft = "40%";
      document.getElementById("main").style.filter = "blur(8px)";
      document.getElementById("main").style.userSelect = "none";
      document.getElementById("main").style.pointerEvent = "none";
      document.querySelector(".navbar").style.filter = "blur(8px)";

    }

    function closeNav() {
      document.querySelector(".navbar").style.filter = "blur(0px)";
      document.getElementById("main").style.filter= "";
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.userSelect = "auto";
      document.getElementById("main").style.pointerEvent = "auto";
      // document.querySelector("")


  //     document.addEventListener('click', function(event) {

  // });

    }




    const showAnim = gsap.from('.main-tool-bar', { 
  yPercent: -100,
  paused: true,
  duration: 0.2
}).progress(1);

ScrollTrigger.create({
  // markers:true,
  start: "top top",
  end: 99999,
  onUpdate: (self) => {
    self.direction === -1 ? showAnim.play() : showAnim.reverse()
  }
});
    </script>
