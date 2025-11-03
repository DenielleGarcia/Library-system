@extends('layouts.app')

@section('content')
<h1>Borrowers</h1>
<a href="{{ route('borrowers.create') }}" class="btn btn-success mb-2">Add Borrower</a>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Borrowed Book</th>
        <th>Actions</th>
    </tr>
    @foreach($borrowers as $borrower)
    <tr>
        <td>{{ $borrower->name }}</td>
        <td>{{ $borrower->email }}</td>
        <td>{{ $borrower->book->title }}</td>
        <td>
            <a href="{{ route('borrowers.edit', $borrower) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('borrowers.destroy', $borrower) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
