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
@php
    $name = (empty($user_id_data['name'])) ? old('name') : $user_id_data['name'];
    $email = (empty($user_id_data['email'])) ? old('email') : $user_id_data['email'];
    $phone_number = (empty($user_id_data['phone_number'])) ? old('phone_number') : $user_id_data['phone_number'];
    $address = (empty($user_id_data['address'])) ? old('address') : $user_id_data['address'];
    $gender = (empty($user_id_data['gender'])) ? old('gender') : $user_id_data['gender'];
@endphp


<body class="grid place-items-center w-full h-full p-4 bg-slate-900">
    <!-- <div> -->
    <form action="{{$url}}" method="post" class="h-full shadow flex-1 w-[500px]" name="registeration_form"
            enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-center shadow shadow-slate-400 bg-slate-800 rounded-xl text-white w-full h-full">
                <div class="py-2 px-10 w-full">
                    <h2 class="font-bold text-xl py-1">Sign up to your account</h2>
                    <div class="flex gap-4">
                        <div class="">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name"
                                class=" rounded-md w-full p-1 pl-3 bg-slate-700" value="{{$name}}">
                            <span class="text-slate-50 text-sm">* <small>
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </small></span>
                        </div>
                        <div class="">
                            <label for="number">Phone Number</label>
                            <input type="text" name="phone_number" id="number" placeholder="Phone number"
                                class=" rounded-md w-full p-1 pl-3 bg-slate-700" maxlength="10" value="{{$phone_number}}">
                            <span class="text-slate-50 text-sm max-w-xs w-96">* <small>
                                    @error('phone_number')
                                    {{$message}}
                                    @enderror
                                </small></span>
                        </div>
                    </div>
                    <div class="">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                            class=" rounded-md w-full p-1 pl-3 bg-slate-700" value="{{$email}}">
                        <span class="text-slate-50 text-sm">* <small>
                                    @error('email')
                                    {{$message}}
                                    @enderror
                            </small></span>
                    </div>
                    <div class="">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class=" rounded-md w-full p-1 pl-3 bg-slate-700" value="{{old('password')}}">
                        <span class="text-slate-50 text-sm max-w-xs w-60">* <small>
                                    @error('password')
                                    {{$message}}
                                    @enderror
                            </small></span>
                    </div>

                    <div class="">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="Address"
                            class=" rounded-md w-full p-1 pl-3 bg-slate-700" value="{{$address}}">
                        <span class="text-slate-50 text-sm max-w-xs w-96">* <small>
                                    @error('address')
                                    {{$message}}
                                    @enderror
                            </small></span>
                    </div>
                    <div class="flex items-center justify-between ">
                        <fieldset class=" space-y-1">
                            <legend>Gender :-</legend>
                            <div class="flex gap-10">
                                <div>
                                    <input type="radio" name="gender" id="male" value="M" {{($gender == "M") ? "checked" : "" }} >
                                    <label for="male">Male</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="female" value="F" {{($gender == "F") ? "checked" : "" }} >
                                    <label for="female">Female</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="other" value="O" {{($gender == "O") ? "checked" : "" }} >
                                    <label for="other">Other</label>
                                </div>
                            </div>
                            <span class="text-slate-50 text-sm">* <small>
                                    @error('gender')
                                    {{$message}}
                                    @enderror
                                </small></span>
                        </fieldset>
                    </div>

                    <div class="py-1">
                        <input type="submit" name="add_user"
                            class="bg-purple-600 rounded-lg text-white border border-white px-8 py-2 cursor-pointer">
                    </div>
                </div>
            </div>
        </form>
    <!-- </div> -->
  
</body>

</html>