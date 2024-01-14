<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Raj">
    <meta name="description" content="This is Product page">
    <link rel="stylesheet" href="/src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Spiderman</title>
</head>

<body>
    <div class="h-screen w-full grid grid-cols-12 grid-rows-6 bg-black text-white gap-1">
        <aside class="w-full h-full col-span-1 row-span-6 border-slate-600 border-r">
            <x-app />
        </aside>

        <header class="py-2 px-2 w-full col-span-11 row-span-1 border-b border-slate-600 grid place-items-center">
            <div class="flex w-full">
                <div class="flex-1 w-full">
                    <form>
                        <div class="flex items-center relative">
                            <div class="pl-4  h-10 grid place-items-center bg-slate-800 text-slate-600 rounded-l-full ">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </div>
                            <div class=" py-2">
                                <input type="search" placeholder="Search"
                                    class="w-72 h-10 pl-3 rounded-r-full bg-slate-800">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="px-1 w-52 flex items-center gap-8  ">
                    <div class="p-2 bg-slate-800 rounded-full text-slate-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M20.19 14.06l-1.13-1.88c-.25-.41-.47-1.2-.47-1.68V8.63c0-3.63-2.95-6.58-6.57-6.58C8.39 2.06 5.44 5 5.44 8.63v1.86c0 .48-.22 1.27-.46 1.68l-1.13 1.88c-.43.73-.53 1.56-.26 2.28.27.73.88 1.31 1.68 1.57 1.08.36 2.17.62 3.28.81.11.02.22.03.33.05l.44.06c.26.04.52.07.79.09a20.187 20.187 0 003.79 0c.23-.02.46-.04.68-.07.18-.02.36-.04.54-.07.11-.01.22-.03.33-.05 1.12-.18 2.23-.46 3.31-.82a2.65 2.65 0 001.64-1.58c.28-.75.2-1.57-.21-2.26zM12.75 10a.76.76 0 11-1.52 0V6.9a.76.76 0 111.52 0V10zM14.83 20.01A3.014 3.014 0 0112 22c-.79 0-1.57-.32-2.12-.89-.32-.3-.56-.7-.7-1.11.13.02.26.03.4.05.23.03.47.06.71.08.57.05 1.15.08 1.73.08.57 0 1.14-.03 1.7-.08.21-.02.42-.03.62-.06l.49-.06z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-2 bg-slate-800 rounded-full text-slate-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11 2.77355C11 2.34198 11.3442 2 11.77 2H14V0H11.77C10.2358 0 9 1.24119 9 2.77355V5H5.54996C2.97595 5 0.822518 6.95421 0.573424 9.51614L0.0156172 15.2532C-0.179608 17.2611 1.39843 19 3.4158 19C4.97964 19 6.34381 17.9381 6.72756 16.4221L6.801 16.1319C6.9695 15.4663 7.56848 15 8.25514 15H11.9949C12.6816 15 13.2805 15.4663 13.449 16.1319L13.5469 16.5185C13.9163 17.9778 15.2294 19 16.7347 19C18.6763 19 20.1951 17.3268 20.0078 15.3943L19.438 9.51751C19.1896 6.95498 17.0359 5 14.4613 5H11V2.77355ZM5.99995 7C6.55224 7 6.99995 7.44772 6.99995 8V9H7.99995C8.55224 9 8.99995 9.44771 8.99995 10C8.99995 10.5523 8.55224 11 7.99995 11H6.99995V12C6.99995 12.5523 6.55224 13 5.99995 13C5.44767 13 4.99995 12.5523 4.99995 12V11H3.99995C3.44767 11 2.99995 10.5523 2.99995 10C2.99995 9.44772 3.44767 9 3.99995 9H4.99995V8C4.99995 7.44772 5.44767 7 5.99995 7ZM13.5 10C14.3284 10 15 9.32843 15 8.5C15 7.67157 14.3284 7 13.5 7C12.6715 7 12 7.67157 12 8.5C12 9.32843 12.6715 10 13.5 10ZM16.5 14C17.3284 14 18 13.3284 18 12.5C18 11.6716 17.3284 11 16.5 11C15.6715 11 15 11.6716 15 12.5C15 13.3284 15.6715 14 16.5 14Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <img src="images/Balloon.jpg" alt="User" class="w-12 h-12 rounded-full">
                </div>
            </div>
        </header>


        <main class="col-span-8 row-span-5 w-full overflow-auto">
            <div class="flex flex-col px-10 py-6">
                <div class="flex  bg-slate-900 pl-4 rounded-xl w-full">
                    <div class="flex-1">
                        <div class="px-2 py-4 w-full max-w-xs space-y-3">
                            <span
                                class="p-1 grid place-items-center bg-rose-500 text-white rounded-lg text-sm w-12">New</span>
                            <h1 class="font-semibold text-3xl">Marvel's Spider-Man: Myles Morales</h1>
                            <div class="py-4">
                                <button class="px-4 py-2 bg-slate-600 text-slate-200 rounded-xl">Purchase</button>
                                <!-- <form>
                                    <label for="buy"
                                        class="items-center justify-center py-8 rounded-2xl flex relative bg-slate-700 shadow shadow-slate-100">
                                        <input type="checkbox" name="buy" id="buy" class="peer" hidden>
                                        <div
                                            class="absolute left-4 top-2 bg-blue-600 w-28 h-11 rounded-lg text-slate-200 grid place-items-center peer-checked:left-24 peer-checked:hidden">
                                            Purchase Now</div>
                                        <p class=" w-28 h-12 absolute right-2 top-2 hidden bg-blue-800 rounded-xl text-slate-200 peer-checked:flex items-center justify-center gap-2
                                    ">Just for <span>$99.99</span></p>
                                    </label>
                                </form> -->
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                    <img src="images/Spiderman.jpg" alt="Spiderman" class="w-full h-full object-cover rounded-r-lg">
                    </div>
                </div>
                <div class="py-4">
                    <h2 class="py-3">Most Played Games</h2>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="py-2">
                            <img src="images/Spider1.jpg" alt="" class="w-60 h-32 rounded-xl">
                            <div class="py-3">
                                <h3 class="text-base text-slate-200">Ghost of Tsushima</h3>
                                <span class="text-xs text-slate-500">112 hrs</span>
                            </div>
                        </div>
                        <div class="py-2">
                            <img src="images/Spider2.jpg" alt="" class="w-60 h-32 rounded-xl">
                            <div class="py-3">
                                <h3 class="text-base text-slate-200">Ghost of Tsushima</h3>
                                <span class="text-xs text-slate-500">112 hrs</span>
                            </div>
                        </div>
                        <div class="py-2">
                            <img src="images/Spider4.jpg" alt="" class="w-60 h-32 rounded-xl">
                            <div class="py-3">
                                <h3 class="text-base text-slate-200">Ghost of Tsushima</h3>
                                <span class="text-xs text-slate-500">112 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 ">
                    <div class="flex gap-6">
                        <div class="px-2 grid place-items-center w-60 border border-slate-800 rounded-xl">
                            <div class="flex items-center justify-between w-full">
                                <h3>Accessories</h3>
                                <div class="px-1">
                                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 72L32 192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l288 0 0 72c0 9.6 5.7 18.2 14.5 22z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="py-1">
                                <img src="images/Spider2.jpg" alt="" class="w-60 h-28 object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="w-full h-full border border-slate-800 rounded-xl px-4 bg-slate-900">
                            <div class="px-4 py-4 flex justify-between items-center">
                                <h3 class="text-base font-semibold">Library</h3>
                                <div class="px-1">
                                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 72L32 192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l288 0 0 72c0 9.6 5.7 18.2 14.5 22z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grid space-y-2 py-2">
                                <div class="py-1 flex border border-slate-800 rounded-lg px-4">
                                    <div class="flex-1">
                                        <div class="flex gap-2 items-center">
                                            <img src="images/Balloon.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="grid">
                                                <h4 class="font-medium text-base">Cyberpunk</h4>
                                                <p class="text-xs text-slate-400">PS4 & PS5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div class="px-1 text-slate-400 text-sm">
                                                <p class="flex gap-1"><span>12</span>Dec</p>
                                                <span>2022</span>
                                            </div>
                                            <a href="#"
                                                class="px-2 py-1 rounded-lg text-blue-800 border border-blue-800">Download</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-1 flex border border-slate-800 rounded-lg px-4">
                                    <div class="flex-1">
                                        <div class="flex gap-2 items-center">
                                            <img src="images/Balloon.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="grid">
                                                <h4 class="font-medium text-base">Cyberpunk</h4>
                                                <p class="text-xs text-slate-400">PS4 & PS5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div class="px-1 text-slate-400 text-sm">
                                                <p class="flex gap-1"><span>12</span>Dec</p>
                                                <span>2022</span>
                                            </div>
                                            <a href="#"
                                                class="px-2 py-1 rounded-lg text-blue-800 border border-blue-800">Download</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-1 flex border border-slate-800 rounded-lg px-4">
                                    <div class="flex-1">
                                        <div class="flex gap-2 items-center">
                                            <img src="images/Balloon.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="grid">
                                                <h4 class="font-medium text-base">Cyberpunk</h4>
                                                <p class="text-xs text-slate-400">PS4 & PS5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div class="px-1 text-slate-400 text-sm">
                                                <p class="flex gap-1"><span>12</span>Dec</p>
                                                <span>2022</span>
                                            </div>
                                            <a href="#"
                                                class="px-2 py-1 rounded-lg text-blue-800 border border-blue-800">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>



        <aside class="row-span-5 col-span-3 border border-slate-600 rounded-xl m-2 px-4 py-2 overflow-auto">
            <div class="px-2 py-4 flex items-center justify-between text-slate-400">
                <h2 class="px-2 text-lg">Social</h2>
                <div class="p-1">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 480" fill="currentColor">
                        <title>down</title>
                        <path d="M250 360l180-180-30-30-150 150-160-150-30 30 190 180z"></path>
                    </svg>
                </div>
            </div>
            <div class="px-4 flex justify-between items-center  py-4 rounded-2xl shadow bg-slate-900 text-slate-400">
                <div class="grid">
                    <h3 class="text-base">Rocket League upgrade</h3>
                    <p class="text-sm text-slate-500">12 min. remaining</p>
                </div>
                <span class="border-2 border-slate-700 rounded-full px-2 py-2 grid place-items-center">35%</span>
            </div>
            <div class="py-4 px-4 text-slate-300 space-y-2">
                <p class="capitalize">Online-3</p>
                <div class="flex gap-2 items-center bg-slate-900 rounded-xl px-2 py-1">
                    <img src="images/Img1.jpg" alt="Player1" class="w-8 h-8 rounded-full">
                    <div class="grid px-2 py-1">
                        <h3 class="text-base">Peter Parker</h3>
                        <p class="text-xs text-slate-500">Playing Rocket League</p>
                    </div>
                </div>
                <div class="flex gap-2 items-center bg-slate-900 rounded-xl px-2 py-1">
                    <img src="images/Img1.jpg" alt="Player1" class="w-8 h-8 rounded-full">
                    <div class="grid px-2 py-1">
                        <h3 class="text-base">Tony Stark</h3>
                        <p class="text-xs text-slate-500">Playing Rocket League</p>
                    </div>
                </div>
            </div>
            <div class="py-4 px-4 text-slate-300 space-y-2">
                <p class="capitalize">Parties-3</p>
                <div class="py-3 space-y-3">
                    <div class="flex w-full justify-between items-center bg-slate-800 rounded-lg px-2 pr-6 py-2">
                        <div class="flex items-center gap-2">
                            <img src="images/Balloon.jpg" alt="Team1" class="h-8 w-8 rounded-full">
                            <div class="grid">
                                <h3 class="text-base">Rocket League</h3>
                                <p class="text-xs text-slate-500">Playing Rocket League</p>
                            </div>
                        </div>
                        <picture class="relative">
                            <img src="images/Img1.jpg" alt="" class="w-5 h-5 rounded-full">
                            <img src="images/Img1.jpg" alt=""
                                class="w-5 h-5 rounded-full absolute left-1/2 top-0 border border-slate-600">
                            <span
                                class="w-5 h-5 rounded-full bg-slate-500 text-slate-400 font-bold text-xs grid place-items-center absolute left-5 top-0 ">+2</span>
                        </picture>
                    </div>
                    <div class="flex w-full justify-between items-center bg-slate-800 rounded-lg px-2 pr-6 py-2">
                        <div class="flex items-center gap-2">
                            <img src="images/Img2.jpg" alt="Team1" class="h-8 w-8 rounded-full">
                            <div class="grid">
                                <h3 class="text-base">Rocket League</h3>
                                <p class="text-xs text-slate-500">Playing Rocket League</p>
                            </div>
                        </div>
                        <picture class="relative">
                            <img src="images/Img1.jpg" alt="" class="w-5 h-5 rounded-full">
                            <img src="images/Img1.jpg" alt=""
                                class="w-5 h-5 rounded-full absolute left-1/2 top-0 border border-slate-600">
                            <span
                                class="w-5 h-5 rounded-full bg-slate-500 text-slate-400 font-bold text-xs grid place-items-center absolute left-5 top-0 ">+2</span>
                        </picture>
                    </div>
                    <div class="flex w-full justify-between items-center bg-slate-800 rounded-lg px-2 pr-6 py-2">
                        <div class="flex items-center gap-2">
                            <img src="images/Balloon.jpg" alt="Team1" class="h-8 w-8 rounded-full">
                            <div class="grid">
                                <h3 class="text-base">Rocket League</h3>
                                <p class="text-xs text-slate-500">Playing Rocket League</p>
                            </div>
                        </div>
                        <picture class="relative">
                            <img src="images/Img1.jpg" alt="" class="w-5 h-5 rounded-full">
                            <img src="images/Img1.jpg" alt=""
                                class="w-5 h-5 rounded-full absolute left-1/2 top-0 border border-slate-600">
                            <span
                                class="w-5 h-5 rounded-full bg-slate-500 text-slate-400 font-bold text-xs grid place-items-center absolute left-5 top-0 ">+2</span>
                        </picture>
                    </div>
                </div>
            </div>
            <div class=" bg-slate-800 rounded-xl py-2">
                <div class="py-3 px-4 border-b">
                    <p class="text-xs text-slate-400">Party Chat</p>
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm">Scott Pilgrim + 7 ohters</h3>
                        <div class="flex gap-1 text-sm">
                            <div class="px-1">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"></path>
                                    <path
                                        d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z">
                                    </path>
                                </svg>
                            </div>
                            <div class="px-1">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex justify-between items-center px-4 py-4 text-sm">
                    <p>Type a Message</p>
                    <div class="p-1 border bg-slate-700 text-blue-700 rounded-full">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M0 0l20 10L0 20V0zm0 8v4l10-2L0 8z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</body>

</html>