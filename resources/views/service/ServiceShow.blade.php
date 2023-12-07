@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<body>
    <a class="rounded bg-[#fecdd3] text-black" href="/service/create"> + Añadir Servicio</a>
    {{-- </button>  --}}
    <br><br>
        <table >
            <thead>
                <tr>
                    <td>C&oacute;digo</td>
                    <td>Service</td>    
                    <td>TimeFrame</td>    
                    <td>Category</td>    
                    <td>Acciones</td>
                </tr>
            </thead>
                {{-- Category List --}}
            <tbody>
           
            @foreach ($service as $item)
            <tr>
                <td>{{$item->id_service}}</td>
                <td>{{$item->name_service}}</td>            
                <td>{{$item->timeframe}}</td>            
                <td>{{$item->category}}</td>            
                <td>
                    @if(Auth::user())
                    {{-- boton para modificar --}}
                    <a class="btn btn-primary btn-sm" href="/service/edit/{{$item->id_service}}">Modificar</a>
                    @endif
                    {{-- boton para eliminar --}}
                    <button class="btn btn-danger btn-sm" url="/service/destroy/{{$item->id_service}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button> 
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>


</body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/alert.js')}}"></script>
</html>

@endsection