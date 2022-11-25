<?php

namespace App\Http\Controllers;

use App\Models\Dlibro;
use App\Models\Escritore;
use App\Models\Libro;
use Illuminate\Http\Request;

/**
 * Class DlibroController
 * @package App\Http\Controllers
 */
class DlibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dlibros = Dlibro::paginate();

        return view('dlibro.index', compact('dlibros'))
            ->with('i', (request()->input('page', 1) - 1) * $dlibros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dlibro = new Dlibro();
        $libros = Libro ::pluck('nom_libro','id');
        $escritores = Escritore::pluck('nombre','id');
        return view('dlibro.create', compact('dlibro','escritores','libros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dlibro::$rules);

        $dlibro = Dlibro::create($request->all());

        return redirect()->route('dlibros.index')
            ->with('success', 'Dlibro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dlibro = Dlibro::find($id);

        return view('dlibro.show', compact('dlibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dlibro = Dlibro::find($id);
        $libros = Libro ::pluck('nom_libro','id');
        $escritores = Escritore::pluck('nombre','id');
        return view('dlibro.edit', compact('dlibro','escritores','libros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dlibro $dlibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dlibro $dlibro)
    {
        request()->validate(Dlibro::$rules);

        $dlibro->update($request->all());

        return redirect()->route('dlibros.index')
            ->with('success', 'Dlibro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dlibro = Dlibro::find($id)->delete();

        return redirect()->route('dlibros.index')
            ->with('success', 'Dlibro deleted successfully');
    }
}
