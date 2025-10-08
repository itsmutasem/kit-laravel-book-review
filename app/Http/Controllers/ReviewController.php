<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('reviews.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string|max:300'
        ]);
        Reviews::create([
            'content' => $data['content'],
            'book_id' => $request['book_id'],
            'author' => 'Yazeed',
        ]);

        return redirect()->route('books.show', $request['book_id'])->with('create', 'Review added successfully!');
    }
}
