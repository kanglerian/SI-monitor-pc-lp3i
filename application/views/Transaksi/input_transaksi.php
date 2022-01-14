<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Pemasangan Tools
        <small>Input pasang tools</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Komputer</a></li>
        <li class="active">Input Transaksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo site_url('Transaksi/input')?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label>Komputer :</label>
                  <select class="form-control" name="id_komputer">
                    <option selected>Pilih</option>
                  <?php
                    foreach ($list_komputer->result() as $lk)
                    {
                      echo"<option value='$lk->id_komputer'>$lk->nama_komputer</option>";
                    }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tools yang dipasang :</label>
                  <select class="form-control" name="id_tools">
                    <option selected>Pilih</option>
                  <?php
                    foreach ($list_tools->result() as $lt)
                    {
                      echo"<option value='$lt->id_tools'>$lt->nama_kategori | $lt->nama_tools</option>";
                    }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Pasang :</label>
                  <input type="date" class="form-control" name="tgl_pasang">
                </div>
                <div class="form-group">
                  <label>Tanggal Lepas :</label>
                  <input type="date" class="form-control" name="tgl_lepas">
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
                    <option value="Perbaikan">Maintenance</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
              </div>
            </form>
            </div>
            <!-- /.box-body -->

          </div>
        </div>
      </div>
    </section>
  </div>
