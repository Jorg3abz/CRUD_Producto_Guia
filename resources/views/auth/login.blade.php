<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800 border border-slate-700 rounded-2xl shadow-2xl p-8 space-y-6">
        
        <div class="text-center space-y-2">
            <h1 class="text-2xl font-bold tracking-tight text-white">Sistema de Productos</h1>
            <p class="text-sm text-slate-400">Ingresa tus credenciales para acceder al CRUD</p>
        </div>

        @if (session('error'))
    <div style="color: red; margin-bottom: 10px;">
        {{ session('error') }}
    </div>
@endif

        <form action="/login" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Correo Electrónico</label>
                <input type="email" name="email" required
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Contraseña</label>
                <input type="password" name="password" required
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-4 rounded-xl text-sm shadow-lg shadow-blue-600/20 transition duration-200 active:scale-[0.98]">
                Iniciar Sesión
            </button>
        </form>
    </div>

</body>