<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAUD TK DHARMAPATNI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  {{-- <link href="https://afeld.github.io/emoji-css" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
      .barwadah {
        width: 100%;
        height: 5px;
        background: #e8edf5;
        position:fixed;
        z-index: 998;
      }

      .barwarna {
        height: 5px;
        background: #47b2e4;
        width: 0%;
        position:fixed;
        z-index: 998;
      }
  </style>
  <script> 
		window.onscroll = function() {fungsi()};

		function fungsi() {
		  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		  var scrolled = (winScroll / height) * 100;
		  document.getElementById("scroll").style.width = scrolled + "%";
		}
  </script>
</head>

<body>
<div class="barwadah"><div class="barwarna" id="scroll"></div></div>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="">TK DHARMAPATNI</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#about">Sejarah</a></li>
              <li><a class="nav-link scrollto" href="#why-us">Visi Misi</a></li>
              <li><a class="nav-link scrollto" href="#portfolio">Kegiatan & Ekstrakulikuler</a></li>
              <li><a class="nav-link scrollto" href="#team2">Prestasi</a></li>
              <li><a class="nav-link scrollto" href="#skills">Tata Tertib</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#pricing">Program Unggulan</a></li>
          <li><a class="nav-link scrollto" href="#faq">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="#team">Tenaga Pendidik</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a href="/login" class="getstarted">SIPOR</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
</header>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-8.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>PAUD TK Dharmapatni Denpasar</span></h2>
              <p class="animate__animated animate__fadeInUp">Dibawah naungan Yayasan DHARMAPATNI Universitas Udayana, dididik dengan motivasi yang penuh kasih. Kami membuka pendaftaran murid baru tahun ajaran 2022-2023 😊🥰💞</p>
              <a href="https://wa.link/ekh5pm" class="btn-get-started animate__animated animate__fadeInUp scrollto" target="_blank">Daftar Sekarang</a>
                <div class="justify-content-center mt-3">
                  <a href="https://www.youtube.com/watch?v=TDoHIw3nLso" class="glightbox btn2-lihat-video animate__animated animate__fadeInUp scrollto"><i class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                </div>
                <div class="justify-content-center mt-3">
                  <a href="https://www.google.co.id/maps/place/TK+DHARMAPATNI+Denpasar/@-8.6714556,115.2180996,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd241330d45d147:0xa2072ef521450b38!8m2!3d-8.6714609!4d115.2202883!16s%2Fg%2F11k3nmwg0m" class="btn3-lihat-lokasi animate__animated animate__fadeInUp scrollto" target="_blank"><i class="bi bi-map"></i><span>Lihat Lokasi</span></a>
                </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-4.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>PAUD TK Dharmapatni Denpasar</span></h2>
              <p class="animate__animated animate__fadeInUp"> Dibawah naungan Yayasan DHARMAPATNI Universitas Udayana, dididik dengan motivasi yang penuh kasih. Kami membuka pendaftaran murid baru tahun ajaran 2022-2023 😊🥰💞</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
                <div class="justify-content-center mt-3">
                  <a href="https://www.youtube.com/watch?v=TDoHIw3nLso" class="glightbox btn2-lihat-video animate__animated animate__fadeInUp scrollto"><i class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                </div>
                <div class="justify-content-center mt-3">
                  <a href="https://www.google.co.id/maps/place/TK+DHARMAPATNI+Denpasar/@-8.6714556,115.2180996,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd241330d45d147:0xa2072ef521450b38!8m2!3d-8.6714609!4d115.2202883!16s%2Fg%2F11k3nmwg0m" class="btn3-lihat-lokasi animate__animated animate__fadeInUp scrollto" target="_blank"><i class="bi bi-map"></i><span>Lihat Lokasi</span></a>
                </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-6.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>PAUD TK Dharmapatni Denpasar</span></h2>
              <p class="animate__animated animate__fadeInUp">Dibawah naungan Yayasan DHARMAPATNI Universitas Udayana, dididik dengan motivasi yang penuh kasih. Kami membuka pendaftaran murid baru tahun ajaran 2022-2023 😊🥰💞</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
                <div class="justify-content-center mt-3">
                  <a href="https://www.youtube.com/watch?v=TDoHIw3nLso" class="glightbox btn2-lihat-video animate__animated animate__fadeInUp scrollto"><i class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                  <div class="justify-content-center mt-3">
                    <a href="https://www.google.co.id/maps/place/TK+DHARMAPATNI+Denpasar/@-8.6714556,115.2180996,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd241330d45d147:0xa2072ef521450b38!8m2!3d-8.6714609!4d115.2202883!16s%2Fg%2F11k3nmwg0m" class="btn3-lihat-lokasi animate__animated animate__fadeInUp scrollto" target="_blank"><i class="bi bi-map"></i><span>Lihat Lokasi</span></a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sejarah</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              TK Dharmapatni berdiri pada tahun 1986 dibawah naungan Yayasan DHARMAPATNI Universitas Udayana. Berdasarkan surat keputusan Kepala Kantor Wilayah Departemen Pendidikan Nasional Provinsi Bali Nomor: 30/119Kep/I.87.Provinsi Bali.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Berlokasi di Jalan DR Goris No 1 Kelurahan Dauh Puri Kelod Kecamatan Denpasar Barat, disebelah utara Kampus Pariwisata Universitas Udayana.
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row" data-aos="zoom-in">
          <iframe src="https://maps.google.com/maps?q=tkdharmapatni&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-meong">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
      
            <div class="content">
              <h3>Visi<strong>Misi</strong></h3>
              <p>
                "Membantu meletakkan dasar perkembangan sikap pengetahuan keterampilan moral daya cipta yang diperlukan oleh anak didik dengan lingkungannya dan untuk pertumbuhan dan perkembangan"
               </p>
               <ol>
                <li>Pengalaman baru untuk perkembangan dirinya secara optimal</li>
                <li>Menciptakan suasana pendidikan yang memberikan rasa dan menyenangkan</li>
                <li>Mendorong keberanian dan merangsang anak untuk berekspektasi dan mencari jati diri</li>
               </ol>
            </div>
      
          </div>
      
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/portfolio/logotk.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tenaga Pendidik</h2>
          <p>Taman kanak-kanak merupakan pendidikan yang paling fundamental karena perkembangan anak dimasa selanjutnya akan sangat ditentukan oleh berbagai stimulasi bermakna yang diberikan sejak usia dini.</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-5 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/buguru/ayu2.png" class="img-fluid" alt="buguru-ayu"></div>
              <div class="member-info">
                <h4>Sayu Anom Putriyanti,Spd</h4>
                <span>Kepala Sekolah TK Dharmapatni</span>
                <p>Hubungi Kami 😊</p>
                <div class="social">
                  <a href="https://wa.link/ekh5pm" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                  <a href="https://web.facebook.com/sayu.putriyanti" target="_blank"><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/buguru/wina2.png" class="img-fluid" alt="buguru-wina"></div>
              <div class="member-info">
                <h4>Putu Wina Pradnyaningrum</h4>
                <h4>,Spd</h4>
                <span>Guru TK A</span>
                <p>Hubungi Kami 😊</p>
                <div class="social">
                  <a href="https://wa.link/4ob6za" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                  <a href="https://web.facebook.com/wina.pradnya" target="_blank"><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/buguru/diah2.png" class="img-fluid" alt="buguru-diah"></div>
              <div class="member-info">
                <h4>Diah Ayu Kuntari,SH</h4>
                <span>Guru TK B</span>
                <p>Hubungi Kami 😊</p>
                <div class="social">
                  <a href="https://wa.link/re91zl" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                  <a href="https://web.facebook.com/ayou.yudha" target="_blank"><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Program Unggulan</h2>
          <p>Merupakan program yang dikembangkan oleh sekolah untuk mencapai keunggulan dalam output, dengan penyelenggaraan layanan pendidikan yang mengacu pada standar Nasional PAUD dan acuan lainnya yang dikeluarkan oleh Kementrian Pendidikan dan Kebudayaan.</p>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Layanan Pendidikan</h3>
              <h4><span>Mengembangkan berbagai potensi yang anak mencakup :</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Nilai-nilai agama & moral</li>
                <li><i class="bx bx-check"></i> Fisik-motorik</li>
                <li><i class="bx bx-check"></i> Kognitif</li>
                <li><i class="bx bx-check"></i> Bahasa </li>
                <li><i class="bx bx-check"></i> Sosial-emosional</li>
                <li><i class="bx bx-check"></i> Seni</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Layanan Kesehatan, Gizi, dan Perawatan</h3>
              <h4><span> Yang diwujudkan dalam kegiatan rutin :</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Memberi fasilitas kepada tenaga medis untuk melakukan Deteksi Dini Tumbuh Kembang (DDTK) / Stimulasi Deteksi Intervensi Dini Tumbuh Kembang (SDIDTK)</li>
                <li><i class="bx bx-check"></i> Perbaikan gizi seperti pemberian vitamin A</li>
                <li><i class="bx bx-check"></i> Imunisasi</li>
                <li><i class="bx bx-check"></i> Pemeriksaan kesehatan mata, telinga dan mulut anak</li>
                <li><i class="bx bx-check"></i> Berkoordikasi atau meminta bantuan kepada Penilik/Himpaudi/IGTKI/tokoh masyarakat apabila memerlukan bantuan perluasan jaringan kemitraan apabila memerlukan narasumber atau fasilitas lainnya.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box featured">
              <h3>Layanan Pengasuhan</h3>
              <h4><span>Bekerjasama dengan orang tua melalui program Parenting, yang diisi dengan kegiatan : </span></h4>
              <ul>
                <li><i class="bx bx-check"></i> KPO (Kelompok Pertemuan Orang tua) seperti penyuluhan, diskusi, simulasi, seminar tentang tumbuh kembang anak, pencegahan penyakit menular, dan yang lainnya.</li>
                <li><i class="bx bx-check"></i> Konsultasi antara guru dan orangtua berkaitan dengan pertumbuhan dan perkembangan anak.</li>
                <li><i class="bx bx-check"></i> Keterlibatan orang tua didalam kelas, membantu menata lingkungan bermain, membuat media pembelajatan, menjadi model profesi sesuai dengan tema pembelajaran</li>
                <li><i class="bx bx-check"></i> Keterlibatan orang tua diluar kelas, misalnya menjadi kegiatan lapangan</li>
                <li><i class="bx bx-check"></i> Kegiatan bersama keluarga</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box featured">
              <h3>Layanan Perlindungan</h3>
              <h4><span>Semua anak harus terlindung  dari kekerasan fisik dan kekerasan non fisik, antara lain :</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Memastikan lingungan, alat dan bahan main yang digunakan anak dalam kondisi aman, nyaman, dan menyenangkan.</li>
                <li><i class="bx bx-check"></i> Memastikan tidak ada anak yang terkena bully atau kekerasan fisik ataupun ucapan oleh teman, guru, atau orang dewasa lainnya.</li>
                <li><i class="bx bx-check"></i> Mengenalkan kepada anak bagian tubuh yang boleh disentuh dan yang tidak boleh disentuh</li>
                <li><i class="bx bx-check"></i> Mengajarkan anak untuk dapat menolong dirinya apabila mendapat perlakukan tidak nyaman, misalnya meminta pertolongan dari tempat dan orang yang dirasakan membahayakan</li>
                <li><i class="bx bx-check"></i> Semua area disatuan PAUD berada dalam jangkauan pengawasan guru</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->
 <!-- ======= Frequently Asked Questions Section ======= -->
 <section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Fasilitas</h2>
      <p>Berikut fasilitas yang dimiliki TK Dhamapatni </p>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Taman bermain <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              <div class="pic"><img src="assets/img/portfolio/tamanbermain.jpg" class="img-fluid" alt="taman-bermain"></div>
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Tempat parkir luas dan aman <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              <div class="pic"><img src="assets/img/portfolio/tempatparkir.jpg" class="img-fluid" alt="taman-parkir"></div>
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Ruang UKS<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              <div class="pic"><img src="assets/img/portfolio/ruangkelas-2.jpg" class="img-fluid" alt="ruang-kelas-2"></div>
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">WC <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              <div class="pic"><img src="assets/img/portfolio/ruangkelas-5.jpg" class="img-fluid" alt="raungkelas-5"></div>
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Ruang kelas<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              <div class="pic"><img src="assets/img/portfolio/ruangkelas-1.jpg" class="img-fluid" alt="raungkelas-1"></div>
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kegiatan & Ekstrakulikuler</h2>
        <p>Ekstrakulikuler adalah salah satu kegiatan tambahan yang dilakukan diluar jam pelajaran, yang bertempat disekolah ataupun diluar sekolah. Bertujuan untuk menambah pengetahuan, keterampilan, dan wawasan, serta membantu membentuk karakter peserta didik sesusai minat dan bakatnya</p>
        <div class="section-kucing">
          <ol class="fst-italic">
            <li> Tari Bali</li>
            <li> Menggambar</li>
            <li> Bahasa Inggris</li>
            <li> Renang</li>
            <li>Outing (kegiatan menyenangkan di alam terbuka)</li>
          </ol> 
        </div>
      </div>
    
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="assets/img/portfolio/tari.jpg" class="img-fluid" alt="Tari Bali"></div>
          <div class="portfolio-info">
            <h4>Tari Bali</h4>
            <p>Menari Bali</p>
            <a href="assets/img/portfolio/tari.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Menari Bali"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/tari-2.jpg" class="img-fluid" alt="Tari Bali"></div>
          <div class="portfolio-info">
            <h4>Tari Bali</h4>
            <p>Menari Bali</p>
            <a href="assets/img/portfolio/tari-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Menari Bali"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="assets/img/portfolio/bing.jpg" class="img-fluid" alt="Bahasa Inggris"></div>
          <div class="portfolio-info">
            <h4>Bahasa Inggris</h4>
            <p>Belajar bahasa inggris</p>
            <a href="assets/img/portfolio/bing.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar bahasa inggris"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/belajar.png" class="img-fluid" alt="Bahasa Inggris"></div>
          <div class="portfolio-info">
            <h4>Bahasa Inggris</h4>
            <p>Belajar bahasa inggris</p>
            <a href="assets/img/portfolio/belajar.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar bahasa inggris"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/renang.jpg" class="img-fluid" alt="Renang"></div>
          <div class="portfolio-info">
            <h4>Renang</h4>
            <p>Belajar berenang</p>
            <a href="assets/img/portfolio/renang.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar berenang"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img mx-auto"><img src="assets/img/portfolio/renang-2.jpg" class="img-fluid" alt="Renang"></div>
          <div class="portfolio-info">
            <h4>Renang</h4>
            <p>Belajar berenang</p>
            <a href="assets/img/portfolio/renang-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar berenang"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/melukis.jpg" class="img-fluid" alt="Menggambar"></div>
          <div class="portfolio-info">
            <h4>Menggambar</h4>
            <p>Belajar menggambar</p>
            <a href="assets/img/portfolio/melukis.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar menggambar"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/melukis2.jpg" class="img-fluid" alt="Menggambar"></div>
          <div class="portfolio-info">
            <h4>Menggambar</h4>
            <p>Belajar menggambar</p>
            <a href="assets/img/portfolio/melukis2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar menggambar"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/belajar-4.png" class="img-fluid" alt="Menggambar"></div>
          <div class="portfolio-info">
            <h4>Menggambar</h4>
            <p>Belajar menggambar</p>
            <a href="assets/img/portfolio/belajar-4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar menggambar"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/membuatbendera.jpg" class="img-fluid" alt="meong"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Belajar membuat bendera</p>
            <a href="assets/img/portfolio/membuatbendera.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar membuat bendera"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/belajar-3.png" class="img-fluid" alt="kegiatan"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Belajar membuat bendera</p>
            <a href="assets/img/portfolio/belajar-3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar membuat bendera"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/belajar-5.png" class="img-fluid" alt="Kegiatan"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Lomba memasukkan bendera</p>
            <a href="assets/img/portfolio/belajar-5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lomba memasukkan bendera"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/belajar-9.png" class="img-fluid" alt="Kegiatan"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Makan siang bersama</p>
            <a href="assets/img/portfolio/belajar-9.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Makan siang bersama"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/belajar-6.png" class="img-fluid" alt="Kegiatan"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Makan siang bersama</p>
            <a href="assets/img/portfolio/belajar-6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Makan siang bersama"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/olga.jpg" class="img-fluid" alt="Kegiatan"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Lomba enggrang</p>
            <a href="assets/img/portfolio/olga.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lomba enggrang"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img justify-content-center"><img src="assets/img/portfolio/outing.png"  class="img-fluid" alt="Outing"></div>
          <div class="portfolio-info">
            <h4>Outing</h4>
            <p>Belajar berkebun</p>
            <a href="assets/img/portfolio/outing.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Belajar berkebun"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/gambar2.jpg" class="img-fluid" alt="Kegiatan"></div>
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Lomba fashion show</p>
            <a href="assets/img/portfolio/gambar2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lomba fashion show"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/outing-2.jpg" class="img-fluid" alt="outing"></div>
          <div class="portfolio-info">
            <h4>Outing  </h4>
            <p>Kunjungan ke parbik teh botol Sosro</p>
            <a href="assets/img/portfolio/outing-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kunjungan ke parbik teh botol Sosro"><i class="bx bx-zoom-in"></i></a>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Portfolio Section -->
  
      <!-- ======= Services Section ======= -->
      <section id="team2" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Prestasi</h2>
            <p>TK Dharmapatni terus mendukung dan mendorong anak didiknya untuk berprestasi mengembangkan minat dan bakatnya</p>
          </div>
  
          <div class="row justify-content-center">
  
            <div class="col-lg-5 mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex justify-content-center">
                <div class="member-info">
                  <img src="assets/img/portfolio/prestasi2.jpg" class="img-fluid" alt="prestasi">
                  </div>
              </div>
            </div>

            <div class="col-lg-5 mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex justify-content-center">
                <div class="member-info">
                  <img src="assets/img/portfolio/lombamelukis.jpg" class="img-fluid" alt="prestasi">
                  </div>
              </div>
            </div>
        </div>
      </section><!-- End Team Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/portfolio/prestasi3.jpg" class="img-fluid rounded" alt="murid">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="70">
            <h3>Tata Tertib</h3>
            <div class="skills-content">
              <div class="progress">
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <ol class="fst-italic mt-3">
              <li> Selama hari sekolah anak-anak diwajibkan memakai Kostum/seragam sekolah yang telah ditetapkan</li>
              <li> Anak-anak diharapkan turut menjaga kebersihan kelas, halaman, dan lingkungan sekolah dengan membuang sampah pada tempatnya</li>
              <li> Anak-anak hendaknya berbicara dan bersikap yang sopan terhadap semua teman-teman dan guru</li>
              <li> Anak-anak telah hadir disekolah 15 menit sebelum kegiatan dimulai</li>
              <li> Anak tidak dibolehkan mengotori, menulis atau mencoret-coret bangku, tembok dan bagian lainnya</li>
              <li> Anak-anak tidak dibolehkan membawa uang</li>
              <li> Anak-anak dilarang bermain-main dijalan depan sekolah</li>
              <li> Pembayaran uang sekolah anak-anak diharapkan tepat pada waktu yang telah ditentukan</li>
              <li> Anak-anak yang berhalangan hadir kesekolah hendaknya ada pemberitahuan atau melaporkan kepada pihak sekolah</li>
            </ol> 
          
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak Kami</h2>
          <p>Jika terdapat hal-hal yang ingin ditanyakan, jangan ragu untuk kontak kami, segera hubungi kontak dibawah ini 😊😊</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. DR. Goris No.10, Dangin Puri Klod, Kec. Denpasar Tim., Kota Denpasar</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>tkdharmapatni05@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Whatsapp</h4>
                <p> <a href="https://wa.link/ekh5pm" target="_blank">0852-3975-8860 (Ayu)</a> /
                  <a href="https://wa.link/4ob6za" target="_blank">0819-3601-6019 (Wina)</a> /
                 <a href="https://wa.link/re91zl" target="_blank">0831-1470-8610 (Diah)</a></p>
              </div>

              <iframe src="https://maps.google.com/maps?q=tkdharmapatni&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>TK Dharmapatni</span></strong>. All Rights Reserved Designed by <a href="https://bootstrapmade.com/" target="_blank" style = "color: #fff">TK Dharmapatni X BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  {{-- <div id="preloader"></div> --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>