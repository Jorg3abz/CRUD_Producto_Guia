<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased min-h-screen">

    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center shadow-sm">
        <h1 class="text-xl font-bold text-gray-800">
            Bienvenido, <span class="text-indigo-600">{{ session('usuario_nombre') }}</span>
        </h1>
        <a href="{{ url('/logout') }}" class="bg-red-500 hover:bg-red-600 text-white font-medium px-4 py-2 rounded-lg transition duration-200 text-sm">
            Cerrar Sesión
        </a>
    </nav>

    <main class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-2xl border border-gray-200 shadow-xl">
        
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">Panel de Productos</h2>
            <a href="{{ route('productos.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-5 py-2.5 rounded-xl shadow-md transition duration-200 text-sm">
                + Agregar Producto
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-xl shadow-sm text-sm" role="alert">
                <p class="font-bold mb-1">¡Logrado!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="overflow-x-auto rounded-xl border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                <thead class="bg-gray-50 text-gray-600 uppercase font-bold tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nombre del artículo</th>
                        <th class="px-6 py-4">Descripción</th>
                        <th class="px-6 py-4">Precio</th>
                        <th class="px-6 py-4 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                    @forelse($productos as $producto)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-6 py-4 font-medium text-gray-900">#{{ $producto->id ?? $producto['id'] }}</td>
                            <td class="px-6 py-4 font-semibold text-gray-900">{{ $producto->nombre ?? $producto['nombre'] }}</td>
                            <td class="px-6 py-4 text-gray-500">{{ $producto->descripcion ?? $producto['descripcion'] ?? 'Sin descripción' }}</td>
                            <td class="px-6 py-4 text-green-600 font-bold">${{ number_format($producto->precio ?? $producto['precio'], 2) }}</td>
                            <td class="px-6 py-4 text-center space-x-3">
                                <a href="{{ route('productos.edit', $producto->id ?? $producto['id']) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold underline">
                                    Editar
                                </a>
                                <form action="{{ route('productos.destroy', $producto->id ?? $producto['id']) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Seguro?')" class="text-red-600 hover:text-red-900 font-semibold underline cursor-pointer">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-400 font-medium bg-gray-50">
                                No hay productos registrados aún.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>