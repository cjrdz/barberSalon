@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="/payment/update/{{$payment->id_payment}}">
        @csrf
        @method('PUT')
    
            <label for="d" class="col-md-4 col-form-label text-md-end">Costo</label> <br>
            <div class="text-black">
                <input id="cost" type="number" class="form-control" @error('cost') is-invalid @enderror name="cost" value="{{$payment->cost}}" required autocomplete="role" autofocus>
    
                @error('cost')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <label for="paymentmethod" class="col-md-4 col-form-label text-md-end">Metodo</label> <br>
            <div class="text-black">
                <input id="paymentmethod" type="text"  @error('paymentmethod') is-invalid @enderror name="paymentmethod" value="{{$payment->paymentmethod}}" required autocomplete="role">
    
                @error('paymentmethod')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

    
                {{--update fk_user --}}
            <label for="">Usuario</label> <br>
            <div class="text-black">
                <select name="fk_user"class="text-black">
                  
                    @foreach ($users as $item)
                        <option value="{{$item->id}}" {{ $item->id == $payment->fk_user ? 'selected' : '' }}>{{$item->name}}</option>
                    @endforeach
                {{-- </option> --}}
                </select>
                    @error('fk_user')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>


            <label for="">Servicio</label> <br>
            <div class="text-black">
                <select name="fk_service"class="text-black">
                  
                    @foreach ($service as $item)
                        <option value="{{$item->id_service}}" {{ $item->id_service == $payment->fk_service ? 'selected' : '' }}>{{$item->name_service}}</option>
                    @endforeach
                {{-- </option> --}}
                </select>
                    @error('fk_service')
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
</body>
</html>

@endsection