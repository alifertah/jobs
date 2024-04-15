<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-300">
    <!-- Navigation Bar -->
    <nav class="flex justify-between items-center bg-gray-800 shadow-lg px-8 py-4">
        <div id="navbar-default">
            <ul class="flex">
                <li>
                    <a href="/manageEvents" class="block py-2 px-3 hover:text-gray-500 duration-500" aria-current="page">Events</a>
                </li>
                <li>
                    <a href="/newEvent" class="block py-2 px-3 hover:text-gray-500 duration-500" aria-current="page">New event</a>
                </li>
                <li>
                    <a href="/organiser" class="block py-2 px-3 hover:text-gray-500 duration-500" aria-current="page">Dashboard</a>
                </li>
            </ul>
        </div>
        <a href="/logout" class="block py-2 px-3 hover:text-pink-500 duration-500">Logout</a>
    </nav>

    <!-- Session Messages (Uncomment if needed) -->
    <!-- @if(session('success'))
    <div class="text-red-200 font-red-400">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="text-red-200 font-red-400">
        {{ session('error') }}
    </div>
    @endif -->

    <!-- Job Offers Section -->
    <h1 class="text-3xl font-bold text-center my-10">Job offers</h1>
    <section class="flex p-20 flex-wrap justify-center">
        @foreach($allEvents as $event)
        @if($event->status == "accepted")
        <div class="relative mt-6 flex w-96 flex-col rounded-xl bg-gray-800 bg-clip-border text-gray-300 shadow-md transition-transform hover:scale-105">
            <div class="p-6">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 mb-2">
                    <path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" clip-rule="evenodd"></path>
                    <path d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z"></path>
                </svg>
                <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-300 antialiased">{{ $event->title }}</h5>
                <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">{{ $event->description }}</p>
            </div>
            <div class="p-6 pt-0">
                <a href="{{ url('/eventDetails/' . $event->id) }}" class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-dark="true">
                    more
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg>
                </a>
            </div>
        </div>
        @endif
        @endforeach
    </section>

    <!-- External Stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css">
</body>
</html>
