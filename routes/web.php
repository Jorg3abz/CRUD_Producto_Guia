<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {   
if(session()->has('usuario_nombre')){
        return redirect('/dashboard');
    }
    return view('welcome');
});

Route::post('login', function (Request $request){
    $email = $request->input('email');
    $password = $request->input('password');
    if($email === 'admin' && $password === 'admin123'){
        session(['usuario' => 'Administrador']);
        return redirect('/dashboard');
    }
    return redirect('/')->with('error','Credenciales invalidas. Intenta de nuevo.');
});

Route::get('/dashboard', function(){
    if(!session()->has('usuario_nombre')){
        return redirect('/')->with('error','Debes iniciar sesion primero par poder ingrasar');
    }
    return view('dashboard');
});

Route::get('/logout', function(){
    session()->forget('usuario_nombre');
    return redirect('/');
});