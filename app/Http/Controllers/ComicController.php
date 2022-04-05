<?php

namespace App\Http\Controllers;
use App\Comics;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $newComic = new Comics;

        //$newComic->title = $data['title'];
        //$newComic->price = $data['price'];
        //$newComic->series = $data['series'];
        //$newComic->save();

        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id])->with('status', 'Fumetto aggiunto!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comics::find($id);

        if ($comic) {
          return view('comic.show', compact('comic'));
        } else {
            abort(404);
        }
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comics::find($id);

        if ($comic) {
            return view('comic.edit', compact('comic'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {
        $data = $request->all();

        $comic->title = $data['title'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        
        $comic->save();

        return redirect()->route('pasta.show',['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('status', 'Fumetto cancellato!');
    }
}
