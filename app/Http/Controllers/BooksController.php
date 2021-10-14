<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('main', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();
        return view('books.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'author' => 'required|min:5|max:100',
            'name' => 'required',
            'shot_description' => 'required|max:1000',
            'create' => 'required|date_format:Y-m-d',
            'picture' => 'required',
        ]);

        $book = new Book();
        $book->author = request('author');
        $book->name = request('name');
        $book->shot_description = request('shot_description');
        $book->create = request('create');
        $book->picture = request('picture');

        $book->save();
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  /books/{id}
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  /books/{id}
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->first();
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @param  /books/{id}
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $attributes = request()->validate([
            'author' => 'required|min:5|max:100',
            'name' => 'required',
            'shot_description' => 'required|max:1000',
            'create' => 'required|date_format:Y-m-d',
            'picture' => 'required',
        ]);

        $book = Book::where('id', $id)->first();
        $book->update($attributes);
        $book->save();
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  /books/{id}
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id', $id)->first();
        $book->delete();
        return redirect('/books');
    }
}
