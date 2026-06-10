<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); 
        return view('productos.listar', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'nullable|max:255',
            'precio' => 'required|numeric',
        ]);

        Producto::create($request->all()); 

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }

    public function edit(int $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'nullable|max:255',
            'precio' => 'required|numeric',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all()); 
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy(int $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete(); 
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
    }
}