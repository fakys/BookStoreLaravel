<div>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @foreach($data_model as $val)
            <li class="nav-item">
                <a href="{{route('admin.show_model', ['table'=>$val::get_name_table()])}}" class="nav-link admin-nav-link">
                    <i class="nav-icon fa fa-table" aria-hidden="true"></i>
                    <p>
                        {{Str::limit($val::$name_table, 13)}}
                    </p>
                </a>
            </li>
        @endforeach
    </ul>
</div>
