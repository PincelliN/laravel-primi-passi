<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../css/home.css">

    <title>Prima pagina con Laravel</title>
</head>

<body>

    <div class="container">

        <div class="row">
            @include('guest.partial.navbar')


            @empty($programmings_language)
                <h3>Devo mettermi ha studiare</h3>
            @else
                <div class="card my-4 "
                    style="width: 18rem; background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(63,244,6,0.8071603641456583) 100%);">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mess }}</h5>
                        <h6>Informazione personali</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nome:{{ $user['name'] }}</li>
                            <li class="list-group-item">Cognome:{{ $user['lastname'] }}</li>
                            <li class="list-group-item">Età:{{ $user['age'] }}</li>
                    </div>
                    <h6>Linguaggi di programmazione conosciuti</h6>
                    <ul class="list-group list-group-flush mb-2">
                        @foreach ($programmings_language as $programming_language)
                            @if ($loop->first)
                                <li class="list-group-item active">{{ $programming_language }}</li>
                            @else
                                <li class="list-group-item">{{ $programming_language }}</li>
                            @endif
                        @endforeach
                    </ul>

                </div>

            @endempty

        </div>
    </div>
</body>

</html>
