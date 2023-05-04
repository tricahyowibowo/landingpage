  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Data Pelamar
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Tables</li>
        <li class="active"><a href="<?=base_url('admin/tabel_barangmasuk')?>"></a>Tabel Pelamar</li>
      </ol>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
        </div>
        <div class="col-md-12">
            <?php echo $this->session->flashdata('gagal'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <!-- .VIEW TABEL DATA ---->

          <!-- .BOX RELEASE ---->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Data Pelamar</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">  
              <!-- .tabel release -->
              <table id="release" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelamar</th>
                  <th>Posisi</th>
                  <th>Domisili</th>
                  <th>Email</th>
                  <th>No. WA</th>
                  <th>Status</th>
                  <th>Delet</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list_data)){ ?>
                <?php $no = 1;?>
                <?php foreach($list_data as $ld): ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$ld->nama_pelamar?></td>
                    <td><?=$ld->posisi_id?></td>
                    <td><?=$ld->alamat_pelamar?></td>
                    <td><?=$ld->email_pelamar?></td>
                    <td><a href="https://wa.me/<?=$ld->no_wa?>" target="_blank" rel="noopener noreferrer"><?=$ld->no_wa?></a></td>
                    <td><?=$ld->status?></td>

                    <!-- <td><?=mediumdate_indo($ld->tgl_akhir)?></td> -->
                    <td><a href="<?=base_url('kunjunganindustri/detail_tabel/'.$ld->id_pelamar)?>" type="button" class="btn btn-primary btn-sm btn-detail"><i class="fa fa-eye"></i></a></td>
                    <td><a href="<?=base_url('kunjunganindustri/detail_tabel/'.$ld->id_pelamar)?>" type="button" class="btn btn-primary btn-sm btn-detail"><i class="fa fa-pencil"></i></a></td>
                    <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('barangmasuk/delete_barang/'.$ld->id_pelamar)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
