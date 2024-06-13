<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    public static string $name_table = 'Пользователи';
    public static string $name_model = 'Пользователь';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'user_group_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function boot(): void
    {
     parent::boot();
     static::creating(function ($user){
         $user->avatar = self::AddAvatar();
     });
    }

    private static function AddAvatar(): string
    {
        $ava = request()->file('avatar');
        if($ava){
            $path = $ava->store('image/users_ava', 'public');
            if($path){
                return $path;
            }
        }
        return 'image/users_ava/default/default_user_ava.jpg';
    }

}
