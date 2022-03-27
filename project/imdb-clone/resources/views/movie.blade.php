@extends('layouts.main')

@section('content')
    <!-- info about a specific movie -->
    <section class="movie-info">
        <div class="movie-info border-b border-gray-800">
            <div class="container max-auto px-4 py-16 flex">
                <img src="/img/movie1.jpeg" alt="pulp fiction">
                <div class="ml-24">
                    <h2 class="text-4xl font-semibold">Pulp fiction (2019)</h2>
                    
                    <div class="flex items-center text-gray-400 text-sm">
                        <span>Feb 20, 1997</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Action, Thriller, Comedy</span>
                    </div>
                    <p class="text-gray-300 mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Sit sunt nesciunt magnam recusandae nam molestiae quos facilis dicta aperiam! 
                        A architecto ex dolorum explicabo quam cum veniam ipsa perspiciatis voluptates.
                    </p>


                    <div class="mt-10">
                        <h4 class="text-white text-semibold">CAST</h4>
                        <div class="flex mt-1">

                            <div>
                                <div class="text-gray-300">Quentin tarantino</div>
                                <div class="text-sm text-gray-400">Director, writer</div>
                            </div>
                             <div class="ml-8">
                                 <div class="text-gray-300">Samuel jackson</div>
                                <div class="text-sm text-gray-400">Actor</div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="mt-12">
                        <button class="flex items-center bg-orange-500 text-white rounded font-semibold px-5 py-4 hover:bg-orange-600">Add to watchlist</button>
                    </div>

                </div>
            </div>
        </div>
    </section> <!-- end of movie info -->
@endsection