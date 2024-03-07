<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <title>Document</title>
    <style>
        .login_img_section {
            background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)), url(https://images.unsplash.com/photo-1650825556125-060e52d40bd0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center;
        }
    </style>
</head>

<body>
    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <!-- component -->
    <table class=" bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
        </tr>
      </thead>
    <tbody class="text-gray-700">
        @foreach($c as $cat)
      <tr>
        <td class="w-1/3 text-left py-3 px-4">{{$cat->name}}</td>
        <td class="p-3 px-5 flex justify-end">
            <form action="">
                <button type="submit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
            </form>

            <form method="post" action="{{ route('deleteCategory', $cat->id)}}">
            @csrf
            @method('DELETE')
                <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
    </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
                <!-- categories form -->
                <form class="bg-white rounded-md shadow-2xl p-5" method="post" action="{{ route('newCategory') }}">
                    @csrf
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">new category</h1>
                    <div class="flex items-center border-2 mb-2 px-3 rounded-2xl">
                        <input id="name" class=" pl-2 w-full outline-none border-none" type="text" name="name" placeholder="name" />
                    </div>
                    @if(session("error"))
                        <p class="text-red-500">
                            {{ session('error') }}
                        </p>  
                    @endif
                    <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Create</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>