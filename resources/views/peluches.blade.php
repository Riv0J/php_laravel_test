<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>
        <nav>
            <a href=""></a>
        </nav>
    </header>
    <main>
        <ul>
        @foreach ($peluches as $peluche)
            <li>{{$peluche->name}} - {{$peluche->color}}</li>
        @endforeach
        </ul>
    </main>
</body>
</html>
