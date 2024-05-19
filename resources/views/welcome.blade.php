<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Proyecto_mr._jeans_tienda</title>
</head>
<body>
    <h1 class="text-3xl text-orange-500 font-bold underline">
      Hello world!
    </h1>
    <h1>Bienvenido {{ $nombre }} a MR. JEANS TIENDA</h1>
    <ul>
        @foreach ($mercancias as $mercancia)
        <li>
        {{ $mercancia['nombre'] }}
        ${{ $mercancia['valor'] }}
        </li>
        @endforeach
    </ul>
    </body>
</html>