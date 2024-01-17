<?php

namespace App\Http\Controllers;

use App\Models\Profileinfo;
use Illuminate\Http\Request;

/**
 * Class ProfileinfoController
 * @package App\Http\Controllers
 */
class ProfileinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileinfos = Profileinfo::paginate(10);

        return view('profileinfo.index', compact('profileinfos'))
            ->with('i', (request()->input('page', 1) - 1) * $profileinfos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profileinfo = new Profileinfo();
        return view('profileinfo.create', compact('profileinfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Profileinfo::$rules);

        $profileinfo = Profileinfo::create($request->all());

        return redirect()->route('profileinfos.index')
            ->with('success', 'Profileinfo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profileinfo = Profileinfo::find($id);

        return view('profileinfo.show', compact('profileinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profileinfo = Profileinfo::find($id);

        return view('profileinfo.edit', compact('profileinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Profileinfo $profileinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profileinfo $profileinfo)
    {
        request()->validate(Profileinfo::$rules);

        $profileinfo->update($request->all());

        return redirect()->route('profileinfos.index')
            ->with('success', 'Profileinfo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $profileinfo = Profileinfo::find($id)->delete();

        return redirect()->route('profileinfos.index')
            ->with('success', 'Profileinfo deleted successfully');
    }
}
