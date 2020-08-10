<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('books.index');
    }

    public function show($id) {
        return view('books.show', ['id' => $id]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        // const $book = new Book;
        // $book->title = $request->input('title');
        // $book->price = $request->input('price');
        // $book->save();
        return redirect('/books');
    }

    public function edit($id) {
        return view('books.edit', ['id' => $id]);
    }

    public function update() {}

    public function destroy() {}
}
