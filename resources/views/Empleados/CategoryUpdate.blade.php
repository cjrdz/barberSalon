@extends('layouts.app')

@section('content')
<form action="/category/update/{{$category->id_category}}" method="POST">
    @csrf
    @method('PUT')
   
        <label>Category</label>
        {{-- <div class="col-5"> --}}
            <input type="text" class="text-black" name="name_category" value="{{$category->name_category}}">

            {{-- error message --}}
            @error('name_category')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        <br>

    <button>Guardar</button> 
</form>

@endsection