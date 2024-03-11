<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function guardarReceta(Request $request)
    {
        try {
            // Validación
            $request->validate([
                'nombre' => 'required',
                'ingredientes' => 'required',
                'tiempo' => 'required',
                'utensilios' => 'required',
                'descripcion' => 'required',
            ]);

            // Crear un nueva receta
            $recetaNew = new Receta;
            $recetaNew->nombre = $request->nombre;
            $recetaNew->ingredientes = $request->ingredientes;
            $recetaNew->tiempo = $request->tiempo;
            $recetaNew->utensilios = $request->utensilios;
            $recetaNew->descripcion = $request->descripcion;

            // Guardar la receta
            $recetaNew->save();

            return redirect()->route('dashboard')->with('success', 'Product added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding product: ' . $e->getMessage());
        }
    }

    public function mostrar()
    {
        $recetas = Receta::all();
        return view('dashboard', compact('recetas'));
    }
}
