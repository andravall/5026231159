<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Indonesia Untuk Kemanusiaan</title>
    <link rel="icon" type="image/png" href="{{ asset('images/ets-img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Lato:ital,wght@0,300;0,400;0,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/cssets.css') }}" rel="stylesheet">
    <style>
        header.masthead {
            background-image: url('{{ asset('images/ets-img/banner-ika.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            position: relative;
        }
    </style>
</head>
<body id="page-top">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">
            <img src="{{ asset('images/ets-img/logo-ika.png') }}" alt="Logo IKa" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#testimonial-carousel">Apa Kata Mereka</a></li>
                <li class="nav-item"><a class="nav-link" href="#statistik">Statistik</a></li>
                <li class="nav-item"><a class="nav-link" href="#komunitas">Komunitas</a></li>
                <li class="nav-item"><a class="nav-link" href="#pundi">Program Pundi</a></li>
                <li class="nav-item"><a class="nav-link" href="#inovasi">Inovasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeri-video">Galeri Video</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead text-white d-flex align-items-center" id="home">
    <div class="container px-4 px-lg-5">
      <div class="row align-items-center">

        <!-- Teks kanan -->
        <div class="col-lg-6">
          <div class="p-4 rounded-3" style="background-color: rgba(170, 188, 0, 0.85);">
            <h1 class="handwritten mb-3" style="font-family: 'Caveat', cursive; font-size: 2.5rem;">Berbagi untuk Berdaya</h1>
            <p>
              Indonesia untuk Kemanusiaan (IKa) adalah organisasi sumber daya masyarakat sipil (OSMS) yang mendukung inisiatif lokal dalam kerangka keadilan sosial, hak asasi manusia, dan kelestarian lingkungan melalui hibah kecil, berbagi pengetahuan, mengaktifkan jaringan dan kesukarelawanan.
            </p>
            <a class="btn btn-light mt-3 fw-bold text-danger rounded-pill px-4 py-2" href="#about">Cermati lebih lanjut...</a>
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- Testimoni -->
<section class="bg-light py-5" id="testimonial-carousel">
    <div class="container position-relative">
      <h2 class="text-center mb-5">Apa Kata Mereka</h2>

      <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-2 text-center mb-3 mb-md-0">
                <img src="{{ asset('images/ets-img/eka-satya-putra-profile.jpeg') }}" alt="Eka Satya Putra" class="profile-pic">
              </div>
              <div class="col-md-8 text-center text-md-start">
                <p class="fst-italic text-muted">
                  Di tengah perubahan iklim yang semakin ekstrem, Pundi Hijau sudah saatnya dan selayaknya menjadi salah satu pemantik gerakan sosial untuk adaptasi dan mitigasi perubahan iklim melalui keadilan iklim.
                </p>
                <p class="fw-bold">— Eka Satya Putra</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-2 text-center mb-3 mb-md-0">
                <img src="{{ asset('images/ets-img/sandra-moniaga-profile.jpg') }}" alt="Sandra Moniaga" class="profile-pic">
              </div>
              <div class="col-md-8 text-center text-md-start">
                <p class="fst-italic text-muted">
    				Saya bersyukur dan berterima kasih kepada IKa yang mengajak saya berkontribusi untuk teman-teman perempuan korban kekerasan sambil melakukan "decluttering" (upaya untuk menyingkirkan barang-barang tidak terpakai di rumah). Sehingga kami terbantu mem"beres"kan lemari2 dan rumah kami, pada saat yang sama mendapat kesempatan untuk membantu sesama perempuan. Mari kita terus dukung IKa. Salam kemanusiaan.
                </p>
                <p class="fw-bold">— Sandra Moniaga</p>
              </div>
            </div>
          </div>

        </div>

        <!-- Panah Custom -->
        <button class="custom-arrow left" type="button" data-bs-target="#carouselTestimoni" data-bs-slide="prev" aria-label="Sebelumnya">
          &lt;
        </button>
        <button class="custom-arrow right" type="button" data-bs-target="#carouselTestimoni" data-bs-slide="next" aria-label="Berikutnya">
          &gt;
        </button>
      </div>
    </div>
  </section>


<!-- Statistik-->
<section id="statistik" class="py-5" style="background-color: #b5be00; color: white;">
    <div class="container text-center">
      <h5 class="mb-5">Sejak 1995 - 2023, IKa telah menyalurkan dana hibah kepada</h5>
      <div class="row justify-content-center">
        <div class="col-6 col-md-3 mb-4">
          <h2 class="fw-bold display-5">734</h2>
          <p>Organisasi<br>komunitas HAM</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <h2 class="fw-bold display-5">173</h2>
          <p>Women Crisis<br>Centre/WCC</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <h2 class="fw-bold display-5">41</h2>
          <p>Pembela HAM</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <h2 class="fw-bold display-5">13</h2>
          <p>Pegiat budaya</p>
        </div>
      </div>
    </div>
  </section>

<!-- Komunitas -->
<section id="komunitas" class="py-5 text-center">
    <div class="container">
      <p class="mb-4" style="max-width: 800px; margin: auto;">
        Kami ingin selalu berjejaring dengan individual, organisasi masyarakat sipil, perusahaan, dan pelaku ekonomi solidaritas untuk bersama-sama mendukung organisasi pendamping komunitas terpinggirkan, mendorong pembelajaran berkelanjutan, dan mendorong sistem/kebijakan yang mengangkat martabat kemanusiaan dan kelestarian alam. Kami mengajak Anda untuk menjadi komunitas pemberdaya IKa melalui skema relawan, magang ataupun bergabung dengan Anak Muda Indonesia untuk Kemanusiaan.
      </p>

      <h5 class="fw-bold" style="color: #AABC00;">Komunitas<br>Pemberdaya</h5>
      <a class="btn btn-success mt-2 mb-4 px-4 py-2 rounded-pill fw-bold" href="#">Cermati lebih lanjut...</a>

      <div class="d-flex justify-content-center gap-4 flex-wrap mt-3">
        <img src="{{ asset('images/ets-img/icon-relawan.png') }}" alt="Relawan" style="width: 100px;">
        <img src="{{ asset('images/ets-img/icon-magang.png') }}" alt="Magang" style="width: 100px;">
        <img src="{{ asset('images/ets-img/icon-rekrutmen.png') }}" alt="Rekrutmen" style="width: 100px;">
      </div>
    </div>
  </section>

<!-- Program Pundi -->
<section id="pundi" class="py-5 text-center" style="background-color: #DB2D27; color: white;">
    <div class="container">
      <h2 class="mb-5" style="font-family: 'Caveat', cursive;">Program Pundi</h2>

      <div class="row justify-content-center gy-4">
        <!-- Pundi Insani -->
        <div class="col-6 col-md-3">
          <img src="{{ asset('images/ets-img/pundi-insani.jpg') }}" alt="Pundi Insani" class="pundi-img mb-2">
          <p class="mb-0">Pundi Insani</p>
          <strong class="d-block">Pelanggaran Hak Asasi Manusia</strong>
        </div>

        <!-- Pundi Perempuan -->
        <div class="col-6 col-md-3">
          <img src="{{ asset('images/ets-img/pundi-perempuan.jpg') }}" alt="Pundi Perempuan" class="pundi-img mb-2">
          <p class="mb-0">Pundi Perempuan</p>
          <strong class="d-block">Kekerasan dan Diskriminasi terhadap Perempuan</strong>
        </div>

        <!-- Pundi Budaya -->
        <div class="col-6 col-md-3">
          <img src="{{ asset('images/ets-img/pundi-budaya.jpg') }}" alt="Pundi Budaya" class="pundi-img mb-2">
          <p class="mb-0">Pundi Budaya</p>
          <strong class="d-block">Gerakan Budaya untuk Keberagaman</strong>
        </div>

        <!-- Pundi Hijau -->
        <div class="col-6 col-md-3">
          <img src="{{ asset('images/ets-img/pundi-hijau.jpg') }}" alt="Pundi Hijau" class="pundi-img mb-2">
          <p class="mb-0">Pundi Hijau</p>
          <strong class="d-block">Kedaulatan Pangan dan Keadilan Ekologis</strong>
        </div>
      </div>

      <a href="#" class="btn mt-5 rounded-pill px-4 py-2 fw-bold" style="background-color: #B5BE00; color: white;">Donasi</a>
    </div>
  </section>


<!-- Inovasi -->
<section id="inovasi" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5" style="color: #aabc00;">Inovasi</h2>

      <!-- Inovasi 1 -->
      <div class="row mb-5 align-items-center">
        <div class="col-md-6 order-md-1 text-md-start text-center">
          <h5 class="fw-bold" style="color: #aabc00;">VOICE – Better Together</h5>
          <p>Memastikan keberlanjutan pemenuhan reparasi hak ekonomi, sosial dan budaya bagi lansia korban pelanggaran HAM berat masa lalu dengan membangun kepemimpinan anak muda dalam gerakan Hak Asasi Manusia. Didukung pendanaan program oleh Voice. Periode Oktober 2021 – September 2023.</p>
          <a href="#" class="btn rounded-pill px-4 py-2 fw-bold mt-2" style="background-color: #aabc00; color: white;">Cermati lebih lanjut...</a>
        </div>
        <div class="col-md-6 order-md-2 text-center">
          <img src="{{ asset('images/ets-img/program-better-together.jpg') }}" class="img-fluid rounded" alt="Better Together">
        </div>
      </div>

      <!-- Inovasi 2 -->
      <div class="row mb-5 align-items-center flex-md-row-reverse">
        <div class="col-md-6 text-md-start text-center">
          <h5 class="fw-bold" style="color: #aabc00;">Pemaknaan</h5>
          <p>Bagaimana jika evaluasi bukan sekadar angka, tapi ruang refleksi? Pemaknaan adalah pendekatan yang menggali makna di balik perjalanan perubahan sosial. Bersama pemrakarsa, kami menyelami pengalaman, merenungkan tantangan, dan menemukan makna di setiap langkah perubahan. Karena yang benar-benar penting tidak selalu bisa diukur dengan angka.</p>
          <p>Inovasi Pemaknaan didukung oleh Global Fund for Community Foundations (GFCF).</p>
          <a href="#" class="btn rounded-pill px-4 py-2 fw-bold mt-2" style="background-color: #aabc00; color: white;">Cermati lebih lanjut...</a>
        </div>
        <div class="col-md-6 text-center">
          <img src="{{ asset('images/ets-img/program-pemaknaan.jpg') }}" class="img-fluid rounded" alt="Pemaknaan">
        </div>
      </div>

      <!-- Inovasi 3 -->
      <div class="row mb-5 align-items-center">
        <div class="col-md-6 order-md-1 text-md-start text-center">
          <h5 class="fw-bold" style="color: #aabc00;">Program Pengembangan Model Ekonomi Solidaritas</h5>
          <p>Program ini bagian dari gerakan membangun ekonomi yang mensyaratkan adanya perubahan paradigma ekonomi dari yang mengutamakan keuntungan dan pertumbuhan semata menjadi mengutamakan keselarasan hidup sesama manusia dan alam. Saat ini IKa membangun kesadaran bersama para pelaku ekonomi solidaritas, melakukan pemetaan, dan merajut jejaring ekonomi solidaritas.</p>
          <p>Beberapa kegiatan didanai oleh Partners Asia untuk periode Agustus 2020 – September 2021.</p>
          <a href="#" class="btn rounded-pill px-4 py-2 fw-bold mt-2" style="background-color: #aabc00; color: white;">Cermati lebih lanjut...</a>
        </div>
        <div class="col-md-6 order-md-2 text-center">
          <img src="{{ asset('images/ets-img/program-ekonomi-solidaritas.jpg') }}" class="img-fluid rounded" alt="Ekonomi Solidaritas">
        </div>
      </div>

      <!-- Inovasi 4 -->
      <div class="row mb-5 align-items-center flex-md-row-reverse">
        <div class="col-md-6 text-md-start text-center">
          <h5 class="fw-bold" style="color: #aabc00;">Corner Peduli 2014–2020</h5>
          <p>Misi Program Peduli adalah mewujudkan sebuah gerakan inklusi sosial yang mengajak masyarakat masyarakat luas untuk bertindak setara-semartabat dalam kehidupan sehari-hari. Program Peduli ingin seluruh elemen masyarakat mendapat perlakuan yang setara dan memperoleh hak dan kesempatan yang sama sebagai warga negara. Program Peduli didanai oleh The Asia Foundation.</p>
          <a href="#" class="btn rounded-pill px-4 py-2 fw-bold mt-2" style="background-color: #aabc00; color: white;">Cermati lebih lanjut...</a>
        </div>
        <div class="col-md-6 text-center">
          <img src="{{ asset('images/ets-img/program-peduli.jpg') }}" class="img-fluid rounded" alt="Corner Peduli">
        </div>
      </div>
    </div>
  </section>

<!-- Galeri Video -->
<section id="galeri-video" class="py-5">
    <div class="container text-center">
      <h2 class="mb-5" style="color: #aabc00;">Galeri Video</h2>
      <div class="row justify-content-center gy-4">
        <!-- Video 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/7zwZGlP8HXg" title="Video 1" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Video 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/wvnpOig0reE" title="Video 2" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Video 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/KtZKN8uhWAM" title="Video 3" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Contact -->
<section id="contact" class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Teks kiri -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h3 class="fw-bold text-danger">Selalu dapatkan<br>kabar terbaru<br>dari kami!</h3>
      </div>

      <!-- Form kanan -->
      <div class="col-md-6">
        <form id="subscribeForm">
          <div class="mb-3">
            <input type="text" class="form-control border-0 border-bottom rounded-0" placeholder="Tuliskan nama kamu" required style="border-color: rgb(255, 255, 255);">
          </div>
          <div class="mb-4">
            <input type="email" class="form-control border-0 border-bottom rounded-0" placeholder="Tuliskan alamat e-mail kamu" required style="border-color: rgb(255, 255, 255);">
          </div>
          <button type="submit" class="btn btn-outline-danger rounded-pill px-4 py-2 fw-bold">Berlangganan Sekarang</button>
        </form>

        <!-- Pesan Terima Kasih -->
        <div id="thanksMessage" style="display: none; color: green; font-size: 16px;">
          <p>Terima kasih telah berlangganan!</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Footer -->
<footer class="footer-section py-5" style="background-color: #aabc00; color: white;">
    <div class="container">
      <div class="row justify-content-between align-items-start mb-4">

        <!-- Kiri: Logo dan kontak -->
        <div class="col-md-5 mb-4 mb-md-0">
          <img src="{{ asset('images/ets-img/berbagi-untuk-berdaya.png') }}" alt="Berbagi Untuk Berdaya" style="max-width: 180px;" class="mb-3">
          <p>Jl. Cikini Raya No. 43 Jakarta Pusat<br>Jakarta 10330</p>
          <p>Phone : +62 21 315 27 26<br>Fax : +62 21 319 37 31 5<br>Email : info@indonesiauntukkemanusiaan.org</p>
        </div>

        <!-- Kanan: Buku -->
        <div class="col-md-6 text-center text-md-start">
          <h5 class="mb-2">Buku Seri Pembelajaran Galang Dana</h5>
          <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-md-start">
            <img src="{{ asset('images/ets-img/buku-2.jpg') }}" style="max-height: 200px;">
            <img src="{{ asset('images/ets-img/buku-1.jpg') }}" style="max-height: 200px;">
          </div>
        </div>

      </div>

      <!-- Social + Copyright -->
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center border-top pt-3">
        <div class="mb-3 mb-md-0">
          <a href="https://www.facebook.com/indonesiauntukkemanusiaan/" target="_blank" class="me-2">
            <img src="{{ asset('images/ets-img/icon-facebook.png') }}" alt="Facebook" style="width: 24px;">
          </a>
          <a href="https://twitter.com/kabar_IKa" target="_blank" class="me-2">
            <img src="{{ asset('images/ets-img/icon-twitter.png') }}" alt="Twitter" style="width: 24px;">
          </a>
          <a href="https://www.instagram.com/indonesiauntukkemanusiaan/?hl=id" target="_blank" class="me-2">
            <img src="{{ asset('images/ets-img/icon-instagram.png') }}" alt="Instagram" style="width: 24px;">
          </a>
          <a href="https://www.youtube.com/channel/UCnLM_6X49hPc07IJ1s-MVsw" target="_blank">
            <img src="{{ asset('images/ets-img/icon-youtube.png') }}" alt="YouTube" style="width: 24px;">
          </a>
        </div>
        <p class="mb-0">&copy; 2021 Indonesia Untuk Kemanusiaan. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.getElementById("subscribeForm").addEventListener("submit", function(e) {
      e.preventDefault(); // Mencegah halaman reload
      this.reset(); // Mengosongkan form
      document.getElementById("thanksMessage").style.display = "block"; // Menampilkan pesan terima kasih
      document.querySelector("#subscribeForm button").disabled = true; // Menonaktifkan tombol setelah submit
      document.querySelector("#subscribeForm button").textContent = "Terima Kasih!"; // Mengubah teks tombol
    });
</script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>
