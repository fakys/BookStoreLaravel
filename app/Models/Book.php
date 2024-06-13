<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $table = 'books';

    public static string $name_table = 'Книги';
    public static string $name_model = 'Книга';
}
