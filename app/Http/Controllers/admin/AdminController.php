<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\traits\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use function Termwind\render;

class AdminController extends Controller
{
    use DataTables;
    public function index()
    {
        return view('admin.index', ['data_tables'=>$this->data_tables, 'title'=>'Админ панель']);
    }

    public function show_model($table)
    {
        if(Schema::hasTable($table)){
            $column = array_slice(Schema::getColumnListing($table), 0, 3);
        }else{
            abort(404);
        }
        $data_model = DB::table($table)->select($column)->get()->toArray();
        return view('admin.show_model', ['data_model'=>$data_model, 'column'=>$column]);
    }

    public function add_object($table)
    {
        if(Schema::hasTable($table)){

        }else{
            abort(404);
        }
        return view('admin.add_object', ['table'=>$table]);
    }
}
