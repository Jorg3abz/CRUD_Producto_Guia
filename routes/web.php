<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {   
if(session()->has('usuario_nombre')){
        return redirect('/productos');
    }
    return view('welcome');
});

Route::post('login', function (Request $request){
    $email = $request->input('email');
    $password = $request->input('password');
    if($email === 'admin@gmail.com' && $password === '123'){
        session(['usuario_nombre' => 'Administrador']);
        return redirect('/productos');
    }
    return redirect('/')->with('error','Credenciales invalidas. Intenta de nuevo.');
});

Route::get('/productos', function(){
    if(!session()->has('usuario_nombre')){
        return redirect('/')->with('error','Debes iniciar sesion primero par poder ingrasar');
    }
    return view('productos');
});

Route::get('/logout', function(){
    session()->forget('usuario_nombre');
    return redirect('/');
});