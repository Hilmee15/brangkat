<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css')
    <title>Brangkat | Read the Article</title>
</head>

<body>
    <header id="header">
        <a href="http://127.0.0.1:8000/main" class="logo">Brangkat</a>
        <ul>
            <li><a href="http://127.0.0.1:8000/article">Destinations Article</a></li>
        </ul>
        <div id="main-bg">
            <h1>Destinations Article</h1>
        </div>
    </header>
    <section>
        <a href="#article" id="btn">Read the Article</a>
    </section>

    <section id="article">
        
    </section>
    <footer>
        <p>Copyright &copy; 2023 Brangkat</p>
    </footer>
</body>

</html>
