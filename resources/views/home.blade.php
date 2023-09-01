 @extends('layouts.main')

@section('home')




<div class="">
<div class="mt-24 scroll-keun bgdass">
  <!--Content before waves-->
  <div class="inner-header font-poppins cInnerContent grid grid-cols-2 max-md:grid-cols-1 max-md:gap-5">
    <div class="w-[100%] justify-start px-5 mt-20 gs_reveal ipsType_center max-md:mt-10">

      <span class="spann font-bold text-2xl justify-center items-center text-gray-200 block">Tradisional</span> 
      <span class="spann font-bold mt-0 text-6xl tracking-tighter text-gray-200  hover:scale-125">Instruments</span> 

{{-- 
      <button class="learn-more">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span> --}}

    </div>


</div>

    {{-- End Card --}}

   
 

 


  
  <!--Waves Container-->
  <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  {{-- <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" /> --}}
  {{-- <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(30 41 59 )" /> --}}
  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(191 191 191 / 5% )" />
  {{-- <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(30 41 59)" /> --}}
  </g>
  </svg>
  </div>
  <!--Waves end-->
  
  </div>
</div>
  <!--Header ends-->
      



{{-- </div> --}}



{{-- <div class="px-2"> --}}
<div class="bgrgba2 mt-[7px] shadow-2xl grid gap-0 grid-cols-1 justify-center justify-items-center h-auto">
  <div class=" flex h-[200px] ">
    <div class="text-base-200">
      <a href="" class="text-base-200">Bungoeng Jeumpa</a>
    </div>
  </div>
</div>
<svg class="waves rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
{{-- <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" /> --}}
{{-- <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(30 41 59 )" /> --}}
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(191 191 191 / 5% )" />
{{-- <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(30 41 59)" /> --}}
</g>
</svg>
{{-- </div> --}}

<div class="bas  mt-0 max-md:mt-10 grid gap-0 grid-cols-1 justify-center justify-items-center h-auto">

  
  
</div>



<div class="cInnerContent px-5 mt-5 flex gap-5 flex-wrap max-md:w-[40vh]">
  <div class="w-[70vh] rounded-full bgrgba  flex ">
    <div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromLeft">
    <a href="instrument/serunekalee" class="hover:scale-125">
    <img src="imgg/bg/3.png" alt="" class="hover:scale-125 transition-all">
  </a>
</div>
  </div>

  <div class="w-[70vh]  rounded-full bgrgba flex">
    <div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromRight">
    <a href="instrument/gundrang" class="">
    <img src="imgg/bg/2.png" alt="" class="h-[150px] max-md:h-[120px] hover:scale-125 transition-all">
  </a>
</div>
  </div>

  <div class="w-[70vh] rounded-full bgrgba flex">
    <div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromLeft">
    <a href="instrument/rapai" class="hover:scale-125">
    <img src="imgg/bg/1.png" alt="" class="h-[150px] max-md:h-[120px] hover:scale-125 transition-all">
  </a>
</div>
  </div>
  


</div>





{{-- smooth-wrapper --}}

<script>


//   scrollTrigger.create({
//     trigger:top 50

//   });
// gsap.from('.carddd', {duration:1.25, x:'100', ease: 'circ', opacity:0})
// gsap.from('.spann', {duration:1, x:-50, ease: 'back', opacity:0, delay: 0.5})



function animateFrom(elem, direction) {
  direction = direction || 1;
  var x = 0,
      y = direction * 100;
  if(elem.classList.contains("gs_reveal_fromLeft")) {
    x = -50;
    y = 0;
  } else if (elem.classList.contains("gs_reveal_fromRight")) {
    x = 50;
    y = 0;
  }
  elem.style.transform = "translate(" + x + "px, " + y + "px)";
  elem.style.opacity = "0";
  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
    duration: 1.25, 
    x: 0,
    y: 0, 
    autoAlpha: 1, 
    ease: "expo", 
    overwrite: "auto"
  });
}

function hide(elem) {
  gsap.set(elem, {autoAlpha: 0});
}

document.addEventListener("DOMContentLoaded", function() {
  gsap.registerPlugin(ScrollTrigger);
  
  gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
    hide(elem); 
    
    ScrollTrigger.create({
      trigger: elem,
      // markers: true,
      onEnter: function() { animateFrom(elem) }, 
      // onEnterBack: function() { animateFrom(elem, -1) },
      // onLeave: function() { hide(elem) } 
    });
  });
});

</script>

@endsection 



