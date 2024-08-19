<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movie = movies::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
            'movie_gener' => 'required',
        ]);
        movies::create($request->all());

        return redirect()->route('movies.index')
                        ->with('success', 'تم إضافة الفيلم بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movies $movies)
    {
        return view('movies.edit', compact('movie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movies $movies)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
            'movie_gener' => 'required',
        ]);
        $movies->update($request->all());

        return redirect()->route('movies.index')
            ->with('success', 'Movie updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movies $movies)
    {
        $movies->delete();

        return redirect()->route('movies.index')
                        ->with('success', 'تم حذف الفيلم بنجاح');
    }
}
