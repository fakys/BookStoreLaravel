<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\traits\DataTables;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    use DataTables;
    public function index()
    {
        return view('admin.index', ['data_table'=>$this->data_table]);
    }
}
