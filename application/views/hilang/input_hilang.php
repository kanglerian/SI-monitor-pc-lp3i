<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Barang Hilang
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Input Barang Hilang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php echo form_open('Hilang/input');?>

  <!-- general form elements -->
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label>Nama Barang Hilang</label>
          <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang..">
        </div>
        <div class="form-group">
          <label>Kategori</label>
          <input type="text" class="form-control" name="category" placeholder="Masukan Kategori Barang..">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" class="form-control" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
          <label>Tanggal Ditemukan</label>
          <input type="date" class="form-control" name="tgl_ditemukan">
        </div>
        <div class="form-group">
          <label>Ruangan</label>
          <select class="form-control select2" name="room_name" style="width: 100%;">
            <option select="selected">Pilih</option>
            <?php
            foreach ($daftar_rooms->result() as $dr)
              {
                echo '<option value="'.$dr->room_name.'">'.$dr->room_name.'</option>';
              } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control select2" name="status" style="width: 100%;">
            <option selected="selected">Pilih</option>
            <option value="Sudah diambil">Sudah diambil</option>
            <option value="Belum diambil">Belum diambil</option>
            <option value="Tidak ada">Tidak ada</option>
          </select>
        </div>
          <!-- /.input group -->
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
    </div>
    <!-- /.row (main row) -->

  </section>
