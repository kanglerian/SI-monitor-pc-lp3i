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
                <form action="<?php echo site_url('Ruangan/result');?>" method="get">
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah-ruangan"><i class="fa fa-plus"></i>  Tambah Data Ruangan</button>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Ruangan</th>
                  <th>Nama Ruangan</th>
                  <th>Lantai</th>
                  <th>Sound</th>
                  <th>Status</th>
                  <th>Operasi</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $no=1;
                foreach ($list_ruangan->result() as $lr)
                {
                echo "<tr>
                      <td>$no</td>
                      <td>$lr->id_ruangan</td>
                      <td>$lr->nama_ruangan</td>
                      <td>$lr->lantai</td>
                      <td>$lr->sound</td>
                      <td>$lr->status</td>
                      <td>"
                        .anchor('Ruangan/detail/'.$lr->id_ruangan,'Details', array('class' => 'btn btn-xs btn-info','target'=>'detail','data-toggle'=>'modal','data-target'=>'#detail-ruangan'))
                        .anchor('Ruangan/edit/'.$lr->id_ruangan,'Edit', array('class' => 'btn btn-xs btn-warning','target'=>'edit','data-toggle'=>'modal','data-target'=>'#edit-ruangan'))
                        .anchor('Ruangan/delete/'.$lr->id_ruangan,'Delete', array('class' => 'btn btn-xs btn-danger')).
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
        <div class="modal fade" id="tambah-ruangan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Ruangan</h4>
              </div>
              <form action="<?php echo site_url('Ruangan/input')?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label>ID Ruangan :</label>
                  <input type="text" class="form-control" name="id_ruangan" placeholder="Masukan ID Ruangan..">
                </div>
                <div class="form-group">
                  <label>Nama Ruangan :</label>
                  <input type="text" class="form-control" name="nama_ruangan" placeholder="Masukan Nama Ruangan..">
                </div>
                <div class="form-group">
                  <label>Lantai :</label>
                  <select class="form-control" name="lantai">
                    <option selected>Pilih</option>
                    <option value="Lantai 1">Lantai 1</option>
                    <option value="Lantai 2">Lantai 2</option>
                    <option value="Lantai 3">Lantai 3</option>
                    <option value="Lantai 4">Lantai 4</option>
                    <option value="Lantai 5">Lantai 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Sound :</label>
                  <select class="form-control" name="sound">
                    <option selected>Pilih</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kapasitas :</label>
                  <input type="text" class="form-control" name="kapasitas" placeholder="Masukan Kapasitas Ruangan..">
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
                    <option value="Dipakai">Dipakai</option>
                    <option value="Perbaikan">Perbaikan</option>
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
        <div class="modal modal-info fade" id="detail-ruangan">
          <div class="modal-dialog">
            <div class="modal-content">
              <iframe name="detail"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Ruangan')?>">Tutup</a></button>
            </div>
          </div>
        </div>
<!-- /.modal detail ruangan -->

<!-- modal edit ruangan -->
        <div class="modal modal-info fade" id="edit-ruangan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
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
