<?php

namespace App\Http\Controllers;

use App\Models\Clasificacione;
use Illuminate\Http\Request;

/**
 * Class ClasificacioneController
 * @package App\Http\Controllers
 */
class ClasificacioneController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-clasificacion|crear-clasificacion|editar-clasificaion', ['only' => ['index']]);
         $this->middleware('permission:crear-clasificacion', ['only' => ['create','store']]);
         $this->middleware('permission:editar-clasificaion', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-clasificacion', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $clasificaciones = Clasificacione::paginate();

        return view('clasificacione.index', compact('clasificaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $clasificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clasificacione = new Clasificacione();
        return view('clasificacione.create', compact('clasificacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clasificacione::$rules);

        $clasificacione = Clasificacione::create($request->all());

        return redirect()->route('clasificaciones.index')
            ->with('success', 'La clasificación fue creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clasificacione = Clasificacione::find($id);

        return view('clasificacione.show', compact('clasificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clasificacione = Clasificacione::find($id);

        return view('clasificacione.edit', compact('clasificacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clasificacione $clasificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasificacione $clasificacione)
    {
        request()->validate(Clasificacione::$rules);

        $clasificacione->update($request->all());

        return redirect()->route('clasificaciones.index')
            ->with('success', 'La clasificación ha sido editada con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clasificacione = Clasificacione::find($id)->delete();

        return redirect()->route('clasificaciones.index')
            ->with('success', 'Clasificación eliminada con éxito');
    }
}
