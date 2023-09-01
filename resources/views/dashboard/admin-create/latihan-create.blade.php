@extends('dashboard.layouts2.main2')

@section('konten')


<h1 class="text-5xl font-bold text-gray-500">Add Latihan</h1>  

    
<form action="/latihan-create" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-control w-[50%]">
      <label class="label" for="name">
        <span class="label-text text-slate-800">Name</span>
      </label>
      <input type="name"  name="name" id="name" placeholder="name" class="input input-bordered" @error('name')
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
      <input type="text" name="slug" id="slug" placeholder="slug" class="input input-bordered" @error('slug')
      is-invalid              
      @enderror required/>
    </div>
    @error('slug')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
        <label class="label" for="category_latihan_id">
            <span class="label-text text-slate-800">Category</span>
        </label>
         <select id="category_latihan_id" name="category_latihan_id" class="border-2 rounded-md border-gray-300 border-r p-2">
            @foreach ($category_latihans as $category) 
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
        </div>
  
    <div class="form-control w-[50%]">
      <label class="label" for="question">
        <span class="label-text text-slate-800">Question</span>
      </label>
      <input type="text" name="question" id="question" placeholder="question" class="input input-bordered" @error('question')
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
      <input type="file" name="audio_quest" id="audio_quest">
    </div>

    <div class="form-control w-[50%]">
      <label class="label" for="answer">
        <span class="label-text text-slate-800">answer</span>
      </label>
      <input type="text" name="answer" id="answer" placeholder="answer" class="input input-bordered" @error('answer')
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
      <select name="essay" id="essay" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="">--Select--</option>
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
      <select name="essay2" id="essay2" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="">--Select--</option>
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
      <select name="essay3" id="essay3" class="border-2 rounded-md border-gray-300 border-r p-2">
        <option value="">--Select--</option>
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
        <input type="checkbox" value="." name="serune_kalee" id="serune_kalee">
        </div>
        <div class="flex justify-between">
          <label class="" for="geundrang">
            <span class="label-text text-slate-800">Geundrang</span>
          </label>
        <input type="checkbox" value="." name="geundrang" id="geundrang">
        </div>
        <div class="flex justify-between">
          <label class="" for="rapai">
            <span class="label-text text-slate-800">Rapai</span>
          </label>
        <input type="checkbox" value="." name="rapai" id="rapai">
        </div>

        <div class="flex justify-between">
          <label class="" for="c">
            <span class="label-text text-slate-800">C</span>
          </label>
        <input type="checkbox" value="." name="c" id="c">
        </div>


        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">D</span>
          </label>         
        <input type="checkbox" value="." name="d" id="d">
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">E</span>
          </label>
        <input type="checkbox" value="." name="e" id="e">
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">F</span>
          </label>
        <input type="checkbox" value="." name="f" id="f">
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">G</span>
          </label>
        <input type="checkbox" value="." name="g" id="g">
        </div>
        
        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">A</span>
          </label>
        <input type="checkbox" value="." name="a" id="a">
        </div>

        <div class="flex justify-between">
        <label class="" for="">
            <span class="label-text text-slate-800">B</span>
          </label>
        <input type="checkbox" value="." name="b" id="b">
        </div>
    </div>

    <div class="mt-5 mb-20">
        <button type="submit" id="submit" class="btn btn-sm">Submit</button>
    </div>
</form>


        @endsection