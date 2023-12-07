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


    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
           
            <button type="submit">Guardar</button> 

        </div>
    </div>
</form>

@endsection