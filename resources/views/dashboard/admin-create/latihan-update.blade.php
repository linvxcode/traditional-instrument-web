
@extends('dashboard.layouts2.main2')

@section('konten')


<h1 class="text-5xl font-bold text-gray-500">Edit Latihan</h1>  

    
<form action="/latihan-update/{{$latihan->slug}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="form-control w-[50%]">
      <label class="label" for="name">
        <span class="label-text text-slate-800">Name</span>
      </label>
      <input type="name" value="{{old('name', $latihan->name)}}"  name="name" id="name" placeholder="name" class="input input-bordered" @error('name')
      is-invalid              
      @enderror required/>
    </div>
    @error('name')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror
  
    <div class="form-control w-[50%]">
      <label class="label" for="slug">
        <span class="label-text text-slate-800">Slug</span>
      </label>
      <input type="text" value="{{old('slug', $latihan->slug)}}" name="slug" id="slug" placeholder="slug" class="input input-bordered" @error('slug')
      is-invalid              
      @enderror required/>
    </div>
    @error('slug')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
        <label class="label" for="cate">
            <span class="label-text text-slate-800">Category</span>
        </label>
         <select id="category_latihan_id" name="category_latihan_id" class="border-2 rounded-md border-gray-300 border-r p-2">
            @foreach ($category_latihans as $category) 
            @if (old('category_latihan_id', $latihan->category_latihan_id == $category->id))
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
            {{-- <option value="{{$category->id}}">{{$category->name}}</option> --}}
            @endforeach
            </select>
        </div>
  
    <div class="form-control w-[50%]">
      <label class="label" for="question">
        <span class="label-text text-slate-800">Question</span>
      </label>
      <input type="text" value="{{old('question', $latihan->question)}}" name="question" id="question" placeholder="question" class="input input-bordered" @error('question')
      is-invalid              
      @enderror required/>
    </div>
    @error('question')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror
  
    <div class="form-control  md:w-fit max-md:w-full ">
      <label for="audio_quest" class="label">
        <span class="label-text ">Audio Quest</span>
      </label>
      <input type="hidden" name="oldAudio" value="{{$latihan->audio_quest}}">
      <input type="file" value="{{old('audio_quest')}}" name="audio_quest" id="audio_quest">
    </div>

    <div class="form-control w-[50%]">
      <label class="label" for="answer">
        <span class="label-text text-slate-800">answer</span>
      </label>
      <input type="text" value="{{old('answer', $latihan->answer)}}" name="answer" id="answer" placeholder="answer" class="input input-bordered" @error('answer')
      is-invalid              
      @enderror required/>
    </div>
    @error('answer')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
      <label class="label" for="essay">
        <span class="label-text text-slate-800">Essay</span>
      </label>
      @if (old('essay', $latihan->essay == $latihan->essay))
      <select name="essay" id="essay" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="{{$latihan->essay}}" selected>{{$latihan->essay}}</option>
        <option value="Serune Kalee">Serune Kalee</option>
        <option value="Geundrang">Geundrang</option>
        <option value="Rapai">Rapai</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      @else
      <select name="essay" id="essay" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="Serune Kalee">Serune Kalee</option>
        <option value="Geundrang">Geundrang</option>
        <option value="Rapai">Rapai</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      @endif

    </div>
    @error('essay')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
      <label class="label" for="essay2">
        <span class="label-text text-slate-800">Essay2</span>
      </label>
      @if (old('essay2', $latihan->essay2 == $latihan->essay2))
      <select name="essay2" id="essay2" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="{{$latihan->essay2}}" selected>{{$latihan->essay2}}</option>
        <option value="Serune Kalee">Serune Kalee</option>
        <option value="Geundrang">Geundrang</option>
        <option value="Rapai">Rapai</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      @else
      <select name="essay2" id="essay2" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="Serune Kalee">Serune Kalee</option>
        <option value="Geundrang">Geundrang</option>
        <option value="Rapai">Rapai</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      @endif
    </div>
    @error('essay2')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
      <label class="label" for="essay3">
        <span class="label-text text-slate-800">Essay3</span>
      </label>
      @if (old('essay3', $latihan->essay3 == $latihan->essay3))
      <select name="essay3" id="essay3" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="{{$latihan->essay3}}" selected>{{$latihan->essay3}}</option>
        <option value="Serune Kalee">Serune Kalee</option>
        <option value="Geundrang">Geundrang</option>
        <option value="Rapai">Rapai</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      @else
      <select name="essay3" id="essay3" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="Serune Kalee">Serune Kalee</option>
        <option value="Geundrang">Geundrang</option>
        <option value="Rapai">Rapai</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      @endif
    </div>
    @error('essay3')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
        <label class="label" for="essay3">
            <span class="label-text text-slate-800">Answer</span>
          </label>
        
          <div class="flex justify-between">
            <label class="" for="serune_kalee">
              <span class="label-text text-slate-800">Serune Kalee</span>
            </label>
          <input type="checkbox" value="." name="serune_kalee" id="serune_kalee" {{ $latihan->serune_kalee ? 'checked' : '' }}>
          </div>
          <div class="flex justify-between">
            <label class="" for="geundrang">
              <span class="label-text text-slate-800">Geundrang</span>
            </label>
          <input type="checkbox" value="." name="geundrang" id="geundrang" {{ $latihan->geundrang ? 'checked' : '' }}>
          </div>
          <div class="flex justify-between">
            <label class="" for="rapai">
              <span class="label-text text-slate-800">Rapai</span>
            </label>
          <input type="checkbox" value="." name="rapai" id="rapai" {{ $latihan->rapai ? 'checked' : '' }}>
          </div> 

        <div class="flex justify-between">
          <label class="" for="c">
            <span class="label-text text-slate-800">C</span>
          </label>
        <input type="checkbox" value="." name="c" id="c" {{ $latihan->c ? 'checked' : '' }}>
        </div>


        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">D</span>
          </label>         
        <input type="checkbox" value="." name="d" id="d" {{ $latihan->d ? 'checked' : '' }}>
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">E</span>
          </label>
        <input type="checkbox" value="." name="e" id="e" {{ $latihan->e ? 'checked' : '' }}>
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">F</span>
          </label>
        <input type="checkbox" value="." name="f" id="f" {{ $latihan->f ? 'checked' : '' }}>
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">G</span>
          </label>
        <input type="checkbox" value="." name="g" id="g" {{ $latihan->g ? 'checked' : '' }}>
        </div>
        
        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">A</span>
          </label>
        <input type="checkbox" value="." name="a" id="a" {{ $latihan->a ? 'checked' : '' }}>
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">B</span>
          </label>
        <input type="checkbox" value="." name="b" id="b" {{ $latihan->b ? 'checked' : '' }}>
        </div>
    </div>

    <div class="mt-5 mb-20">
        <button type="submit" id="submit" class="btn btn-sm">Update</button>
    </div>
</form>


        @endsection