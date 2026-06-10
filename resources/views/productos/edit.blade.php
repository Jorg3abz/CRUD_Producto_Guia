<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white border border-gray-200 rounded-2xl shadow-xl p-8 space-y-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Editar Producto</h1>
            <p class="text-sm text-gray-500">Modifica los datos del producto seleccionado.</p>
        </div>

        <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT') 

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}" 
                        class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition">
                @error('nombre') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Descripción</label>
                <textarea name="descripcion" rows="3" 
                            class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition">{{ old('descripcion', $producto->descripcion) }}</textarea>
                @error('descripcion') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Precio</label>
                <input type="number" step="0.01" name="precio" value="{{ old('precio', $producto->precio) }}" 
                        class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition">
                @error('precio') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="flex space-x-3 pt-2">
                <a href="{{ route('productos.index') }}" class="w-1/2 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-xl text-sm transition">
                    Cancelar
                </a>
                <button type="submit" class="w-1/2 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 rounded-xl text-sm shadow-md transition cursor-pointer">
                    Actualizar
                </button>
            </div>
        </form>
    </div>

</body>
</html>