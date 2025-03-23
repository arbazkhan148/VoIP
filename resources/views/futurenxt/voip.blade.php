@extends('layouts.futurenxt')
@section('content')
<style>
    /* Gallery Section */
    .gallery {
        padding: 60px 0;
        background: #f8f9fa;
        text-align: center;
    }

    .section-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 30px;
    }

    /* Gallery Grid */
    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .gallery-item {
        width: 220px;
        text-align: center;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .gallery-item img:hover {
        transform: scale(1.05);
    }

    .image-name {
        font-size: 16px;
        color: #555;
        margin-top: 8px;
    }

    /* Lightbox (Popup) */
    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 1000;
    }

    /* Full-Screen Image */
    .lightbox-img {
        max-width: 90%;
        max-height: 90vh;
        border-radius: 8px;
        transition: 0.3s;
    }

    /* Close Button */
    .close-btn {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 40px;
        color: white;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.2);
        padding: 10px;
        border-radius: 50%;
    }

    /* Navigation Buttons */
    .prev-btn, .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.5);
        border: none;
        font-size: 30px;
        padding: 10px;
        cursor: pointer;
        border-radius: 50%;
    }

    .prev-btn {
        left: 20px;
    }

    .next-btn {
        right: 20px;
    }
</style>
</head>
<body>

<section id="gallery" class="gallery section">
<div class="container">
    <h3 class="section-title">VOIP</h3>
    <div class="gallery-container">
        <div class="gallery-item" onclick="openLightbox(0)">
            <img src="images/Computer-to-Computer VoIP.jpg" alt="VOIP Image 1">
            <p class="image-name">Computer-to-Computer VoIP</p>
        </div>
        <div class="gallery-item" onclick="openLightbox(1)">
            <img src="images/IP Phones.jpg" alt="VOIP Image 2">
            <p class="image-name">IP Phones</p>
        </div>
        <div class="gallery-item" onclick="openLightbox(2)">
            <img src="images/Analog Telephone Adapter (ATA).jpg" alt="VOIP Image 3">
            <p class="image-name">Analog Telephone Adapter</p>
        </div>
    </div>
</div>
</section>

<!-- Lightbox (Popup) -->
<div id="lightbox" class="lightbox">
<span class="close-btn" onclick="closeLightbox()">&times;</span>
<img id="lightbox-img" class="lightbox-img">
<button class="prev-btn" onclick="prevImage()">&#10094;</button>
<button class="next-btn" onclick="nextImage()">&#10095;</button>
</div>

<script>
let currentIndex = 0;
const images = [
"images/Computer-to-Computer VoIP.jpg",
"images/IP Phones.jpg",
"images/Analog Telephone Adapter (ATA).jpg"
];

function openLightbox(index) {
currentIndex = index;
document.getElementById("lightbox-img").src = images[currentIndex];
document.getElementById("lightbox").style.display = "flex";
}

function closeLightbox() {
document.getElementById("lightbox").style.display = "none";
}

function nextImage() {
currentIndex = (currentIndex + 1) % images.length;
document.getElementById("lightbox-img").src = images[currentIndex];
}

function prevImage() {
currentIndex = (currentIndex - 1 + images.length) % images.length;
document.getElementById("lightbox-img").src = images[currentIndex];
}
</script>

</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection



