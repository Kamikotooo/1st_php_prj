<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        footer {
            background-color: #eee;
            text-align: center;
            padding: 10px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Мой сайт</h1>
        <nav>
            <ul>
                <li><a href="home">Главная</a></li>
                <li><a href="array">Массивы</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <img src="{{ Vite::asset('resources/images/sample.jpg') }}" alt="Лого">
        <p>
            Проверка
        </p>
    </main>

    <footer>
        &copy; {{ date('Y') }} Шубин Даниил Евгеньевич 
    </footer>
</body>
</html>