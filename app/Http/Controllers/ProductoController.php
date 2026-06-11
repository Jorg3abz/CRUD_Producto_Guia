<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get(); 
        return view('productos.listar', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'nullable|max:255',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ]);
        Producto::create($request->all()); 
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }

    public function edit(int $id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'nullable|max:255',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
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