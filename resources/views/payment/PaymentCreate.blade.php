@extends('layouts.app')

@section('content')


<form method="POST" action="/paymentStore">
    @csrf

    <label for="">Costo</label> <br>
    <div class="text-black">
            {{-- date--}}
            <input id="cost" type="number" class="form-control" @error('cost') is-invalid @enderror name="cost" required autocomplete="role" autofocus>

            @error('cost')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
<label for="">Metodo</label> <br>
        {{-- time --}}
        <div class="text-black">
            <input id="paymentmethod" type="text" class="form-control" @error('paymentmethod') is-invalid @enderror name="paymentmethod"  required autocomplete="role">

            @error('paymentmethod')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    {{-- fk_user --}}
<label for="">Usuario</label> <br>
        <div class="text-black">
            <select name="fk_user"class="text-black">
                <option>
                @foreach ($users as $item)
                    <option value="{{$item->user_id}}">{{$item->name}}</option>
                @endforeach
            </option>
            </select>
                @error('name')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        {{-- end --}}



        {{-- end --}}
<label for="">Servicio</label> <br>
        <div class="text-black">
            <select name="fk_service"class="text-black">
                <option>
                @foreach ($service as $item)
                    <option value="{{$item->id_service}}">{{$item->name_service}}</option>
                @endforeach
            </option>
            </select>
                @error('name_service')
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