<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPhoto extends Model
{
    use HasFactory;

    protected $table = 'book_photo';

    protected $fillable = [
        'image',
        'book_id'
    ];
}
