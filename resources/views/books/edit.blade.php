@extends('layouts.app')

@section('content')
<h1>Edit Book</h1>
<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Copies</label>
        <input type="number" name="copies" value="{{ $book->copies }}" class="form-control" min="1" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
