<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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

        $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:5|max:1000',
            'thumb' => 'required|min:5|max:512',
            'price' => 'required',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required',
            'type' => 'required|min:5|max:50',
            'artists' => 'required',
            'writers' => 'required',
        ]);


        // $data = $request->validated();

        $comic = new Comic();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];

        $comic->fill($data);

        $comic->save();

        // $comic->save();
        // return redirect()->route('comics.show', $comic->id);
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    // public function show(Comic $comics)
    {

        $comics = Comic::find($id);
        // dd($comic);

        if ($comics === null) {

            return redirect()->route('home');
        }
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request, Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        $data = $request->all();

        $comic->update($data);

        // $comic->title = $data['title'];



        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];
        // $comic->save();

        return redirect()->route('comics.show', $comic->id);


        // dd($data, $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
        // dd('$comic');
    }
}
