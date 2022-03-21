<body>
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="input" required/>
    <button type="submit">Search</button>
</form>

@if($movies->isNotEmpty())
    @foreach ($movies as $movie)
        <div class="movies-list">
            <p>{{ $movie->title }}</p>
        </div>
    @endforeach
@else 
    <div>
        <h2>No movies found</h2>
    </div>
@endif
</body>