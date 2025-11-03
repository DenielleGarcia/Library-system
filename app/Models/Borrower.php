<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = ['name', 'email', 'book_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
