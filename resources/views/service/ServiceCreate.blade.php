@extends('layouts.app')

@section('content')


<form method="POST" action="/serviceStore">
    @csrf

    <label for="">Nombre del Servicio</label> <br>
    <div class="text-black">
            {{-- name category --}}
            <input id="name_service" type="text" class="form-control" @error('name_service') is-invalid @enderror name="name_service" required autocomplete="role" autofocus>

            @error('name_service')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
<label for="">TimeFrame</label> <br>
        {{-- timeframe --}}
        <div class="text-black">
            <input id="timeframe" type="text" class="form-control" @error('timeframe') is-invalid @enderror name="timeframe"  required autocomplete="role">

            @error('timeframe')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<label for="">Precio</label> <br>
        {{-- timeframe --}}
        <div class="text-black">
            <input id="precio" type="number" class="form-control" @error('precio') is-invalid @enderror name="precio"  required autocomplete="role">

            @error('precio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    {{-- fk_category --}}
<label for="">Categoria</label> <br>
        <div class="text-black">
            <select name="fk_category"class="text-black">
                <option>
                @foreach ($category as $item)
                    <option value="{{$item->id_category}}">{{$item->name_category}}</option>
                @endforeach
            </option>
            </select>
                @error('name_category')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        {{-- end --}}
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <br>
            <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button> 

        </div>
    </div>
</form>

@endsection