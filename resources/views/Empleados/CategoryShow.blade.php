@extends('layouts.app')

@section('content')


    {{-- Encabezados --}}
    <table>
        {{-- Encabezados --}}
        <tr>
                            <td>C&oacute;digo</td>
                            <td>Name Category</td>    
                            <td>Acciones</td>
                        </tr>
    
                        {{-- Listado de productos --}}
                        @foreach ($category as $item)
                        <tr>
                            <td>{{$item->id_category}}</td>
                            <td>{{$item->name_category}}</td>
                        
                            <td>
                            @if(Auth::user())
                            {{-- boton para modificar --}}
                            <a class="btn btn-primary btn-sm" href="/Area/edit/{{$item->id_category}}">Modificar</a>
                            @endif
                            {{-- boton para eliminar --}}
                            <button class="btn btn-danger btn-sm" url="/Area/destroy/{{$item->id_category}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button> 
                            </td>
                        </tr>
                        @endforeach
                        </table>
    @endsection