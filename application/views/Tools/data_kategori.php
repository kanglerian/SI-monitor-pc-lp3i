<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master Kategori
        <small>Menampilkan data kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Tools</a></li>
        <li class="active">Data Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="btn-group">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah-kategori"><i class="fa fa-plus"></i>  Tambah Kategori</button>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Operasi</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $no=1;
                foreach ($list_kategori->result() as $lkt)
                {
                echo "<tr>
                      <td>$no</td>
                      <td>$lkt->id_kategori</td>
                      <td>$lkt->nama_kategori</td>
                      <td>"
                        .anchor('Tools/editktg/'.$lkt->id_kategori,'Edit', array('class' => 'btn btn-xs btn-warning','target'=>'edit','data-toggle'=>'modal','data-target'=>'#edit-kategori'))
                        .anchor('Tools/deletektg/'.$lkt->id_kategori,'Delete', array('class' => 'btn btn-xs btn-danger')).
                      "<td>
                      </tr>";

                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->


<!-- modal edit ruangan -->
        <div class="modal modal-info fade" id="edit-kategori">
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
