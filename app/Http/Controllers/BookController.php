<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->simplePaginate(10);

        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'author' => 'required'
        ]);

        $book = Book::create($input);

        return redirect()
            ->route('books.index')
            ->with('success', "$book->name has been added successfully");
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $input = $request->validate([
            'name' => 'required',
            'author' => 'required'
        ]);

        $book = $book->update($input);

        return redirect()
            ->route('books.index')
            ->with('info', "Book has been updated successfully");
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('error', 'Book has been deleted successfully');
    }
}
