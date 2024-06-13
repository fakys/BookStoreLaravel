<?php

namespace App\View\Components;

use App\Models\UserGroup;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UsersFormComponent extends Component
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
        $group = UserGroup::all();
        return view('components.users-form-component', compact('group'));
    }
}
