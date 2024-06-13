<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $table="genres";
    public static string $name_table = 'Жанры';
    public static string $name_model = 'Жанр';

    protected $fillable = [
        'name',
        'category_id'
    ];

}
