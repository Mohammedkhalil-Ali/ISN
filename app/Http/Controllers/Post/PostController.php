<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostValidate;
use App\Models\Follows;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // {"id":1,"caption":"mk","img":"[\"RXALy9VKGMzcrPrxSTjr1HaFBqu7csChQ3kAIze8.jpg\"]",
        //     "user_id":1,"created_at":"2023-01-09T16:40:38.000000Z","updated_at":"2023-01-09T16:40:38.000000Z",
        //     "image":["RXALy9VKGMzcrPrxSTjr1HaFBqu7csChQ3kAIze8.jpg"],
        //     "user":{"id":1,"firstname":"Mohammed","lastname":"Khalil","username":"mkdev","phone":"07501078679",
        //         "img":"default-profile.png","location":"Darbandikhan","bio":null,"state":0,"email":"muhamad.khalil12345@gmail.com",
        //         "email_verified_at":null,"remember_token":null,
        //         "created_at":"2023-01-06T00:27:56.000000Z","updated_at":"2023-01-06T00:27:56.000000Z"}}

        $receiver=[];
        $follows = Follows::where('sender_id',auth()->user()->id)->where('state',1)->pluck('receiver_id');
        foreach ($follows as $value) {
            $receiver[]=$value;
        }
        $receiver[]=auth()->user()->id;

        $postakan = Post::with(['user'])->whereIn('user_id',$receiver)->get();
        // if(request()->wantsJson()){
        //     return $all;
        // }

         return view('index',compact('postakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostValidate $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostValidate $request)
    {
        
        $names=[];
        for ($i=0; $i < count($request->file('file')) ; $i++) { 
            $name=$request->file('file')[$i]->hashName();
            $names[]=$name;
            $request->file('file')[$i]->move('Post',$name);
        }
        $request->merge([
            'img'=>json_encode($names)
        ]);
        // return 1;
        auth()->user()->posts()->create($request->only('caption','img'));
        return redirect()->route('profile');
    }
// 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
