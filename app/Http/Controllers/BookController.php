<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(Request $request) {
        $search = $request->query('search');
        $books = Book::where('title', 'LIKE', '%'.$search.'%')->get();
        return view('books.index', ['books' => $books, 'search' => $search]);
    }

    public function show($id) {
        return view('books.show', ['id' => $id]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $book = new Book;
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->save();
        return redirect('/books');
    }

    // MVC = Model (Database - migration) - View - Controller

    public function edit($id) {
        return view('books.edit', ['id' => $id]);
    }

    public function update() {}

    public function destroy() {}
}
