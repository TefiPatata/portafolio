<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use Illuminate\Http\Request;

/**
 * Class AboutmeController
 * @package App\Http\Controllers
 */
class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutmes = Aboutme::paginate(10);

        return view('aboutme.index', compact('aboutmes'))
            ->with('i', (request()->input('page', 1) - 1) * $aboutmes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aboutme = new Aboutme();
        return view('aboutme.create', compact('aboutme'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aboutme::$rules);

        $aboutme = Aboutme::create($request->all());

        return redirect()->route('aboutmes.index')
            ->with('success', 'Aboutme created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutme = Aboutme::find($id);

        return view('aboutme.show', compact('aboutme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutme = Aboutme::find($id);

        return view('aboutme.edit', compact('aboutme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aboutme $aboutme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutme $aboutme)
    {
        request()->validate(Aboutme::$rules);

        $aboutme->update($request->all());

        return redirect()->route('aboutmes.index')
            ->with('success', 'Aboutme updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aboutme = Aboutme::find($id)->delete();

        return redirect()->route('aboutmes.index')
            ->with('success', 'Aboutme deleted successfully');
    }
}
