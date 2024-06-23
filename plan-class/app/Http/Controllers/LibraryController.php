<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LibraryController extends Controller
{

    private $objUsers;
    private $objBooks;

    public function __construct(){
        $this->objUsers = new User;
        $this->objBooks = new Book;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = $this->objBooks->where('user_id', Auth::user()->id)->get();
        return view('dashboard', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'author' => ['required', 'string', 'min:3'],
            'title' => ['required', 'string'],
            'subtitle' => ['required', 'string'],
            'edition' => ['required', 'integer'],
            'publishing_company' => ['required', 'string'],
            'year_of_publication' => ['required', 'year'],
            'book_cover' => ['nullable', 'image', 'mimes:jpg,jpeg,png,bmp,svg,webp'],
        ]);

        $book = Book::create([
            'user_id' => Auth::user()->id,
            'author' => $request->author,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'edition' => $request->edition,
            'publishing_company' => $request->publishing_company,
            'year_of_publication' => $request->year_of_publication,
            'book_cover' => $request->book_cover,
        ]);

        $user = auth()->user();
        return redirect()->route('livros');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('biblioteca.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Validator::make($request->all(), [
            'author' => ['required', 'string', 'min:3'],
            'title' => ['required', 'string'],
            'subtitle' => ['required', 'string'],
            'edition' => ['required', 'integer'],
            'publishing_company' => ['required', 'string'],
            'year_of_publication' => ['required', 'year'],
            'book_cover' => ['nullable', 'image', 'mimes:jpg,jpeg,png,bmp,svg,webp'],
        ]);

        $book = Book::where('id', $id)->update([
            'author' => $request->author,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'edition' => $request->edition,
            'publishing_company' => $request->publishing_company,
            'year_of_publication' => $request->year_of_publication,
            'book_cover' => $request->book_cover,
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::where('id', $id)->delete();
        return redirect()->route('dashboard');
    }
}
