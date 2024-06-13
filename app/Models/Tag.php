<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $table='tags';
    public static string $name_table = 'Теги';
    public static string $name_model = 'Тег';

    protected $fillable=[
        'name'
    ];

}
