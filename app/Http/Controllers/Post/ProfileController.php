<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $users=User::where('id',auth()->user()->id)->with(['posts'])->get();
        return view('profile',compact('users'));
    }
}
