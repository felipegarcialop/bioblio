<?php

namespace App\Http\Controllers;

use App\Models\Dclasificacione;
use App\Models\Clasificacione;
use App\Models\Libro;
use Illuminate\Http\Request;

/**
 * Class DclasificacioneController
 * @package App\Http\Controllers
 */
class DclasificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dclasificaciones = Dclasificacione::paginate();
        
        return view('dclasificacione.index', compact('dclasificaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $dclasificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dclasificacione = new Dclasificacione();
        $libros = Libro::pluck('nom_libro','id');
        $clasificaciones = Clasificacione::pluck('desc_clasificacion','id');

        return view('dclasificacione.create', compact('dclasificacione','libros','clasificaciones'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dclasificacione::$rules);

        $dclasificacione = Dclasificacione::create($request->all());

        return redirect()->route('dclasificaciones.index')
            ->with('success', 'Dclasificacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dclasificacione = Dclasificacione::find($id);

        return view('dclasificacione.show', compact('dclasificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dclasificacione = Dclasificacione::find($id);
        $libros = Libro::pluck('nom_libro','id');
        $clasificaciones = Clasificacione::pluck('desc_clasificacion','id');
        return view('dclasificacione.edit', compact('dclasificacione','libros','clasificaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dclasificacione $dclasificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dclasificacione $dclasificacione)
    {
        request()->validate(Dclasificacione::$rules);

        $dclasificacione->update($request->all());

        return redirect()->route('dclasificaciones.index')
            ->with('success', 'Dclasificacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dclasificacione = Dclasificacione::find($id)->delete();

        return redirect()->route('dclasificaciones.index')
            ->with('success', 'Dclasificacione deleted successfully');
    }
}
