@extends('dashboard.layouts2.main2')
@section('konten')
    
<h1 class="text-5xl font-bold text-gray-500">Create Post</h1>  

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white  border-gray-200">
                <form method="POST" action="/create-materi">
                    @csrf

                    @error('name')
                    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
                      {{$message}}
                    </span>   
                    @enderror
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                        <input type="name" id="name" name="name" class="border-2 border-gray-300 p-2 w-full" name="name" id="name" value="{{old('name')}}"  required>
                    </div>

                    @error('slug')
                    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
                      {{$message}}
                    </span>   
                    @enderror
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Slug</label></br>
                        <input type="slug" name="slug" id="slug" class="border-2 border-gray-300 p-2 w-full" placeholder="hurufkecilsemuadarititle" value="{{old('slug')}}" required>
                    </div>

                    @error('category_id')
                    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
                      {{$message}}
                    </span>   
                    @enderror
                    <div class="mb-8">
                    <label class="text-xl text-gray-600">Category</label></br>
                     <select id="category_id" name="category_id" class="border-2 border-gray-300 border-r p-2">
                        @foreach ($category as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    </div>

                    @error('body')
                    <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
                      {{$message}}
                    </span>   
                    @enderror
                    <div class="mb-8">
                        <label for="body" class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                        <textarea name="body" id="body" class="border-2 border-gray-500" >
                            {{old('body')}}
                        </textarea>
            
                    </div>


                    <div class="flex p-1 float-right">
                        <button type="submit" id="submit" class="btn btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="mb-96"></div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'body' );
</script>
  @endsection