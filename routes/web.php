<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {   
    if(session()->has('usuario_nombre')){
        return redirect()->route('productos.index');
    }
    return view('welcome');
});

Route::post('login', function (Request $request){
    $email = $request->input('email');
    $password = $request->input('password');
    if($email === 'admin@gmail.com' && $password === '123'){
        session(['usuario_nombre' => 'Administrador']);
        return redirect()->route('productos.index');
    }
    return redirect('/')->with('error','Credenciales invalidas. Intenta de nuevo.');
});

//rutas para el CRUD
Route::middleware(['web'])->group(function () {
    Route::group(['middleware' => function ($request, $next) {
        if(!session()->has('usuario_nombre')){
            return redirect('/')->with('error','Debes iniciar sesion primero para poder ingresar');
        }
        return $next($request);
        }], function(){
            Route::resource('productos', ProductoController::class);
    });
});

Route::get('/logout', function(){
    session()->forget('usuario_nombre');
    return redirect('/');
});