@extends('layouts.main')

@section('all')
<div class="mt-24 mb-80">
  
  
  <div class="bacc ">
    <div class="baccc">
  <ul class="grid w-96 max-md:flex max-md:flex-wrap mx-auto max-md:gap-10 gap-96 mt-10 grid-cols-2 justify-center justify-items-center max-md:w-auto max-md:grid-cols-1 px-5">
      @foreach ($category as $Category)
        <li class="itemmsc  itemsc border-4 mt-5 rounded-xl h-52 hover:h-96 overflow-hidden gailang bg-[conic-gradient(at_bottom_left,_var(--tw-gradient-stops))] from-fuchsia-300 via-green-400 to-rose-700"> 
          <div class="">
            <div class="card__image card__image--fence">
                <div class="absolute flex justify-center items-center mx-20 mt-16 text-xl rounded-r-md font-sans font-bold w-36  h-14 backd backdrop-blur-2xl ">{{ $Category->nama }}</div>
                <img class="igm  rounded-xl" src="{{ $Category->img }}">
            </div>
            
            <div class=" ">
              <div class="card__title text-center mb-5 font-bold max-md:text-xl mt-10"></div>
              <a href="chose-instrument" class="justify-items-center flex">
              <button class="btn btn--block card__btn justify-center">Instrument</button></a>
            </div>
          </div>
        </li>
      

        {{-- <li class="itemmsc itemsc border-4 mt-5 rounded-xl h-52 hover:h-96 overflow-hidden gailang"> 
          <div class="">
            <div class="card__image card__image--fence">
                <div class="absolute flex justify-center items-center mx-20 mt-16 text-xl rounded-r-md font-sans font-bold w-36  h-14 backd backdrop-blur-2xl ">Electronic</div>
                <img class="igm rounded-xl" src="imgg/category-pic2.jpg" alt="">
            </div>
            
            <div class=" ">
              <div class="card__title text-center mb-5 font-bold max-md:text-xl mt-10">Electronic</div>
              <a href="chose-instrument" class="justify-items-center flex">
              <button class="btn btn--block card__btn justify-center">Instrument</button></a>
            </div>
          </div>
        </li> --}}

        @endforeach
    </ul>
  </div>
</div>
</div>



    
@endsection