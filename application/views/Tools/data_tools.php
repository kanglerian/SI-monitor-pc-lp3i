<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master Tools
        <small>Menampilkan data tools</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Tools</a></li>
        <li class="active">Data Tools</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Tools</h3>
              <div class="box-tools">
                <form action="<?php echo site_url('Tools/result');?>" method="get">
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah-tools"><i class="fa fa-plus"></i>  Tambah Data Tools</button>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah-kategori"><i class="fa fa-plus"></i>  Tambah Kategori</button>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Tools</th>
                  <th>No ISBN</th>
                  <th>Nama Tools</th>
                  <th>Kategori</th>
                  <th>Nama Ruangan</th>
                  <th>Model</th>
                  <th>Operasi</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $no=1;
                foreach ($list_tools->result() as $lt)
                {
                echo "<tr>
                      <td>$no</td>
                      <td>$lt->id_tools</td>
                      <td>$lt->isbn</td>
                      <td>$lt->nama_tools</td>
                      <td>$lt->nama_kategori</td>
                      <td>$lt->nama_ruangan</td>
                      <td>$lt->model</td>
                      <td>"
                        .anchor('Tools/detail/'.$lt->id_tools,'Details', array('class' => 'btn btn-xs btn-info','target'=>'detail','data-toggle'=>'modal','data-target'=>'#detail-tools'))
                        .anchor('Tools/edit/'.$lt->id_tools,'Edit', array('class' => 'btn btn-xs btn-warning','target'=>'edit','data-toggle'=>'modal','data-target'=>'#edit-tools'))
                        .anchor('Tools/delete/'.$lt->id_tools,'Delete', array('class' => 'btn btn-xs btn-danger')).
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
        <div class="modal fade" id="tambah-tools">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Tools</h4>
              </div>
              <form action="<?php echo site_url('Tools/input')?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label>ID Tools :</label>
                  <input type="text" class="form-control" name="id_tools" placeholder="Masukan ID Tools..">
                </div>
                <div class="form-group">
                  <label>No ISBN :</label>
                  <input type="text" class="form-control" name="isbn" placeholder="No ISBN..">
                </div>
                <div class="form-group">
                  <label>Nama Tools :</label>
                  <input type="text" class="form-control" name="nama_tools" placeholder="Masukan Nama Tools..">
                </div>
                <div class="form-group">
                  <label>Kategori :</label>
                  <select class="form-control" name="id_kategori">
                      <option selected>Pilih</option>
                      <?php
                        foreach ($list_kategori->result() as $lkt)
                        {
                          echo"<option value='$lkt->id_kategori'>$lkt->nama_kategori</option>";
                        }?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Ruangan :</label>
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
                  <label>Generasi :</label>
                  <input type="text" class="form-control" name="generasi" placeholder="Masukan Generasi..">
                </div>
                <div class="form-group">
                  <label>Version :</label>
                  <input type="text" class="form-control" name="version" placeholder="Masukan Version..">
                </div>
                <div class="form-group">
                  <label>Model :</label>
                  <input type="text" class="form-control" name="model" placeholder="Masukan Model..">
                </div>
                <div class="form-group">
                  <label>Deskripsi :</label>
                  <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsikan.."></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal beli :</label>
                  <input type="date" class="form-control" name="tgl_beli">
                </div>
                <div class="form-group">
                  <label>Status :</label>
                  <select class="form-control" name="status">
                    <option selected>Pilih</option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
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
        <div class="modal modal-info fade" id="detail-tools">
          <div class="modal-dialog">
            <div class="modal-content">
              <iframe name="detail"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Tools')?>">Tutup</a></button>
            </div>
          </div>
        </div>
<!-- /.modal detail ruangan -->

<!-- modal edit ruangan -->
        <div class="modal modal-info fade" id="edit-tools">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              </div>
              <iframe name="edit"></iframe>
            </div>
          </div>
        </div>
<!-- /.modal edit ruangan -->

<!-- modal tambah kategori -->
        <div class="modal fade" id="tambah-kategori">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori</h4>
              </div>
              <form action="<?php echo site_url('Tools/inputkategori')?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Kategori :</label>
                  <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori..">
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

          </div>
        </div>
      </div>
    </section>
  </div>
