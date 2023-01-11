<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $fillable=['user_id','caption','img'];

    protected $appends=["image"];

    public function getImageAttribute(){
        return json_decode($this->img);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    use HasFactory;
}
