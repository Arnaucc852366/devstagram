@extends('layouts.app')

@section('title')
    Perfil: {{ $user->username }}
@endsection

@section('content')
<div class="flex justify-center py-10">
    <div class="w-full md:w-10/12 lg:w-8/12 bg-white shadow-lg rounded-xl p-10 flex flex-col md:flex-row items-center md:items-start gap-10">

        {{-- Avatar --}}
        <div class="flex justify-center md:justify-start w-full md:w-4/12">
            <img 
                src="{{ asset('img/usuario.svg') }}" 
                alt="Imagen usuario"
                class="w-40 h-40 object-cover rounded-full border-4 border-blue-500 shadow-md"
            >
        </div>

        {{-- Información del perfil --}}
        <div class="w-full md:w-8/12 flex flex-col items-center md:items-start">

            <p class="text-gray-900 text-3xl font-bold mb-3">
                {{ $user->username }}
            </p>

            <div class="flex gap-6 text-center md:text-left">

                <div>
                    <p class="text-gray-900 text-xl font-semibold">0</p>
                    <span class="text-gray-600 text-sm">Seguidores</span>
                </div>

                <div>
                    <p class="text-gray-900 text-xl font-semibold">0</p>
                    <span class="text-gray-600 text-sm">Siguiendo</span>
                </div>

                <div>
                    <p class="text-gray-900 text-xl font-semibold">0</p>
                    <span class="text-gray-600 text-sm">Posts</span>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection