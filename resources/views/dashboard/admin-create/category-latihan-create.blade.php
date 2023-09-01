

@extends('dashboard.layouts2.main2')

@section('konten')


<h1 class="text-5xl font-bold text-gray-500">Add Latihan Category</h1>  

    
<form action="/category-latihan-store" method="post" enctype="multipart/form-data">
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


    <div class="mt-5 mb-20">
        <button type="submit" id="submit" class="btn btn-sm">Submit</button>
    </div>
</form>


        @endsection