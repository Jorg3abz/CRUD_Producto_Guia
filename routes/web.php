<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {   
    if(session()->has('usuario_nombre')){
        return redirect()->route('dashboard'); 
    }
    return view('welcome'); 
});

Route::post('login', function (Request $request){
    $email = $request->input('email');
    $password = $request->input('password');
    
    if($email === 'admin@gmail.com' && $password === '123'){
        session(['usuario_nombre' => 'Administrador']);
        return redirect()->route('dashboard'); 
    }
    return redirect('/')->with('error','Credenciales invalidas. Intenta de nuevo.');
});

Route::middleware(['web'])->group(function () {
    Route::group(['middleware' => function ($request, $next) {
        if(!session()->has('usuario_nombre')){
            return redirect('/')->with('error','Debes iniciar sesion primero para poder ingresar');
        }
        return $next($request);
        }], function(){
            
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            Route::resource('productos', ProductoController::class);
            Route::resource('categorias', CategoriaController::class);
        });
});

Route::get('/logout', function(){
    session()->forget('usuario_nombre');
    return redirect('/');
});