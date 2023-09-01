@extends('dashboard.layouts2.main2')

@section('konten')
    



<h1 class="text-5xl font-bold text-gray-500">Edit Song</h1>  

    
<form action="/song-update/{{$song->slug}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="form-control w-[50%]">
      <label class="label" for="name">
        <span class="label-text text-slate-800">Name</span>
      </label>
      <input type="name" value="{{old('name', $song->name)}}" name="name" id="name" placeholder="name" class="input input-bordered" @error('name')
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
      <input type="text" value="{{old('slug', $song->slug)}}" name="slug" id="slug" placeholder="slug" class="input input-bordered" @error('slug')
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
      <input type="hidden" name="oldImage" value="{{$song->image}}">
      <input type="file" value="{{old('image', $song->image)}}" name="image" id="image" placeholder="image" class="" @error('image')
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
      <input type="hidden" name="oldImagee" value="{{$song->image2}}">
      <input type="file" value="{{old('image2', $song->image2)}}" name="image2" id="image2" placeholder="image2" class="" @error('image2')
      is-invalid              
      @enderror required/>
    </div>
    @error('image2')
    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
      {{$message}}
    </span>   
    @enderror


    <div class="mt-5 mb-20">
        <button type="submit" id="submit" class="btn btn-sm">Submit</button>
    </div>
</form>


@endsection