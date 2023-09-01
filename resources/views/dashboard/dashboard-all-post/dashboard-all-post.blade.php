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
<div class="alert alert-error shadow-lg flex justify-start mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('error')}}</span>
  </div>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-error shadow-lg flex justify-start mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('delete')}}</span>
  </div>
</div>
@endif


<h1 class="text-5xl font-bold text-gray-500">All Post</h1>


<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
      <div class="py-2 inline-block min-w-full px-2">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class=" border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                  #
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                  Category
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dashboard as $instrument)
                  
              <tr class="bg-gray-100 border-b">
                <td class="py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td> --}}
                <td class="text-sm text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                  <a href="/post-show/{{$instrument->slug}}" class="hover:underline">{{$instrument->name}}</a>
                </td>
  
                <td class="text-sm text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                  {{$instrument->category->name}}
                </td>
                
                @if (auth()->user()->username === 'Admin')

                  
                <td><button class="btn-sm rounded-md btn-primary"><a href="/edit-materi/{{$instrument->slug}}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                  
                </a></button>
                  <form action="/delete-materi/{{$instrument->slug}}" method="post" class="inline">
                    @method('delete')
                    @csrf
                <button  class="btn-sm rounded-md btn-warning" onclick="return confirm('Are You Sure?')">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  
                </button>
              </form>
                </td>
                @else 
                    
                
                <td>

                  <a href="/post-show/{{$instrument->slug}}"><button class="btn btn-sm">View</button></a>
                </td>
                @endif

              </tr>
              @endforeach
              <div class="flex justify-center">
              </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="flex ">
      {{$dashboard->links()}}
    </div>
  </div>




@endsection