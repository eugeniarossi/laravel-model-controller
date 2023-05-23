<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel model controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <!-- container -->
        <div class="container">
            <h1 class="m-3">Movies</h1>
            <!-- list -->
            <ul class="list-unstyled d-flex flex-wrap">
                <!-- foreach -->
                @foreach ($movies as $movie)
                    <!-- ELEMENT TO REPEAT -->
                    <li class="m-3">
                        <!-- card -->
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <!-- title -->
                                <h5 class="card-title">{{ $movie['title'] }}</h5>
                                <!-- original title -->
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                                <!-- nationality -->
                                <div class="card-text">{{ 'Nationality: ' . $movie['nationality'] }}</div>
                                <!-- date -->
                                <div class="card-text">{{ 'Date: ' . $movie['date'] }}</div>
                                <!-- vote -->
                                <div class="card-text">{{ 'Vote: ' . $movie['vote'] }}</div>
                            </div>
                        </div>
                        <!-- /card -->
                    </li>
                    <!-- /ELEMENT TO REPEAT -->
                @endforeach
                <!-- /foreach -->
            </ul>
            <!-- /list -->
        </div>
        <!-- /container -->
    </body>
</html>
