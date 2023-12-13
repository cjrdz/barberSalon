@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="/appointment/update/{{$appointment->id_appointment}}">
        @csrf
        @method('PUT')
    
            <label for="date" class="col-md-4 col-form-label text-md-end">Fecha</label> <br>
            <div class="text-black">
                <input id="date" type="date" class="form-control" @error('date') is-invalid @enderror name="date" value="{{$appointment->date}}" required autocomplete="role" autofocus>
    
                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <label for="time" class="col-md-4 col-form-label text-md-end">Tiempo</label> <br>
            <div class="text-black">
                <input id="time" type="time"  @error('time') is-invalid @enderror name="time" value="{{$appointment->time}}" required autocomplete="role">
    
                @error('time')
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
                        <option value="{{$item->id}}" {{ $item->id == $appointment->fk_user ? 'selected' : '' }}>{{$item->name}}</option>
                    @endforeach
                {{-- </option> --}}
                </select>
                    @error('fk_user')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

                {{--update fk_status --}}
            <label for="">Estado</label> <br>
            <div class="text-black">
                <select name="fk_status"class="text-black">
                  
                    @foreach ($status as $item)
                        <option value="{{$item->id_status}}" {{ $item->id_status == $appointment->fk_status ? 'selected' : '' }}>{{$item->name_status}}</option>
                    @endforeach
                {{-- </option> --}}
                </select>
                    @error('fk_status')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <label for="">Servicio</label> <br>
            <div class="text-black">
                <select name="fk_service"class="text-black">
                  
                    @foreach ($service as $item)
                        <option value="{{$item->id_service}}" {{ $item->id_service == $appointment->fk_service ? 'selected' : '' }}>{{$item->name_service}}</option>
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