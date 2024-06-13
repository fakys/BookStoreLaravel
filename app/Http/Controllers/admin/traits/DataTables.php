<?php
namespace App\Http\Controllers\admin\traits;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserGroup;

trait DataTables
{
    protected array $data_tables = [
        'books'=>Book::class,
        'genres'=>Genre::class,
        'categories'=>Category::class,
        'tags'=>Tag::class,
        'authors'=>Author::class,
        'users'=>User::class,
        'users_groups'=>UserGroup::class
    ];
}
