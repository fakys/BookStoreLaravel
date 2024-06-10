<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\traits\DataTables;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    use DataTables;
    public function index()
    {
        dd($this->data_table[1]::$name_table);
        return 123123;
    }
}
