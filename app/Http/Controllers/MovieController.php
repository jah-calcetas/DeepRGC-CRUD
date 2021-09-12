<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {

        $movie = new Movie;
        $movie->title=$request->input('title');
        $movie->published=$request->input('published');
        $movie->synopsis=$request->input('synopsis');
        $movie->country=$request->input('country');
        $movie->save();
        
        return redirect('/movies');
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('movies.edit')->with('movie', $movie);
    }

    
    public function update(Request $request, $id)
    {
        $movie = Movie::where('id', $id)
        ->update([
            'title'=> $request->input('title'),
            'published'=> $request->input('published'),
            'synopsis'=> $request->input('synopsis'),
            'country'=> $request->input('country'),
            
        ]);
        return redirect('/movies');
    }

    
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies');
    }
}
