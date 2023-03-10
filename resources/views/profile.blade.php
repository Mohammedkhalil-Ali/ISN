<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-left min-h-screen">

        <!-- div1 -->


        <div class="basis-2/12"></div>
    <div class="fixed bg-white h-screen flex flex-col justify-between py-8 items-left w-2/12 border-r">
        <div><h1 class="text-3xl ml-4" style="font-family: 'Satisfy', cursive;">Instagram</h1></div>
        <div class="flex justify-around flex-col h-[450px] ml-2" >
            <a href="{{ route('postshare.index') }}" class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-solid fa-house mr-4 text-2xl ml-1"></i> Home</a>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-solid fa-magnifying-glass mr-4 text-2xl ml-1"></i>Search</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-brands fa-wpexplorer mr-4 text-2xl ml-1"></i>Explore</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-regular fa-message mr-4 text-2xl ml-1"></i>Message</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-solid fa-bell mr-4 text-2xl ml-1"></i>Notification</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-regular fa-square-plus mr-4 text-2xl ml-1"></i></i>Create</p>
            <a href="{{ route('profile') }}" class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 flex items-center gap-x-2 "><div style="background-image: url('{{ asset('Profile/'.$users[0]->img) }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-10 h-10 object-fill "></div>Profile</a>
        </div>
        <div class="ml-2"><p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1"><i class="fa-solid fa-bars mr-4 text-xl ml-1"></i>more</p></div>
    </div>


    <!-- div1 -->

    <!-- div2 -->
    
    
    <div class="profile basis-10/12 bg-gray-50">
       
        <div class="header flex w-100% justify-start ml-40 mt-10 gap-x-20">
            <div class="wenaka">
                <div style="background-image: url('{{ asset('Profile/'.$users[0]->img) }}')"
                 class="bg-center bg-cover rounded-full bg-no-repeat w-36 h-36 object-fill "></div>
            </div>
            <div class="bio">
                <div class="naw flex justify-between items-center gap-x-10">
                    <p class="text-2xl">{{ $users[0]->firstname }} {{ $users[0]->lastname }}</p>
                    <a href="" class="p-2 bg-gray-100 rounded-md font-medium">Edit Profile</a>
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="follow flex justify-start gap-x-8 items-center mt-4">
                    <p>{{ $users[0]->post_count }} Posts</p>
                    <p>{{ $users[0]->follows_count }} Followers</p>
                    <p>{{ $users[0]->following_count }} Following</p>
                </div>
                <div class="rasm mt-6">
                    <p>{{ $users[0]->username }}</p>
                    <p>{{ $users[0]->bio }}</p>
                </div>
            </div>
        </div>


        <!-- header -->
        <hr class="w-[80%] mx-[10%] mt-10">

        <!-- post -->
        <div class="w-[80%] mx-[10%] mt-5 mb-10 text-center">
            <p class="mb-5 cursor-pointer" id="addPost" onclick="show()"><i class="fa-solid fa-camera text-lg" ></i> Share New Photo</p>
            <div class="postakan grid grid-cols-3 gap-4">
                @foreach ($users[0]->posts as $post )
                
                <div class="relative group">
                    <img src="{{ asset('post/'.$post->image[0]) }}" class="h-80 w-full shadow-sm" alt="" srcset="">
                    <div class="hovern hidden group-hover:block hover:bg-black/10 h-full w-full absolute top-0">
                        <div class="flex gap-x-4 items-center justify-center h-80 text-white font-medium">
                            <div class="flex items-center gap-x-1"><i class="fa-solid fa-heart text-2xl"></i> {{ $post->like_count }} </div>
                            <div class="flex items-center gap-x-1"><i class="fa-solid fa-comment text-2xl"></i> {{ $post->comment_count }}</div>
                        </div>
                    </div>
                </div>

                @endforeach
    
                 
            </div>
        </div>

       
    </div>

    <!-- div2 -->

{{-- hsefhfgeh --}}

    </div>

    <div id="sharepost" class="post hidden fixed h-screen w-full top-0 left-0 bg-black/80">
        <i class="fa-solid fa-plus fixed top-2 right-4 text-white text-4xl rotate-45 cursor-pointer" id="plus" onclick="show()"></i>
        <div class="form h-screen flex justify-center items-center">
            <div class="w-[60%] h-[75%] bg-white rounded-md">
                <div class="header flex justify-between items-center mx-2 mt-1">
                    <i class="fa-solid fa-plus text-black text-2xl rotate-45 cursor-pointer" id="plus2" onclick="show()"></i>
                    <p>Create New Post</p>
                    <a class="text-blue-500 cursor-pointer" onclick="form()">Share</a>
                </div>
                <hr>
                <div class="">
                    <form id="formstore" action="{{ route('postshare.index') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex justify-between">
                            <div class="wenaka w-[60%]">
                                <label for="file">
                                    <img src="{{ asset('drag.png') }}" id="img" alt="" srcset="" class="w-full h-[70%] object-fill bg-cover">
                                </label>
                                <div class="flex justify-center" id="label">
                                    <label for="file" class="bg-blue-400 cursor-pointer hover:bg-blue-600 rounded-md text-white px-3 py-1 mt-2">Select from computer</label>
                                </div>
                                <input type="file" name="file[]" id="file" class="hidden" onchange="changeimage(event)" multiple>
                            </div>
                            <div class="datakan h-[69vh]  border-l border-gray-400 w-[40%]">
                                <div class="flex items-center mx-4 mt-3">
                                <div style="background-image: url('{{ asset('Profile/'.$users[0]->img) }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-8 h-8 object-fill"></div>
                                <p>Mohammed Khalil</p>
                                </div>
                                <textarea name="caption" id="" cols="30" rows="15" class="w-full resize-none border-none focus:outline-none pl-4 pt-2 pr-2" placeholder="Write a Caption"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        const formstore=document.querySelector("#formstore");
        const btn=document.querySelector("#sharepost");
        let img=document.querySelector("#img");
        let label=document.querySelector("#label");
        const show=()=>{
            btn.classList.toggle('hidden')
            label.classList.remove('hidden')
        }

        const changeimage=(event)=>{
            img.src=URL.createObjectURL(event.target.files[0])
            label.classList.add('hidden')
        }
        const form=()=>{
            formstore.submit();
        }
    </script>
</body>
</html>