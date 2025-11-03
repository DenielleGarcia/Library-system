@extends('layouts.app')

@section('content')
<h1>Add Book</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Copies</label>
        <input type="number" name="copies" class="form-control" min="1" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
