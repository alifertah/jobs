<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgotPassword</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- component -->
<main id="content" role="main" class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Enter new password</h1>
            </div>

            <div class="mt-5">
                <form method="post" action="{{ route('password.reset', ['token' => request()->route('token')], ['email' => request()->get('email')]) }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-white">New password</label>
                            <div class="relative">
                                <input type="" name="email" value="{{ request()->get('email') }}">
                                <input type="hidden" name="token" value="{{ $token }}">

                                <input type="password" id="password" name="password"
                                       class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required>
                                <input type="password" id="confim_password" name="confirm_password"
                                       class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required>
                            </div>
                        </div>
                        <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Confirm new password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</body>