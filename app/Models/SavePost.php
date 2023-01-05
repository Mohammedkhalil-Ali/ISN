<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavePost extends Model
{
    protected $fillable=['user_id','post_id'];
    use HasFactory;

    public function users(){
        return $this->belongsTo(ModelsUser::class,'user_id');
    }

    public function posts(){
        return $this->belongsTo(Post::class,'post_id');
    }
}
