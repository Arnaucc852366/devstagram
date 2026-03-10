@extends('layouts.app')

@section('title')
    Crea una nueva Publicación
@endsection

@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form
                action="{{ route('images.store') }}"
                method="POST"
                id="dropzone-upload"
                enctype="multipart/form-data"
                class="dropzone border-dashed border-2 border-gray-400 rounded-lg bg-white w-full h-72 flex items-center justify-center cursor-pointer hover:border-sky-500 transition-colors"
            >
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
        <form class="p-6 rounded-lg w-full" method="POST" action="">
                    @csrf
                    <div class="mb-5">
                        <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold ">
                            Titulo
                        </label>
                        <input
                            id="titulo"
                            type="text"
                            name="titulo"
                            placeholder="Titulo de la Publicación"
                            class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                            value="{{ old('titulo') }}" />

                        @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold ">
                            Descripción
                        </label>
                    <textarea 
                        id="descripcion"
                        name="descripcion"
                        placeholder="Descripción de la Publicación"
                        class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror"
                        >{{ old('descripcion') }}</textarea>

                        @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="submit" value="Crear Publicación" class="bg-sky-600 hover:bg-slate-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />

        </form>            
        </div>
    </div>

@endsection
