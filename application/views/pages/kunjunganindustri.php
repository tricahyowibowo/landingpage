<style>
  @media (max-width: 767px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* medium and up screens */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33%);
    }
    
    .carousel-inner .carousel-item-start.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start { 
  transform: translateX(0);
}
</style>


<section class="pages">
  <div class="container py-4 kunjunganindustri">
    <div class="header-pages">
      <div class="image-header d-none d-md-block" style="background: url(<?php echo base_url().'assets/landingpage/images/fotobersama.webp'?>); background-repeat: no-repeat; background-size:cover ;background-position: center;"></div>
    </div>

    <div class="body-pages" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine">
      <div class="row">
        <div class="col-md-6">
          <div >
            <img class="content-image" src="assets/landingpage/images/kunjunganindustri.webp" srcset="">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="header-text">Sumbangsih Dalam Dunia Pendidikan</h2>
          <p class="paragraf">
            <span>Mirota KSM</span> memberikan kesempatan kepada siswa/mahasiswa untuk dapat mengenal secara langsung tentang bagaimana dunia usaha, dunia industri dan dunia kerja.
          </p>
        </div>
      </div>
    </div>

    <div class="gallery-kunjungan my-3" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine">
      <h2 class="header-text">Gallery Kunjungan Industri Kami</h2>
      <div class="row mx-auto my-auto justify-content-center">
          <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <div class="col-md-4 slideshow-kunjungan" >
                          <img class="content-image" src="assets/landingpage/images/kelilinggedung.webp" srcset="">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4 slideshow-kunjungan" >
                        <img class="content-image" src="assets/landingpage/images/pemaparanmateri.webp" srcset="">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4 slideshow-kunjungan">
                        <img class="content-image" src="assets/landingpage/images/prosesproduksi.webp" srcset="">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4 slideshow-kunjungan">
                        <img class="content-image" src="assets/landingpage/images/kelilinggedung.webp" srcset="">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4 slideshow-kunjungan">
                        <img class="content-image" src="assets/landingpage/images/kelilinggedung.webp" srcset="">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4 slideshow-kunjungan">
                        <img class="content-image" src="assets/landingpage/images/kelilinggedung.webp" srcset="">
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: url('assets/images/preview-icon.png')"></span>
              </a>
              <a class="carousel-control-next" href="#recipeCarousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url('assets/images/next-icon.png')"></span>
              </a>
          </div>
      </div>
    </div>
  </div>
  
  <div class="CTA-kunjungan">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine"> 
        <div class="col-md-4">
          <img style="width:100%" src="assets/landingpage/images/customer_service.png" srcset="">
        </div>
        <div class="col-md-8" style="margin-top:10%">
          <h2 class="header-text" style="padding-bottom:10px">Ingin Memiliki Pengalaman yang Sama Dengan Mereka? </h2>
          <p class="paragraf">
            dapat melihat dan berkenalan secara langsung dengan kami.
          </p>
          <a href="<?php echo base_url('formulir-kunjungan')?>" class="btn btn-cta"> Daftarkan Instansi Anda</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 3
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

</script>