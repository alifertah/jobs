<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        </head>
    <body class="">
        

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Eventos</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <a href="/register" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
      </ul>
    </div>
  </div>
</nav>
<section class="bg-white dark:bg-gray-900 antialiased">
  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
        Schedule
      </h2>

      <div class="mt-4">
        <a href="#" title=""
          class="inline-flex items-center text-lg font-medium text-primary-600 hover:underline dark:text-primary-500">
          Learn more about our agenda
          <svg aria-hidden="true" class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>

    <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
      <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            08:00 - 09:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Opening remarks</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            09:00 - 10:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Bergside LLC: Controlling the video traffic flows</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            10:00 - 11:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Flowbite - An Open Framework for Forensic Watermarking</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            11:00 - 12:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Coffee Break</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            12:00 - 13:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Scaling your brand from €0 to multimillion euros</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            13:00 - 14:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Updates from the Open Source Multimedia community</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            14:00 - 15:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Exploring the balance between customer acquisition and retention</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            15:00 - 16:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Flowbite - An Open Framework for Forensic Watermarking</a>
          </h3>
        </div>

        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            16:00 - 14:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Scaling your brand from €0 to multimillion euros</a>
          </h3>
        </div>
        <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
          <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
            17:00 - 14:00
          </p>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            <a href="#" class="hover:underline">Drinks & networking</a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>