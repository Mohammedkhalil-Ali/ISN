
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
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 cursor-pointer"><i class="fa-solid fa-magnifying-glass mr-4 text-2xl ml-1"></i>Search</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 cursor-pointer"><i class="fa-brands fa-wpexplorer mr-4 text-2xl ml-1"></i>Explore</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 cursor-pointer"><i class="fa-regular fa-message mr-4 text-2xl ml-1"></i>Message</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 cursor-pointer"><i class="fa-solid fa-bell mr-4 text-2xl ml-1"></i>Notification</p>
            <p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 cursor-pointer"><i class="fa-regular fa-square-plus mr-4 text-2xl ml-1"></i></i>Create</p>
            <a href="{{ route('profile') }}" class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 flex items-center gap-x-2"><div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-10 h-10 object-fill"></div>Profile</a>
        </div>
        <div class="ml-2"><p class="hover:bg-gray-200 mx-2 rounded-full py-2 px-1 cursor-pointer"><i class="fa-solid fa-bars ml-1 mr-4 text-xl"></i>more</p></div>
    </div>


    <!-- div1 -->

    <!-- div2 -->


    <div class="basis-6/12 bg-gray-50 flex flex-col items-end">
        <div class="bg-white overflow-x-auto flex gap-x-4 p-3 w-[450px] my-2 rounded-md mt-4 border">
            <div class="stories flex flex-col text-center w-14">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                <p>Ad</p>
            </div>

            <div class="stories flex flex-col text-center w-14">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                <p>Ad</p>
            </div>


            <div class="stories flex flex-col text-center w-14">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                <p>Ad</p>
            </div>

            <div class="stories flex flex-col text-center w-14">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                <p>Ad</p>
            </div>

            <div class="stories flex flex-col text-center w-14">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                <p>Ad</p>
            </div>

            <div class="stories flex flex-col text-center w-14">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                <p>Ad</p>
            </div>
            
        </div>

        <div>

            @foreach ($postakan as $post)
            <div class="bg-white w-[450px] h-fit rounded-md mb-4 border">
                <div class="headerpost flex justify-between items-center">
                    <div class="data flex items-center my-2 ml-1">
                        <div style="background-image: url('{{ asset('Profile/'.$post->user->img) }}')" 
                        class="bg-center bg-cover rounded-full bg-no-repeat w-12 h-12 object-fill"></div>
                        <p class="title text-md ml-2">{{ $post->user->firstname  }}  {{ $post->user->lastname }}</p>
                    </div>
                    <p class="mr-4">...</p>
                </div>
                <div>
                    <img src="{{ asset('Post/'.$post->image[0]) }}" alt="" class="h-fit w-full">
                </div>
                <div class="like flex gap-4 ml-4 mt-2">
                    <i class="fa-regular fa-heart text-2xl"></i>
                    <i class="fa-regular fa-comment text-2xl"></i>
                </div>
{{--  --}}
                <div class="headerpost flex items-center ml-4 mt-2">
                    <div class="data">
                        <p class="title text-sm font-bold">{{ $post->user->firstname  }}  {{ $post->user->lastname }}</p>
                    </div>
                    <p class="text-sm font-light ml-4">{{ $post->caption }}</p>
                </div>

                    <div class="data ml-4 mt-2">
                        <p class="title text-sm font-light opacity-60">View all {{ $post->comment_count }} comment</p>
                        <p class="title text-xs font-light uppercase opacity-60 mt-1">{{ $post->created_at->diffForHumans() }}</p>
                    </div>

                <div class="flex items-center mt-2 border-t">
                    <div class="data ml-4 flex bg-transparent w-full">
                        <input type="text" placeholder="Add a comment" class="w-[90%] py-2 border-none outline-none focus:outline-none focus:border-none">
                        <p class="w-[10%] text-blue-400">Post</p>
                    </div>
                </div>

            </div>    

            @endforeach

   


        </div>
        
    </div>


    <!-- div2 -->

    <!-- div3 -->


    <div class="basis-5/12 bg-gray-50">

            

            

        <div class="flex items-center justify-between mx-4 mt-6 w-[80%]">
            <div class="flex items-center">
                <div style="background-image: url('{{ asset('khom.JPG') }}')" class="bg-center bg-cover rounded-full bg-no-repeat w-14 h-14 object-fill"></div>
            <div class="ml-2">
                <p>Mohammed khalil</p>
                <p class="opacity-60">Mohammed khalil</p>
            </div>
            </div>
            <p class="text-blue-400">Switch</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit" class="">Logout</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>