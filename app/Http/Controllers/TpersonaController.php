<?php

namespace App\Http\Controllers;

use App\Models\Tpersona;
use Illuminate\Http\Request;

/**
 * Class TpersonaController
 * @package App\Http\Controllers
 */
class TpersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpersonas = Tpersona::paginate();

        return view('tpersona.index', compact('tpersonas'))
            ->with('i', (request()->input('page', 1) - 1) * $tpersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tpersona = new Tpersona();
        return view('tpersona.create', compact('tpersona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tpersona::$rules);

        $tpersona = Tpersona::create($request->all());

        return redirect()->route('tpersonas.index')
            ->with('success', 'Tpersona created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tpersona = Tpersona::find($id);

        return view('tpersona.show', compact('tpersona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tpersona = Tpersona::find($id);

        return view('tpersona.edit', compact('tpersona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tpersona $tpersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpersona $tpersona)
    {
        request()->validate(Tpersona::$rules);

        $tpersona->update($request->all());

        return redirect()->route('tpersonas.index')
            ->with('success', 'Tpersona updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tpersona = Tpersona::find($id)->delete();

        return redirect()->route('tpersonas.index')
            ->with('success', 'Tpersona deleted successfully');
    }
}
