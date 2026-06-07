<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Secreto</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #fff; text-align: center; padding-top: 100px; }
        .dashboard { background: #064e3b; padding: 40px; display: inline-block; border-radius: 12px; border: 2px solid #10b981; }
        a { color: #f87171; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <div class="dashboard">
        <h1>SESION INICIADA, {{ session('usuario_nombre') }}</h1>
        <p>Has iniciado sesión correctamente.</p>
        <br>
        <a href="/logout">Cerrar Sesión</a>
    </div>

</body>
</html>