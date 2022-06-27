<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Serie;
use App\Models\Writer;
use Carbon\Carbon;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Serie::all();
        $writers = Writer::all();
        return view('admin.comics.create', compact('series', 'writers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Visualizza la richiesta
       //dd($request->all());

        // Validare i dati inseriti dall'utente
        $val_data = $request->validate([
            'title' => 'required|min:3|max:200',
            'thumb' => 'nullable',
            'description' => 'nullable',
            'price' => 'nullable',
            'serie_id' => 'nullable|exists:series,id',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:50',
            'writers' => 'nullable|exists:writers,id'
        ]);
        // Salviamo i dati nel db
        //$data = $request->all();
        $comic = Comic::create($val_data);
        $comic->writers()->attach($request->writers);
        return redirect()->route('admin.comics.index')->with('message', 'Comic Creted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $series = Serie::all();
        return view('admin.comics.edit', compact('comic', 'series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $val_data = $request->validate([
            'title' => 'required|min:3|max:200',
            'thumb' => 'nullable',
            'description' => 'nullable',
            'price' => 'nullable',
            'serie_id' => 'nullable|exists:series,id',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:50',
            'writers' => 'nullable|exists:writers,id'
        ]);
        // Salviamo i dati nel db
        //$data = $request->all();
        $comic->update($val_data);
        $comic->writers()->sync($request->writers);

        return redirect()->route('admin.comics.index')->with('message', 'Comic Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index')->with('message', 'Comic Deleted');
    }
}
