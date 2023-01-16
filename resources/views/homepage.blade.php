<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-DB</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <h1>Movies List</h1>

        <ul>
            @foreach ($movies as $movie)
                <li>
                    <div class="card" style="width: 18rem;">                        
                        <div class="card-body">
                            <h3 class="card-title">{{ $movie->title }}</h3>
                            <h5 class="card-text">{{$movie->original_title}}</h5>
                            <span>{{$movie->nationality}}</span>
                            <p>{{$movie->date}}</p>
                            <span>{{$movie->vote}}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        
    </main>

</body>

</html>
