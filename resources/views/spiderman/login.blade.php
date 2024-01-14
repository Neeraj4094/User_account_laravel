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
<!-- <div class="flex items-center w-full bg-slate-500 text-white"> -->
@if(request()->session()->has('errormsg'))
      <h2 class="fixed py-1 font-bold w-full text-center top-0 z-30 bg-red-300">
        {{request()->session()->get('errormsg')}}
      </h2>
    @endif
    <!-- </div> -->
<body class="grid grid-cols-12 grid-rows-6 w-full  h-screen bg-slate-950 gap-1">
    <aside class="w-full col-span-1  h-screen row-span-6 border-slate-600 border-r">
        <x-app />
    </aside>
    <div class="grid place-items-center w-full h-screen col-span-11 row-span-1 p-6">
        <form action="{{url('/login_data')}}" method="post" class="shadow flex-1 w-[500px]" name="registeration_form"
            enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-center shadow-md border-t border-slate-500 shadow-slate-400 bg-slate-900 rounded-xl text-white w-full h-full">
                <div class="py-6 px-10 w-full h-full">
                    <h2 class="font-bold text-xl py-1">Log in to your account</h2>
                    <div class="space-y-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                            class=" rounded-md w-full p-1 pl-3 bg-slate-700" value="{{old('email')}}">
                        <span class="text-slate-50 text-sm">* <small>
                                    @error('email')
                                    {{$message}}
                                    @enderror
                            </small></span>
                    </div>
                    <div class="space-y-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class=" rounded-md w-full p-1 pl-3 bg-slate-700" value="{{old('password')}}">
                        <span class="text-slate-50 text-sm max-w-xs w-60">* <small>
                                    @error('password')
                                    {{$message}}
                                    @enderror
                            </small></span>
                    </div>
                    <div class="w-full relative pb-2">
                    <a href="/forget_password" class=" text-blue-400">Forget Password ?</a>
                    </div>
                    <div class="py-1">
                        <input type="submit" name="add_user"
                            class="bg-purple-600 rounded-lg text-white border border-white px-8 py-2 cursor-pointer">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>