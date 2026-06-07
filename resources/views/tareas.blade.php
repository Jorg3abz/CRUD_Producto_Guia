<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Tareas del Día 1</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #e2e8f0; padding-top: 50px; text-align: center; }
        .container { background: #1e293b; max-width: 450px; margin: 0 auto; padding: 30px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.4); }
        h1 { color: #38bdf8; margin-bottom: 20px; }
        input[type="text"] { width: 70%; padding: 10px; border: 1px solid #475569; background: #0f172a; color: white; border-radius: 6px; }
        button { padding: 10px 15px; background: #38bdf8; color: #0f172a; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
        button:hover { background: #0ea5e9; }
        ul { list-style: none; padding: 0; text-align: left; margin-top: 20px; }
        li { background: #334155; padding: 12px; margin-bottom: 8px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center; }
        .btn-borrar { color: #f87171; text-decoration: none; font-size: 0.9rem; font-weight: bold; }
        .btn-borrar:hover { color: #ef4444; }
        .vacio { color: #94a3b8; font-style: italic; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tareas Pendientes</h1>

        <form action="/tareas-agregar" method="POST">
            @csrf
            <input type="text" name="nueva_tarea" placeholder="Ej: Estudiar migraciones mañana" required>
            <button type="submit">Agregar</button>
        </form>

        <ul>
            @if(session()has('lista_tareas') && count(session('lista_tareas')) > 0)
                @foreach(session('lista_tareas') as $indice => $tarea)
                    <li>
                        <span>{{ $tarea }}</span>
                        <a href="/tareas-borrar/{{ $indice }}" class="btn-borrar"> Eliminar</a>
                    </li>
                @endforeach
            @else
                <p class="vacio">No hay tareas pendientes. ¡Buen trabajo!</p>
            @endif
        </ul>

        <hr style="border-color: #334155; margin: 20px 0;">
        <a href="/tareas-limpiar" style="color: #94a3b8; text-decoration: none; font-size: 0.9rem;">🧹 Vaciar toda la lista</a>
    </div>

</body>
</html>