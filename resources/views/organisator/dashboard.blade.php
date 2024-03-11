<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>
<body>
<div class="flex flex-col h-screen bg-gray-100">

    <!-- Barra de navegación superior -->
    <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
        <div class="flex items-center">
            <div class="flex items-center"> <!-- Mostrado en todos los dispositivos -->
                <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo" class="w-28 h-18 mr-2">
                <h2 class="font-bold text-xl">Nombre de la Aplicación</h2>
            </div>
            <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
                <button id="menuBtn">
                    <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Ícono de menú -->
                </button>
            </div>
        </div>

        <div class="space-x-5">
            <button>
                <i class="fas fa-bell text-gray-500 text-lg"></i>
            </button>
            <!-- Botón de Perfil -->
            <button>
                <i class="fas fa-user text-gray-500 text-lg"></i>
            </button>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 flex flex-wrap">
        <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
        <div class="p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
            <nav>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                    <i class="fas fa-home mr-2"></i>home
                </a>

                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="/newEvent">
                    <i class="fas mr-2">+</i>New event
                </a>


            <!-- Ítem de Cerrar Sesión -->
            <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto" href="/logout">
                <i class="fas fa-sign-out-alt mr-2"></i>Logout
            </a>

            <!-- Señalador de ubicación -->
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
            
        </div>
        
        <div class="flex-1 p-4 w-full md:w-1/2">
            <div class="relative max-w-md w-full">
                <div class="absolute top-1 left-2 inline-flex items-center p-2">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Search...">
            </div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

<div class="w-full lg:w-1/5">
    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
        <div class="flex items-center">
            <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <div class="flex flex-col justify-center">
                <div class="text-lg">{{$data['booking'] ->count()}}</div>
                <div class="text-sm text-gray-400">Booking</div>
            </div>
        </div>
    </div>
</div>

<div class="w-full lg:w-1/5">
    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
        <div class="flex items-center">
            <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <div class="flex flex-col justify-center">
                <div class="text-lg">{{$data['events']->count()}}</div>
                <div class="text-sm text-gray-400">My Events</div>
            </div>
        </div>
    </div>
</div>

<div class="w-full lg:w-1/5">
    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
        <div class="flex items-center">
            <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
            </div>
            <div class="flex flex-col justify-center">
                <div class="text-lg">{{$data['booking']->where('approved', 0)->count()}}</div>
                <div class="text-sm text-gray-400">Pending booking</div>
            </div>
        </div>
    </div>
</div>

<div class="w-full lg:w-1/5">
    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
        <div class="flex items-center">
            <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <div class="flex flex-col justify-center">
                <div class="text-lg">{{$data['booking']->where('approved', 1)->count()}}</div>
                <div class="text-sm text-gray-400">Accepted booking</div>
            </div>
        </div>
    </div>
</div>

<div class="w-full lg:w-1/5">
    <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-green-400">
        <div class="flex items-center">
            <div class="icon w-14 p-3.5 bg-green-400 text-white rounded-full mr-3">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="flex flex-col justify-center">
                <div class="text-lg">$948'560</div>
                <div class="text-sm text-gray-400">Revenue</div>
            </div>
        </div>
    </div>
</div>

</div>


            <div class="mt-8 bg-white p-4 shadow rounded-lg">
                <div class="bg-white p-4 rounded-md mt-4">
                    <h2 class="text-gray-500 text-lg font-semibold pb-4">Booking requests</h2>
                    <div class="my-1"></div> 
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> 
                    <table class="w-full table-auto text-sm">
                        <thead>
                            <tr class="text-sm leading-normal">
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">User</th>
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Event</th>
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-center text-sm text-grey-light border-b border-grey-light">Approuved</th>
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-center text-sm text-grey-light border-b border-grey-light">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['booking'] as $booking)
                            @if($booking->event->organiser === auth()->user()->email && !$booking->approved)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2 px-4 text-center border-b border-grey-light">{{$booking->user->email}}</td>
                                <td class="py-2 px-4 text-center border-b border-grey-light">{{$booking->event->title}}</td>
                                <td class="py-2 px-4 text-center border-b border-grey-light">{{$booking->approved}}</td>
                                <td class="py-2 px-4 text-center border-b border-grey-light flex justify-center">
                                    <a href="{{route('accpetBooking', $booking->id)}}"  class="text-sm bg-gray-500 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Accept</a></td>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            <div class="mt-8 bg-white p-4 shadow rounded-lg">
                <div class="bg-white p-4 rounded-md mt-4">
                    <h2 class="text-gray-500 text-lg font-semibold pb-4">Events</h2>
                    <div class="my-1"></div> 
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> 
                    <table class="w-full table-auto text-sm">
                        <thead>
                            <tr class="text-sm leading-normal">
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Title</th>
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Organiser</th>
                                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-center text-sm text-grey-light border-b border-grey-light">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['events'] as $event)
                            @if($event->organiser == auth()->user()->email )
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2 px-4 text-center border-b border-grey-light">{{$event->title}}</td>
                                <td class="py-2 px-4 text-center border-b border-grey-light">{{$event->organiser}}</td>
                                <td class="py-2 px-4 text-center border-b border-grey-light flex justify-center">
                                    <button type="submit" class="text-sm bg-gray-500 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">{{$event->status}}</button></td>
                                </td>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para las gráficas -->
<script>
    // Gráfica de Usuarios
    var usersChart = new Chart(document.getElementById('usersChart'), {
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
            datasets: [{
                data: [30, 65],
                backgroundColor: ['#00F0FF', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Gráfica de Comercios
    var commercesChart = new Chart(document.getElementById('commercesChart'), {
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#FEC500', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
    const menuBtn = document.getElementById('menuBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
    });
</script>
</body>
</html>