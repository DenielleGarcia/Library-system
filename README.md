## LIBRARY SYSTEM MIDTERM

## Description / Overview
This project is a **Library Management System** built using Laravel. It allows users to manage books, borrowers, 
and borrowing transactions efficiently in a web-based interface.

## Objectives
- Learn and apply Laravel framework fundamentals.
- Implement CRUD operations for books and borrowers.
- Manage relationships between books and borrowers.
- Create a responsive and user-friendly web interface.
- Understand and practice version control with Git.

## Features / Functionality
- Add, edit, and delete books.
- Register and manage borrowers.
- Track book borrow and return transactions.
- Search and filter books and borrowers.
- User authentication (login/signup).

## Installation Instructions
1. Clone the repository:
   ```bash
   git clone <https://github.com/janricmadayag/DGarcia-JMadayag.git>
   
## Navigate to the project folder:
   cd library-system

   ## Install dependencies using Composer:
   composer install

   ## Copy .env.example to .env and configure database credentials:
   cp .env.example .env

   ## Generate application key:
   php artisan key:generate

   ## Run database migrations:
   php artisan migrate

   ## Start the development server:
   php artisan serve

   ## Usage
   - Open the browser and navigate to http://127.0.0.1:8000.
   - Register a new user or log in with existing credentials.
   - Manage books and borrowers using the dashboard interface.
   - Track borrowing and returning of books easily.

   ## Screenshots/ Code Snippets
   Routes Example (routes/web.php)
   use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('borrowers', BorrowerController::class);

 ## Controller Example (app/Http/Controllers/BookController.php)
    namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }
}

 ## Blade Template Example (resources/views/books/index.blade.php)
    @extends('layouts.app')

@section('content')
<h1>Books List</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Actions</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>
            <a href="{{ route('books.edit', $book->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection

## Folder Structure
<details> <summary>Click to expand</summary>
    library-system/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── BookController.php
│   │       └── BorrowerController.php
│   └── Models/
│       ├── Book.php
│       └── Borrower.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── index.php
├── resources/
│   ├── views/
│   │   ├── books/
│   │   │   └── index.blade.php
│   │   └── borrowers/
│   └── css/
├── routes/
│   └── web.php
├── .env
└── composer.json
</details>

## Contributors

    Garcia, Denielle Gerlad A.
    Partner's Name (Madayag, Janric)

## License
    
    This project is licensed under the MIT License.
    
---

✅ **What’s important for GitHub visibility:**
1. Make sure the file is named exactly `README.md` (all caps) in the **root folder** of your repository.
2. Commit and push your changes to the branch:

```bash
git add README.md
git commit -m "Add full README with screenshots, code snippets, and folder structure"
git push








