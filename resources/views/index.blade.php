<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmenaZoo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

</head>
<body id="html">
    <!--header awal-->
    <header>
        <div class="container">
            <a href="#" class="logo"> <i class="fas fa-paw"></i>Ameena</a>
            <nav class="navbar">
                <a href="#home" class="demo">Beranda</a>
                <a href="#collection" class="demo">Koleksi</a>
                <a href="#service" class="demo">Layanan</a>
                <a href="#contact" class="demo">Kontak</a>
            </nav>            
        </div>
        
    </header>
    <!--end-->
    <section id="home">
        <form>
            <h1>Selamat Datang</h1>
        <!--anggap aja ini nanti judul-->
            <h2>Ameena Zoo</h2>
            <p>Tempat seru dengan berbagai koleksi satwa dari berbagai 
                belahan dunia, dengan fokus pada upaya konservasi dan edukasi.</p>
        <div class="home-sci">
            <a href="https://www.instagram.com/blaeivy._?igsh=MTUyeWE4bjBtOWVibQ==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://x.com/asahiyamazoo1?t=YKLRAGGeX-MddQrTx1_1YA&s=09" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://youtu.be/1-1TYYIggAE?si=YOl6cQHrGFiTWfdq" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </form>
        <span class="beranda-imgHover"></span>
    </section>
    
    <!--buat hewan hewan-->
    <section id="collection">
    <h2>Koleksi</h2>
    <div class="collection-container">
        <div class="collection-items">
            <div class="item">
                <img src="asset/foto/leopard.jpg" alt="Leopard" class="item-image">
                <div class="item-info">
                    <p>Description of Leopard.</p>
                </div>
            </div>
            <div class="item">
                <img src="asset/foto/singa.jpg" alt="Lion" class="item-image">
                <div class="item-info">
                    <p>Description of Lion.</p>
                </div>
            </div>
            <div class="item">
                <img src="asset/foto/tiger.jpg" alt="Tiger" class="item-image">
                <div class="item-info">
                    <p>Description of Tiger.</p>
                </div>
            </div>
            <div class="item">
                <img src="asset/foto/lemur.jpg" alt="Lemur" class="item-image">
                <div class="item-info">
                    <p>Description of Lemur.</p>
                </div>
            </div>
            <div class="item">
                <img src="asset/foto/rusa aja.jpg" alt="Rusa" class="item-image">
                <div class="item-info">
                    <p>Description of Rusa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

        <section id="service">
            <div class="conservice">
                <div class="judul">
                    <h1>Layanan</h1>
                </div>
                <div class="tipe">
                    <div class="ca">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h2>Edukasi</h2>
                        <p>Program edukasi "Mengenal Satwa dan Lingkungan" bertujuan untuk 
                            meningkatkan kesadaran dan pemahaman pengunjung, terutama anak-anak, 
                            tentang pentingnya pelestarian satwa dan lingkungan.
                        </p>
                        <a href="" class="button">Read More</a>
                    </div>

                    <div class="ca">
                        <div class="icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <h2>Pemandu Wisata</h2>
                        <p>Tur terpandu bagi pengunjung kebun binatang. 
                            Pemandu berpengalaman akan menjelaskan berbagai informasi menarik tentang hewan-hewan, 
                            habitat aslinya, perilaku, serta upaya konservasi yang dilakukan kebun binatang. 
                        </p>
                        <a href="" class="button">Read More</a>
                    </div>

                    <div class="ca">
                        <div class="icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h2>Penangkaran</h2>
                        <p>Melestarikan spesies langka dan terancam punah. Melalui upaya penangkaran, 
                            kebun binatang memastikan keberlangsungan populasi satwa melalui pengembangbiakan yang terkontrol.
                        </p>
                        <a href="" class="button">Read More</a>
                    </div>

                </div>
            </div>
        </section>

    <!--kolesi hewan-->
    <section id="contact">
        <div class="contact-container">
            <!--form-->
            <div class="form-container">
                <h3>Hubungi Kami</h3>
                <form action="" class="contact-form">
                    <input type="text" placeholder="Nama" required>
                    <input type="email" name="" id="" placeholder="Email..." required>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Tulis Pesan..." required></textarea>
                    <input type="submit" value="Kirim" class="send-button">
                    <!--button send-->
                </form>
            </div>
            <!--map-->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.6147873594987!2d-71.12082882253468!3d42.3744357676903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377427d7f0199%3A0x5937c65cee2427f0!2sUniversitas%20Harvard!5e0!3m2!1sid!2sid!4v1701355592636!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="footercontain">
        <div class="footerNav">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="">Tim Kami</a></li>
            </ul>
        </div>
        </div>

        <div class="footerbot">
            <p>Copyright &copy;2024; Designed by <span class="designer">Amena</span></p>
        </div>
    </footer>

    <script src="{{ asset('asset/js/index.js') }}"></script>

</body>
</html>