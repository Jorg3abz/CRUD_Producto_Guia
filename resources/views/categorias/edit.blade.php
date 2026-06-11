@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
<div class="block w-full max-w-xl mx-auto py-12 px-4 sm:px-6">
    <div class="mb-8">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900">Editar Categoría</h2>
        <p class="text-sm text-gray-500 mt-2">Modifica el nombre de la categoría seleccionada.</p>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 sm:p-8">
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">
                    Nombre de la Categoría
                </label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50/50 text-sm text-gray-900 placeholder-gray-400
                    focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                    transition-all duration-200 @error('nombre') border-red-500 bg-red-50/30 focus:ring-red-500/20 focus:border-red-500 @enderror"
                    placeholder="Ej. Tecnología, Alimentos...">
                
                @error('nombre')
                    <p class="text-red-500 text-xs mt-2 font-medium flex items-center gap-1">
                        <span class="inline-block w-1 h-1 bg-red-500 rounded-full"></span>{{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100 mt-8">
                <a href="{{ route('categorias.index') }}" 
                    class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition-all duration-200 text-center w-1/2 sm:w-auto">
                    Cancelar
                </a>
                <button type="submit" 
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2.5 rounded-xl shadow-xs hover:shadow-sm active:scale-[0.98] transition-all duration-200 text-sm cursor-pointer text-center w-1/2 sm:w-auto">
                    Actualizar Cambios
                </button>
            </div>
        </form>
    </div>
</div>
@endsection