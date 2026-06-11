<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-between p-4">

    <nav class="w-full max-w-5xl mx-auto flex justify-between items-center bg-slate-800/50 border border-slate-700/50 px-6 py-4 rounded-2xl shadow-xl backdrop-blur-md mt-4">
        <h1 class="text-lg font-bold text-white">
            Bienvenido, <span class="text-blue-400">{{ session('usuario_nombre', 'Administrador') }}</span>
        </h1>
        <a href="{{ url('/logout') }}" class="bg-red-500/20 hover:bg-red-500 border border-red-500/30 text-red-300 hover:text-white font-medium px-4 py-2 rounded-xl transition duration-200 text-sm">
            Cerrar Sesión
        </a>
    </nav>

    <main class="w-full max-w-4xl mx-auto my-auto py-10">
        <div class="text-center space-y-2 mb-10">
            <h2 class="text-3xl font-extrabold tracking-tight text-white">Selecciona uno de los módulos</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <a href="{{ route('productos.index') }}" 
                class="group relative bg-slate-800 border border-slate-700 hover:border-blue-500 rounded-2xl shadow-xl p-8 flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-blue-500/10">
                <div class="w-16 h-16 bg-blue-600/10 text-blue-400 rounded-2xl flex items-center justify-center mb-4 border border-blue-500/20 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l12 5.25m-3-5.25L12 21" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition-colors">Módulo de Productos</h3>
                <p class="text-sm text-slate-400 mt-2">Gestiona el inventario, añade nuevos artículos, edita precios y descripciones.</p>
            </a>

            <a href="{{ route('categorias.index') }}" 
                class="group relative bg-slate-800 border border-slate-700 hover:border-indigo-500 rounded-2xl shadow-xl p-8 flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-indigo-500/10">
                <div class="w-16 h-16 bg-indigo-600/10 text-indigo-400 rounded-2xl flex items-center justify-center mb-4 border border-indigo-500/20 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.674.509a1.75 1.75 0 00.99-1.59v-1.12c0-.53.21-1.04.586-1.414l2.154-2.154a1.75 1.75 0 00-.508-2.674c-.534-.234-1.04-.586-1.414-.586h-1.12a1.75 1.75 0 00-1.59.99v.001c-.363.894-.536 1.975-1.235 2.674l-9.581-9.581A2.25 2.25 0 009.568 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white group-hover:text-indigo-400 transition-colors">Módulo de Categorías</h3>
                <p class="text-sm text-slate-400 mt-2">Organiza tus productos en secciones. Crea, edita y remueve clasificaciones básicas.</p>
            </a>

        </div>
    </main>

</body>
</html>