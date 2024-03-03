<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- component -->
<form class="w-full max-w-lg">
  <div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
        Title
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tile" name="title" type="text" placeholder="Title">
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Location">
        Location
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="location" name="location" type="text" placeholder="Location">
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
        Date
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="date" name="date" type="date" placeholder="Date">
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
        Category
      </label>
      <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="category" name="category" type="select" placeholder="Category">    
        <option selected disabled>---select---</option>
        <option value="frontend">frontend</option>
        <option value="backedn">backedn</option>
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="available_seats">
      Available seats
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="category" name="available_seats" type="text" placeholder="2">    
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Message
      </label>
      <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
        Send
      </button>
    </div>
    <div class="md:w-2/3"></div>
  </div>
</form>
</body>
</html>