<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $photos;
    public $tags_id;

    public $table = 'books';

    public static string $name_table = 'Книги';
    public static string $name_model = 'Книга';

    protected $fillable = [
        'title',
        'description',
        'price',
        'main_photo',
        'author_id',
        'genre_id',
        'photos',
        'tags_id'
    ];

    public static function boot(): void
    {
        parent::boot();
        self::creating(function ($book){

        });
        self::saved(function ($book){
            dd($book->id);
        });
    }

//    public function add_photos()
//    {
//        if(request()->hasFile('photos')){
//            $photos = request()->file('photos');
//            foreach ($photos as $val){
//                $new_photo = $val->store('image/book_photos', 'public');
//                BookPhoto::create([]);
//            }
//        }
//    }
}
