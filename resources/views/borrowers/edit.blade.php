@extends('layouts.app')

@section('content')
<h1>Edit Borrower</h1>
<form action="{{ route('borrowers.update', $borrower) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $borrower->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $borrower->email }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Book</label>
        <select name="book_id" class="form-control" required>
            @foreach($books as $book)
                <option value="{{ $book->id }}" {{ $book->id == $borrower->book_id ? 'selected' : '' }}>
                    {{ $book->title }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('borrowers.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
