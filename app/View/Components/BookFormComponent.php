<?php

namespace App\View\Components;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Tag;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BookFormComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $tags = Tag::all();
        $authors = Author::all();
        $genres = Genre::all();
        return view('components.book-form-component', compact('tags', 'authors', 'genres'));
    }
}
