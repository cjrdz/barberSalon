@extends('layouts.app')

@section('content')

<label for="">Servicio</label> <br>
<div class="grid grid-cols-3 gap-x-6 gap-y-6 overflow-hidden shadow-lg px-6 py-4 ">

    @foreach($service as $item)
    <div class="max-w-sm rounded bg-black overflow-hidden shadow-lg ">
      {{-- <a href="{{ route('service.search', ['id_category' => $item->id_category]) }}"> --}}
        <img class="w-full" src="/img/alisado.jpg" alt="alisado">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <label for="">
              Servicio: {{ $item->name_service }} 
            </label> <br>

            <label for="">
              Precio: ${{ $item->precio }}
            </label> <br>
            {{-- create appointment --}}
            <a href="">
              <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
              focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Agendar</button>
            </a>

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
