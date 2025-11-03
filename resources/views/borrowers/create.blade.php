@extends('layouts.app')

@section('content')
<h1>Add Borrower</h1>
<form action="{{ route('borrowers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Book</label>
        <select name="book_id" class="form-control" required>
            @foreach($books as $book)
                <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('borrowers.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
