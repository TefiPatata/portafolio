<?php

namespace App\Http\Controllers;

use App\Models\Socialnetwork;
use Illuminate\Http\Request;

/**
 * Class SocialnetworkController
 * @package App\Http\Controllers
 */
class SocialnetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialnetworks = Socialnetwork::paginate(10);

        return view('socialnetwork.index', compact('socialnetworks'))
            ->with('i', (request()->input('page', 1) - 1) * $socialnetworks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socialnetwork = new Socialnetwork();
        return view('socialnetwork.create', compact('socialnetwork'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Socialnetwork::$rules);

        $socialnetwork = Socialnetwork::create($request->all());

        return redirect()->route('socialnetworks.index')
            ->with('success', 'Socialnetwork created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socialnetwork = Socialnetwork::find($id);

        return view('socialnetwork.show', compact('socialnetwork'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socialnetwork = Socialnetwork::find($id);

        return view('socialnetwork.edit', compact('socialnetwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Socialnetwork $socialnetwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socialnetwork $socialnetwork)
    {
        request()->validate(Socialnetwork::$rules);

        $socialnetwork->update($request->all());

        return redirect()->route('socialnetworks.index')
            ->with('success', 'Socialnetwork updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $socialnetwork = Socialnetwork::find($id)->delete();

        return redirect()->route('socialnetworks.index')
            ->with('success', 'Socialnetwork deleted successfully');
    }
}
