<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webster User Login</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets/images/logos/favicon.png')}}" />
    <link rel="stylesheet" href="  {{ asset('/assets/css/styles.min.css')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@if(request()->session()->has('errormsg'))
<h2 class="fixed py-1 font-bold w-full text-center top-0 z-30 bg-red-300">
    {{request()->session()->get('errormsg')}}
</h2>
@endif

<body class="grid place-items-center w-full h-screen p-4 bg-slate-900">
    <form action="{{url('/sendmail')}}" method="post" class=" shadow flex-1 w-[500px]" name="registeration_form"
        enctype="multipart/form-data">
        @csrf
        <div
            class="flex items-center justify-center shadow shadow-slate-400 bg-slate-700 rounded-xl text-white w-full h-full">
            <div class="py-6 px-10 w-full h-full grid place-items-center space-y-4">
                <div class="grid place-items-center shadow shadow-slate-400 bg-slate-800 rounded-xl space-y-5 w-full px-4 py-2">
                <h2 class="font-bold text-xl ">Forget Password</h2>
                    <div class="space-y-2 w-full">
                        <!-- <label for="email">Email</label> -->
                        <input type="email" name="email" id="email" placeholder="sendmail@gmail.com"
                            class=" rounded-md border w-full p-1 pl-3 text-center bg-slate-700" value="{{old('email')}}">
                        
                    </div>
                    <div class="py-1">
                        <input type="submit" name="send_email" value="Send Email"
                            class="bg-purple-600 rounded-lg text-white border border-white px-8 py-2 cursor-pointer">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>