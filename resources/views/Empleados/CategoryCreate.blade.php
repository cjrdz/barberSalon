@extends('layouts.app')

@section('content')

<form action="/categoryStore" method="POST" >
    @csrf
        <label>Category Create</label> <br>
        {{-- <div class="col-5"> --}}
            <input type="text" class="text-black"  @error('name_category') is-invalid @enderror" name="name_category" " required autocomplete="name" autofocus>
            {{-- error message --}}
            @error('name_category')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        <br>
        
    <button type="submit">Guardar</button> 
</form>

@endsection