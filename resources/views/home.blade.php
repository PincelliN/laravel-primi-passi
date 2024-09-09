<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prima pagina con Laravel</title>
</head>

<body>
    <h1>{{ $mess }}</h1>

    <p>Ciao {{ $user['name'] }} {{ $user['lastname'] }} tanti auguri per i sui {{ $user['age'] }} anni</p>



    @if (empty($programming_language))
        <h3>Linguaggi di programmazione conosciuti</h3>
        <ul>
            @foreach ($programmings_language as $programming_language)
                <li>{{ $programming_language }}</li>
            @endforeach
        @else
            <h3>Devo mettermi ha studiare</h3>
    @endif

    </ul>

</body>

</html>
