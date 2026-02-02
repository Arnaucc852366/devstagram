@extends('layouts.app')

@section('title')
Iniciar Sesión en DevStagram
@endsection

@section('content')
<div class="md:flex md:justify-center md:gap-01 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/login.jpg') }}" alt="Imagen de Login usuario">
    </div>

    {{-- Nombre --}}

    <div class="md:w-4/12 bg-white p-10 rounded-lg shadow-xl">
        <form class="p-6 rounded-lg w-full" method="POST" action="{{ route('login') }}">
            @csrf


            @if (session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
            @endif


            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="Tu Email de Registro"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" />
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Tu Password de Registro"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    value="{{ old('password') }}" />

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="ml-2 text-gray-500 font-bold">Recordarme</label>
                </div>
            </div>

            <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-slate-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />

        </form>

    </div>
</div>
@endsection