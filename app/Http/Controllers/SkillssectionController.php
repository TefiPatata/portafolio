<?php

namespace App\Http\Controllers;

use App\Models\Skillssection;
use Illuminate\Http\Request;

/**
 * Class SkillssectionController
 * @package App\Http\Controllers
 */
class SkillssectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillssections = Skillssection::paginate(10);

        return view('skillssection.index', compact('skillssections'))
            ->with('i', (request()->input('page', 1) - 1) * $skillssections->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skillssection = new Skillssection();
        return view('skillssection.create', compact('skillssection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Skillssection::$rules);

        $skillssection = Skillssection::create($request->all());

        return redirect()->route('skillssections.index')
            ->with('success', 'Skillssection created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skillssection = Skillssection::find($id);

        return view('skillssection.show', compact('skillssection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skillssection = Skillssection::find($id);

        return view('skillssection.edit', compact('skillssection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Skillssection $skillssection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skillssection $skillssection)
    {
        request()->validate(Skillssection::$rules);

        $skillssection->update($request->all());

        return redirect()->route('skillssections.index')
            ->with('success', 'Skillssection updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $skillssection = Skillssection::find($id)->delete();

        return redirect()->route('skillssections.index')
            ->with('success', 'Skillssection deleted successfully');
    }
}
