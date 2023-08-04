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
    <video autoplay muted loop src="{{ asset('video/aerial_beach_footage.mp4') }}" id="videoBackground"></video>
    <div class="text">
        <h1>B'rangkat</h1>
        <h3>Cari Destinasi Liburanmu</h3>
    </div>
    <div class="mySlides">
        <img src="" alt="Image 1">
    </div>
    <div class="dot" id="dot1"></div>
    <div class="dot" id="dot2"></div>
    <div class="dot" id="dot3"></div>
    <footer>
        <p>Copyright &copy; 2023 Brangkat</p>
    </footer>

    <script>
        var slideIndex = 0;

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 0;
            }
            slides[slideIndex].style.display = "block";
            dots[slideIndex].className = "active";
            setTimeout(showSlides, 5000);
        }

        window.onload = showSlides;

        showSlides();
    </script>
</body>

</html+>
