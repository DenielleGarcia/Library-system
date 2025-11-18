# 📚 Library Management System — Midterm Project

## 🧠 About the Project
This project was created as part of the **Midterm Examination**.  
It is a **Laravel-based Library Management System** designed to demonstrate CRUD functionality — *Create, Read, Update, Delete* — specifically for managing library resources.

The system allows users to manage **books**, **borrowers**, and **transactions**, ensuring an efficient way to track library assets using a MySQL database.

---

## 🎯 Objectives
- Learn and apply **Laravel framework** fundamentals.
- Implement **CRUD operations** for books and borrowers.
- Manage **Eloquent relationships** between books and borrowers.
- Create a **responsive and user-friendly** web interface using Blade.
- Understand and practice **version control with Git**.

---

## ⚙️ Features / Functionality
- ➕ **Add/Manage Books** — Add, edit, and delete book records.
- 👥 **Manage Borrowers** — Register and update borrower details.
- 🔄 **Transactions** — Track book borrowing and returning activities.
- 🔍 **Search & Filter** — Easily locate books and borrowers.
- 🔐 **Authentication** — Secure user login and signup functionality.

---

## 🧰 Technologies Used

| Technology | Description |
|-------------|-------------|
| **Laravel** | PHP framework for MVC structure |
| **PHP 8.x** | Backend scripting language |
| **MySQL** | Relational database for data storage |
| **Blade** | Laravel’s templating engine |
| **Composer** | PHP dependency manager |
| **Git/GitHub** | Version control |

---

## 💻 Installation Instructions

Follow these steps to set up and run the project locally:

```bash
# 1️⃣ Clone the repository
git clone [https://github.com/DenielleGarcia/Library-system.git](https://github.com/DenielleGarcia/Library-system.git)

# 2️⃣ Navigate into the project directory
cd library-system

# 3️⃣ Install dependencies
composer install

# 4️⃣ Copy the example environment file
cp .env.example .env

# 5️⃣ Configure your database credentials in the .env file

# 6️⃣ Generate an application key
php artisan key:generate

# 7️⃣ Run database migrations
php artisan migrate

# 8️⃣ Start the development server
php artisan serve


## 🚀 Usage
- Open your browser and navigate to http://127.0.0.1:8000.

- Register a new user account or log in with existing credentials.

- Use the dashboard to access Books or Borrowers.

- Click "Edit" or "Delete" to manage existing records.

- All changes are automatically saved to the database.


## 💻 Screenshots / Code Snippets

# Routes Example (routes/web.php)
PHP

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('borrowers', BorrowerController::class);

# Controller Example (app/Http/Controllers/BookController.php)
PHP

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
# Blade Template Example (resources/views/books/index.blade.php)
HTML

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


## 📂 Folder Structure

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


## 👥 Contributors
# Name                      # Role
Denielle Gerald A. Garcia   Developer / Repository Owner
Janric Madayag              Partner / Documentation   


## 📄 License
This project is licensed under the MIT License.


### How to preview it in VS Code:
After you paste this code into your `README.md` file:
1.  Press **Ctrl + K**, then let go and press **V**.
2.  This will open a "Preview" tab on the right side so you can see how it will look on GitHub (with all the bold text and tables rendered nicely).

Don't forget to save (**Ctrl + S**) before going back to Git Bash!