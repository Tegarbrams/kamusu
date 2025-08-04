@extends('Layout.app')

@section('title', 'Dashboard - KAMUSU')

@section('content') 
<!-- HERO SECTION -->
<section class="position-relative d-flex align-items-center justify-content-center text-white" style="height: 100vh; background: url('/asset/hero.jpg') center center/cover no-repeat;">
  <!-- Overlay gelap -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

  <!-- Konten hero -->
  <div class="container position-relative text-center" style="z-index: 2;">
    <h1 class="display-4 fw-bold">KARANG TARUNA [NAMA DESA/KELURAHAN]</h1>
    <p class="lead">Membangun Generasi Muda Berkarakter, Berkreasi untuk Negeri</p>
    <p>Organisasi kepemudaan tingkat desa yang bergerak dalam pemberdayaan masyarakat dan pengembangan potensi generasi muda</p>
    <a href="#tentang" class="btn btn-primary btn-lg me-2">Bergabung Bersama Kami</a>
    <a href="#program" class="btn btn-outline-light btn-lg">Pelajari Lebih Lanjut</a>
  </div>
</section>


<!-- TENTANG KAMI SECTION -->
<section class="py-5 bg-light" id="tentang">
  <div class="container">
    <h2 class="text-center mb-4">Mengenal KAMUSU</h2>
    <p class="text-center mb-5">Karang Taruna KAMUSU (Kami Muda Mudi Sutopadan) adalah wadah organisasi sosial kepemudaan di Dusun Sutopadan yang lahir dari semangat gotong royong, kebersamaan, dan keinginan kuat generasi muda untuk berperan aktif dalam membangun desa. KAMUSU bukan sekadar tempat berkumpul para pemuda, tetapi juga ruang untuk bertumbuh, belajar, dan berkontribusi nyata bagi masyarakat.

      Sebagai bagian integral dari kehidupan sosial desa, KAMUSU hadir untuk menjawab tantangan zaman melalui berbagai program pemberdayaan, pendidikan, kepedulian sosial, dan pelestarian budaya. Setiap kegiatan yang dijalankan bertujuan untuk menanamkan nilai-nilai karakter, semangat kerja sama, serta membentuk generasi muda yang mandiri, kreatif, dan siap menjadi pemimpin masa depan.
      
      KAMUSU juga aktif menjalin kolaborasi dengan pemerintah desa, tokoh masyarakat, dan lembaga lainnya guna memastikan setiap program memiliki dampak nyata bagi kesejahteraan warga Sutopadan. Baik melalui kegiatan sosial seperti bakti lingkungan, pengajian rutin, maupun pelatihan digital dan UMKM, KAMUSU berkomitmen menjadi motor penggerak perubahan positif dari dan untuk masyarakat.
      
      Dengan semangat “Bersatu untuk Membangun”, KAMUSU mendorong para pemuda dan pemudi untuk tidak hanya menjadi penonton dalam pembangunan desa, tetapi menjadi pelaku utama yang membawa Sutopadan menuju masa depan yang lebih baik.</p>
    <div class="row">
      <div class="col-md-6">
        <h5>Visi</h5>
        <p>"Terwujudnya generasi muda Dusun Sutopadan yang beriman, berakhlak mulia, kreatif, mandiri, dan berdaya saing dalam membangun masyarakat yang sejahtera dan berbudaya."</p>
      </div>
      <div class="col-md-6">
        <h5>Misi</h5>
        <ul>
          <li>Mengembangkan potensi dan bakat generasi muda melalui pelatihan keterampilan, seni, olahraga, dan wirausaha.</li>
          <li>Mendorong kepedulian sosial dan lingkungan dengan melaksanakan kegiatan kemasyarakatan, bakti sosial, dan pelestarian alam.</li>
          <li>Menanamkan nilai-nilai karakter dan kebangsaan melalui pendidikan non-formal, kegiatan keagamaan, dan budaya lokal.</li>
          <li>Menjadi mitra aktif pemerintah desa dalam menyukseskan program pembangunan berbasis kepemudaan.</li>
          <li>Membangun jaringan kemitraan dan kolaborasi dengan berbagai pihak demi peningkatan kapasitas organisasi dan keberlanjutan program.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- PROGRAM UNGGULAN SECTION -->
<section id="program" class="py-5 bg-light">
  <div class="container" id="program">
    <h2 class="text-center mb-4 fw-bold">Program Kami</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      
      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Pemberdayaan Ekonomi</h5>
            <ul class="mb-0">
              <li>Pelatihan Wirausaha Muda</li>
              <li>Pendampingan UMKM Pemuda</li>
              <li>Pasar Tani & Bazar Kreatif</li>
              <li>Workshop Branding</li>
              <li>Edukasi Keuangan Dasar</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Pendidikan & Pelatihan</h5>
            <ul class="mb-0">
              <li>Bimbingan Belajar Gratis</li>
              <li>Kelas Soft Skill</li>
              <li>Pelatihan Komputer Dasar</li>
              <li>Literasi Digital</li>
              <li>Workshop Karier</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Sosial & Kemanusiaan</h5>
            <ul class="mb-0">
              <li>Bakti Sosial & Santunan</li>
              <li>Gotong Royong</li>
              <li>Aksi Peduli Bencana</li>
              <li>Peduli Lansia & Difabel</li>
              <li>Donor Darah Rutin</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Lingkungan Hidup</h5>
            <ul class="mb-0">
              <li>Bank Sampah Pemuda</li>
              <li>Penanaman Pohon</li>
              <li>Bersih Desa & Sungai</li>
              <li>Kampanye Anti Plastik</li>
              <li>Daur Ulang & Eco-Creation</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Olahraga & Seni</h5>
            <ul class="mb-0">
              <li>Turnamen Antar RT</li>
              <li>Jalan Sehat</li>
              <li>Festival Seni Budaya</li>
              <li>Sanggar Tari & Musik</li>
              <li>Kelas Melukis & Kaligrafi</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Keagamaan</h5>
            <ul class="mb-0">
              <li>Pengajian Pemuda</li>
              <li>Kajian Remaja</li>
              <li>Hari Besar Islam</li>
              <li>Pelatihan MC & Khutbah</li>
              <li>Program Tahfidz</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Kesehatan & Remaja</h5>
            <ul class="mb-0">
              <li>Posyandu Remaja</li>
              <li>Penyuluhan Gizi</li>
              <li>Kampanye Anti Narkoba</li>
              <li>Kesehatan Reproduksi</li>
              <li>Olahraga Ringan</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Teknologi & Inovasi</h5>
            <ul class="mb-0">
              <li>Pelatihan Website</li>
              <li>Kelas Editing Video</li>
              <li>Belajar Coding Dasar</li>
              <li>Teknologi Tepat Guna</li>
              <li>Aplikasi Inventaris Desa</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Kewirausahaan Sosial</h5>
            <ul class="mb-0">
              <li>Koperasi Pemuda</li>
              <li>Magang UMKM Lokal</li>
              <li>Pelatihan Sociopreneur</li>
              <li>Program UBT (Usaha Bareng Teman)</li>
              <li>Market Day Produk Pemuda</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- BERITA SECTION -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Berita Terkini</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="/images/berita1.jpg" class="card-img-top" alt="Berita">
          <div class="card-body">
            <h5 class="card-title">Judul Berita</h5>
            <p class="card-text">Ringkasan berita atau artikel terbaru.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI SECTION -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Suara Masyarakat</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <blockquote class="blockquote text-center">
            <p class="mb-4">"Karang Taruna sangat membantu kegiatan sosial di desa kami."</p>
            <footer class="blockquote-footer">Warga Desa A</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION SECTION -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2 class="mb-3">Bergabung dengan Karang Taruna</h2>
    <p class="mb-4">Mari bersama membangun desa yang lebih baik. Jadilah bagian dari perubahan positif di lingkungan kita!</p>
    <div class="d-flex flex-column flex-md-row justify-content-center gap-2">
      <a href="#" class="btn btn-light">Daftar Anggota</a>
      <a href="#" class="btn btn-outline-light">Hubungi Kami</a>
      <a href="#" class="btn btn-light">Donasi</a>
    </div>
  </div>
</section>

@endsection