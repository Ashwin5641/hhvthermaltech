<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .carousel {
            position: relative;
            width: 300px;
            margin: 50px auto;
            overflow: hidden;
            border: 2px solid #333;
            border-radius: 10px;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.4s ease-in-out;
        }

        .carousel-slide {
            min-width: 100%;
            height: 200px;
            background: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #fff;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            z-index: 10;
        }

        .prev { left: 10px; }
        .next { right: 10px; }
    </style>
</head>
<body>
    <div class="carousel">
        <div class="carousel-tract">
            <div class="carousel-slide">Slide1</div>
            <div class="carousel-slide">Slide2</div>
            <div class="carousel-slide">Slide3</div>
        </div>
        <div class="carousel-btn prev"></div>
        <div class="carousel-btn next"></div>
    </div>
    <script>
        const track = document.querySelector('.carousel-track');
        const slides = document.querySelectorAll('.carousel-slide');
        const nextBtn = document.querySelector('.next');
        const prevBtn = document.querySelector('.prev');

        let currentIndex = 0;

        function updateCarousel() {
        const slideWidth = slides[0].clientWidth;
        track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
        }

        nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateCarousel();
        });

        window.addEventListener('resize', updateCarousel);

    </script>
</body>
</html>