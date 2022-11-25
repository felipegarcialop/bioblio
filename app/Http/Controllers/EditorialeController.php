<?php

namespace App\Http\Controllers;

use App\Models\Editoriale;
use Illuminate\Http\Request;

/**
 * Class EditorialeController
 * @package App\Http\Controllers
 */
class EditorialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = Editoriale::paginate();

        return view('editoriale.index', compact('editoriales'))
            ->with('i', (request()->input('page', 1) - 1) * $editoriales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editoriale = new Editoriale();
        return view('editoriale.create', compact('editoriale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Editoriale::$rules);

        $editoriale = Editoriale::create($request->all());

        return redirect()->route('editoriales.index')
            ->with('success', 'Editoriale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editoriale = Editoriale::find($id);

        return view('editoriale.show', compact('editoriale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editoriale = Editoriale::find($id);

        return view('editoriale.edit', compact('editoriale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Editoriale $editoriale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editoriale $editoriale)
    {
        request()->validate(Editoriale::$rules);

        $editoriale->update($request->all());

        return redirect()->route('editoriales.index')
            ->with('success', 'Editoriale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $editoriale = Editoriale::find($id)->delete();

        return redirect()->route('editoriales.index')
            ->with('success', 'Editoriale deleted successfully');
    }
}
