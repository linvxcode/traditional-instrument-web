@extends('dashboard.layouts2.main2')

@section('konten')

@if (session()->has('succes'))
<div class="flex items-center justify-start">
<div class="alert alert-success shadow-lg mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('succes')}}</span>
  </div>
</div>
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-error shadow-lg flex justify-start mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('error')}}</span>
  </div>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-error shadow-lg flex justify-start mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('delete')}}</span>
  </div>
</div>
@endif

{{-- <div class="grid grid-cols-3 max-md:grid-cols-1">
@foreach ($instrumentAudio as $instrument)
<div class="grid grid-cols-3 max-md:grid-cols-1">
    <div class="">
        <div class="w-[200px] mx-auto h-[150px] bg-slate-600 m-5 rounded-md">
<h1 class="text-2xl text-center text-white">{{$instrument->name}}</h1> 
<a href="/ins-simulasi/{{$instrument->slug}}" class="flex justify-center"><button class="btn btn-sm mt-10">Mulai</button></a> 
</div>    
</div>    
</div>
@endforeach
</div> --}}

<div class="flex flex-row justify-center gap-5 flex-wrap">
  @foreach ($instrumentAudio as $instrument)
  <div class="py-5 antialiased font-medium text-gray-800 bg-slate-100 " x-data="{ modal: true }">
      <div class="max-w-[100%] p-2 mx-auto bg-white border-[1px] border-gray-200 shadow rounded-xl hover:shadow-lg transition-all duration-150 ease-linear" x-show="modal"
      x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 scale-90"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-90"
      >
              <div class="relative p-6">
                <h1 class="text-2xl text-center text-slate-800">{{$instrument->name}}</h1> 
                <a href="/ins-simulasi/{{$instrument->slug}}" class="flex justify-center"><button class="btn btn-sm mt-10">Mulai</button></a> 
              </div>
      </div>
  </div>
  
  @endforeach
  </div>


<div class="mt-20 px-5">
    <h1 class="w-full text-xl">Latihan Instrument</h1>
    <p class="text-sm mt-2">Cobalah latihan instrument dan pelajari cara mengidentifikasi, menulis, dan memainkan instrument</p>
    <a href="latihan" class=""><button class="btn btn-sm mt-3">Coba</button> </a>
   </div>   
@endsection