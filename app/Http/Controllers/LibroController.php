<?php

namespace App\Http\Controllers;

use App\Models\Libro;

use App\Models\Editoriale;
use Illuminate\Http\Request;

/**
 * Class LibroController
 * @package App\Http\Controllers
 */
class LibroController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-libro|crear-libro|editar-libro|borrar-libro', ['only' => ['index']]);
         $this->middleware('permission:crear-libro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-libro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-libro', ['only' => ['destroy']]);
         $this->middleware('permission:ver-libro', ['only' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::paginate();

        return view('libro.index', compact('libros'))
            ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro = new Libro();
        
        $editoriales=Editoriale::pluck('nom_editorial','id');

        return view('libro.create', compact('libro','editoriales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Libro::$rules);

        $libro = Libro::firstOrCreate($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro creado éxitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::find($id);

        return view('libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
       
        $editoriales=Editoriale::pluck('nom_editorial','id');
        return view('libro.edit', compact('libro','editoriales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Libro $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        request()->validate(Libro::$rules);

        $libro->update($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro actuzalizado éxitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libro = Libro::find($id)->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado éxitosamente');
    }
}
