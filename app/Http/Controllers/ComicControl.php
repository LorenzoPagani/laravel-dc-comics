<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicControl extends Controller
{
    public function validation($data)
    {
        $validated = Validator::make($data, [
            'title' => 'required|max:100',
            'description' => 'required|max:355',
            'thumb' => 'required|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',

        ])->validate();
        return $validated;
    }


    public function index()
    {
        $comics = Comic::all();
        return view('comics.comics', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $data = $request->all();
        $validated_data = $this->validation($data);

        $comic = new comic();
        $comic->fill($validated_data);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $validated_data = $this->validation($data);
        $comic->update($validated_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
