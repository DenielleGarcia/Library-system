<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <nav class="mb-4">
        <a href="{{ route('books.index') }}" class="btn btn-primary">Books</a>
        <a href="{{ route('borrowers.index') }}" class="btn btn-secondary">Borrowers</a>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
