<?php

namespace App\View\Components;

use App\Models\UserGroup;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddUserComponent extends Component
{
    public $groups;
    public function __construct()
    {
        $this->add_groups();
    }
    protected function add_groups()
    {
        $this->groups = UserGroup::all();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add-user-component', ['groups'=>$this->groups]);
    }
}
