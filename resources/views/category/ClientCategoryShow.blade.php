@extends('layouts.app')

@section('content')

<label for="">Categoria</label> <br>
<div class="grid grid-cols-4 gap-x-6 gap-y-6 overflow-hidden shadow-lg px-6 py-5">  
      @foreach($category as $item)
      
      <div class="max-w-sm rounded bg-black overflow-hidden shadow-lg ">
        <a href="{{ route('client.service.search', ['id_category' => $item->id_category]) }}">

        <img class="w-full" src="/img/alisado.jpg" alt="alisado">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <label for="">
              {{$item->name_category}}
            </label>
          </div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet consectetur
            </p> 
          </a>
        </div>
      </div>
             
      @endforeach 

  </div> 

@endsection
