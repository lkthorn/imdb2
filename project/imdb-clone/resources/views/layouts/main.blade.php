<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMDB CLONE</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans bg-blue-600 text-white">
    <nav class="border-b border-gray-800 bg-blue-900">
        <section class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#">
                        IMDB
                    </a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Tv Shows</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Genres</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Watchlist</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-100 pl-8 px-10 py-2" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-3 ml-2" viewBox="0 0 20 20">
							<path d="M18.175,4.142H1.951C1.703,4.142,1.5,4.344,1.5,4.592v10.816c0,0.247,0.203,0.45,0.451,0.45h16.224c0.247,0,0.45-0.203,0.45-0.45V4.592C18.625,4.344,18.422,4.142,18.175,4.142 M4.655,14.957H2.401v-1.803h2.253V14.957zM4.655,12.254H2.401v-1.803h2.253V12.254z M4.655,9.549H2.401V7.747h2.253V9.549z M4.655,6.846H2.401V5.043h2.253V6.846zM14.569,14.957H5.556V5.043h9.013V14.957z M17.724,14.957h-2.253v-1.803h2.253V14.957z M17.724,12.254h-2.253v-1.803h2.253V12.254zM17.724,9.549h-2.253V7.747h2.253V9.549z M17.724,6.846h-2.253V5.043h2.253V6.846z"></path>
						</svg>
                    </div>
                </div>
            </ul>
        </section>




    </nav>
    @yield('content')
</body>
</html>