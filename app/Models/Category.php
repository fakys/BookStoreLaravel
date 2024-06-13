<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table = 'categories';
    public static string $name_table = 'Категории';
    public static string $name_model = 'Категория';

    protected $fillable = [
        'name'
    ];
}
