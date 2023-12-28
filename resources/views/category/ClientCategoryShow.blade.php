@extends('layouts.app')

@section('content')
    <p class=" text-4xl text-gray-900 dark:text-white text-center"><b>Categorias</b></p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-6 py-5">
        @foreach ($category as $item)
            <div
                class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-950 text-white transform transition-transform hover:scale-105">
                <a href="{{ route('client.service.search', ['id_category' => $item->id_category]) }}" class="block">
                    <img class="w-full h-48 object-cover" src="{{ asset($item->img) }}" alt="{{ $item->name_category }}">
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-2 text-teal-500">
                            {{ $item->name_category }}
                        </h2>
                        <p class="text-gray-400 text-base">
                            {{ $item->description }}
                        </p>
                    </div>
                </a>
            </div>
            {{-- end --}}
        @endforeach
    </div>
    {{-- end --}}
@endsection
