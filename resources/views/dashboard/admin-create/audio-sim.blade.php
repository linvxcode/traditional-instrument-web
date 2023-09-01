


@extends('dashboard.layouts2.main2')

@section('konten')
<h1 class="text-5xl font-bold text-gray-500">Create Instrument Simulation Audio</h1>  

    
<form action="/audio-create" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-control w-[50%]">
      <label class="label" for="name">
        <span class="label-text text-slate-800">Name</span>
      </label>
      <input type="name"  name="name" id="name" placeholder="name" class="input input-bordered" @error('name')
      is-invalid              
      @enderror required/>
    </div>

  
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

    <br>
    
    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="c_audio_path_1" class="label">
      <span class="label-text ">Key C</span>
    </label>
    <input type="file" name="c_audio_path_1" id="c_audio_path_1">
    {{-- <input type="hidden" name="piano_keys[]" value="c"> --}}
  </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="d_audio_path_2" class="label">
      <span class="label-text">Key D</span>
    </label>
    <input type="file" name="d_audio_path_2" id="d_audio_path_2">
    {{-- <input type="hidden" name="piano_keys[]" value="d"> --}}
  </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="e_audio_path_3" class="label">
      <span class="label-text">Key E</span>
    </label>
    <input type="file" name="e_audio_path_3" id="e_audio_path_3">
    {{-- <input type="hidden" name="piano_keys[]" value="e"> --}}
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="f_audio_path_4" class="label">
      <span class="label-text">Key F</span>
    </label>
    <input type="file" name="f_audio_path_4" id="f_audio_path_4">
    {{-- <input type="hidden" name="piano_keys[]" value="f"> --}}
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="g_audio_path_5" class="label">
      <span class="label-text">Key G</span>
    </label>
    <input type="file" name="g_audio_path_5" id="g_audio_path_5">
    {{-- <input type="hidden" name="piano_keys[]" value="g"> --}}
    </div>
    <br>

    <div class="form-control md:w-fit max-md:w-full ">
    <label for="a_audio_path_6" class="label">
      <span class="label-text">Key A</span>
    </label>
    <input type="file" name="a_audio_path_6" id="a_audio_path_6">
    {{-- <input type="hidden" name="piano_keys[]" value="a"> --}}
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="b_audio_path_7" class="label">
      <span class="label-text">Key B</span>
    </label>
    <input type="file" name="b_audio_path_7" id="b_audio_path_7">
    {{-- <input type="hidden" name="piano_keys[]" value="b"> --}}
    </div>
    <br>

    {{-- <div class="form-control  md:w-fit max-md:w-full ">
    <label for="cc_audio_path_8" class="label">
      <span class="label-text">Key B</span>
    </label>
    <input type="file" name="cc_audio_path_8" id="cc_audio_path_8">
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="dd_audio_path_9" class="label">
      <span class="label-text">Key B</span>
    </label>
    <input type="file" name="dd_audio_path_9" id="dd_audio_path_9">
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="ff_audio_path_10" class="label">
      <span class="label-text">Key B</span>
    </label>
    <input type="file" name="ff_audio_path_10" id="ff_audio_path_10">
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="gg_audio_path_11" class="label">
      <span class="label-text">Key B</span>
    </label>
    <input type="file"  name="gg_audio_path_11" id="gg_audio_path_11">
    </div>
    <br>

    <div class="form-control  md:w-fit max-md:w-full ">
    <label for="aa_audio_path_12" class="label">
      <span class="label-text">Key B</span>
    </label>
    <input type="file" name="aa_audio_path_12" id="aa_audio_path_12">
    </div>
    <br> --}}

    

    <button type="submit" class="btn btn-sm block mt-5">Upload</button>
  </form>


@endsection

