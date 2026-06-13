@extends('dashboard') @section('title', 'Listado de Categorías')

@section('contenido') <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-white">Panel de Categorías</h2> <div class="space-x-3">
            <a href="{{ route('productos.index') }}" class="text-slate-400 hover:text-white font-medium text-sm transition duration-200">
                Ir a Productos
            </a>
            <a href="{{ route('categorias.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-5 py-2.5 rounded-xl shadow-md transition duration-200 text-sm">
                + Agregar Categoría
            </a>
        </div>
    </div>

    <div class="overflow-x-auto rounded-xl border border-slate-700 shadow-md">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-left bg-white">
            <thead class="bg-gray-50 text-gray-600 uppercase font-bold tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Nombre</th>
                    <th class="px-6 py-4 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-600">
                @forelse ($categorias as $categoria)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900">#{{ $categoria->id }}</td>
                        <td class="px-6 py-4 font-semibold text-gray-900">{{ $categoria->nombre }}</td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-yellow-600 hover:text-yellow-900 font-medium bg-yellow-50 px-3 py-1 rounded-md transition inline-block">
                                Editar
                            </a>

                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="form-eliminar inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300 font-medium bg-red-500/10 border border-red-500/20 px-3 py-1 rounded-md transition cursor-pointer">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-10 text-center text-gray-400 font-medium bg-gray-50">
                            No hay categorías registradas aún.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection