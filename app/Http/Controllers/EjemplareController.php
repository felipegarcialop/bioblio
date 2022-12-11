<?php

namespace App\Http\Controllers;

use App\Models\Ejemplare;
use App\Models\Libro;
use Illuminate\Http\Request;

/**
 * Class EjemplareController
 * @package App\Http\Controllers
 */
class EjemplareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejemplares = Ejemplare::paginate();

        return view('ejemplare.index', compact('ejemplares'))
            ->with('i', (request()->input('page', 1) - 1) * $ejemplares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ejemplare = new Ejemplare();
        $libros=Libro::pluck('nom_libro','id');
        return view('ejemplare.create', compact('ejemplare','libros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ejemplare::$rules);

        $ejemplare = Ejemplare::create($request->all());

        return redirect()->route('ejemplares.index')
            ->with('success', 'Ejemplare created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejemplare = Ejemplare::find($id);

        return view('ejemplare.show', compact('ejemplare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ejemplare = Ejemplare::find($id);

        return view('ejemplare.edit', compact('ejemplare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ejemplare $ejemplare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplare $ejemplare)
    {
        request()->validate(Ejemplare::$rules);

        $ejemplare->update($request->all());

        return redirect()->route('ejemplares.index')
            ->with('success', 'Ejemplare updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ejemplare = Ejemplare::find($id)->delete();

        return redirect()->route('ejemplares.index')
            ->with('success', 'Ejemplare deleted successfully');
    }
}
