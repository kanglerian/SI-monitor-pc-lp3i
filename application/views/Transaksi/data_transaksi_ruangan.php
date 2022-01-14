<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master Ruangan
        <small>Menampilkan data ruangan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Ruangan</a></li>
        <li class="active">Data Ruangan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Ruangan</h3>
              <div class="box-tools">
                <form action="<?php echo site_url('Transaksi/resultr');?>" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="vr" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php
              foreach ($list_ruangan->result() as $lr)
              {
            echo  "<dl>
                  <dt>ID Komputer :</dt>
                  <dd><h5><i class='fa fa-tag'></i>$lr->id_ruangan</h5></dd>
                  <dt>Nama Komputer :</dt>
                  <dd><h5><i class='fa fa-television'></i>$lr->nama_ruangan</h5></dd>
                  <dt>Nama Ruangan :</dt>
                  <dd><h5><i class='fa fa-building'></i>$lr->lantai</h5></dd>
                  <dt>Jaringan :</dt>
                  <dd><h5><i class='fa fa-sound'></i>$lr->sound</h5></dd>
                  <dt>Deskripsi :</dt>
                  <dd><h5><i class='fa fa-file-text'></i>$lr->deskripsi</h5></dd>
                  <dt>Status :</dt>
                  <dd><h5><i class='fa fa-dot-circle-o'></i>$lr->status</h5></dd>
                </dl>
                <div>"
                .anchor('Ruangan/edit/'.$lr->id_ruangan,'Edit', array('class' => 'btn btn-xs btn-warning','target'=>'edit','data-toggle'=>'modal','data-target'=>'#edit-ruangan')).
                "</div>";
              }?>
              </div>
            <div class="box-body">
              <h4 class="box-title">Daftar Tools</h4>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori Tools</th>
                  <th>Nama Tools</th>
                  <th>Tanggal Pasang</th>
                  <th>Tanggal Lepas</th>
                  <th>Deskripsi</th>
                  <th>Status</th>
                  <th>Operasi</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $no=1;
                foreach ($list_det_ruangan->result() as $ldr)
                {
                echo "<tr>
                      <td>$no</td>
                      <td>$ldr->nama_kategori</td>
                      <td>$ldr->nama_tools</td>
                      <td>$ldr->tgl_pasang</td>
                      <td>$ldr->tgl_lepas</td>
                      <td>$ldr->deskripsi</td>
                      <td>$ldr->status</td>
                      <td>"
                        .anchor('Transaksi/editruangan/'.$ldr->id_detail_r,'Edit', array('class' => 'btn btn-xs btn-warning','target'=>'edit','data-toggle'=>'modal','data-target'=>'#edit-detail'))
                        .anchor('Transaksi/deleteruangan/'.$ldr->id_detail_r,'Delete', array('class' => 'btn btn-xs btn-danger')).
                      "<td>
                      </tr>";

                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          <!--  modal edit ruangan -->
                    <div class="modal modal-info fade" id="edit-detail">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Detail</h4>
                          </div>
                          <iframe name="edit"></iframe>
                        </div>
                      </div>
                    </div>
            <!-- /.modal edit ruangan -->
            <!-- modal edit komputer -->
                    <div class="modal modal-info fade" id="edit-ruangan">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Ruangan</h4>
                          </div>
                          <iframe name="edit"></iframe>
                        </div>
                      </div>
                    </div>
            <!-- /.modal edit ruangan -->

          </div>
        </div>
      </div>
    </section>
  </div>
