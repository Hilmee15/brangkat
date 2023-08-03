<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css')
    <title>Brangkat | Find Your Destination</title>
</head>

<body>
    <header id="header">
        <a href="http://127.0.0.1:8000/main" class="logo">Brangkat</a>
        <ul>
            <li><a href="http://127.0.0.1:8000/article">Destinations Article</a></li>
        </ul>
        <div id="main-bg">
            <p>Wanna find a Destination?</p>
            <h1>B'rangkat</h1>
            <p>is your solution</p>
        </div>
    </header>
    <section>
        <a href="#dst" id="btn">Find Your Destination</a>
    </section>

    <section id="dst">
        @foreach ($data as $item)
            <figure>
                <img src=" {{ url('/') . Storage::url('uploads/' . $item->image) }}" alt="">
                <figcaption>{{ $item->name }}</figcaption>
            </figure>
        @endforeach
    </section>
    <footer>
        <p>Copyright &copy; 2023 Brangkat</p>
    </footer>
</body>

</html>
