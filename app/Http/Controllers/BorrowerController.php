<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use App\Models\Book; 
use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    public function index()
    {
        $borrowers = Borrower::with('book')->get();
        return view('borrowers.index', compact('borrowers'));
    }

    public function create()
    {
        $books = Book::all();
        return view('borrowers.create', compact('books'));
    }

    public function store(Request $request)
    {
        Borrower::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:borrowers',
            'book_id' => 'required|exists:books,id'
        ]));
        return redirect()->route('borrowers.index');
    }

    public function edit(Borrower $borrower)
    {
        $books = Book::all();
        return view('borrowers.edit', compact('borrower', 'books'));
    }

    public function update(Request $request, Borrower $borrower)
    {
        $borrower->update($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:borrowers,email,' . $borrower->id,
            'book_id' => 'required|exists:books,id'
        ]));
        return redirect()->route('borrowers.index');
    }

    public function destroy(Borrower $borrower)
    {
        $borrower->delete();
        return redirect()->route('borrowers.index');
    }
}
