<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Productos - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-600">

    <div class="container mx-auto max-w-4xl p-6">
        <div class="flex justify-between items-center mb-6 bg-white p-4 rounded-lg shadow-sm">
            <h1 class="text-2xl font-bold text-gray-800">Gestión de Productos</h1>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow-sm transition">
                + Crear Producto
            </button>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-800 text-white uppercase text-sm">
                        <th class="p-4">ID</th>
                        <th class="p-4">Nombre</th>
                        <th class="p-4">Descripción</th>
                        <th class="p-4">Precio</th>
                        <th class="p-4 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 font-semibold text-gray-500">1</td>
                        <td class="p-4 font-bold text-gray-900">Mouse Gamer</td>
                        <td class="p-4 text-gray-600">Mouse óptico RGB</td>
                        <td class="p-4 text-green-600 font-semibold">$25.00</td>
                        <td class="p-4 text-center space-x-2">
                            <button class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-bold py-1 px-3 rounded shadow-sm">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-bold py-1 px-3 rounded shadow-sm">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>