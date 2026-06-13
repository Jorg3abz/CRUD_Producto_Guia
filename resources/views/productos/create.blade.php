@extends('dashboard') @section('title', 'Crear Producto')

@section('contenido') <div class="block w-full max-w-2xl mx-auto py-12 px-4 sm:px-6">
    
    <div class="mb-8">
        <h1 class="text-3xl font-bold tracking-tight text-white">Agregar Producto</h1> <p class="text-sm text-slate-400 mt-2">Ingresa los datos del nuevo artículo para el inventario.</p>
    </div>

    <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-6 sm:p-8">
        <form action="{{ route('productos.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-600 bg-slate-900 text-sm text-white placeholder-slate-500
                        focus:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                        transition-all duration-200"
                        placeholder="Ej. Mouse Gamer">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">Categoría</label>
                <div class="relative">
                    <select name="categoria_id" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-600 bg-slate-900 text-sm text-white appearance-none
                            focus:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                            transition-all duration-200">
                        <option value="" disabled selected class="text-slate-500">Selecciona una categoría</option>
                        @foreach($categories ?? $categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">Descripción</label>
                <textarea name="descripcion" rows="3" placeholder="Ej. Mouse óptico RGB con cable trenzado..."
                            class="w-full px-4 py-3 rounded-xl border border-slate-600 bg-slate-900 text-sm text-white placeholder-slate-500
                            focus:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                            transition-all duration-200">{{ old('descripcion') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">Precio (S/.)</label>
                <div class="relative rounded-xl shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                        <span class="text-sm">S/.</span>
                    </div>
                    <input type="number" step="0.01" name="precio" value="{{ old('precio') }}" required
                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-600 bg-slate-900 text-sm text-white
                            focus:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 
                            transition-all duration-200"
                            placeholder="0.00">
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-6 border-t border-slate-700 mt-8">
                <a href="{{ route('productos.index') }}" 
                    class="px-5 py-2.5 text-sm font-semibold text-slate-400 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-200 text-center w-1/2 sm:w-auto">
                    Cancelar
                </a>
                <button type="submit" 
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2.5 rounded-xl shadow-md active:scale-[0.98] transition-all duration-200 text-sm cursor-pointer text-center w-1/2 sm:w-auto">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection