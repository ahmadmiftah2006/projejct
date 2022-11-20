<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fontawesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- bootstrap css--}}
    <link rel = "stylesheet" href = "{{asset('ya')}}/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    {{-- costum css --}}
    <link rel="stylesheet" href="{{asset('ya')}}/css/landing.css">
    <link rel="stylesheet" href="{{asset('ya')}}/css/style.css">
    <title>AMHLBRY</title>
</head>
<body>
    {{-- navbar --}}
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.html">
                <img src = "{{asset('ya')}}/images/logo.jpg" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">AMHLBRY</span>
            </a>

            <div class = "order-lg-2 nav-btns">
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-search"></i>
                </button>
            </div>

            <div class="search-form">
                <input type="search" id="search-box" placeholder="search disini...">
                <label for="search-box" class="fas fa-search"></label>
            </div>


            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "/">home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#about">about us</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#buku">Buku</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#terbaru">Terbaru</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#blog">blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- kelar navbar --}}

    {{-- home --}}
    <section class="home" id="home">
        <div class="content">
            <h3>Buku adalah jendela dunia</h3>
            <p>Buku adalah teman yang berharga. Namun, sulit untuk menjelaskan hal itu kepada yang tak suka membaca.</p>
            <a href="#" class="btn">Baca Sekarang</a>
            <a href="#" class="btn">Admin</a>
        </div>
    </section>
    {{-- kelarhome --}}
    {{-- about --}}
    <section class="about" id="about">
        
        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="{{asset('ya')}}/images/perpus1.jpg" alt="">
            </div>

            <div class="content" id="about">
                <h3>Perpustakaan Jakarta Cikini</h3>
                <p>Sejak diresmikan oleh Gubernur DKI Jakarta Anies Baswedan pada 7 Juli 2022, Perpustakaan Umum Daerah Provinsi DKI Jakarta atau yang lebih dikenal dengan Perpustakaan Jakarta Cikini sudah menyedot banyak perhatian orang. Meski revitalisasi kawasan Taman Ismail Marzuki (TIM) belum tuntas semuanya, para pengunjung sudah berjubel memenuhi perpustakaan yang sudah selesai lebih dulu direvitalisasi tersebut.</p>
                <a href="#about_id" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    {{-- kelarabout --}}

    {{-- buku --}}
    <section class="buku" id="buku">

        <h1 class="heading" id="buku">Buku</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/00.00.jpg" alt="">
                </div>
                <div class="content">
                    <h3>00.00</h3>
                    <a href="#" class="btn">Baca Sekarang</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/septian.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Septhian</h3>
                    <a href="#buku_id" class="btn">Baca Sekarang</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/Hujan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hujan</h3>
                    <a href="#" class="btn">Baca Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    {{-- kelarbuku --}}

    {{-- Terbaru --}}
    <section class="terbaru" id="terbaru">

        <h1 class="heading" id="terbaru">Terbaru</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/00.00.jpg" alt="">
                </div>
                <div class="content">
                    <h3>00.00</h3>
                    <a href="#" class="btn">Baca Sekarang</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/septian.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Septhian</h3>
                    <a href="#" class="btn">Baca Sekarang</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/Hujan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hujan</h3>
                    <a href="#terbaru_id" class="btn">Baca Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    {{-- kelarterbaru --}}

    {{-- blog --}}
    <section class="blogs" id="blogs">

        <h1 class="heading" id="blog"> our <span>blogs</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/perpus1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Operasional Perpustakaan</a>  
                    <p>Menurut akun media sosial resmi di Instagram, Perpustakaan Jakarta resmi dibuka untuk umum pada 8 Juli 2022. Untuk operasional, perpustakaan umum ini buka setiap hari, mulai dari jam 9.00 hingga 17.00 WIB.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/perpus2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Syarat berkunjung</a>
                    <p>Sampai saat ini, Perpustakaan Jakarta masih melakukan pembatasan kunjungan dengan kuota maksimal 350 orang per hari. Untuk itu, pengelola perpustakaan menerapkan sistem penjadwalan dan reservasi tempat kepada mereka yang ingin berkunjung.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="{{asset('ya')}}/images/perpus3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Apa yang menarik di Perpustakaan Jakarta?</a>
                    <p>Selain memiliki puluhan ribu koleksi buku yang bisa diakses, Perpustakaan Jakarta menawarkan banyak tempat yang asyik untuk bersantai.

                        Di lantai 3, kamu bisa menemukan bagian informasi dan loker untuk menyimpan barang bawaan. Selain itu, juga ada lounge yang menarik untuk dijadikan lokasi bersantai.</p>
                    <a href="#blog_id" class="btn">read more</a>
                </div>
            </div>
    
        </div>
    
    </section>
    {{-- kelarblog --}}

    {{-- footer --}}
    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>

        <div class="links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Buku</a>
            <a href="#">Terbaru</a>
            <a href="#">Blog</a>
        </div>

        <div class="creadit">Created By <span>AMH</span> | all right reserved </div>
    </section>





 {{-- jquery --}}
 <script src = "{{asset('oke')}}/js/jquery-3.6.0.js"></script>
 {{-- isotope js--}}
 <script src="{{asset('oke')}}/https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
 {{-- bootsrap js --}}
 <script src = "{{asset('oke')}}/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
 {{-- costum js --}}
 <script src = "{{asset('oke')}}/js/script.js"></script>
 {{-- jslanding --}}
 <script src = "{{asset('oke')}}/js/landing.js"></script>
</body>
</html>