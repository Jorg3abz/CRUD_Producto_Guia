@extends('dashboard') @section('title', 'Crear Categoría')

@section('contenido') <div class="block w-full max-w-xl mx-auto py-12 px-4 sm:px-6">
    
    <div class="mb-8">
        <h2 class="text-3xl font-bold tracking-tight text-white">Crear Categoría</h2> <p class="text-sm text-slate-400 mt-2">Añade una nueva categoría para organizar tus productos en el inventario.</p>
    </div>

    <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-6 sm:p-8">
        <form action="{{ route('categorias.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="nombre" class="block text-sm font-medium text-slate-300 mb-2">
                    Nombre de la Categoría
                </label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-600 bg-slate-900 text-sm text-white placeholder-slate-500
                    focus:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                    transition-all duration-200 @error('nombre') border-red-500 bg-red-50/10 focus:ring-red-500/20 focus:border-red-500 @enderror"
                    placeholder="Ej. Tecnología, Calzado, Alimentos...">
                
                @error('nombre')
                    <p class="text-red-400 text-xs mt-2 font-medium flex items-center gap-1">
                        <span class="inline-block w-1 h-1 bg-red-400 rounded-full"></span>{{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex items-center justify-end gap-3 pt-6 border-t border-slate-700 mt-8">
                <a href="{{ route('categorias.index') }}" 
                    class="px-5 py-2.5 text-sm font-semibold text-slate-400 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-200 text-center w-1/2 sm:w-auto">
                    Cancelar
                </a>
                <button type="submit" 
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2.5 rounded-xl shadow-md active:scale-[0.98] transition-all duration-200 text-sm cursor-pointer text-center w-1/2 sm:w-auto">
                    Guardar Categoría
                </button>
            </div>
        </form>
    </div>
</div>
@endsection