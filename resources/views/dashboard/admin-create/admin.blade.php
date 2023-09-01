@extends('dashboard.layouts2.main2')

@section('konten')


@if (session()->has('succes'))
<div class="flex items-center justify-start">
<div class="alert alert-success shadow-lg mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('succes')}}</span>
  </div>
</div>
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-error shadow-lg w-[50%] mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('error')}}</span>
  </div>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-error shadow-lg w-[50%] mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('delete')}}</span>
  </div>
</div>
@endif

<h1 class="text-3xl mx-7 font-bold text-gray-500">Audio Simulation</h1>
<a href="/audio-sim"><button class="btn btn-primary mx-7 mt-2">Tambah Audio Simulasi</button></a>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class=" border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                C
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                D
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                E
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                F
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                G
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                A
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                B
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($instrumentAudios as $instrumentAudio)
                
            <tr class="bg-gray-100 border-b">
              <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
              {{-- <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td> --}}
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$instrumentAudio->name}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->c_audio_path_1, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->d_audio_path_2, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->e_audio_path_3, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->f_audio_path_4, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->g_audio_path_5, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->a_audio_path_6, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{ Str::limit($instrumentAudio->b_audio_path_7, 5)}}
              </td>

              <td><button class="btn-sm rounded-md btn-primary"><a href="/edit-audio/{{$instrumentAudio->slug}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                
              </a></button>
                <form action="/delete-audio/{{$instrumentAudio->slug}}" method="post" class="inline">
                  @method('delete')
                  @csrf
              <button  class="btn-sm rounded-md btn-warning" onclick="return confirm('Are You Sure?')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                
              </button>
            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="flex">
        {{$instrumentAudios->links()}}
      </div>
      </div>
    </div>
  </div>
</div>
    


<h1 class="text-3xl mt-2 mx-7 font-bold text-gray-500">Latihan</h1>

<a href="/latihan-create"><button class="btn btn-primary mx-7 mt-2">Tambah Latihan</button></a>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full ">
          <thead class=" border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Name
              </th>
              <th scope="col" class="text-sm  font-medium text-gray-900  py-4 text-left">
                Category
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Question
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Essay
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Answer
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($latihans as $latihan)
                
            <tr class="bg-gray-100 border-b">
              <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
              {{-- <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td> --}}
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$latihan->name}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$latihan->categoryLatihan->name}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{Str::limit($latihan->question, 3)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{Str::limit($latihan->essay, 3)}}
              </td>
              {{-- <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$latihan->essay2}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{Str::limit($latihan->essay3, 3)}}
              </td> --}}
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{Str::limit($latihan->answer, 3)}}
              </td>

                  <td class="hidden melayang absolute max-md:right-24">
                    <button class="btn-sm rounded-md btn-primary "><a href="/latihan-update/{{$latihan->slug}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    
                  </a></button>
                    <form action="/latihan-delete/{{$latihan->slug}}" method="post" class="inline">
                      @method('delete')
                      @csrf
                  <button  class="btn-sm rounded-md btn-warning" onclick="return confirm('Are You Sure?')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    
                  </button>
                </form>
                  </td>

              <td class="md:hidden" >
                <button class="melang">
                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                </svg>
              </button>
              </td>

              <td class="max-md:hidden">
                <button class="btn-sm rounded-md btn-primary"><a href="/latihan-update/{{$latihan->slug}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                
              </a></button>
                <form action="/latihan-delete/{{$latihan->slug}}" method="post" class="inline">
                  @method('delete')
                  @csrf
              <button  class="btn-sm rounded-md btn-warning" onclick="return confirm('Are You Sure?')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                
              </button>
            </form>
              </td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="flex">
        {{$latihans->links()}}
      </div>
      </div>
    </div>
  </div>
</div>


<h1 class="text-3xl mt-2 mx-7 font-bold text-gray-500">Category Latihan</h1>

<a href="/category-latihan-create"><button class="btn btn-primary mx-7 mt-2">Tambah Category Latihan</button></a>

<div class="flex flex-col ">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class=" border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Slug
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categoryLatihans as $categorylatihan)
                
            <tr class="bg-gray-100 border-b">
              <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
              {{-- <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td> --}}
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$categorylatihan->name}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$categorylatihan->slug}}
              </td>
              <td><button class="btn-sm rounded-md btn-primary"><a href="/category-edit/{{$categorylatihan->slug}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                
              </a></button>
                <form action="/category-delete/{{$categorylatihan->slug}}" method="post" class="inline">
                  @method('delete')
                  @csrf
              <button  class="btn-sm rounded-md btn-warning" onclick="return confirm('Are You Sure?')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                
              </button>
            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="flex">
        {{$categoryLatihans->links()}}
      </div>
      </div>
    </div>
  </div>
</div>



<h1 class="text-3xl mt-2 mx-7 font-bold text-gray-500">Songs</h1>

<a href="/create-song"><button class="btn btn-primary mx-7 mt-2">Tambah Song</button></a>

<div class="flex flex-col mb-44">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class=" border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Img
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Img
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900  py-4 text-left">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($songs as $song)
                
            <tr class="bg-gray-100 border-b">
              <td class=" py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{$song->name}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{Str::limit ($song->image, 5)}}
              </td>
              <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                {{Str::limit ($song->image2, 5)}}
              </td>
              <td><button class="btn-sm rounded-md btn-primary"><a href="/song-edit/{{$song->slug}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                
              </a></button>
                <form action="/song-delete/{{$song->slug}}" method="post" class="inline">
                  @method('delete')
                  @csrf
              <button  class="btn-sm rounded-md btn-warning" onclick="return confirm('Are You Sure?')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                
              </button>
            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="flex">
        {{$categoryLatihans->links()}}
      </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
  $('.melang').on('click', function () {
    $('.melayang').show('.melayang');
  });
  $('.melang').on('dblclick', function () {
    $('.melayang').hide('.melayang');
  });

  
});

</script>

@endsection

