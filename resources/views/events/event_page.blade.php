<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>
<!-- This is an example component -->

<div class='flex items-center justify-center min-h-screen'>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
    <div class="flex w-full items-center justify-between border-b pb-3">
      <div class="flex items-center space-x-3">
        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
        <div class="text-lg font-bold text-slate-700">Joe Smith</div>
      </div>
      <div class="flex items-center space-x-8">
        <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $event->category }}</button>
        <div class="text-xs text-neutral-500">{{ $event->available_seats }} Seat</div>
        @if(auth()->user() && auth()->user()->email === $event->organiser)
        <form action="{{ route('deleteEvent', $event->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button class="rounded-2xl border bg-red-600 px-3 text-white py-1 text-xs font-semibold">Delete</button>
        </form>
          <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="rounded-2xl border bg-gray-600 px-3 text-white py-1 text-xs font-semibold">Edit</button>
          @else
            @if($event->booking_type === "auto")
              <a href="/booking/{{$event->id}}" class="rounded-2xl border bg-green-400 px-4 py-2 hover:bg-green-600 duration-200 text-xs font-semibold">BOOK NOW!</a>
              @else
                <a href="/bookNow/{{$event->id}}" class="rounded-2xl border bg-green-400 px-4 py-2 hover:bg-green-600 duration-200 text-xs font-semibold">BOOK NOW!</a>
            @endif
          @endif
      </div>
    </div>

    <div class="mt-4 mb-6">
      <div class="mb-3 text-xl font-bold">{{ $event->title }}</div>
      <div class="text-sm text-neutral-600">{{ $event->description }}</div>
    </div>

    <div>
      <div class="flex items-center justify-between text-slate-500">
        <div class="flex space-x-4 md:space-x-8">
          <div class="flex cursor-pointer items-center transition hover:text-slate-600">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg> -->
            <span>{{ $event->location }}</span>
          </div>
          <div class="flex cursor-pointer items-center transition hover:text-slate-600">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg> -->
            <span>{{ $event->date }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Event edit modal -->
<div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Product
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" method="post" action="{{ route('editEvent', $event->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="id" value="{{ $event->id }}" hidden>
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" value="{{ $event->title }}" id="name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Title" required>
                    </div>
                    
                    <div>
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <input type="text" value="{{ $event->location }}" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Location" required>
                    </div>

                    <div>
                        <label for="available_seats" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seats</label>
                        <input type="text" value="{{ $event->available_seats }}" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="available_seats" required>
                    </div>

                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                      <textarea type="text" name="description" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="description" required>
                      {{ $event->description }}
                      </textarea>
                      </div>

                    <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>      
</body>
</html>