<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master Komputer
        <small>Menampilkan data komputer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Komputer</a></li>
        <li class="active">Data Komputer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Komputer</h3>
              <div class="box-tools">
                <form action="<?php echo site_url('Komputer/result');?>" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="v" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="btn-group">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah-komputer"><i class="fa fa-plus"></i>  Tambah Data Komputer</button>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Meja</th>
                  <th>ID Komputer</th>
                  <th>Nama Komputer</th>
                  <th>Nama Ruangan</th>
                  <th>Jaringan</th>
                  <th>Status</th>
                  <th>Operasi</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $no=1;
                foreach ($list_komputer->result() as $lk)
                {
                echo "<tr>
                      <td>$no</td>
                      <td>$lk->no_meja</td>
                      <td>$lk->id_komputer</td>
                      <td>$lk->nama_komputer</td>
                      <td>$lk->nama_ruangan</td>
                      <td>$lk->kabel</td>
                      <td>$lk->status</td>
                      <td>"
                        .anchor('Transaksi/result?v='.$lk->id_komputer,'Details', array('class' => 'btn btn-xs btn-info'))
                        .anchor('Komputer/edit/'.$lk->id_komputer,'Edit', array('class' => 'btn btn-xs btn-warning','target'=>'edit','data-toggle'=>'modal','data-target'=>'#edit-komputer'))
                        .anchor('Komputer/delete/'.$lk->id_komputer,'Delete', array('class' => 'btn btn-xs btn-danger')).
                      "<td>
                      </tr>";

                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->

<!-- modal tambah ruangan -->
        <div class="modal fade" id="tambah-komputer">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Komputer</h4>
              </div>
              <form action="<?php echo site_url('Komputer/input')?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label>ID Komputer :</label>
                  <input type="text" class="form-control" name="id_komputer" placeholder="Masukan ID Komputer..">
                </div>
                <div class="form-group">
                  <label>No Meja :</label>
                  <input type="text" class="form-control" name="no_meja" placeholder="Masukan No Meja..">
                </div>
                <div class="form-group">
                  <label>Nama Komputer :</label>
                  <input type="text" class="form-control" name="nama_komputer" placeholder="Masukan Nama Komputer..">
                </div>
                <div class="form-group">
                  <label>Nama Ruangan :</label>
                  <select class="form-control" name="id_ruangan">
                    <option selected>Pilih</option>
                  <?php
                    foreach ($list_ruangan->result() as $lr)
                    {
                      echo"<option value='$lr->id_ruangan'>$lr->nama_ruangan</option>";
                    }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jaringan :</label>
                  <select class="form-control" name="kabel">
                    <option selected>Pilih</option>
                    <option value="Connect">Connect</option>
                    <option value="Disabled">Disabled</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Deskripsi :</label>
                  <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsikan.."></textarea>
                </div>
                <div class="form-group">
                  <label>Status :</label>
                  <select class="form-control" name="status">
                    <option selected>Pilih</option>
                    <option value="Ready">Ready</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Maintenance">Maintenance</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
              </div>
            </form>
            </div>
          </div>
        </div>
<!-- /.modal tambah ruangan -->

<!-- /.modal detail ruangan -->
        <div class="modal modal-info fade" id="detail-komputer">
          <div class="modal-dialog">
            <div class="modal-content">
              <iframe name="detail"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Komputer')?>">Tutup</a></button>
            </div>
          </div>
        </div>
<!-- /.modal detail ruangan -->

<!-- modal edit ruangan -->
        <div class="modal modal-info fade" id="edit-komputer">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Komputer</h4>
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
