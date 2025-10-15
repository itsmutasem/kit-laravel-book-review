<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(5);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();
        Book::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('books.index')->with('create', 'Book created successfully!');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        if ($book->user_id == auth()->id() || auth()->user()->role == 'admin') {
            return view('books.edit', compact('book'));
        }
        abort(403, 'Unauthorized action.');
    }

    public function update(BookRequest $request, string $id)
    {
        $validated = $request->validated();
        $book = Book::findOrFail($id);
        $book->update($validated);
        return redirect()->route('books.index')->with('update', 'Book updated successfully!');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index')->with('delete', 'Book deleted successfully!');
    }
}
