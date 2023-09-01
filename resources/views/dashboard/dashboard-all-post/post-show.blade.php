
@extends('dashboard.layouts2.main2')

@section('konten')
    
<div class="column max-md:px-0 px-7 text-slate-900">
<div class="bg-slate-100 rounded-lg shadow-xl mx-5 mr-5 mb-40 mt-10 grid gap-0 grid-cols-1 grid-flow-row overflow-clip">
    <h2 class="mx-2 text-xl font-bold mt-5 "> {{ $instrument->name }} </h2>
    <p class="px-2 mt-1 font-medium hover:underline">By, <a href="/authors/{{ $instrument->user->username }}" class="w-10 contents text-slate-900 normal-case">{{$instrument->user->username}} </a></p>
    <p class="px-2 mt-1 font-medium hover:underline"> Category, <a href="/categories/{{$instrument->Category->slug}}" class="w-36 p-0 hrr normal-case text-slate-900 hover:underline"> {{ $instrument->Category->name }} </a> </p>
    <h2 class="p-2 mt-3 leading-8 tracking-tight mx-auto text-start">  
 {!! $instrument->body !!}
 {{-- {{ $post->body }}       --}}
    </h2>
</div>
</div>


@endsection