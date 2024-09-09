<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Prima pagina con Laravel</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1>{{ $mess }}</h1>

            <p>Ciao {{ $user['name'] }} {{ $user['lastname'] }} tanti auguri per i sui {{ $user['age'] }} anni</p>



            @empty($programmings_language)
                <h3>Devo mettermi ha studiare</h3>
            @else
                <h3>Linguaggi di programmazione conosciuti</h3>
                <ul class="list-group">
                    @foreach ($programmings_language as $programming_language)
                        <li class="list-group-item">{{ $programming_language }}</li>
                    @endforeach
                </ul>
            @endempty

        </div>
    </div>
</body>

</html>
