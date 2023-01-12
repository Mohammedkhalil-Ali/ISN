<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $fillable=['user_id','caption','img'];

    protected $appends=["image","comment_count"];

    public function getImageAttribute(){
        return json_decode($this->img);
    }
    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }

    public function getCommentCountAttribute(){
        return count($this->comments);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    use HasFactory;
}
