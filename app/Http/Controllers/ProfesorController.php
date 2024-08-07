<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    //LISTAR
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }


    //CREAR
    public function create()
    {
        return view('profesores.create');
    }


    //ALMACENAR INFORMACION EN LA BASE DE DATOS
    public function store(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:profesors,email',
        ]);
        // Crear un nuevo profesor
        Profesor::create($validatedData);
        // Redirigir a la lista de profesores con un mensaje de éxito
        return redirect()->route('profesores.index')->with('success', 'Profesor agregado correctamente.');
    }


    //MOSTRAR INFORMACION ESPECIFICA
    public function show(string $id)
    {
        //
    }


    //EDITAR
    public function edit($id)
    {
        $profesor = Profesor::find($id);
        if (!$profesor) {
            return redirect()->route('profesores.index')->with('error', 'Profesor no encontrado.');
        }
        return view('profesores.edit', compact('profesor'));
    }


    //ACTUALIZAR
    public function update(Request $request, $id)
    {
        // Validar la entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        // Encontrar el profesor
        $profesor = Profesor::find($id);
        if (!$profesor) {
            return redirect()->route('profesores.index')->with('error', 'Profesor no encontrado.');
        }
        // Actualizar los datos
        $profesor->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'email' => $request->input('email'),
        ]);
        // Redirigir con éxito
        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado con éxito.');
    }


    //ELIMINAR
    public function destroy($id)
    {
        // Encontrar el profesor
        $profesor = Profesor::find($id);
        if (!$profesor) {
            return redirect()->route('profesores.index')->with('error', 'Profesor no encontrado.');
        }
        // Eliminar el profesor
        $profesor->delete();
        // Redirigir con éxito
        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado con éxito.');
    }
}
