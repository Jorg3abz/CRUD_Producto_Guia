<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel de Control')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 text-gray-800 antialiased min-h-screen">
<nav class="bg-gray-900 text-white shadow-md mb-8">
        <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-16">
            <a href="#" class="font-bold text-xl tracking-tight">Panel de Control</a>
            <div class="flex space-x-4">
                <a class="hover:bg-gray-800 px-3 py-2 rounded-md transition" href="{{ route('categorias.index') }}">Categorías</a>
                <a class="hover:bg-gray-800 px-3 py-2 rounded-md transition" href="{{ route('productos.index') }}">Productos</a> 
            </div>
        </div>
    </nav>
    @yield('content')

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Logrado!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#4f46e5', 
                timer: 3000,
                timerProgressBar: true
            });
        </script>
    @endif

    <script>
        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('btn-eliminar')) {
                e.preventDefault(); 
                const form = e.target.closest('form');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "Esta acción no se puede deshacer de ninguna manera.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc2626', 
                    cancelButtonColor: '#4f46e5',  
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar',
                    reverseButtons: true 
                    if (result.isConfirmed) {
                        form.submit(); 
                    }
                });
            }
        });
    </script>
</body>
</html>