<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Iniciar Sesión</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800 border border-slate-700 rounded-2xl shadow-2xl p-8 space-y-6">
        
        <div class="text-center space-y-2">
            <h1 class="text-2xl font-bold tracking-tight text-white">Sistema de Productos</h1>
            <p class="text-sm text-slate-400">Ingresa tus credenciales para acceder al CRUD</p>
        </div>

        @if ($errors->any())
    <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-3 rounded-xl text-sm">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>
                    @if($error == 'These credentials do not match our records.')
                        Credenciales incorrectas. Por favor, inténtalo de nuevo.
                    @else
                        {{ $error }}
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Correo Electrónico</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Contraseña</label>
                <input type="password" name="password" required
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
            </div>

            <div class="flex items-center justify-between text-sm pt-1">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" class="rounded border-slate-700 bg-slate-900 text-blue-600 focus:ring-blue-500/20">
                    <span class="ml-2 text-xs text-slate-400 uppercase tracking-wider font-semibold">Recordarme</span>
                </label>
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-4 rounded-xl text-sm shadow-lg shadow-blue-600/20 transition duration-200 active:scale-[0.98] cursor-pointer">
                Iniciar Sesión
            </button>
        </form>
    </div>

</body>
</html>