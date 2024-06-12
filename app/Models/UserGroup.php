<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

    public $table = 'users_groups';
    public static string $name_table = 'Группы пользователей';
    public static string $name_model = 'Группа пользователя';

    public static function get_name_table():string
    {
        return 'users_groups';
    }

}
