<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\traits\DataTables;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Psy\Shell;
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
        if(empty($this->data_tables[$table])){
            abort(404);
        }
        $model = $this->data_tables[$table];
        $column = array_slice(Schema::getColumnListing($table), 0, 3);
        $data_model = $model::all($column)->toArray();
        return view('admin.show_model', ['table'=>$table,'data_model'=>$data_model, 'column'=>$column, 'title'=>$model::$name_table]);
    }

    public function store_object($table)
    {
        if(empty($this->data_tables[$table])){
            abort(404);
        }
        $model = $this->data_tables[$table];
        if(request()->method() == 'POST'){
            $new_object = new $model(request()->post());
            if($new_object->save()){
                return redirect()->route('admin.show_model', ['table'=>$table]);
            }
        }
        abort(404);
    }

    public function create_object($table)
    {
        if(empty($this->data_tables[$table])){
            abort(404);
        }
        $name = $this->data_tables[$table]::$name_table;
        return view('admin.create_object', ['table'=>$table, 'title'=>"Добавление в таблицу '$name'"]);
    }
}
