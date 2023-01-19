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

    protected $appends=['post_count','follows_count','following_count'];

    protected $hidden = [
        'password'
    ];

    public function posts(){
        return $this->hasMany(Post::class,'user_id');
    }

    public function getPostCountAttribute(){
        return count($this->posts);
    }

    public function follow(){
        return $this->hasMany(Follows::class,'sender_id')->where('state',1);
    }

    public function following(){
        return $this->hasMany(Follows::class,'receiver_id')->where('state',1);
    }

    public function getFollowsCountAttribute(){
        return count($this->follow);
    }

    public function getFollowingCountAttribute(){
        return count($this->following);
    }

    public function follows(){
        return $this->hasMany(Follows::class,'sender_id');
    }
   
}
