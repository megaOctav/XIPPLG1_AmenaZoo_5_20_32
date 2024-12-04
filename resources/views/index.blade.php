<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AmenaZoo</title>
  @vite('resources/css/app.css')
  @vite('resources/js/index.js')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
</head>

<body class="bg-green-900 text-white">

  <!-- Header -->
  <header class="fixed w-full px-10 py-5 flex justify-between items-center bg-transparent z-50">
    <a href="#" class="text-3xl ml-8 font-semibold text-white flex items-center gap-2">
      <i class="fas fa-paw"></i> Ameena
    </a>
    <nav class="flex gap-5 mr-8">
      <a href="#home" class="text-lg hover:bg-green-700 px-3 py-2 rounded">Beranda</a>
      <a href="#koleksi" class="text-lg hover:bg-green-700 px-3 py-2 rounded">Koleksi</a>
      <a href="#service" class="text-lg hover:bg-green-700 px-3 py-2 rounded">Layanan</a>
      <a href="#contact" class="text-lg hover:bg-green-700 px-3 py-2 rounded">Kontak</a>
    </nav>
  </header>

  <!-- Home Section -->
  <section id="home" class="h-screen flex items-center bg-cover bg-center"
    style="background-image: url('asset/css/chk.jpg'); background-size:cover; background-position: center; padding: 0 10%; align-items: center; display: flex; height: 100vh;">
    <div class="text- max-w-96 h-auto bg-black bg-opacity-25 p-10 rounded-lg">
    <h1 class="text-4xl pb-6 font-bold">Selamat Datang</h1>
    <h2 class="text-2xl pb-8">Ameena Zoo</h2>
    <p class="mt-5 pb-8 text-lg">
        Tempat seru dengan berbagai koleksi satwa dari berbagai belahan dunia, dengan fokus pada upaya konservasi dan
        edukasi.
    </p>
    <div class="flex gap-5 justify-center mt-5">
        <a href="https://www.instagram.com/" target="_blank" class="text-2xl"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://x.com/" target="_blank" class="text-2xl"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://youtube.com/" target="_blank" class="text-2xl"><i class="fa-brands fa-youtube"></i></a>
    </div>
</div>

  </section>

<!-- Koleksi Section -->
<section id="koleksi" class="bg-green-700 py-20 text-center px-5 md:px-20">
  <h2 class="text-4xl font-bold mb-10 text-white">Koleksi</h2>
  
  @foreach($animals as $animal)
    <div class="bg-green-800 rounded-lg overflow-hidden w-64 shrink-0 shadow-lg">
        <img src="{{ asset('storage/' . $animal->image) }}" alt="{{ $animal->name }}" class="w-full h-40 object-cover">
        <div class="p-5">
            <h3 class="text-lg font-semibold text-white">{{ $animal->name }}</h3>
            <p class="text-sm text-gray-300">{{ $animal->description }}</p>
        </div>
    </div>
  @endforeach
</section>


  <!-- Services Section -->
  <section id="service" class="bg-green-800 py-20 text-center">
    <h1 class="text-4xl font-bold mb-10">Layanan</h1>

    <div class="flex flex-wrap justify-center gap-10">

      <div class="bg-green-900 max-w-96 rounded-lg p-10 shadow-lg ">
        <i class="fas fa-book text-4xl mb-5"></i>
        <h2 class="text-2xl font-semibold mb-3">Edukasi</h2>
        <p>Program edukasi "Mengenal Satwa dan Lingkungan"
            bertujuan untuk meningkatkan kesadaran dan pemahaman pengunjung,
            terutama anak-anak, tentang pentingnya pelestarian satwa dan lingkungan.</p>
      </div>

      <div class="bg-green-900 max-w-96 rounded-lg p-10 shadow-lg">
        <i class="fas fa-route text-4xl mb-5"></i>
        <h2 class="text-2xl font-semibold mb-3">Pemandu Wisata</h2>
        <p>Tur terpandu bagi pengunjung kebun binatang. Pemandu berpengalaman akan 
            menjelaskan berbagai informasi menarik tentang hewan-hewan, 
            habitat aslinya, perilaku, serta upaya konservasi yang dilakukan kebun binatang.</p>
      </div>

      <div class="bg-green-900 max-w-96 rounded-lg p-10 shadow-lg">
        <i class="fas fa-leaf text-4xl mb-4"></i>
        <h2 class="text-2xl font-semibold mb-3">Penangkaran</h2>
        <p>Melestarikan spesies langka dan terancam punah. Melalui upaya penangkaran, 
            kebun binatang memastikan keberlangsungan populasi satwa melalui pengembangbiakan yang terkontrol.</p>
      </div>
    </div>

  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-green-700 py-20">
    <div class="container mx-auto px-10 flex flex-col md:flex-row justify-between items-center">
      <!-- Form -->
      <form action="{{ route('contact.store') }}" method="POST" class="bg-green-800 p-10 rounded-lg w-full md:w-1/2 shadow-lg">
      @csrf
        <h3 class="text-3xl font-bold mb-5">Hubungi Kami</h3>

         <!-- Pesan Sukses -->
      @if(session('success'))
        <div class="text-green-500 mb-4">
          {{ session('success') }}
        </div>
      @endif


        <input type="text" placeholder="Nama" required
          class="w-full mb-4 p-3 rounded bg-green-900 placeholder-gray-300">
        <input type="email" placeholder="Email" required
          class="w-full mb-4 p-3 rounded bg-green-900 placeholder-gray-300">
        <textarea placeholder="Tulis Pesan..." required
          class="w-full mb-4 p-3 rounded bg-green-900 placeholder-gray-300"></textarea>
        <button type="submit"
          class="bg-green-600 hover:bg-green-700 px-5 py-3 rounded text-white font-bold w-full">Kirim</button>
      </form>
      <!-- Map -->
      <div class="mt-10 md:mt-0 md:ml-10 w-full md:w-1/2">
        <iframe class="w-full h-full rounded-lg" style="height: 400px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3648594783496!2d109.24876621539383!3d-7.421791675016787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e657fb4c0eae301%3A0xa11c1bdf1e1d928e!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sen!2sid!4v1701234567890"
          frameborder="0" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-green-900 py-5 text-center">
    <p>Copyright &copy;2024 Designed by <span class="font-bold">Amena</span></p>
  </footer>
  <script src="/asset/js/index.js"></script>
  @if(session('success'))
    <div class="text-green-500 mb-4">
        {{ session('success') }}
    </div>
  @endif


</body>

</html>