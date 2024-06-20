<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //todo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = new Books();
        return view('create', compact('Books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'author' => ['required', 'string', 'min:3'],
            'title' => ['required', 'string'],
            'subtitle' => ['nullable', 'string'],
            'edition' => ['required', 'interger'],
            'publishing_company' => ['required', 'string'],
            'year_of_publication' => ['required', 'year'],
            'book_cover' => ['required', 'image', 'mimes:jpg,jpeg,png,bmp,svg,webp'],
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //todo
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //todo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //todo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //todo
    }
}
