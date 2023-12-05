@extends('layouts.app')

@section('content')

{{-- <button class="rounded bg-[#fecdd3] text-black"> --}}
    <a class="rounded bg-[#fecdd3] text-black" href="/category/create"> + Añadir Categoria</a>
{{-- </button>  --}}
<br><br>
    <table >
        <thead>
            <tr>
                <td>C&oacute;digo</td>
                <td>Category</td>    
                <td>Acciones</td>
            </tr>
        </thead>
            {{-- Category List --}}
        <tbody>
       
        @foreach ($category as $item)
        <tr>
            <td>{{$item->id_category}}</td>
            <td>{{$item->name_category}}</td>            
            <td>
                @if(Auth::user())
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm" href="/category/edit/{{$item->id_category}}">Modificar</a>
                @endif
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/category/destroy/{{$item->id_category}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button> 
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/alert.js')}}"></script>

@endsection