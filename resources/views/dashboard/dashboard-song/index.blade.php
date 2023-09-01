@extends('dashboard.layouts2.main2')

@section('konten')
    



<h1 class="text-5xl font-bold text-gray-500">Add Song</h1>  

    
<form action="/song-store" method="post" enctype="multipart/form-data">
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
      <label class="label" for="image">
        <span class="label-text text-slate-800">Image</span>
      </label>
      <input type="file" name="image" id="image" placeholder="image" class="" @error('image')
      is-invalid              
      @enderror required/>
    </div>
    @error('image')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
      <label class="label" for="image2">
        <span class="label-text text-slate-800">Image</span>
      </label>
      <input type="file" name="image2" id="image2" placeholder="image2" class="" @error('image2')
      is-invalid              
      @enderror required/>
    </div>
    @error('image2')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
      <label class="label" for="image3">
        <span class="label-text text-slate-800">Image</span>
      </label>
      <input type="file" name="image3" id="image3" placeholder="image3" class="" @error('image3')
      is-invalid              
      @enderror required/>
    </div>
    @error('image3')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control w-[50%]">
      <label class="label" for="image4">
        <span class="label-text text-slate-800">Image</span>
      </label>
      <input type="file" name="image4" id="image2" placeholder="image2" class="" @error('image2')
      is-invalid              
      @enderror required/>
    </div>
    @error('image4')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror

    <div class="form-control md:w-fit max-md:w-full mt-5">
      <label for="songaudio" class="label">
        <span class="label-text">Song Audio</span>
      </label>
      <input type="file" name="songaudio" id="songaudio">
      </div>

    <div class="mt-5 mb-20">
        <button type="submit" id="submit" class="btn btn-sm">Submit</button>
    </div>
</form>


@endsection