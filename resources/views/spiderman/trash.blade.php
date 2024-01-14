<?php
$checkid = $userloggedin = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
    <title>User Dashboard</title>
</head>
    @if(auth()->check())
        @php $name = auth()->user()->name; @endphp
    @endif
    
<body>
    <div class="grid grid-cols-12 grid-rows-6 w-full h-full">
        <aside class=" row-span-6 col-span-2 border-r h-full sm:hidden lg:block">
            <x-app />
        </aside>
        <main class="row-span-6 col-span-10  sm:col-span-12 lg:col-span-10 ">
            <div class="flex justify-between items-center border-b-2 py-2 px-2 ">
                <p class="font-medium text-lg">Welcome Admin, {{ $name }}<span class="font-bold">
                        
                    </span></p>
                <div class="w-10 h-10 rounded-full border">
                    <?php
                    $col = '<svg class="w-full h-full object-cover text-slate-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>';
                    echo "$col<br>";
                    $edit = '<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24">
                    <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                    <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                    </svg>';
                    $locked = '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 24" fill="currentColor"><path d="m3.5 6.5v3.5h-1.5c-1.105 0-2 .895-2 2v10c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2v-10c0-1.105-.895-2-2-2h-1.5v-3.5c0-3.59-2.91-6.5-6.5-6.5s-6.5 2.91-6.5 6.5zm2.5 3.5v-3.5c0-2.209 1.791-4 4-4s4 1.791 4 4v3.5zm2 5.5c0-1.105.895-2 2-2s2 .895 2 2c0 .701-.361 1.319-.908 1.676l-.008.005s.195 1.18.415 2.57v.001c0 .414-.335.749-.749.749-.001 0-.001 0-.002 0h-1.499-.001c-.414 0-.749-.335-.749-.749v-.001l.415-2.57c-.554-.361-.916-.979-.916-1.68z"></path></svg>';
                    $delete = '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none"><path d="M7 3H9C9 2.44772 8.55228 2 8 2C7.44772 2 7 2.44772 7 3ZM6 3C6 1.89543 6.89543 1 8 1C9.10457 1 10 1.89543 10 3H14C14.2761 3 14.5 3.22386 14.5 3.5C14.5 3.77614 14.2761 4 14 4H13.4364L12.2313 12.8378C12.0624 14.0765 11.0044 15 9.75422 15H6.24578C4.99561 15 3.93762 14.0765 3.76871 12.8378L2.56355 4H2C1.72386 4 1.5 3.77614 1.5 3.5C1.5 3.22386 1.72386 3 2 3H6ZM7 6.5C7 6.22386 6.77614 6 6.5 6C6.22386 6 6 6.22386 6 6.5V11.5C6 11.7761 6.22386 12 6.5 12C6.77614 12 7 11.7761 7 11.5V6.5ZM9.5 6C9.22386 6 9 6.22386 9 6.5V11.5C9 11.7761 9.22386 12 9.5 12C9.77614 12 10 11.7761 10 11.5V6.5C10 6.22386 9.77614 6 9.5 6Z" fill="currentColor"></path></svg>';
                    $no_delete = '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M3.93931 5L2.21966 3.28032C1.92677 2.98743 1.92678 2.51255 2.21968 2.21966C2.51257 1.92677 2.98745 1.92678 3.28034 2.21968L21.7801 20.7198C22.073 21.0127 22.073 21.4876 21.7801 21.7805C21.4872 22.0734 21.0123 22.0734 20.7194 21.7805L18.5293 19.5903C17.9867 21.0098 16.6131 22 15.0263 22H8.97369C7.04254 22 5.42715 20.5334 5.24113 18.6112L4.06908 6.5H2.75C2.33579 6.5 2 6.16421 2 5.75C2 5.33579 2.33579 5 2.75 5H3.93931ZM17.2782 18.3392L15 16.0609V17.25C15 17.6642 14.6642 18 14.25 18C13.8358 18 13.5 17.6642 13.5 17.25V14.5609L10.5 11.5608V17.25C10.5 17.6642 10.1642 18 9.75 18C9.33579 18 9 17.6642 9 17.25V10.0608L5.59074 6.65147L6.73416 18.4667C6.84577 19.62 7.815 20.5 8.97369 20.5H15.0263C16.185 20.5 17.1542 19.62 17.2658 18.4667L17.2782 18.3392ZM13.5 10.3185L15 11.8186V9.75C15 9.33579 14.6642 9 14.25 9C13.8358 9 13.5 9.33579 13.5 9.75V10.3185ZM18.4239 6.5L17.6525 14.4711L19.0265 15.8452L19.9309 6.5H21.25C21.6642 6.5 22 6.16421 22 5.75C22 5.33579 21.6642 5 21.25 5H15.5C15.5 3.067 13.933 1.5 12 1.5C10.067 1.5 8.5 3.067 8.5 5H8.18156L9.68153 6.5H18.4239ZM14 5H10C10 3.89543 10.8954 3 12 3C13.1046 3 14 3.89543 14 5Z" fill="currentColor"></path></svg>';
                    ?>
                </div>
            </div>
            <div class="p-2 ">
                <h1 class="text-2xl font-semibold py-2">Manage Customers</h1>
                <div class="flex items-center justify-between ">
                    <div class="flex items-center relative">
                        <form action="admin" method="post" class="flex items-center gap-1 relative">
                            <input type="search" name="search" id="search"
                                class="border shadow rounded-lg outline-none p-2 w-96" placeholder="Search...">
                            <button type="submit" class="p-2 pt-3 bg-slate-50 border rounded-r-lg absolute right-0 top-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <a href="{{url('/dashboard')}}"
                        class=" uppercase px-4 py-2 bg-blue-600 text-white rounded-lg"><span
                            class="font-bold text-xl">+</span> Go Back</a>
                </div>
            </div>
            <div class="px-2 border-t h-96">
                <div class="px-2 space-y-3 overflow-y-scroll">
                    @foreach ($trash_data as $columns => $user_data)
                    @php 
                    if($user_data['gender'] == "M"){
                        $gender = "Male";
                    }elseif($user_data['gender'] == "F"){
                        $gender = "Female";
                    }else{
                        $gender = "Other";
                    }
                    $content_visible = (!empty($user_data['id'])) ? 'visible' : 'hidden';
                    $checkid = $user_data['id'];
                    $status = ($user_data['status'] == "1") ? "Active" : "Blocked";
                    $created_date = $user_data['created_at'];
                    $modified_date = $user_data['updated_at'];
                    $created = date('d-M-Y H:i:s',strtotime($created_date));
                    $modified = date('d-M-Y H:i:s',strtotime($modified_date));
                    @endphp
                    <!-- session()->flash('test1'); -->
                    <!-- session()->flash(); -->
                    
                    <!-- {{print_r(session()->get('test1'))}} -->
                    <!-- {{print_r(session()->all())}}  -->
                        <div
                            class="gap-2 py-2 mt-2  rounded-md border w-full shadow">
                            <div class=" flex justify-between items-center p-2 gap-4 w-full ">
                                <div class=" flex justify-between items-center gap-4">
                                    <div class=" w-10 h-10 flex items-center justify-center">
                                        <?php

                                        
                                        $col = '<div class= "flex items-center justify-center w-8 h-8"><svg class="w-full h-full text-slate-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg></div>';
                                        echo "$col<br>";
                                        
                                        ?>
                                        
                                    </div>
                                    <div class=" w-full">
                                        <div class="flex gap-20 items-center">
                                            <div>
                                                <div class="flex items-center gap-1">
                                                    <h2 class="font-semibold">
                                                        {{$user_data['name']}}
                                                    </h2>
                                                </div>
                                                <p>
                                                    {{$user_data['email']}}
                                                </p>
                                                <p>
                                                    <?php echo "Phone Number :- " . $user_data['phone_number'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid space-y-2">
                                    <span>Created:- {{$created}}</span>
                                    <span>Modified:- {{$modified}}</span>
                                </div>
                                <div class="flex items-center justify-between gap-6">
                                    <p class=" bg-blue-600 text-white px-3 py-1 rounded-lg">
                                        {{$status}}
                                    </p>
                                    <p class=" bg-purple-600 text-white px-3 py-1 rounded-lg">
                                        {{$gender}}
                                    </p>
                                    <form action="{{route('user.restore', ['id' => $user_data['id']])}}" method="post" id="restore">
                                        @csrf
                                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Edit"
                                            class="px-1 rounded-lg bg-slate-100 text-black">
                                            Restore
                                        </button>
                                    </form>
                                    
                                    <button id="<?php echo 'showBookBtn_' . $checkid ?>"  data-toggle="tooltip" data-placement="top" title="Delete" class=" border-2 px-4 py-1 rounded-md">
                                        <?php echo $delete ?>
                                    </button>
                                    <script>
                                        document.getElementById('<?php echo 'showBookBtn_' . $checkid ?>').addEventListener('click', function () {
                                            var box = document.getElementById('<?php echo 'bookData_' . $checkid ?>');
                                            box.style.display = (box.style.display === 'none' || box.style.display === '') ? 'block' : 'none';
                                        });
                                    </script>
    
                                    <div id="<?php echo 'bookData_' . $checkid ?>" class="hidden">
    
                                        <div
                                            class="<?php echo $content_visible ?> w-full h-screen flex items-center justify-center fixed  left-0 bottom-0 right-0 bg-black/40">
                                            <div
                                                class="w-80 h-36 grid font-semibold place-items-center border rounded-xl py-2 shadow z-20 bg-white text-black relative">
                                                <a href="{{url('/trash_data')}}"
                                                    class="font-bold text-2xl text-slate-400 absolute right-2 top-2">
                                                    <button type="submit">
                                                        <svg class="w-6 h-6" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path
                                                                d="M16 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2.939 12.789L10 11.729l-3.061 3.06-1.729-1.728L8.271 10l-3.06-3.061L6.94 5.21 10 8.271l3.059-3.061 1.729 1.729L11.729 10l3.06 3.061-1.728 1.728z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </a>
                                                <div class="grid place-items-center gap-4 pb-2">
                                                    <h2 class="px-6 font-semibold pt-3 text-black text-center">Are you sure u
                                                        want to delete this account</h2>
                                                    <form action="{{route('user.forcedelete', ['id' => $user_data['id']])}}" method="post"
                                                        class="">
                                                        @csrf
                                                        <button type="submit"
                                                            class="  font-bold rounded-md bg-blue-600 text-white px-3 border ">Yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    <span>
                    </span>
                </div>
            </div>
        </main>
    </div>
</body>

</html>