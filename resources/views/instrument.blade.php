
@extends('layouts.main')

@section('all')


 

{{-- flex flex-wrap justify-center --}}
<div class="mb-[100px] w-20">I</div>

<div class="container ">
    @foreach($instrument as $instruments)
    <div class="flex flex-wrap justify-center mt-2">
        <div class="card mx-5">
            <div class="content ">
                <div class="imgBx">

                @if ($instruments->img)                 
                 <img src="{{ $instruments->img}}"> 
                @else
                 <div class="flex justify-center mt-10 font-bold text-2xl">
                    <img src="https://images.unsplash.com/photo-1513883049090-d0b7439799bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="error">
                  </div>
                @endif

                </div>

            
                <div class="contentBx color-white mt-5 text-base-200">
                    {{-- <span>{{ $instruments["amt"] }}</span> --}}
                    {{-- <span>Alat Musik Tradisional</span> --}}
                    <span class="block"> {{$instruments->name}} </span>
                    <span class="block">Posted by, {{$instruments->user->username}} </span>
                    <span class="block">Category, {{$instruments->category->name}} </span>
                    {{-- <p>ah  g</p> --}}
                        <ul class= "sci mt-10 flex justify-center text-slate-200 slide-hover">     
                         <li class="text-slate-200">
                            <h3 class="text-base-200">   
                            <a  class="text-base-200" href="/instrument/{{ $instruments->slug }} ">  {{ $instruments->name  }}</a>
                     </h3>
                                 
                    </li>
                </ul>
            </div>
        </div> 
    </div>
</div>
@endforeach

</div>
<div class="flex justify-start mt-5 mb-5">
    {{$instrument->links()}}

</div>


  

@endsection


{{-- {{ url('/instrument/', $Instruments )  }}  --}}