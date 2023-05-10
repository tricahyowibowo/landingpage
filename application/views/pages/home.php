<!-- <div class="contaner">
  <img src="image/carousel1.jpg" alt="Snow" style="width:100%;">
  <div class="bottom-left">
    <H2 style="padding-top:60%;padding-right:60%">
      halo
    </H2>
    <button>TEST</button>
  </div>
</div> -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
        <img src="<?php echo base_url().'assets/landingpage/images/banner-web1.webp'?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active" data-bs-interval="3000">
        <img src="<?php echo base_url().'assets/landingpage/images/banner-web2.webp'?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="layanan">
  <h2 data-aos="zoom-in"  data-aos-delay="200" data-aos-duration="2000" class="header-text">Mirota KSM Konsisten Ikut Serta Dalam Mencerdaskan Bangsa</h2>
  <div class="page-content">
    <div  data-aos="zoom-in-right" data-aos-delay="300" data-aos-duration="2000" class="card-desc" style="background: url(<?php echo base_url().'assets/landingpage/images/carousel1.webp'?>); background-repeat: no-repeat; background-size:cover ;background-position: center;">
      <div class="content-desc" >
        <h2 class="title-desc">Tentang Kami</h2>
        <p class="desc"><span>PT. Mirota KSM</span> Memproduksi dan memasarkan susu formula berkualitas yang berorientasi pada kepuasan konsumen.</p>
        <a href="#sejarah" class="btn-cta">LIHAT SELENGKAPNYA</a>
      </div>
    </div>
    <div  data-aos="zoom-in-right" data-aos-delay="400" data-aos-duration="2000" class="card-desc" style="background: url(<?php echo base_url().'assets/landingpage/images/produkkami.webp'?>); background-repeat: no-repeat; background-size:cover ;background-position: center;">
      <div class="content-desc">
        <h2 class="title-desc">Produk Kami</h2>
        <p class="desc">produk-produk dari PT Mirota KSM telah hadir dan menjadi pilihan konsumen di banyak wilayah di Indonesia</p>
        <a href="#produk" class="btn-cta">LIHAT SELENGKAPNYA</a>
      </div>
    </div>
    <div   data-aos="zoom-in-left" data-aos-delay="500" data-aos-duration="2000" class="card-desc" style="background: url(<?php echo base_url().'assets/landingpage/images/kunjunganindustri.webp'?>); background-repeat: no-repeat; background-size:cover ;background-position: center;">
      <div class="content-desc">
        <h2 class="title-desc">Kunjungan Industri</h2>
        <p class="desc">Sumbangsih PT Mirota KSM pada dunia pendidikan dalam rangka mencerdaskan masyarakat indonesia</p>
        <a href="<?php echo base_url('kunjunganindustri')?>" class="btn-cta">LIHAT SELENGKAPNYA</a>
      </div>
    </div>
    <div   data-aos="zoom-in-left" data-aos-delay="600" data-aos-duration="2000" class="card-desc" style="background: url(<?php echo base_url().'assets/landingpage/images/kerjasama.webp'?>); background-repeat: no-repeat; background-size:cover ;background-position: center;">
      <div class="content-desc">
        <h2 class="title-desc">Peluang Kerjasama</h2>
        <p class="desc">Ingin memiliki produk dengan brand anda sendiri?
          Mari jalin kerjasama dengan PT Mirota KSM untuk wujudkan produk impianmu</p>
          <a href="<?php echo base_url('maklon')?>" class="btn-cta">LIHAT SELENGKAPNYA</a>
      </div>
    </div>
  </div>
</section>

<section class="CTA" id="sejarah">
  <div class="container"  data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-sine">
    <div class="header-desc">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/landingpage/images/mirotaksm.webp" alt="peresmian mirota ksm" srcset="">
        </div>
        <div class="col-md-6" style="margin-top:20px">
          <h2>sejarah Mirota</h2>
          <p>Pada tahun <span>1950-AN</span> ibu <span>Tini Yuniarti</span> beserta suaminya <span>Hendro Sutikno</span> mengawali usahanya dengan memproduksi kue skala kecil yang akhirnya menjadi berbagai jenis usaha bernama <span>MIROTA</span>.</p>
          <p><span>PT. Mirota KSM</span> memiliki visi misi menjadi produsen susu formula yang unggul. Susu yang kami pasarkan berkualitas, aman, dengan harga terjangkau, dan halal dikonsumsi.</p>
          <a href="<?php echo base_url('tentangkami')?>" class="btn-header-cta">TENTANG KAMI</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="produk" id="produk">
  <div class="container"  data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-sine">
    <div class="header-produk-desc">
      <div class="row">
        <div class="col-md-6" style="margin-top:10%">
          <h2>Produk Mirota</h2>
          <p><span>Mirota KSM</span> 50 tahun konsisten mendampingi tumbuh kembang masyarakat indonesia. Seluruh produk susu Mirota KSM diproses dengan menerapkan standar Good Manufacturing Practices (GMP) dan mengacu pada sistem jaminan mutu HACCP dan ISO 22000.</p>
          <a href="<?php echo base_url('produk')?>" class="btn-header-cta">Selengkanya</a>
        </div>
        <div class="col-md-6">
          <img style="width:100%; max-width:600px;padding:5%" src="assets/landingpage/images/nutri.webp" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>
</section>