<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>


<body>
    @yield('konten')
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>



<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

<script>
    var slideIndexproduk = 1;
    showSlidesproduk(slideIndexproduk);

    function plusSlidesproduk(n) {
        showSlidesproduk(slideIndexproduk += n);
    }

    function currentSlideproduk(n) {
        showSlidesproduk(slideIndexproduk = n);
    }

    function showSlidesproduk(n) {
        var i;
        var slidesproduk = document.getElementsByClassName("mySlides-produk");
        if (n > slidesproduk.length) {
            slideIndexproduk = 1
        }
        if (n < 1) {
            slideIndexproduk = slidesproduk.length
        }
        for (i = 0; i < slidesproduk.length; i++) {
            slidesproduk[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slidesproduk[slideIndexproduk - 1].style.display = "block";
        dots[slideIndexproduk - 1].className += " active";
    }
</script>

{{-- <script>
    const dropdownbtn = document.getElementById('dropdownbtn');
    const dropdownmenu = document.getElementById('dropdownmenu');

    dropdownbtn.addEventListener('click', () => {
        dropdownmenu.classList.toggle('hidden');
    });

    document.addEventListener('click', (event) => {
        const targetElement = event.target;
        if (!targetElement.closest('#dropdownmenu') && !targetElement.closest('#dropdownbtn')) {
            dropdownmenu.classList.add('hidden');
        }
    });
</script> --}}



</html>
