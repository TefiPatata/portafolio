<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use Illuminate\Http\Request;

/**
 * Class EjemploController
 * @package App\Http\Controllers
 */
class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejemplos = Ejemplo::paginate(10);

        return view('ejemplo.index', compact('ejemplos'))
            ->with('i', (request()->input('page', 1) - 1) * $ejemplos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ejemplo = new Ejemplo();
        return view('ejemplo.create', compact('ejemplo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ejemplo::$rules);

        $ejemplo = Ejemplo::create($request->all());

        return redirect()->route('ejemplos.index')
            ->with('success', 'Ejemplo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejemplo = Ejemplo::find($id);

        return view('ejemplo.show', compact('ejemplo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ejemplo = Ejemplo::find($id);

        return view('ejemplo.edit', compact('ejemplo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ejemplo $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplo $ejemplo)
    {
        request()->validate(Ejemplo::$rules);

        $ejemplo->update($request->all());

        return redirect()->route('ejemplos.index')
            ->with('success', 'Ejemplo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ejemplo = Ejemplo::find($id)->delete();

        return redirect()->route('ejemplos.index')
            ->with('success', 'Ejemplo deleted successfully');
    }
}
