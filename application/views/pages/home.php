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
        <img src="<?php echo base_url().'assets/landingpage/images/carousel1.webp'?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
        <img src="<?php echo base_url().'assets/landingpage/images/carousel2.webp'?>" class="d-block w-100" alt="...">
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
  <div class="container">
    <div class="header-desc">
      <div class="row">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <img src="assets/landingpage/images/mirotaksm.webp" alt="peresmian mirota ksm" srcset="">
        </div>
        <div class="col-md-6" style="margin-top:20px" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="300" data-aos-easing="ease-in-sine">
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
  <div class="container">
    <div class="header-produk-desc">
      <div class="row">
        <div class="col-md-6" style="margin-top:10%" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <h2>Produk Mirota</h2>
          <p><span>Mirota KSM</span> 50 tahun konsisten mendampingi tumbuh kembang masyarakat indonesia. Seluruh produk susu Mirota KSM diproses dengan menerapkan standar Good Manufacturing Practices (GMP) dan mengacu pada sistem jaminan mutu HACCP dan ISO 22000.</p>
          <a href="<?php echo base_url('produk')?>" class="btn-header-cta">Selengkanya</a>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <img style="width:100%; max-width:600px;padding:5%" src="assets/landingpage/images/nutri.webp" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="produk" id="produk">
  <div class="container">
    <div class="header-produk">
      <h2 class="header-text">Produk Mirota KSM Hadir Untuk Setiap Kalangan Usia</h2>
      <img src="assets/landingpage/images/allproduk.png" alt="" srcset="">
    </div>
    <div class="body-produk">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card card-produk">
            <div class="card-body">
              <div class="row">
                  <div class="col-lg-6">
                    <img class="card-img-top" src="<?php echo base_url().'assets/landingpage/images/lactonagold.png'?>" alt="Card image cap">
                  </div>
                  <div class="col-lg 6 col-md-12 col-sm-12">
                    <h3>Lactona 1+ Gold</h3>
                    <p><span>Lactona 1+ Gold</span> untuk membantu pertumbuhan dan perkembangan anak usia <span>1 - 3 tahun</span>.</p>
                    <a href="" class="btn btn-sm btn-produk" data-bs-toggle="modal" data-bs-target="#lactona1+">Beli</a>

                    <div class="modal fade" id="lactona1+" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk Lactona 1+</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="desc-produk"><span>Lactona 1+ Gold</span> merupakan susu untuk anak usia 1-3 tahun. Hadir dengan nutrisinya yang lengkap untuk bantu penuhi kebutuhan gizi harian buah hati Anda.</p>
                            <p class="desc-produk"><span>Lactona 1+ Gold</span> mengandung <span> Protein Hewani Dari Susu Sapi</span> yang sangat baik untuk menunjang tumbuh kembang anak serta memperbaiki sel dan jaringan yang rusak, <span>Protein</span> yang berfungsi memperbaiki jaringan tubuh, <span>Kolin</span> yang berfungsi untuk pembentukan fosfatidilkolin (penyusun membran sel) dan penyusun asetilkolin (neurotransmitter/pengantar impuls saraf).</p>
                            <p class="desc-produk">Selain itu <span>Lactona 1+ Gold</span> mengandung <span>Kalsium</span> yang penting untuk pertumbuhan tulang. Serta mengandung <span>8 Jenis Asam Amino Esensial</span> Asam Amino Esensial sangat penting bagi pertumbuhan dan perkembangan anak, metabolisme tubuh dan sistem saraf.
                            <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="button">Shoppee</button>
                              <button class="btn btn-primary" type="button">Tokopedia</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-produk">
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                    <img class="card-img-top" src="<?php echo base_url().'assets/landingpage/images/lactona3+.png'?>" alt="Card image cap">
                  </div>
                  <div class="col-md-6">
                    <h3>Lactona 3+</h3>
                    <p><span>Lactona 3+</span> untuk membantu pertumbuhan dan perkembangan anak <span>3 tahun ke atas</span>.</p>
                    <a href="" class="btn btn-sm btn-produk "  data-bs-toggle="modal" data-bs-target="#lactona3+">Beli</a>

                    <div class="modal fade" id="lactona3+" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk Lactona 3+</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="desc-produk"><span>LACTONA 3+</span> hadir untuk membantu pertumbuhan dan perkembangan anak <span>3 tahun ke atas</span>.</p>
                            <p class="desc-produk"><span>LACTONA 3+</span> mengandung <span>tinggi kalsium</span> yang berfungsi pembentukan dan mempertahankan kepadatan tulang dan gigi, <span>protein</span> yang berfungsi memperbaiki jaringan tubuh, <span>Kolin</span> yang berfungsi untuk pembentukan fosfatidilkolin (penyusun membran sel) dan penyusun asetilkolin (neurotransmitter/pengantar impuls saraf).</p>
                            <p class="desc-produk">Selain itu <span>LACTONA 3+</span> mengandung asam lemak esensial seperti <span>omega 3, omega 6, omega 9, DHA dan ARA</span> yang penting untuk kecerdasan anak. Serta mengandung <span>8 jenis asam amino esensial</span> yang bermanfaat untuk pertumbuhan anak. <span>FOS (Frukto Oligo Sakarida)</span> merupakan karbohidrat kompleks yang berperan sebagai prebiotik untuk mempertahankan fungsi saluran cerna</p>
                            <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="button">Shoppee</button>
                              <button class="btn btn-primary" type="button">Tokopedia</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <a href="#" class="btn btn-sm btn-cta">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-produk">
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                    <img class="card-img-top" src="<?php echo base_url().'assets/landingpage/images/lactona3+.png'?>" alt="Card image cap">
                  </div>
                  <div class="col-md-6">
                    <h3>LACTONA 3+</h3>
                    <p><span>LACTONA 3+</span> untuk membantu pertumbuhan dan perkembangan anak <span>3 tahun ke atas</span>.</p>
                    <a href="" class="btn btn-sm btn-produk" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-produk">
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                    <img class="card-img-top" src="<?php echo base_url().'assets/landingpage/images/lactona3+.png'?>" alt="Card image cap">
                  </div>
                  <div class="col-md-6">
                    <h3>LACTONA 3+</h3>
                    <p><span>LACTONA 3+</span> untuk membantu pertumbuhan dan perkembangan anak <span>3 tahun ke atas</span>.</p>
                    <a href="" class="btn  btn-sm btn-produk" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Official Online Store</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="button">Shoppee</button>
                              <button class="btn btn-primary" type="button">Tokopedia</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-produk">
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                    <img class="card-img-top" src="<?php echo base_url().'assets/landingpage/images/lactona3+.png'?>" alt="Card image cap">
                  </div>
                  <div class="col-md-6">
                    <h3>LACTONA 3+</h3>
                    <p><span>LACTONA 3+</span> untuk membantu pertumbuhan dan perkembangan anak <span>3 tahun ke atas</span>.</p>
                    <a href="" class="btn btn-sm btn-produk "  data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-produk">
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                    <img class="card-img-top" src="<?php echo base_url().'assets/landingpage/images/lactona3+.png'?>" alt="Card image cap">
                  </div>
                  <div class="col-md-6">
                    <h3>LACTONA 3+</h3>
                    <p><span>LACTONA 3+</span> untuk membantu pertumbuhan dan perkembangan anak <span>3 tahun ke atas</span>.</p>
                    <a href="" class="btn btn-sm btn-produk" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</a>
                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

