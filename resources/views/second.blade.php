<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страничка</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h2>Вторая страничка</h2>
    <p>{{$a}}</p>
    <p>{{$b}}</p>
    <div class ="container mx-auto">
        @for ($i=0; $i < count($products); $i++)
        <p class ="border b-2">
            {{ $products[$i]}}
        </p>
            
        @endfor

        @foreach ($products as $product)
        <p>
            {{ $product}}
        </p>
            
        @endforeach
    </div>
</body>
</html>