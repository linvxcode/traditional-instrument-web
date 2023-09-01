@extends('dashboard.layouts2.main2')

@section('konten')

{{-- <div class="grid grid-cols-3 max-md:grid-cols-1">  
@foreach ($latihans as $latihan)
<div class="grid grid-cols-3 max-md:grid-cols-1">
    <div class="">
        <div class="w-[200px] mx-auto h-[150px] bg-slate-600 m-5 rounded-md">
            <h1 class="text-5xl text-white">{{$latihan->categoryLatihan->name}}</h1> 

                <a href="/exercise/{{ $latihan->slug}}" class="flex justify-center"><button class="btn btn-sm mt-10">Mulai</button></a> 
        </div>    
    </div>    
</div>
@endforeach
</div>  --}}
<div class="flex flex-row justify-center gap-5 flex-wrap">
@foreach ($latihans as $latihan)
<div class="py-10 antialiased font-medium text-gray-800 bg-slate-100 " x-data="{ modal: true }">
    <div class="max-w-[100%] p-2 mx-auto bg-white border-[1px] border-gray-200 shadow rounded-xl hover:shadow-lg transition-all duration-150 ease-linear" x-show="modal"
    x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
    >
            <div class="relative p-6">
                <h1 class="text-5xl text-slate-800">{{$latihan->categoryLatihan->name}}</h1> 

                <a href="/exercise/{{ $latihan->slug}}" class="flex justify-center"><button class="btn btn-sm mt-10">Mulai</button></a> 
            </div>
    </div>
</div>

@endforeach
</div>
@endsection