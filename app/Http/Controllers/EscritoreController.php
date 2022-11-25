<?php

namespace App\Http\Controllers;

use App\Models\Escritore;
use Illuminate\Http\Request;

/**
 * Class EscritoreController
 * @package App\Http\Controllers
 */
class EscritoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escritores = Escritore::paginate();

        return view('escritore.index', compact('escritores'))
            ->with('i', (request()->input('page', 1) - 1) * $escritores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escritore = new Escritore();
        return view('escritore.create', compact('escritore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Escritore::$rules);

        $escritore = Escritore::create($request->all());

        return redirect()->route('escritores.index')
            ->with('success', 'Escritore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escritore = Escritore::find($id);

        return view('escritore.show', compact('escritore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escritore = Escritore::find($id);

        return view('escritore.edit', compact('escritore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Escritore $escritore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escritore $escritore)
    {
        request()->validate(Escritore::$rules);

        $escritore->update($request->all());

        return redirect()->route('escritores.index')
            ->with('success', 'Escritore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $escritore = Escritore::find($id)->delete();

        return redirect()->route('escritores.index')
            ->with('success', 'Escritore deleted successfully');
    }
}
