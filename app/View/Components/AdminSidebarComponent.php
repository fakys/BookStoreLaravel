<?php

namespace App\View\Components;

use App\Http\Controllers\admin\traits\DataTables;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdminSidebarComponent extends Component
{
    use DataTables;

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-sidebar-component', ['data_model'=>$this->data_tables]);
    }
}
