@extends('layouts.app')

@section('content')

    <p class=" text-4xl text-gray-900 dark:text-white text-center"><b>Categorias</b></p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-6 py-5"> 
        {{-- to show cards category  --}}
        @component('components.CardCategory', ['category' => $category])
        @endcomponent
    </div>
    {{-- end --}}
@endsection
