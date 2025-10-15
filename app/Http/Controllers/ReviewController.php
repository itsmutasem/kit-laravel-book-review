<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Reviews::where('user_id', auth()->id())->latest()->paginate(5);
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string|max:300'
        ]);
        Reviews::create([
            'content' => $data['content'],
            'book_id' => $request['book_id'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('books.show', $request['book_id'])->with('create', 'Review added successfully!');
    }

    public function destroy(Request $request, string $id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();
        return redirect()->route('books.show', $request['book_id'])->with('delete', 'Review deleted successfully!');
    }
}
