@extends('layouts.app')

@section('content')

<form method="POST" action="/service/update/{{$service->id_service}}">
    @csrf
    @method('PUT')

        <label for="name_service" class="col-md-4 col-form-label text-md-end">name service</label> <br>

        <div class="text-black">
            <input id="name_service" type="text" class="form-control" @error('name_service') is-invalid @enderror name="name_service" value="{{$service->name_service}}" required autocomplete="role" autofocus>

            @error('nombre_tarea')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <label for="timeframe" class="col-md-4 col-form-label text-md-end">Time Frame</label> <br>

        <div class="text-black">
            <input id="timeframe" type="text"  @error('timeframe') is-invalid @enderror name="timeframe" value="{{$service->timeframe}}" required autocomplete="role">

            @error('timeframe')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

            {{--updatwe fk_category --}}
        <label for="">Categoria</label> <br>
        <div class="text-black">
            <select name="fk_category"class="text-black">
              
                @foreach ($category as $item)
                    <option value="{{$item->id_category}}" {{ $item->id_category == $service->fk_category ? 'selected' : '' }}>{{$item->name_category}}</option>
                @endforeach
            {{-- </option> --}}
            </select>
                @error('category')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>


    <div class="row mb-0">
        <div class="col-md-6 offset-md-4"> <br>
            <button>Guardar</button>
        </div>
    </div>
</form>

@endsection