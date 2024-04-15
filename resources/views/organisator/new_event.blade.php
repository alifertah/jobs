<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-800">
    <nav class="flex justify-between items-center bg-white dark:bg-gray-900 shadow-lg px-8 py-4">
        <div id="navbar-default">
            <ul class="flex">
                <li>
                    <a href="/manageEvents" class="block py-2 px-3 text-white hover:text-gray-500 duration-500" aria-current="page">Jobs</a>
                </li>
                <li>
                    <a href="/organiser" class="block py-2 px-3 text-white hover:text-gray-500 duration-500" aria-current="page">Organiser</a>
                </li>
                <li>
                    <a href="/admin" class="block py-2 px-3 text-white hover:text-gray-500 duration-500" aria-current="page">Admin</a>
                </li>
            </ul>
        </div>
        <a href="/logout" class="block py-2 px-3 hover:text-pink-500 duration-500">Logout</a>
    </nav>

    <div class="flex justify-center mt-8">
        <form class="w-full max-w-lg bg-white dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('create_event') }}">
            @csrf  
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">Job title</label>
                <input class="appearance-none block w-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="title" name="title" type="text" placeholder="Title" required>
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">Apply</label>
                <select class="appearance-none block w-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="category" name="booking" required>
                    <option selected disabled>---select---</option>
                    <option value="auto">auto</option>
                    <option value="manuel">manuel</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="location">Location</label>
                <input class="appearance-none block w-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="location" name="location" type="text" placeholder="Location" required>
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">Deadline</label>
                <input class="appearance-none block w-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="date" name="date" type="date" placeholder="Date" required>
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">Category</label>
                <select class="appearance-none block w-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="category" name="category" required>
                    <option selected disabled>---select---</option>
                    @foreach($categories as $cat)
                        <option value="{{$cat->name}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Description</label>
                <textarea class="appearance-none block w-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="description" id="description" placeholder="Description" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Post</button>
            </div>
        </form>
    </div>
</body>
</html>
