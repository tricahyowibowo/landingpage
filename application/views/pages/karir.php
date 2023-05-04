<section class="pages">
  <div class="container py-4 karir">

    <div class="header-pages">
      <div class="image-header d-none d-md-block" style="background: url(<?php echo base_url().'assets/landingpage/images/karir.webp'?>); background-repeat: no-repeat; background-size:cover ;background-position: center;"></div>
    </div>
    
    <div class="header-karir">
      <div class="row">
        <div class="col-md-6">
        <h2 class="header-text">Bersiap untuk membangkan Potensi Terbaikmu Bersama Mirota KSM?</h2>
          
        </div>
        <div class="col-md-6">
          <p class="paragraf">Kami sangat bangga dengan potensi Anda yang bertalenta dan memiliki latar belakang profesional dan mau berkembang bersama kami. Mari gabung bersama kami.</p>
        </div>
      </div>
    </div>
    
    <div class="row lowongan">
    <h2 class="header-text">Lowongan Pekerjaan</h2>
      <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Berpengalaman</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Freshgraduate</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Magang</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="page-content">
            <?php foreach($list_data as $ld): ?>
            <div class="card-desc">
              <div class="content-desc" >
                <h2 class="title-desc"><?= $ld->nama_lowongan?></h2>
                <p class="desc"><span><?= $ld->wilayah ?></span><br>
                Fulltime</p>
                <a href="" class="btn btn-sm btn-cta" data-bs-toggle="modal" data-bs-target="#modal<?= $ld->id_lowongan ?>">LIHAT SELENGKAPNYA</a>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal<?= $ld->id_lowongan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi Lowongan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?= $ld->deskripsi ?>
                    <div class="d-grid gap-2">
                      <a href="<?php echo base_url('formulir')?>" class="btn btn-cta">Apply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        
      </div>
      
    </div>
    
  </div>
</section>