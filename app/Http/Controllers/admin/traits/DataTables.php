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
        1=>Book::class,
        2=>Genre::class,
        3=>Category::class,
        4=>Tag::class,
        5=>Author::class,
        6=>User::class,
        7=>UserGroup::class
    ];
}
