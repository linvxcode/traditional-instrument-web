
@extends('layouts.main')

@section('all')


<div class="mt-24">

<div class=" grid mx-auto justify-center">   
               <ul class="sco mt-10 ">
                        <li class="">
                            <a href="/instrument" class="clik font-bold xte">Back</a>
                        </li>
               
</div>



<div class="column max-md:px-0 px-7 text-base-200">
<div class="bg-slate-800 rounded-lg shadow-xl mx-5 mr-5 mb-40 mt-10 grid gap-0 grid-cols-1 grid-flow-row overflow-clip">
    <h2 class="mx-2 text-xl font-bold mt-5 "> {{ $post->name }} </h2>
    <p class="px-2 mt-1 font-medium hover:underline">By, <a href="/authors/{{ $post->user->username }}" class="w-10 contents text-base-200 normal-case">{{$post->user->username}} </a></p>
    <p class="px-2 mt-1 font-medium hover:underline"> Category, <a href="/categories/{{$post->Category->slug}}" class="w-36 p-0 hrr normal-case text-base-200 hover:underline"> {{ $post->Category->name }} </a> </p>
    <h2 class="p-2 mt-3 tracking-widest font-sans leading-8 mx-auto text-start">  
 {!! $post->body !!}
 {{-- {{ $post->body }}       --}}
    </h2>
</div>
</div>
</div>



</div>

@endsection