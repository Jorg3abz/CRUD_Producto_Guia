@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="block w-full max-w-2xl mx-auto py-12 px-4 sm:px-6">
    
    <div class="mb-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Agregar Producto</h1>
        <p class="text-sm text-gray-500 mt-2">Ingresa los datos del nuevo artículo para el inventario.</p>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 sm:p-8">
        <form action="{{ route('productos.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50/50 text-sm text-gray-900 placeholder-gray-400
                        focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                        transition-all duration-200"
                        placeholder="Ej. Mouse Gamer">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Categoría</label>
                <div class="relative">
                    <select name="categoria_id" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50/50 text-sm text-gray-900 appearance-none
                            focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                            transition-all duration-200">
                        <option value="" disabled selected>Selecciona una categoría</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
                <textarea name="descripcion" rows="3" placeholder="Ej. Mouse óptico RGB con cable trenzado..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50/50 text-sm text-gray-900 placeholder-gray-400
                            focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                            transition-all duration-200">{{ old('descripcion') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Precio (S/.)</label>
                <div class="relative rounded-xl shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500">
                        <span class="text-sm">S/.</span>
                    </div>
                    <input type="number" step="0.01" name="precio" value="{{ old('precio') }}" required
                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 bg-gray-50/50 text-sm text-gray-900
                            focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                            transition-all duration-200"
                            placeholder="0.00">
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100 mt-8">
                <a href="{{ route('productos.index') }}" 
                    class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition-all duration-200 text-center w-1/2 sm:w-auto">
                    Cancelar
                </a>
                <button type="submit" 
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2.5 rounded-xl shadow-sm active:scale-[0.98] transition-all duration-200 text-sm cursor-pointer text-center w-1/2 sm:w-auto">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection