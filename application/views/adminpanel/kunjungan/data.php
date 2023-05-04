  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Kunjungan Industri
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Tables</li>
        <li class="active"><a href="<?=base_url('admin/tabel_barangmasuk')?>"></a>Tabel Barang Masuk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- .VIEW TABEL DATA ---->

          <!-- .BOX RELEASE ---->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Kunjungan Industri</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">  
              <!-- .tabel release -->
              <table id="release" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Hari/Tanggal</th>
                  <th>Jam</th>
                  <th>Institusi/Sekolah</th>
                  <th>Jurusan</th>
                  <th>PIC</th>
                  <th>Kontak</th>
                  <th>Email</th>
                  <th>Pengunjung</th>
                  <th>Pendamping</th>
                  <th>Detail</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list_data)){ ?>
                <?php $no = 1;?>
                <?php foreach($list_data as $dk): ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=longdate_indo($dk->date)?></td>
                    <td><?=$dk->time?></td>
                    <td><?=$dk->instansi?></td>
                    <td><?=$dk->jurusan?></td>
                    <td><?=$dk->nama?></td>
                    <td><?=$dk->no_hp?></td>
                    <td><?=$dk->email?></td>
                    <td><?=$dk->jml_pengunjung.' orang'?></td>
                    <td><?=$dk->jml_pendamping.' orang'?></td>
                    <td><a href="<?=base_url('kunjunganindustri/detail_tabel/'.$dk->id_kunjungan)?>" type="button" class="btn btn-primary btn-sm btn-detail"><i class="fa fa-eye"></i></a></td>
                    <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('barangmasuk/delete_barang/'.$dk->id_kunjungan)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                <?php $no++; ?>
                <?php endforeach;?>
                <?php }else { ?>
                      <td colspan="7" align="center"><strong>Data Kosong</strong></td>
                <?php } ?>
                </tbody>
              </table>
              <!-- /.tabel release -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.BOX KARANTINA ---->

          <!-- /.VIEW TABEL DATA ---->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->