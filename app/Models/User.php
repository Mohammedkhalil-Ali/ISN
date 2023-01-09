<?php

namespace App\Models;
use App\Models\Post;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'phone',
        'img',
        'location',
        'bio',
        'state',
        'email',
        'password',
    ];


    protected $hidden = [
        'password'
    ];

    public function posts(){
        return $this->hasMany(Post::class,'user_id');
    }
   
}
