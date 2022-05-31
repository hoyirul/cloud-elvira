<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Books';
        $books = Book::with('author')
                    ->with('publisher')
                    ->with('genre')
                    ->get();
        return view('admin.books.index', compact('books', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Books';
        $authors = Author::all();
        $publishers = Publisher::all();
        $genres = Genre::all();
        return view('admin.books.create', [
            'title' => $title,
            'authors' => $authors,
            'publishers' => $publishers,
            'genres' => $genres,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'publisher_id' => 'required',
            'gender_id' => 'required',
            'title' => 'required|string|max:255',
            'publish_date' => 'required',
            'book_pages' => 'required',
            'description' => 'required|string',
            'rating' => 'required',
            'price' => 'required',
            'cover_image' => 'required',
        ]);

        Book::create([
            'book' => $request->book
        ]);
        
        return redirect('/u/book')->with('success', "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Books';
        $books = Book::where('id', $id)->first();
        return view('admin.books.show', compact('title', 'books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Books';
        $books = Book::where('id', $id)->first();
        return view('admin.books.edit', compact('title', 'books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'genre' => 'required'
        ]);

        Book::where('id', $id)->update([
            'genre' => $request->genre
        ]);
        
        return redirect('/u/book')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect('/u/book')->with('success', "Data berhasil dihapus");
    }
}
