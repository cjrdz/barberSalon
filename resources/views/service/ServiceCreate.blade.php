@extends('layouts.app')

@section('content')


<form method="POST" action="/serviceStore" class="mx-auto max-w-md">
    @csrf

    <p class="mt-4 text-4xl text-gray-900 dark:text-white text-center"><b>Crear Servicio</b></p><br>

    <div class="mx-auto max-w-md">
        {{-- Name of the Service --}}
        <label for="name_service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del Servicio</label>
        <input id="name_service" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del Servicio" @error('name_service') is-invalid @enderror name="name_service" required autocomplete="name_service" autofocus>

        @error('name_service')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-4 mx-auto max-w-md">
        {{-- TimeFrame --}}
        <label for="timeframe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TimeFrame</label>
        <input id="timeframe" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TimeFrame" @error('timeframe') is-invalid @enderror name="timeframe" required autocomplete="timeframe">

        @error('timeframe')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-4 mx-auto max-w-md">
        {{-- Precio --}}
        <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
        <input id="precio" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Precio" @error('precio') is-invalid @enderror name="precio" required autocomplete="precio">

        @error('precio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- fk_category --}}
    <div class="mt-4 mx-auto max-w-md">
        <label for="fk_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
        <select name="fk_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($category as $item)
                <option value="{{ $item->id_category }}">{{ $item->name_category }}</option>
            @endforeach
        </select>
        @error('fk_category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- Button Save --}}
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <br>
            <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button> 
        </div>
    </div>
</form>

@endsection