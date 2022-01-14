<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Barang Hilang
      <small>Control panel</small>
      <h5>Jumlah :</h5><h4><?php echo $daftar_hilang->num_rows();?></h4>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Lihat Barang Hilang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Barang Hilang</h3>

            <!--- search awal -->
            <div class="box-tools">
              <form action="<?php echo site_url('Hilang/result');?>" method="get">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="v" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
            </div>
            <!--- search akhir -->

          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Tanggal Ditemukan</th>
                <th>Ruangan</th>
                <th>Status</th>
                <th>Operasi</th>
              </tr>
              <?php
                  $no=1;
                    foreach ($daftar_hilang->result() as $dm)
                      {
                        echo "<tr>
                              <td>$no</td>
                              <td>$dm->nama_barang</td>
                              <td>$dm->category</td>
                              <td>$dm->tgl_ditemukan</td>
                              <td>$dm->room_name</td>
                              <td>$dm->status</td>
                              <td>" .anchor('Hilang/details/'.$dm->id_hilang,'Details', array('class' => 'btn btn-xs btn-info'))
                                    .anchor('Hilang/edit/'.$dm->id_hilang,'Edit', array('class' => 'btn btn-xs btn-warning'))
                                    .anchor('Hilang/delete/'.$dm->id_hilang,'Delete', array('class' => 'btn btn-xs btn-danger')).
                              "</td>
                              </tr>";

                              $no++;
                      }
                  ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.row (main row) -->

  </section>
</div>
